<?php
// Clear JWT cookie (must match cookie attributes used when setting it)
setcookie('token', '', [
    'expires' => time() - 3600,
    'path' => '/',
    'httponly' => true,
    'samesite' => 'Lax',
]);
header('Location: index.php');
exit;
?>


