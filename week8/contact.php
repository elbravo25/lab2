<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Details</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Personal Profile</h1>

  <nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>

  <main>
    <h3>Contact Details</h3>

    <?php
      $name = isset($_GET['name']) ? $_GET['name'] : '';

      if ($name) {
        echo "<p>Hello " . $name . "! How are you today?</p>";
      } else {
        echo "<p>Please enter your name below to say hi!</p>";
      }
    ?>

    <form action="contact.php" method="get">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" value="<?php echo $name; ?>">
      <input type="submit" value="Say Hi">
    </form>
  </main>

</body>
</html>
