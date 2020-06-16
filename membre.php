<?php include("inc/header.php"); ?>
<body>
<?php


//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete
$pdoStat = $objetPdo->prepare('SELECT * FROM articles');

//execution de la requete
$executeOK = $pdoStat->execute();

//recuperation des données
$articles = $pdoStat->fetchAll();

?>
<h2>     Annonces :   </h2>
<ul>
  <?php 
    foreach ($articles as $article): ?>
      <li style="list-style: none;">
          <img style="width: 100px; height: 100px;" src="  <?= $article['photo'] ?>  ">
      </li>
      <li style="list-style: none;">
          <?= $article['titre'] ?> - <?= $article['date'] ?> <a href="article.php?ID=<?= $article['id_article'] ?>">ouvrir</a> </li>
      </li>
      <li style="list-style: none;">
          <?= $article['prix'] ?>$;
      </li>
      <br>
      <li style="list-style: none;">
          <?= $article['description'] ?>
      </li><br>
      <li style="list-style: none;">
          <?= $article['statut'] ?> - <?= $article['lieux'] ?>
      </li><br>
  <?php endforeach; ?>
</ul>
<?php   $profil=$_GET['ID'];     ?> 
<button><a href="menu-profil.php?ID=<?= $profil ?>">Mon Profil</a></button>

<button><a href="recherche.php">Recherche</a></button>
</body>

<?php include("inc/footer.php"); ?> 