# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

Ondřej Műhlhandel's personal portfolio, a single static page in Czech, deployed at https://0ndra.maweb.eu/. There is no build step, package manager, linter or test suite. Everything (markup, CSS, JS) lives inline in `index.html`. Site copy and commit messages are written in Czech.

`README.md` is outdated: it still describes the old Tailwind/Inter design. Don't treat it as a source of truth for the current stack.

## Running locally

```bash
python3 -m http.server 8765 --bind 127.0.0.1
```

The same server is configured as `portfolio` in `.claude/launch.json` for the desktop app's preview. Use a server, not `file://`: storage APIs (the theme toggle uses `sessionStorage`) and dark-mode emulation don't work on a file URL.

## Architecture of `index.html`

- **`<head>`**: SEO meta, Open Graph/Twitter tags, JSON-LD `Person`, and a **CSP `<meta>`**. External resources are allowed only from `cdnjs.cloudflare.com` (Font Awesome 6.4.0 free) and Google Fonts (Geist, Geist Mono). Any new CDN must also be added to the CSP. Font Awesome 6.4 free is missing some newer icons (e.g. `fa-arrow-up-right`), so check that an icon renders before using it.
- **Design tokens** are CSS custom properties on `:root` (cobalt palette, accent `#2b5cff` light / `#6e8bff` dark). The dark values are defined **twice**: under `@media (prefers-color-scheme: dark) { :root:not([data-theme="light"]) }` and under `:root[data-theme="dark"]`. Edit both blocks together. The `theme-color` meta tags mirror the two background colors.
- **Theme logic**: by default the page follows the OS setting. The toggle sets `data-theme` on `<html>` and stores it in `sessionStorage` only, so the choice lasts for the current visit. Toggling back to the OS value clears the override, and an OS change clears it too. A small inline script in `<head>` applies the stored value before first paint. It also deletes any legacy `localStorage` `theme` key.
- **Progressive enhancement**: the head script adds `.js` to `<html>`. `.reveal` fade-ins only hide content under `.js`, and everything is disabled under `prefers-reduced-motion`.
- **Accent words** in headings use `<span class="alt">` (Geist Mono). The big contact heading has its own tighter letter-spacing.
- **Sections** are `#about` (01), `#experience` (02), `#projects` (03) and `#contact` (04, the footer). The numbering appears in the nav, the mobile menu and each section eyebrow.

## Content that is duplicated: keep in sync

- **Projects**: the heading count `Vybrané projekty (08)` and the per-card `P/0N` indexes are hardcoded. Update them when adding or removing a project. The first card (`.project.featured`) spans two grid columns.
- **Skills/stack** appear in the meta description, meta keywords, JSON-LD `knowsAbout`, the hero spec list, the marquee and the skill chips. The marquee list is written out twice on purpose, for the seamless CSS loop.
- **Profiles**: the LinkedIn slug is `0ndram` (zero, not a letter O; `/in/Ondram` is a 404). It's used in the hero, the contact list, JSON-LD `sameAs` and the README.

Content was checked against LinkedIn and the public GitHub repos (Nov 2026):
- "Cisco Networking" is used deliberately. The certs are two CCNA modules, not the full CCNA.
- Symfony is not backed by any public source.
- P2J and the thesis PWA have no public repos.

## Assets

- **Icons**: `favicon.ico` (16/32/48 PNG-in-ICO), `apple-touch-icon.png` (180×180, square corners), `assets/icon-512.png`.
- **Social preview**: `assets/og-image.jpg`, a real JPEG at 1200×630. The `og:image` width/height meta tags assume that size.
- **Tooling**: the machine has no PIL/ImageMagick. These images were made by rendering HTML with headless Chrome (`--screenshot`, `--window-size`) and resizing/converting with `sips`.

## Other files

- `p2j.php`: a PHP redirect from `/p2j.php` to `https://0ndra.maweb.eu/p2j/`. The host runs PHP.
- `sitemap.xml`: `lastmod` is set by hand.
- `.DS_Store` is tracked by mistake. Don't stage changes to it.
