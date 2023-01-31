<?php
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vezeteknev = mysqli_real_escape_string($conn, $_POST["vezeteknev"]);
    $keresztnev = mysqli_real_escape_string($conn, $_POST["keresztnev"]);
    $felhasznalonev = mysqli_real_escape_string($conn, $_POST["felhasznalonev"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $jelszo = mysqli_real_escape_string($conn, $_POST["jelszo"]);
    $jelszo_ujra = mysqli_real_escape_string($conn, $_POST["jelszo_ujra"]);
    $szakma = mysqli_real_escape_string($conn, $_POST["szakma"]);
    $helyszin = mysqli_real_escape_string($conn, $_POST["helyszin"]);

    // Check if the file was uploaded

  
        // Insert the file content into the database
        $sql = "INSERT INTO szakember (vezeteknev, keresztnev, felhasznalonev, email, jelszo, jelszo_ujra, szakma, helyszin)
        VALUES ('$vezeteknev', '$keresztnev', '$felhasznalonev', '$email', '$jelszo', '$jelszo_ujra', '$szakma', '$helyszin')";
if (mysqli_query($conn, $sql)) {
    //echo "Sikeres regisztráció!";
} else {
    echo "Sikertelen regisztráció: " . mysqli_error($conn);
}
mysqli_close($conn);
}


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
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
        <h1>Szakemberkereső</h1>
        <p>Oldalunkon minden szakmában megtalálhatóak a legjobb szakemberek, így biztosan megtalálja a megfelelő szakembert a projektjéhez. Minden szakemberünk minősített és tapasztalt, így biztos lehet benne, hogy a munkájukat profi módon végzik el. A weboldalunkon találhatóak az árak és referencia munkák, így egyszerűen összehasonlíthatja a szakembereket és dönthet a legjobb ajánlatról. Az általunk kínált szolgáltatásunk segítségével biztos lehet benne, hogy a munkáját megbízható szakemberek végzik el.</p>
        <div id="buttonContainer">
            <button id="loginButton">Bejelentkezés</button>
            <button id="regButton">Regisztráció</button>
        </div>
        
    </main>
    <aside>
        <h2>Egy helyen minden szakma legjobbjai!</h2>
        <img src="pictures/19318.jpg" alt="" id="kep">
    </aside>

    <footer>
        <p>© Danicsipak Norbert</p>
    </footer>

    <div id="reg">
        <img src="pictures/x.png" alt="" id="x">
        <h1>Regisztráció</h1>

        <form action="index.php" method="post">
            <input type="text" name="vezeteknev" id="vezeteknev" placeholder="Vezetéknév" required>
            <input type="text" name="keresztnev" id="keresztnev" placeholder="Keresztnév" required>
            <input type="text" name="felhasznalonev" id="felhasznalonev" placeholder="Felhasználónév" required>
            <input type="text" name="email" id="email" placeholder="Email cím" required>
            <input type="password" name="jelszo" id="jelszo" placeholder="Jelszó" required>
            <input type="password" name="jelszo_ujra" id="jelszo_ujra" placeholder="Jelszó újra" required>

            <select id="szakma" name="szakma" required>
                <option value="" disabled>Szakmák</option>
                <option value="Festő">Festő</option>
                <option value="Ács">Ács</option>
                <option value="Asztalos">Asztalos</option>
              </select>

              <select id="helyszin" name="helyszin" required>
                <option value="Megye" disabled>Megye</option>
                <option value="Bács-Kiskun">Bács-Kiskun</option>
                <option value="Baranya">Baranya</option>
                <option value="Békés">Békés</option>
                <option value="Borsod-Abaúj-Zemplén">Borsod-Abaúj-Zemplén</option>
                <option value="Csongrád-Csanád">Csongrád-Csanád</option>
                <option value="Fejér">Fejér</option>
                <option value="Győr-Moson-Sopron">Győr-Moson-Sopron</option>
                <option value="Hajdú-Bihar">Hajdú-Bihar</option>
                <option value="Heves">Heves</option>
                <option value="Jász-Nagykun-Szolnok">Jász-Nagykun-Szolnok</option>
                <option value="Komárom-Esztergom">Komárom-Esztergom</option>
                <option value="Nógrád">Nógrád</option>
                <option value="Pest">Pest</option>
                <option value="Somogy">Somogy</option>
                <option value="Szabolcs-Szatmár-Bereg">Szabolcs-Szatmár-Bereg</option>
                <option value="Tolna">Tolna</option>
                <option value="Vas">Vas</option>
                <option value="Veszprém">Veszprém</option>
                <option value="Zala">Zala</option>
              </select>

            <input type="submit" value="Regisztráció">
        </form>
    </div>

    <div id="login">
        <img src="pictures/x.png" alt="" id="x2">
        <h1>Bejelentkezés</h1>

        <form action="">
            <input type="text" name="" id="login_felhasznalonev" placeholder="Felhasználónév">
            <input type="text" name="" id="login_jelszo" placeholder="Jelszó">
            <input type="submit" value="Bejelentkezés">
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>