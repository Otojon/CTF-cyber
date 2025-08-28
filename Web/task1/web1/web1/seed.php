<?php
require_once __DIR__ . '/db.php';

try {
    $pdo = get_pdo();

    $pdo->exec('CREATE TABLE IF NOT EXISTS users (
      id INT AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(100) NOT NULL UNIQUE,
      password_hash VARCHAR(255) NOT NULL,
      role ENUM(\'admin\',\'user\') NOT NULL DEFAULT \'user\',
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )');

    $usersToSeed = [
        ['username' => 'admin', 'password' => 'BzH4?Nd^|i(d', 'role' => 'admin'],
        ['username' => 'user',  'password' => 'user123',  'role' => 'user'],
    ];

    foreach ($usersToSeed as $u) {
        $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $stmt->execute([$u['username']]);
        if (!$stmt->fetch()) {
            $hash = password_hash($u['password'], PASSWORD_BCRYPT);
            $ins = $pdo->prepare('INSERT INTO users (username, password_hash, role) VALUES (?, ?, ?)');
            $ins->execute([$u['username'], $hash, $u['role']]);
        }
    }

    header('Content-Type: text/plain');
    // "Seed complete. Users ensured: admin/BzH4?Nd^|i(d (admin), user/user123 (user).";
    echo "Seed complete. Users ensured";
} catch (Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo 'Seed failed: ' . $e->getMessage();
}
?>



