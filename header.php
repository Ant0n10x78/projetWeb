<header id="header">
        <div></div>
        <section class="header_left"  >
            <div><a href="index.php"><h1 class="police">SellGame</h1></a></div>
            <div><a href="add_article.php"><button class="button_header">Déposer une annonce</button></a></div>
            
        </section>
        <section class="header_right">
            <?php if(!empty($_GET['ID'])){?>
            <div>
                <a href="http://localhost/front/profil.php"><h3 class="police">Messages</h3></a>
            </div><?php } ?>
            <div>
                <a href=""><h3 class="police">Messages</h3></a>
            </div>
            <div> 
                <a href="connexion.php"><h3 class="police">Se connecter</h3></a>
            </div>
        </section>
</header>