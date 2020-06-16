<?php include("inc/header.php"); ?>
<body>

<?php


//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete
$pdoStat = $objetPdo->prepare('SELECT * FROM articles WHERE id_article=:id');

$pdoStat->bindValue(':id', $_GET['ID'], PDO::PARAM_INT);
//execution de la requete
$executeOK = $pdoStat->execute();

//recuperation des données
$article = $pdoStat->fetch();

?>
<h2>     Annonces :   </h2>
      <li style="list-style: none;">
          <img style="width: 100px; height: 100px;" src="  <?= $article['photo'] ?>  ">
      </li>
      <li style="list-style: none;">
          <?= $article['titre'] ?> - <?= $article['date'] ?>
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

      <a href="mesagerie.php?ID=<?= $article['id_profil'] ?>">contactez</a> </li>
</body>
<?php include("inc/footer.php"); ?>