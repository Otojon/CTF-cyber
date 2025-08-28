<?php
require_once __DIR__ . '/auth.php';
$payload = require_auth();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User - web1</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; margin: 0; }
    main { padding: 1rem; max-width: 800px; margin: 0 auto; }
    pre { background: #f6f8fa; padding: 1rem; overflow: auto; }
  </style>
</head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
  <main>
    <h1>User Profile</h1>
    <p>Welcome, <strong><?php echo htmlspecialchars($payload['username']); ?></strong></p>
    <h3>JWT Payload</h3>
    <pre><?php echo htmlspecialchars(json_encode($payload, JSON_PRETTY_PRINT)); ?></pre>
  </main>
</body>
</html>


