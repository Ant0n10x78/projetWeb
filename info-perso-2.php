<?php include("inc/header.php"); ?>
<body>
<?php
//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete d'insertion

$pdoStat = $objetPdo->prepare('UPDATE profil set pseudo=:pseudo, nom=:nom, prenom=:prenom, mail=:mail, password=:password WHERE id_profil=:id_profil LIMIT 1');

//liaison entre le parametre et la valeur de l'id

$pdoStat->bindValue(':id_profil', $_GET['ID'], PDO::PARAM_INT);
$pdoStat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
//execution de la requete

$modifOK = $pdoStat->execute();
?>


<?php if($modifOK){
    $message = "les modifications ont bien été modifier dans la bdd";
} 
else{
    $message = "echec de la modification";
} ?>

<p> <?php echo $message;   ?> </p>

</body>
<?php include("inc/footer.php"); ?>