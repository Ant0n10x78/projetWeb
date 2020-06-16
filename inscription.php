<?php include("inc/header.php"); ?>
<body>
<?php
//ouverture de la base de bdd
$objetPdo = new PDO("mysql:host=localhost;dbname=article","root","");

//preparation de la requete d'insertion

$pdoStat = $objetPdo->prepare('SELECT * FROM profil ');



//execute la requete
$modifOK = $pdoStat->execute();

$educations = $pdoStat->fetch();

?>


<form name="inscription" method="post" action="inscription-2.php">
        Entrez votre pseudo : <input type="text" name="pseudo" value=""/> <br/>
        Entrez votre nom : <input type="text" name="nom"/><br/>
        Entrez votre prenom : <input type="text" name="prenom"/><br/>
        Entrez votre mail  : <input type="text" name="mail"/><br/>
        Entrez votre password  : <input type="text" name="password"/><br/>
        repetez votre password  : <input type="text" name="repeatpassword"/><br/>
        <input type="submit" name="valider" value="OK"/>
</form>


</body>
<?php include("inc/footer.php"); ?> 