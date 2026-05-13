<?php
$pageTitle = 'Skills';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?> | Portfolio</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="dark-mode">
  <header>
    <h1>Ali Mohammed AL-Shammari</h1>
    <button id="theme-toggle" type="button" onclick="toggleTheme()">Switch Theme</button>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About Me</a>
      <a href="skills.php">Skills</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <section class="card">
      <h2>My Skills</h2>
      <ul>
        <li>PHP</li>
        <li>HTML</li>
        <li>CSS</li>
        <li>Database Management</li>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; <span id="year"></span> Ali Mohammed AL-Shammari</p>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>
