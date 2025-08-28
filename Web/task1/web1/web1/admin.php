<?php
require_once __DIR__ . '/auth.php';
$payload = require_admin();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - web1</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; margin: 0; }
    main { padding: 1rem; max-width: 800px; margin: 0 auto; }
  </style>
</head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
  <main>
    <h1>Hello admin</h1>
    <p>Welcome, <strong><?php echo htmlspecialchars($payload['username']); ?></strong></p>
    <p style="margin-top:1rem;font-size:1.1rem"><strong>Congrats!</strong> Here is your flag: <code>CTF{*********}</code></p>
  </main>
</body>
</html>


