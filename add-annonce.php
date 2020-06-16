<?php include("inc/header.php"); ?>
<body>
<?php   $profil=$_GET['ID'];     ?>
<form name="ajouter" method="post" action="add-annonce-2.php?ID=<?= $profil ?>">
        <p class="">Entrez votre lien d'image :</p> <input type="text" name="lien"/> <br/>
        Entrez votre titre : <input type="text" name="titre"/> <br/>
        Entrez votre prix : <input type="text" name="prix"/><br/>
        Entrez votre date : <input type="text" name="date"/><br/>
        Entrez votre text : <input type="text" name="text"/> <br/>
        Entrez votre lieux : <input type="text" name="lieux"/> <br/>
        <input type="submit" name="valider" value="OK"/>
</form>

</body>
<?php include("inc/footer.php"); ?> 