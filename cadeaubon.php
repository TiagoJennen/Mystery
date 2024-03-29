<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadeaubon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="png" href="mysteryshirt.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="winkel.php"  class="active">Winkel</a>
        <div class="dropdown">
            <button class="dropbtn">Producten</button>
            <div class="dropdown-content">
                <a href="mysteryshirt.php">Mystery Shirt</a>
                <a href="wedstrijdgedragenshirt.php">Wedstrijd Gedragen Shirt</a>
                <a href="gesigneerdshirt.php">Gesigneerd Shirt</a>
                <a href="cadeaubon.php">Cadeaubon</a>
            </div>
        </div>
        <a href="info.php">Info</a>
        <a href="login.php" class="account-icon">
    <i class="fas fa-user"></i> 
</a>
    </div>
    <div class="container">
        <div class="image">
            <img src="mysteryshirt.webp" alt="Mystery Shirt">
        </div>
        <div class="info-box">
            <p><h1>Cadeaubon</h1></p>
            <p><h2>€5 tot €500</h2></p>
            <br>
            <form action="#" method="get">
                <label for="prijs"><h2>Kies je prijs:</h2></label>
                <input type="number" id="prijs" name="prijs" min="5" max="500" step="5">
                <br>
                <label for="maat"><h2>Aantal:</h2></label>
                <select id="maat" name="maat">
                    <option value="een">1</option>
                    <option value="twee">2</option>
                    <option value="drie">3</option>
                    <option value="vier">4</option>
                    <option value="vijf">5</option>
                    <option value="zes">6</option>
                    <option value="zeven">7</option>
                    <option value="acht">8</option>
                    <option value="negen">9</option>
                    <option value="tien">10</option>
                </select>
                <br>
                <br>
                <button type="submit">Voeg toe aan winkelwagen</button>
            </form>
        </div>
    </div>
</body>
</html>