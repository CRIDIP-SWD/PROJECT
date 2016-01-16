<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title><?= \App\constante::NOM_SITE; ?></title>
        <link rel="stylesheet" href="<?= $constante->getUrl(array('plugins', 'bootstrap', 'css/'), true, false); ?>bootstrap.css" />
        <link rel="stylesheet" href="<?= $constante->getUrl(array('plugins', 'bootstrap', 'css/'), true, false); ?>bootstrap-theme.css" />
        <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false); ?>styles.css" />
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid navbrok">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= \App\constante::NOM_SITE; ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php?view=index">Accueil</a></li>
                    <li><a href="index.php?view=dash_projet">Projets</a></li>
                    <li><a href="index.php?view=dash_ovh">Services OVH</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    </body>
</html>