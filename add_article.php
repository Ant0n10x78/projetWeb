
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.3/pixi.min.js"></script>
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/input.css" >
    <title>Connexion</title>
</head>
<body >
    <script src="js/star.js"></script>
    <div style="position:relative;color:white;">
    <?php include("header.php"); ?>
    <?php   if (!empty($_GET['ID'])){$profil=$_GET['ID'];} ?> <!-- Verification de l'id -->
    <div class="wrapper">

    <section class="login-container">
        <div>
            <header>
                <h2 class="black police">Identification</h2>
            </header>
            
            <form name="ajouter" method="post" action="add-annonce-2.php?ID=<?php if(!empty($profil)){echo $profil;} ?>">
                <p class="black police">Entrez votre lien d'image :</p> <input type="text" name="lien"/> <br/>
                <p class="black police">Entrez votre titre : </p><input type="text" name="titre"/> <br/>
                <p class="black police">Entrez votre prix : </p><input type="text" name="prix"/><br/>
                <p class="black police">Entrez votre date : </p><input type="text" name="date"/><br/>
                <p class="black police">Entrez votre texte : </p><input type="text" name="text"/> <br/>
                <p class="black police"> Entrez votre ville :</p> <input type="text" name="lieux"/> <br/>
                <button type="submit" name="valider">Valider</button>
            </form>
        </div>
    </section>

</div>

</div>
</body>
</html>

