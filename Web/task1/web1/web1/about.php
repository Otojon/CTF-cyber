<?php
// About page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About - web1</title>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial; margin: 0; }
    main { padding: 1rem; max-width: 800px; margin: 0 auto; }
    h1 { margin-top: 1rem; }
  </style>
  </head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
  <main>
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut diam quam nulla porttitor massa. Integer feugiat scelerisque varius morbi enim nunc. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet. Purus in massa tempor nec feugiat nisl pretium fusce id. Egestas congue quisque egestas diam in arcu cursus euismod. Urna duis convallis convallis tellus id. At augue eget arcu dictum varius duis at consectetur lorem. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Non arcu risus quis varius quam quisque id diam vel. Amet est placerat in egestas erat imperdiet sed euismod nisi. Eu volutpat odio facilisis mauris sit amet massa vitae tortor.</p>

    <h2>Our Story</h2>
    <p>Tristique magna sit amet purus gravida quis blandit. Nibh tellus molestie nunc non blandit massa enim nec dui. Nisi vitae suscipit tellus mauris a. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Sit amet cursus sit amet dictum sit amet justo.</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:1rem">
      <img src="assets/img1.jpg" alt="preview 1" style="width:100%;height:140px;object-fit:cover">
      <img src="assets/img2.jpg" alt="preview 2" style="width:100%;height:140px;object-fit:cover">
      <img src="assets/img3.jpg" alt="preview 3" style="width:100%;height:140px;object-fit:cover">
      <img src="assets/img4.jpg" alt="preview 4" style="width:100%;height:140px;object-fit:cover">
    </div>

    <h2>Highlights</h2>
    <ul>
      <li>Quality-focused approach</li>
      <li>Lightweight footprint</li>
      <li>Simple structure and clean layout</li>
    </ul>

    <h2>Sample Data</h2>
    <table border="1" cellpadding="6" cellspacing="0">
      <tr><th>Key</th><th>Value</th></tr>
      <tr><td>Version</td><td>1.0</td></tr>
      <tr><td>Status</td><td>Active</td></tr>
      <tr><td>Locale</td><td>en-US</td></tr>
    </table>

    <h2>Code Snippet</h2>
    <pre><hr><!-- CTF{*********} --></pre>
    <pre><code>// Example placeholder
function greet(name) {
  return `Hello, ${name}!`;
}
    </code></pre>
</main>
</body>
</html>



