<?php include("inc/header.php"); ?>

<body>
<?php

//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete d'insertion

$pdoStat = $objetPdo->prepare('SELECT * FROM profil WHERE pseudo=:pseudo&&password=:password');

//liaison entre les parametre et les valeur du formulaire

$pdoStat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);



//execution de la requete

$insertOK = $pdoStat->execute();

$article = $pdoStat->fetch();


?>

<?php if($insertOK){
    echo "<script> alert('Vous etes bien connecté') </script> " ;?>
    
    <?php } 
    else {
    echo "<script> alert('Erreur de connexion.') </script> " ;
    } ?>
<p> <?php echo $message;   ?> </p>
<a href="membre.php?ID=<?= $article['id_profil'] ?>">Commencez</a>
<br/>
</body>

<?php $article = $article['id_profil']; header("Location: ../index.php?id=$article" ); ?>

<?php include("inc/footer.php"); ?> 