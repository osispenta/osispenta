// pages/api/sitemap.xml.js
export default async function handler(req, res) {
  const baseUrl = 'https://osispenta.vercel.app';

  // Daftar halaman statis
  const staticPages = [
    '',
    'berita',
    'profile',
    'kontak',
    'struktur-osis',
  ];

  // Buat sitemap XML
  const sitemap = `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  ${staticPages
    .map((page) => {
      return `
  <url>
    <loc>${baseUrl}/${page}</loc>
    <lastmod>${new Date().toISOString()}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>`;
    })
    .join('')}
</urlset>`;

  // Set header dan kirim response
  res.setHeader('Content-Type', 'application/xml');
  res.status(200).send(sitemap);
}
