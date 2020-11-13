<!-- Appel des fonctions qui intéragissent avec la base de données -->
<?php
    require_once("modeles/m_ville.php");
    $lesVilles = getDesVille($_GET['cdpays']);
    if (ISSET($_GET['ville']))
    {
    $UneVille = getUneVille($_GET['ville']);
    }
?>


<!-- Création de la liste déroulante -->
<div class="dropdown">
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Sélectionner une Ville
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    

<!-- Implementation de la liste déroulante avec la base de données -->
<?php

        while ($laVille = $lesVilles->fetch())
        {      
?>
<li><a href="index.php?page=ville&cdpays=<?php echo $laVille->code_pays ?>&ville=<?php echo $laVille->nom ?>" ><?php echo $laVille->nom; ?></a></li>
<li role="separator" class="divider"></li>
<?php
        }
?>


<!-- Fin de la création de la liste déroulante -->
</select>
</ul>
</div>


<!-- test si une ville a été séléctionner -->
<?php
if (ISSET($_GET['ville']))
{
    $laVille = $UneVille->fetch()
?>


<!-- Affiche la présentation de la ville -->
<section id="welcome">
            <div class="section-inner nopaddingbottom">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb100 wow">
                            <h2 class="section-heading">Bienvenue à <?php echo $laVille->nom ?></h2>
                        </div>
                    </div>
                </div>
               
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $laVille->description?>
                        </div>
                        <div class="col-md-6">
                            <img src="public/img/image/ville/<?php echo $laVille->img ?>" class="img-responsive alignright wow fadeIn"data-wow-delay="0.5s" alt="">
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php
}
?>