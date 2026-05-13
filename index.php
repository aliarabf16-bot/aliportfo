<?php
$pageTitle = 'Home';
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
      <h2>Welcome</h2>
      <p>I am a Software Engineering student, fully passionate about learning PHP, CSS, and HTML languages. I love making websites using them.</p>
      <a class="btn" href="assets/resume.pdf" download>Download Resume</a>
    </section>

    <section class="card">
      <h2>Projects</h2>

      <h3>Smart Attendance Tracking App with QR Code</h3>
      <ul>
        <li>Developed a system for tracking attendance using QR codes.</li>
        <li>Improved accuracy and reduced manual attendance errors.</li>
        <li>Planned project timeline using Gantt Chart.</li>
      </ul>

      <h3>Water Drinking Reminder App</h3>
      <ul>
        <li>Built an application to remind users to drink water regularly.</li>
        <li>Used simple scheduling to promote healthy habits.</li>
        <li>Organized development tasks using Gantt Chart.</li>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; <span id="year"></span> Ali Mohammed AL-Shammari</p>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>
