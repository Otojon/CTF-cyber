<?php
$isLoggedIn = isset($_COOKIE['token']) && $_COOKIE['token'] !== '';
?>
<nav style="display:flex;gap:1rem;padding:1rem;border-bottom:1px solid #ccc">
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact Us</a>
  <?php if (!$isLoggedIn): ?>
    <a href="signup.php">Sign Up</a>
    <a href="login.php">Login</a>
  <?php else: ?>
    <a href="user.php">User</a>
    <a href="logout.php">Logout</a>
  <?php endif; ?>
</nav>


