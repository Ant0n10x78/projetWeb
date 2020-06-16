<?php include("inc/header.php"); ?>
<body>

<?php
//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete d'insertion

$pdoStat = $objetPdo->prepare('SELECT * FROM profil WHERE id_profil=:profil ');

//liaision avec le parametre
$pdoStat->bindValue(':profil', $_GET['ID'], PDO::PARAM_INT);

//execute la requete
$modifOK = $pdoStat->execute();

$infos = $pdoStat->fetch();


?>

<?php   $profil=$_GET['ID'];     ?>


<h1>Modification du profil :</h1>
<form name="modification" method="post" action="info-perso-2.php?ID=<?= $profil ?>">
        votre pseudo : <input type="text" name="pseudo" value="<?= $infos['pseudo'] ?>"/> <br/>
        votre nom : <input type="text" name="nom" value="<?= $infos['nom'] ?>"/><br/>
        votre prenom : <input type="text" name="prenom" value="<?= $infos['prenom'] ?>"/><br/>
        votre mail  : <input type="text" name="mail" value="<?= $infos['mail'] ?>"/><br/>
        votre password  : <input type="text" name="password" value="<?= $infos['password'] ?>"/><br/>
        <input type="submit" name="valider" value="OK"/>
</form>




</body>
<?php include("inc/footer.php"); ?>