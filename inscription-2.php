<?php include("inc/header.php"); ?>
<body>
<?php

//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete d'insertion

$pdoStat = $objetPdo->prepare('INSERT INTO profil VALUES (NULL, :pseudo, :nom, :prenom, :mail, :password)');

//liaison entre les parametre et les valeur du formulaire

$pdoStat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);

//execution de la requete

$insertOK = $pdoStat->execute();
?>

<?php if($insertOK){
    $message = "Votre compte a bien été enregistrer";
    } 
    else{
    $message = "Echec de l'inscription";
    } ?>

<p> <?php echo $message;   ?> </p>
<br/>
<button><a href="connection.php">Connectez-vous</a></button>
</body>
<?php include("inc/footer.php"); ?> 