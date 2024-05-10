<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Personal Profile</h1>

  <nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

  <main>
    <h3>Home Page</h3>
    <p id="demo"></p>

    <script>
      <?php
      $firstName = "Elijah";
      $lastName = "Bravo";
      $age = 20;

      echo $firstName . " " . $lastName . " is " . $age . " years old.";
      ?>
    </script>

  </main>

</body>
</html>
