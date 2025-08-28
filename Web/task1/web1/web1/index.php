<?php
// Home page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - web1</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; margin: 0; }
    main { padding: 1rem; max-width: 1000px; margin: 0 auto; }
    .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 1rem; }
    .card { border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background: #fff; }
    .card img { width: 100%; height: 150px; object-fit: cover; display: block; }
    .card .p { padding: 0.75rem 1rem; }
    h1 { margin-top: 1rem; }
  </style>
</head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
  <main>
    <h1>Welcome to web1</h1>
    <div class="grid">
      <div class="card">
        <img src="assets/img1.jpg" alt="random">
        <div class="p">Sample image 1</div>
      </div>
      <div class="card">
        <img src="assets/img2.jpg" alt="random">
        <div class="p">Sample image 2</div>
      </div>
      <div class="card">
        <img src="assets/img3.jpg" alt="random">
        <div class="p">Sample image 3</div>
      </div>
      <div class="card">
        <img src="assets/img4.jpg" alt="random">
        <div class="p">Sample image 4</div>
      </div>
    </div>
  </main>
</body>
</html>


