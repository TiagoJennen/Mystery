<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="png" href="mysteryshirt.webp">
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="winkel.php" class="active">Winkel</a>
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
    </div>
    <div class="container">
        <a href="mysteryshirt.php" class="product-box box1">
            <img src="mysteryshirt.webp" alt="Product 1">
            <h2>Mystery Shirt</h2>
            <p>€39,95</p>
        </a>

        <a href="wedstrijdgedragenshirt.php" class="product-box box2">
            <img src="mysteryshirt.webp" alt="Product 2">
            <h2>Gedragen Shirt</h2>
            <p>€149,95</p>
        </a>

        <a href="gesigneerdshirt.php" class="product-box box3">
            <img src="mysteryshirt.webp" alt="Product 3">
            <h2>Gesigneerd Shirt</h2>
            <p>€199,95</p>
        </a>

        <a href="cadeaubon.php" class="product-box box4">
            <img src="mysteryshirt.webp" alt="Product 4">
            <h2>Cadeaubon</h2>
            <p>€5 tot €500</p>
        </a>
    </div>
</body>
</html>