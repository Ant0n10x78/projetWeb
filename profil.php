
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
    
    <div class="wrapper">

    <section class="login-container">
        <div>
            <header>
                <h2 class="black police">Identification</h2>
            </header>

            <form name="connection" method="post" action="php/connection-2.php">
              
                <input type="text" name="username" placeholder="Nom d'utilisateur" required="required"/>
                <input type="password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>

            </form>
        </div>
    </section>

</div>
<?php include("inc/header.php"); ?>
<body>



<?php
//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete
$pdoStat = $objetPdo->prepare('SELECT * FROM articles WHERE id_profil=:profil');

//liaision avec le parametre
$pdoStat->bindValue(':profil', $_GET['ID'], PDO::PARAM_INT);

//execution de la requete
$executeOK = $pdoStat->execute();

//recuperation des données
$articles = $pdoStat->fetchAll();

?>

<h1>Article à supprimer :</h1>
<ul>
<?php foreach ($articles as $article): ?>
      
      <li style="list-style: none;">
          <?= $article['titre'] ?> - <?= $article['date'] ?> <a href="supp-annonce-2.php?ID=<?= $article['id_article'] ?>">Supprimer</a>
      </li>
  <?php endforeach; ?>
</ul>
 

</div>
</body>
</html>

