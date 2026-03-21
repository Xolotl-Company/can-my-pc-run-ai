# 🖥️ Can My PC Run AI?

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Made by Xolotl Tech](https://img.shields.io/badge/made%20by-Xolotl%20Tech-00e5a0)](https://xolotl.tech)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg)](CONTRIBUTING.md)
[![Ko-fi](https://img.shields.io/badge/Support-Ko--fi-ff5e69)](https://ko-fi.com/xolotltech)

**Find out which AI models your machine can run locally — and get step-by-step setup guidance powered by Claude AI.**

🌐 **Live demo:** [canmypcrunai.xolotl.tech](https://canmypcrunai.xolotl.tech)

---

## ✨ Features

- **Auto-detect specs** — GPU VRAM, RAM, and OS detected automatically via browser APIs
- **Compatibility grading** — S/A/B/C/F grades for 12+ popular models (Llama, Qwen, Mistral, DeepSeek, Gemma, Phi...)
- **AI-powered chat guide** — Claude answers setup questions adapted to your exact hardware and OS
- **Quick actions** — Speed estimates, quantization advice, use case suggestions
- **Hardware upgrade suggestions** — Affiliate links for GPU upgrades when your specs fall short
- **Zero backend** — Single HTML file, runs on any static host
- **Dark mode** — Easy on the eyes during late-night model downloads

## 🚀 Self-hosting in 2 minutes

1. Clone the repo:
   ```bash
   git clone https://github.com/xolotl-tech/canmypcrunai.git
   cd canmypcrunai
   ```

2. Edit `index.html` and set your API key:
   ```js
   const CLAUDE_API_KEY = 'sk-ant-YOUR_KEY_HERE';
   ```
   Get a key at [console.anthropic.com](https://console.anthropic.com)

3. (Optional) Set your Amazon Associates tag:
   ```js
   const AMZN_TAG = 'yourtag-20';
   ```

4. Upload `index.html` to any static host — Apache, Nginx, Vercel, Netlify, GitHub Pages.

> ⚠️ **Important:** The API key is exposed in the frontend in this setup. This is fine for personal/low-traffic use. For production, move it to a backend (see [CONTRIBUTING.md](CONTRIBUTING.md) for the roadmap item).

## 🤝 Contributing

We welcome contributions! Check out the [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines and the roadmap.

Some ideas to get you started:
- Add more models to the database
- Improve VRAM auto-detection accuracy
- Add llama.cpp / LM Studio specific guides
- Localize to Spanish, Chinese, French...
- Move API key to a Vercel/Cloudflare Worker backend

## 💛 Support the project

This tool is free and open source. If it helped you run AI locally, consider supporting development:

| Platform | Link |
|---|---|
| 💳 Mercado Pago (LATAM) | [link.mercadopago.com.mx/xolotltech](https://link.mercadopago.com.mx/xolotltech) |
| ☕ Ko-fi (International) | [ko-fi.com/xolotltech](https://ko-fi.com/xolotltech) |

## 📦 Models included

| Model | Params | Min VRAM | Min RAM | Tags |
|---|---|---|---|---|
| Llama 3.2 3B | 3B | CPU | 5 GB | chat, fast |
| Llama 3.1 8B | 8B | 5 GB | 8 GB | chat, code |
| Qwen 2.5 7B | 7B | 5 GB | 8 GB | chat, code |
| Gemma 3 4B | 4B | 3 GB | 6 GB | chat, vision |
| Phi-4 14B | 14B | 9 GB | 12 GB | reasoning, code |
| Mistral 7B | 7B | 5 GB | 8 GB | chat, fast |
| CodeLlama 13B | 13B | 8 GB | 10 GB | code |
| DeepSeek R1 7B | 7B | 5 GB | 8 GB | reasoning |
| Mistral Small 24B | 24B | 14 GB | 16 GB | chat, vision |
| Qwen 2.5 Coder 32B | 32B | 18 GB | 24 GB | code |
| DeepSeek R1 32B | 32B | 18 GB | 24 GB | reasoning |
| Llama 3.3 70B | 70B | 40 GB | 48 GB | chat, code, reasoning |

## 🏢 Enterprise / Professional Setup

Need local AI deployed in your company? [Xolotl Tech](https://xolotl.tech) builds and maintains local AI infrastructure — from single-GPU setups to multi-node clusters.

## 📄 License

MIT © [Xolotl Tech](https://xolotl.tech)
