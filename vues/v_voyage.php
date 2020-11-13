<!-- Appel des fonctions qui intéragissent avec la base de données -->
<?php
    require_once("modeles/m_pays.php");
?>


<!-- test si un pays est choisie par l'utilisateur -->
<?php
    if (!ISSET($_GET['pays']))
    {
?>


        <!-- Défini un fond blanc -->
        <section class="white-bg">
                <div class="section-inner masonry-portfolio container demo-selector" data-masonry-cols="4">
                    <div>
                        <div>
                            <ul class="masonry-portfolio-items isotope list-unstyled">
                                <!-- Parcours la table "pays" -->
                                <?php
                                    $lesPays = getLesPays();
                                    while ($unPays = $lesPays->fetch())
                                    {
                                ?>
                                <!-- Affichage de l'image du pays avec le titre -->
                                    <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                        <div class="hover-item">
                                            <img src="public/img/image/voyage/<?php echo $unPays->img; ?>" class="img-responsive smoothie" alt="">
                                                <div class="overlay-item-caption smoothie"></div>
                                                    <div class="hover-item-caption smoothie">
                                                        <div class="vertical-center smoothie">
                                                            <h3 class="smoothie mb30"><a href="index.php?page=voyage" title="view project"><?php echo $unPays->nom ?></a></h3>
                                                            <a href="index.php?page=ville&cdpays=<?php echo $unPays->cd ?>" class="smoothie btn btn-primary">Voir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                    </li>
                                <?php
                                     }
                                ?>
                        </ul>       
                </div>
        </section>
<?php
    }
    else
    {

    }
?>