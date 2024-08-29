<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/stylecontact.css">
</head>
<body>
    <!--<?php include 'navbar.php'; ?>-->

    <form action="" method="POST">
        <h2>Contact us</h2>
        <div class="input-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="Name" placeholder="Name">
            <label for="phone">Telefono</label>
            <input type="tel" name="phone" id="Phone number" placeholder="Phone number">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
            <input class="btn" type="submit" value="Send">
        </div>
    </form>

    <!--<?php include 'footer.php'; ?>-->
</body>
</html>