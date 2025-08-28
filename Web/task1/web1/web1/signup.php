<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/jwt.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($username === '' || $password === '') {
        $error = 'Username and password are required';
    } else {
        try {
            $pdo = get_pdo();
            $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
            $stmt->execute([$username]);
            if ($stmt->fetch()) {
                $error = 'Username already exists';
            } else {
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                $role = 'user';
                $pdo->prepare('INSERT INTO users (username, password_hash, role) VALUES (?, ?, ?)')
                    ->execute([$username, $password_hash, $role]);
                $userId = (int)$pdo->lastInsertId();
                $token = jwt_sign(['id' => $userId, 'role' => 'user', 'username' => $username], 3600 * 24);
                setcookie('token', $token, [ 'httponly' => true, 'path' => '', 'samesite' => 'Lax' ]);
                header('Location: user.php');
                exit;
            }
        } catch (Throwable $e) {
            $error = 'Server error';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up - web1</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; margin: 0; }
    main { padding: 1rem; max-width: 500px; margin: 0 auto; }
    form { display: grid; gap: 0.5rem; }
    label { display: grid; gap: 0.25rem; }
    input { padding: 0.5rem; }
    .error { color: #b00020; }
  </style>
</head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
  <main>
    <h1>Sign Up</h1>
    <?php if ($error): ?><p class="error"><?php echo htmlspecialchars($error); ?></p><?php endif; ?>
    <form method="post" action="signup.php">
      <label>
        <span>Username</span>
        <input name="username" required>
      </label>
      <label>
        <span>Password</span>
        <input name="password" type="password" required>
      </label>
      <button type="submit">Create account</button>
    </form>
  </main>
</body>
</html>


