# Contributing to Can My PC Run AI?

Thanks for your interest in contributing! This project is intentionally simple — a single HTML file — so the barrier to contribute is very low.

## How to contribute

1. Fork the repo
2. Create a branch: `git checkout -b feature/your-feature`
3. Make your changes in `index.html`
4. Test locally by opening the file in your browser
5. Submit a pull request with a clear description

## What we need help with

### 🔥 High priority
- [ ] **Backend proxy for API key** — Vercel Function or Cloudflare Worker so the Claude key isn't exposed in frontend
- [ ] **More models** — Add new models to the `MODELS` array with accurate VRAM/RAM requirements
- [ ] **Better VRAM detection** — Current WebGL detection is limited; improve accuracy for more GPU models
- [ ] **Apple Silicon unified memory** — M-series chips share RAM/VRAM, needs special handling in the grading logic

### 🌍 Localization
- [ ] Spanish (es) — primary target
- [ ] Chinese (zh)
- [ ] French (fr)
- [ ] Portuguese (pt-BR)

### ✨ Features
- [ ] llama.cpp specific install guides (flags, threads, etc.)
- [ ] LM Studio step-by-step screenshots
- [ ] Benchmark estimates (tokens/sec) per GPU model
- [ ] Model comparison view (side by side)
- [ ] Share results button (generate a URL with specs encoded)
- [ ] PWA support (offline, installable)

### 🐛 Bug fixes
- Improve OS detection accuracy
- Handle edge cases in WebGL GPU detection
- Mobile layout improvements

## Adding a model

Find the `MODELS` array in `index.html` and add an entry:

```js
{
  id: 'unique-id',           // kebab-case identifier
  name: 'Display Name',      // shown in UI
  params: '7B',              // parameter count label
  vram: 5,                   // minimum GPU VRAM in GB for GPU inference
  ram: 8,                    // minimum system RAM in GB
  size: '4.4 GB',            // download size (Q4_K_M quantization)
  quant: 'Q4_K_M',           // recommended quantization
  provider: 'Provider Name', // company/org
  ollama: 'ollama-command',  // exact ollama pull/run command
  tags: ['chat', 'code'],    // from: chat, code, reasoning, vision, fast
  desc: 'Short description', // one line
  hf: 'https://huggingface.co/...', // HuggingFace model page
  docs: 'https://ollama.com/library/...' // Ollama library page
}
```

## Code style

- Vanilla JS only — no frameworks, no build step
- Keep it a single file — the simplicity is a feature
- Comments in English
- Test in Chrome, Firefox, and Safari before submitting

## Questions?

Open an issue or reach out at [hola@xolotl.tech](mailto:hola@xolotl.tech)
