<!DOCTYPE html>
<html lang="en">
<!-- Tête de la page index -->
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="public/img/image/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="public/img/image/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/img/image/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/img/image/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="public/img/image/apple-touch-icon-57x57.png">

    <title>Kompleet by Distinctive Themes</title>

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/animate.css" rel="stylesheet">
    <link href="public/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/pe-icons.css" rel="stylesheet">

</head>

<!-- Corps de la page index -->
<body id="page-top" class="index">

    <div class="master-wrapper">
    
        <!--<div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="public/img/image/loading.GIF" alt="loading"/></span>
            </div>
        </div>-->
        <!-- Menu -->
        
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
        <?php
            include("vues/v_menu.php");
        ?>
        <!-- page master page -->

        <?php
        include("vues/v_accueil.php");
            if (isset($_GET['page']))
            {
                switch($_GET['page'])
                {
                case 'accueil';break;
                case 'voyage':include("vues/v_voyage.php");break;
                case 'ville':include("vues/v_villes.php");break;
                default:include("vues/erreur.php");break;
                }
            }
            else
            {
                //header("Location:index.php?page=accueil");
            }
            ?>

        </nav>
        <!-- Pied de page -->
        <?php
            include("vues/v_pied.php");
        ?>

    <!-- JavaScript -->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="public/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- fonction qui change le background toute les 8 secondes -->
    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "public/img/image/bg/bg1.jpg",
            "public/img/image/bg/bg2.jpg",
            "public/img/image/bg/bg3.jpg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
    </script>
</body>
</html>