<?php
$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    // In real apps send email or store in DB. Here we just flag as sent.
    if ($name && $email && $message) {
        $sent = true;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - web1</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; margin: 0; }
    main { padding: 1rem; max-width: 700px; margin: 0 auto; }
    form { display: grid; gap: 0.5rem; }
    label { display: grid; gap: 0.25rem; }
    input, textarea { padding: 0.5rem; }
    .success { color: #0a7a2f; }
  </style>
</head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
  <main>
    <h1>Contact Us</h1>
    <?php if ($sent): ?><p class="success">Thanks! We'll get back to you.</p><?php endif; ?>
    <form method="post" action="contact.php">
      <label>
        <span>Name</span>
        <input name="name" required>
      </label>
      <label>
        <span>Email</span>
        <input name="email" type="email" required>
      </label>
      <label>
        <span>Message</span>
        <textarea name="message" rows="5" required></textarea>
      </label>
      <button type="submit">Send</button>
    </form>
  </main>
</body>
</html>


