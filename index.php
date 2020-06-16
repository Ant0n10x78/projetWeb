
<?php
$bdd = new PDO("mysql:host=localhost;dbname=article","root","");
?>
<?php

$articles = $bdd->query('SELECT titre, id_article FROM articles ORDER BY id_article DESC');
if (isset($_GET['q']) AND !empty($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);
    $articles = $bdd->query('SELECT titre, id_article FROM articles WHERE titre LIKE "%'.$q.'%" ORDER BY id_article DESC');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.3/pixi.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="css/input.css" >
    <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('.range').next().text('--');
            $('.range').on('input',function(){
                var $set = $(this).val();
                $this.next().text($set);
            })
        })
    </script>
    <title>SellGame</title>
    
</head>

<body>
    <script src="js/star.js"></script>
    <div class="page">
    <?php include("header.php"); ?>
    <main>
        <div class="bloc_categorie">
        <div class="wrapper">

    <section class="login-container">
    <div>
        <header>
            <h2>Rechercher</h2>
        </header>
        <form name="connection" method="GET"  action="">
              
              <input type="text" name="q" placeholder="Rechercher" required="required"/>
              <button type="submit" >Rechercher</button>

          </form>
          </div>
    </section>
        </div>

        <h2 class="police" style="color:white;margin-left:45%;margin-bottom:100px;margin-top:100px;font-size:30px;">Annonces</h2>
    <?php
$reponse = $bdd->query('SELECT * FROM articles');
if(empty($_GET['q'])){while ($donnees = $reponse->fetch() )
{?>
    <div   class="a_annonce" >
    <a  class="link" href='page_article.php?'.<?php echo $donnees['id_article'] ?>  style="text-decoration:none;" >
    <div class="annonce">
        <img src=<?php echo $donnees['photo']; ?>>
        <div class="descr_annonce">
            <h3><?php echo $donnees['titre']; ?></h3>
            <p><?php echo $donnees['description']; ?></p>
        </div>
    </div>
    </a>
    </div>
    <?php 
    }$reponse->closeCursor();}// Termine le traitement de la requête
    ?>
<?php if(!empty($_GET['q'])){while ($a = $articles->fetch()){ 
    ?>
    <div   class="a_annonce" >
    <a  class="link" href='page_article.php?'.<?php echo $a['id_article'] ?>  style="text-decoration:none;" >
    <div class="annonce">
        <img src=<?php echo $a['photo']; ?>>
        <div class="descr_annonce">
            <h3><?php echo $a['titre']; ?></h3>
            <p><?php echo $a['description']; ?></p>
        </div>
    </div>
    </a>
    </div>
    <?php 
    }$reponse->closeCursor();// Termine le traitement de la requête
    ?>
<?php } ?>

    </main>
    </div>
    

</body>

</html>
