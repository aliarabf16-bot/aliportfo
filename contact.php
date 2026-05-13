<?php
$pageTitle = 'Contact';
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $message = trim($_POST['message'] ?? '');

  if ($name === '' || $email === '' || $message === '') {
    $errorMessage = 'Please fill in all fields.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMessage = 'Please enter a valid email address.';
  } elseif (!$host || !$user || !$dbname) {
    $errorMessage = 'Database environment variables are not configured.';
  } else {
    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
      $errorMessage = 'Database connection failed: ' . $conn->connect_error;
    } else {
      $stmt = $conn->prepare('INSERT INTO contact_messages (name, email, message, timestamp) VALUES (?, ?, ?, NOW())');
      if ($stmt) {
        $stmt->bind_param('sss', $name, $email, $message);
        if ($stmt->execute()) {
          $successMessage = 'Your message has been sent successfully.';
        } else {
          $errorMessage = 'Failed to send your message. Please try again.';
        }
        $stmt->close();
      } else {
        $errorMessage = 'Failed to prepare database query.';
      }
      $conn->close();
    }
  }
}
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
      <h2>Contact Me</h2>
      <p>Email: <a href="mailto:AliArabf16@gmail.com">AliArabf16@gmail.com</a></p>
      <p>Phone: <a href="tel:+966503870034">+966503870034</a></p>
      <p>GitHub: <a href="https://github.com/aliarabf16-bot" target="_blank" rel="noopener noreferrer">github.com/aliarabf16-bot</a></p>

      <?php if ($successMessage !== ''): ?>
        <div class="notice success"><?php echo htmlspecialchars($successMessage); ?></div>
      <?php endif; ?>

      <?php if ($errorMessage !== ''): ?>
        <div class="notice error"><?php echo htmlspecialchars($errorMessage); ?></div>
      <?php endif; ?>

      <form method="POST" action="contact.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; <span id="year"></span> Ali Mohammed AL-Shammari</p>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>
