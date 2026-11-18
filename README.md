# Osobní Portfolio - Ondřej Műhlhandel

[![Live Demo](https://img.shields.io/badge/Live-Demo-2b5cff?style=for-the-badge)](https://0ndra.maweb.eu/)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0ndram-0077b5?style=for-the-badge&logo=linkedin)](https://www.linkedin.com/in/0ndram)
[![GitHub](https://img.shields.io/badge/GitHub-0ndraM-181717?style=for-the-badge&logo=github)](https://github.com/0ndraM)

Osobní portfolio – jednostránkový statický web, který představuje mé dovednosti, praxi a projekty v oblasti IT.

## 📋 O projektu

Toto portfolio slouží jako moje digitální vizitka a profesionální prezentace. Obsahuje informace o mém vzdělání, pracovních zkušenostech, technických dovednostech, certifikacích a realizovaných projektech.

## ✨ Vlastnosti

- **Světlý i tmavý režim** – automaticky podle nastavení zařízení; tlačítko v hlavičce přepne režim pro aktuální návštěvu
- **Plně responsivní** – optimalizováno pro mobil, tablet i desktop
- **Bez frameworku** – vlastní CSS s design tokeny (CSS proměnné) a vanilla JavaScript, žádný build
- **SEO optimalizované** – meta tagy, Open Graph s náhledovým obrázkem 1200×630, Twitter Card, strukturovaná data (Schema.org), sitemap
- **Bezpečné** – Content Security Policy povoluje jen Google Fonts a cdnjs
- **Přístupné** – sémantické HTML, ARIA atributy, viditelný focus, respektuje `prefers-reduced-motion`
- **Animace** – typewriter efekt v hero sekci, plynulé odhalování sekcí při scrollu, běžící pás technologií

## 🎨 Sekce

1. **Hero** – úvodní představení, typewriter s rolemi a přehled (role, studium, lokalita, místní čas, stack)
2. **01 O mně** – osobní představení, dovednosti a certifikace
3. **02 Praxe & vzdělání** – pracovní zkušenosti a studium
4. **03 Projekty** – portfolio 8 projektů s odkazy na GitHub a živé ukázky
5. **04 Kontakt** – e-mail a odkazy na sociální sítě

## 🛠️ Technologie

- **HTML5** – sémantické značkování, vše v jediném `index.html`
- **CSS3** – vlastní styly, CSS proměnné, Grid a Flexbox
- **JavaScript** – vanilla JS (přepínač tématu, mobilní menu, typewriter, animace)
- **Fonty** – [Geist a Geist Mono](https://vercel.com/font) z Google Fonts
- **Ikony** – Font Awesome 6.4.0

### Design

- Barevná paleta „cobalt“: akcent `#2b5cff` (světlý režim) / `#6e8bff` (tmavý režim)
- Zvýrazněná slova v nadpisech jsou psaná v Geist Mono
- Favicon a logo „OM“ v cobalt modré

## 📦 Struktura projektu

```
Muj-web/
├── index.html              # Celý web (HTML, CSS i JS)
├── favicon.ico             # Favicon (16, 32, 48 px)
├── apple-touch-icon.png    # Ikona pro iOS (180 px)
├── assets/
│   ├── icon-512.png        # Velká ikona (512 px)
│   └── og-image.jpg        # Náhledový obrázek pro sociální sítě (1200×630)
├── p2j.php                 # Přesměrování na /p2j/
├── robots.txt
├── sitemap.xml
├── CLAUDE.md               # Poznámky pro Claude Code
└── README.md               # Tento soubor
```

## 🚀 Jak spustit lokálně

Jde o statický web bez buildu. Kvůli Content Security Policy a ukládání zvoleného režimu je lepší ho spustit přes lokální server než otevřít soubor přímo:

```bash
git clone https://github.com/0ndraM/Muj-web.git
cd Muj-web
python3 -m http.server 8000
```

Poté otevřete prohlížeč na `http://localhost:8000`.

## 🌐 Deployment

Web je nasazen na: **https://0ndra.maweb.eu/**

Hosting podporuje PHP (kvůli přesměrování v `p2j.php`). Po změně obsahu je vhodné aktualizovat `lastmod` v `sitemap.xml`.

## 🎯 Prezentované projekty

| Projekt | Popis | Technologie | Odkazy |
|---|---|---|---|
| **PWA Správa rozvrhů & AI** | Bakalářská práce (ve vývoji): offline-first PWA s AI importem rozvrhů | PWA, IndexedDB, Gemini/GPT-4o, Tesseract OCR | – |
| **P2J – Motocross Systém** | Provozní a rezervační systém s REST API, RBAC a AI asistentem | PHP 8 API, Vanilla JS, Tailwind CSS | [Web](https://p2j.cz) |
| **Web4Grade** | Správa objednávek školních projektů s chatem a QR platbami | PHP 8.2, Tailwind, Docker | [GitHub](https://github.com/0ndraM/Web4Grade) · [Demo](https://0ndra.maweb.eu/Web4Grade/index.php) |
| **Filmová databáze** | Správa filmů s rolemi, PHP API a desktopovým klientem s JWT | C# .NET, WinForms, PHP API | [GitHub](https://github.com/0ndraM/filmdb) · [Demo](https://0ndra.maweb.eu/FilmDB/index.php) |
| **Chronos – Svět hodinek** | Vzdělávací web o historii a mechanice hodinek | Bootstrap 5, PHP 8.2 | [GitHub](https://github.com/0ndraM/NurHtml) |
| **Letter – Zanechte stopu** | Psaní a sdílení dopisů přes unikátní odkaz | PHP 8.2, Quill.js, MySQL, Docker | [GitHub](https://github.com/0ndraM/Letter) |
| **Simulátor Enigma** | Maturitní projekt: simulace šifrovacího stroje Enigma | C#, .NET Framework, WinForms | [GitHub](https://github.com/0ndraM/Enigma-C-sharp) |
| **GitHub Advanced Tracker** | Sledování odpracovaného času a statistik repozitářů | Python 3, GitHub API | [GitHub](https://github.com/0ndraM/GitHubInfo) |

## 📜 Certifikace

- ✅ CCNA: Switching, Routing & Wireless Essentials (Cisco, 2023)
- ✅ CCNA: Introduction to Networks (Cisco, 2022)
- ✅ Cybersecurity Essentials (Cisco, 2022)
- ✅ Introduction to Cybersecurity (Cisco, 2021)
- ✅ NDG Linux Unhatched (Cisco / NDG)
- ✅ Machine Learning Onramp (MathWorks, 2026)

## 👨‍💻 O autorovi

Jsem student 3. ročníku **Aplikované informatiky na VŠPJ** a CTO ve studiu [Roosteo](https://roosteo.cz). Propojuji systémovou administraci (Linux, Cisco) s full-stack vývojem v C#/.NET a PHP.

### Kontakt
- 📧 Email: [ondrejmuhlhandel@gmail.com](mailto:ondrejmuhlhandel@gmail.com)
- 💼 LinkedIn: [linkedin.com/in/0ndram](https://www.linkedin.com/in/0ndram)
- 🐙 GitHub: [github.com/0ndraM](https://github.com/0ndraM)
- 📷 Instagram: [@0ndra_m_](https://www.instagram.com/0ndra_m_/)

## 📄 Licence

© 2025–2026 Ondřej Műhlhandel. Všechna práva vyhrazena.

---

**Vytvořeno s pomocí AI** | **Made with ❤️ in Třebíč, Czech Republic**
