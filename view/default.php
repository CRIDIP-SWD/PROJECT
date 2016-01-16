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
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                    <ul class="nav navbar-nav">
                        <li>TEST</li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>