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
                    <a href="index.php?view=index" class="navbar-brand"><?= \App\constante::NOM_SITE; ?></a>
                </div>
            </div>
        </nav>
    </body>
</html>