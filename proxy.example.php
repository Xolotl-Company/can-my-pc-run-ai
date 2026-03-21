<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://YOUR_DOMAIN_HERE');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); echo json_encode(['error' => 'Method not allowed']); exit; }

session_start();
$_SESSION['calls'] = ($_SESSION['calls'] ?? 0) + 1;
if ($_SESSION['calls'] > 20) {
    http_response_code(429);
    echo json_encode(['error' => 'Rate limit exceeded. Try again later.']);
    exit;
}

$API_KEY = 'YOUR_KEY_HERE'; // Get yours at console.anthropic.com

$body = file_get_contents('php://input');
$data = json_decode($body, true);
if (!$data) { http_response_code(400); echo json_encode(['error' => 'Invalid JSON']); exit; }
if (empty($data['messages']) || !is_array($data['messages'])) {
    http_response_code(400); echo json_encode(['error' => 'Missing messages']); exit;
}

$data['model']      = 'claude-haiku-4-5-20251001';
$data['max_tokens'] = 1000;
if (count($data['messages']) > 10) {
    $data['messages'] = array_slice($data['messages'], -10);
}
$body = json_encode($data);

$ch = curl_init('https://api.anthropic.com/v1/messages');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $body,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'x-api-key: ' . $API_KEY,
        'anthropic-version: 2023-06-01'
    ]
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError) { http_response_code(502); echo json_encode(['error' => 'Could not connect to AI service']); exit; }

http_response_code($httpCode);
echo $response;
?>
