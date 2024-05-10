<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #container {
            width: 400px;
            height: 400px;
            position: relative;
            background: yellow;
        }

        #animate {
            width: 50px;
            height: 50px;
            position: absolute;
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Personal Profile</h1>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Me</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <div class="about-section">
            <div class="left-section">
                <h3>About Me</h3>
                <p>
                    <?php
                    $name = "Elijah";
                    $occupation = "Game Sound Designer | Producer";
                    $college = "Asia Pacific College";
                    echo "Hi, I'm $name, a $occupation from $college.";
                    ?>
                </p>
                <p>
                    <?php
                    // Using variables and concatenation
                    $name = "Elijah";
                    $course = "BSIT-MI";
                    $college = "Asia Pacific College";
                    echo "Hi, I'm $name, a $course student from $college.";
                    ?>
                </p>
            </div>
            <div class="right-section">
                <img src="edited2.jpg" alt="Elijah's Image" width="365" height="548">
            </div>
        </div>
        <hr>
        <h2>Game Engines</h2>
        <ul class="list">
            <?php
            $gameEngines = array("Spline", "RPG Maker XP", "Godot");
            foreach ($gameEngines as $engine) {
                echo "<li>$engine</li>";
            }
            ?>
        </ul>
        <h2>Art Tools</h2>
        <ul class="list">
            <?php
            $artTools = array("Adobe Photoshop", "Adobe Illustrator", "Adobe Premiere Pro");
            foreach ($artTools as $tool) {
                echo "<li>$tool</li>";
            }
            ?>
        </ul>
        <h2>Relevant Abilities</h2>
        <ul class="abilities">
            <?php
            $abilities = array(
                "Background in audio engineering with a solid understanding of signal processing, 3D positional audio, and mastering.",
                "Good verbal and written communication skills. Must be able to comprehend fast-paced and complex game environments.",
                "Self-driven, team player, and willingness to learn.",
                "Motivated and passionate in sound design and implementation.",
                "Demonstrates passion and talent for games and game development.",
                "Good communication skills, positive attitude, great work ethic, and the ability to work in a highly collaborative team environment.",
                "Knowledge of game design conventions and systems.",
                "Good understanding of the relationship between core game mechanics, gameplay spaces, and interactive elements.",
                "Knowledge of the game development process and game production pipeline.",
                "Fast learner, takes initiative, and meets deadlines."
            );
            foreach ($abilities as $ability) {
                echo "<li>$ability</li>";
            }
            ?>
        </ul>
        <div id="container">
            <div id="animate"></div>
        </div>
        <p><button onclick="myMove()">Click Me</button></p>
    </main>
    <script>
        function myMove() {
            let id = null;
            const elem = document.getElementById("animate");
            let pos = 0;
            clearInterval(id);
            id = setInterval(frame, 5);
            function frame() {
                if (pos == 350) {
                    clearInterval(id);
                } else {
                    pos++;
                    elem.style.top = pos + "px";
                    elem.style.left = pos + "px";
                }
            }
        }
    </script>
</body>
</html>
