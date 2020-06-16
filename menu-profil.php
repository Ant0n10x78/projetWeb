<?php include("inc/header.php"); ?>
<body>
<?php   $profil=$_GET['ID'];     ?>
<h1>Que voulez vous faire?</h1>
<p>Modifier vos informations personnelles?</p> <a href="info-perso.php?ID=<?= $profil ?>" > <input type="button" value="Modifier"> </a>
<p>Ajouter une annonce?  </p> <a href="add-annonce.php?ID=<?= $profil ?>" > <input type="button" value="Ajouter"> </a>
<p>Supprimer une annonce?  </p> <a href="supp-annonce.php?ID=<?= $profil ?>" > <input type="button" value="Supprimer"> </a>
<p>Modifier une annonce?  </p> <a href="modify-annonce.php?ID=<?= $profil ?>" > <input type="button" value="Modifier"> </a>
<br>
