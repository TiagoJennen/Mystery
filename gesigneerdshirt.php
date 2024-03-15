<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gesigneerd Shirt</title>
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
            <p><h1>Gesigneerd Shirt</h1></p>
            <p><h2>€199,95</h2></p>
            <br>
            <form action="#" method="get">
                <label for="maat"><h2>Kies je maat:</h2></label>
                <select id="maat" name="maat">
                    <option value="extrasmall">XS</option>
                    <option value="small">S</option>
                    <option value="medium">M</option>
                    <option value="large">L</option>
                    <option value="extralarge">XL</option>
                    <option value="xxlarge">XXL</option>
                    <option value="xxxlarge">XXXL</option>
                    <option value="xxxxlarge">XXXXL</option>
                </select>
                <br>
            </form>
            <form action="#" method="get">
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
            </form>
            <br>
            <br>
            <button>Voeg toe aan winkelwagen</button>
        </div>
    </div>
</body>
</html>