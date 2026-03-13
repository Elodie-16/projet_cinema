# Unicorn-Multiplex Cinema Project

## Build & Development
```bash
npm install
npm run dev    # Local server localhost:5173
npm run build  # Build to dist/ (static optimized)
npm run preview # Preview dist/ locally
```

## Deployment

### Frontend (Static - GitHub Pages/Netlify/Vercel)
1. `npm run build`
2. Deploy `dist/` contents to static host.

### Backend (PHP + MySQL)
1. Upload all files to PHP hosting (e.g., OVH, Heroku PHP).
2. Import SQL schemas to DB.
3. Update `config.php` DB creds.

### GitHub Pages Setup
1. Repo Settings > Pages > Source: GitHub Actions.
2. Push workflow → Auto deploys dist/.

## Local MAMP
- Docroot: /projet_cinema
- MySQL: root/root port 8889, DB `projet_cinema`
- Run cleanup_refresh_projet_cinema.sql in phpMyAdmin.

© 2024 Unicorn-Multiplex
