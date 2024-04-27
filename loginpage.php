<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="form-container">
    <img src="img\MS-Maroc.png" alt="MS-Maroc">
    <p class="title">Se Connecter</p>
     <?php if (isset($_GET['error'])) { ?>
     	 <p class="error"> <?php echo $_GET['error']; ?> </p>
     	<?php } ?>   
    <form class="form" id="loginForm" method="POST" action="login.php">
        <div class="input-group">
            <label for="cin" id="cinLabel">CIN</label>
            <input type="text" name="cin" id="cin" placeholder="Entez votre CIN" >
        </div>
        <div class="input-group">
            <label for="date" id="dateLabel">Date de naissance</label>
            <input type="date" name="date" id="date" placeholder="Entez votre date de naissance" >
        </div>
        <button type="submit" class="sign">Valider</button>
    </form>
</div>

<script src="app.js"></script>
</body>
</html>




    






