

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="szakemberek.css">
    <title>Document</title>
</head>
<body>
<header>
        <div id="logo">
             <a href="./index.php"><img src="pictures/logo.png" alt="" id="logo_png"></a>
        </div>
        <nav>
            <ul>
                <li><a href="">RÓLUNK</a></li>
                <li><a href="">MEGBÍZÓK</a></li>
                <li><a href="./szakemberek.php">SZAKEMBEREK</a></li>
                <li><a href="./index.php">HOME</a></li>
            </ul>
        </nav>
    </header>
    <main>
        

      <?php
        include 'connection.php';

      
      // Select data from the "szakember" table
      $sql = "SELECT vezeteknev, keresztnev, szakma, helyszin FROM szakember";
      $result = mysqli_query($conn, $sql);
      
      // Display data in a table
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='szakemberContainer'>";

                echo "<div class='pic_nameContainer'>";
                    echo "<div class='profpicContainer'><img src='./pictures/default_profile.jpg'></div>";
                    echo "<div class='nameContainer'>" . $row["vezeteknev"] . " " . $row["keresztnev"] . "</div>";
                    echo "<div style='clear: both;'></div>";
                echo "</div>";

                echo "<div class='szakmaContainer'>" . $row["szakma"] . "</div>";
                echo "<div class='helyszinContainer'>" . $row["helyszin"] . "</div>";
            echo "</div>";
          
        }
      } else {
        echo "No data found";
      }
      mysqli_close($conn);
      ?>
    </main>
    <footer>
        <p>© Danicsipak Norbert</p>
    </footer>

</body>
</html>