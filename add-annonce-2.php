<?php include("inc/header.php"); ?>
<body>
<?php

//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete d'insertion

$pdoStat = $objetPdo->prepare("INSERT INTO articles VALUES (NULL, :id_profil, :lien, :titre, :prix, :date, :texte, :lieux,'disponible' )");

//liaison entre les parametre et les valeur du formulaire
$pdoStat->bindValue(':id_profil', $_GET['ID'], PDO::PARAM_INT);
$pdoStat->bindValue(':lien', $_POST['lien'], PDO::PARAM_STR);
$pdoStat->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
$pdoStat->bindValue(':prix', $_POST['prix'], PDO::PARAM_STR);
$pdoStat->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
$pdoStat->bindValue(':texte', $_POST['text'], PDO::PARAM_STR);
$pdoStat->bindValue(':lieux', $_POST['lieux'], PDO::PARAM_STR);




//execution de la requete

$insertOK = $pdoStat->execute();

?>
<h1> Insertion de l'article :  </h1>
<?php if($insertOK){
    $message = "l'article a bien été ajouter dans la bdd";
} 
else{
    $message = "echec de l'insertion";
} ?>

<p> <?php echo $message;   ?> </p>
<?php header('Location: ../index.php'); ?>
</body>
<?php include("inc/footer.php"); ?> 