<?php
$url = 'https://portalspenta.rf.gd';

// Ambil konten HTML dari target
$html = file_get_contents($url);

// Ambil semua meta og dari halaman target
preg_match_all('/<meta[^>]+property="og:([^"]+)"[^>]+content="([^"]+)"[^>]*>/i', $html, $matches);

// Siapkan tag og meta
$ogTags = '';
for ($i = 0; $i < count($matches[0]); $i++) {
    $ogTags .= '<meta property="og:' . htmlspecialchars($matches[1][$i]) . '" content="' . htmlspecialchars($matches[2][$i]) . '">' . "\n";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0;url=<?= $url ?>">
  <title>Redirecting...</title>
  <?= $ogTags ?>
</head>
<body>
  <p>Redirect ke <a href="<?= $url ?>"><?= $url ?></a>...</p>
</body>
</html>
