<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Personal Profile</h1>

  <nav class="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

  <main>
    <h3>Gallery</h3>
    <?php
      $imagesDir = "images/";
      $images = glob($imagesDir . "*.{jpg,jpeg,png}", GLOB_BRACE);

      if (count($images) > 0) {
        $randomImage = $images[array_rand($images)];

        echo "<img src='$randomImage' alt='Gallery Image'>";
      } else {
        echo "<p>No images found in the gallery folder.</p>";
      }
    ?>

    <p>To be added</p>

  </main>

</body>
</html>
