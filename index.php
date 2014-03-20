<?php require('config.php') ?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <title><?= STEREOBOX_USER ?> - <?= STEREOBOX_TITLE ?></title>

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="style.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="content">
        <div class="header">
            <span class="title"><h2><?= STEREOBOX_USER ?>: test site</h2></span>
            <span class="userpic" />
        </div>

        <div class="text">
            Here is the sample output of code.php.
        </div>

        <div class="code"><?php require('code.php'); ?></div>

        <hr />
        <div class="footer">
            <p><a href="phpinfo.php" target="_blank">phpinfo()</a></p>
            <p>Server host: <?= $_SERVER["SERVER_ADDR"]; ?></p>
            <p>Remote host: <?= $_SERVER["REMOTE_ADDR"]; ?><?= ($_SERVER["REMOTE_HOST"]) ? ', ' . $_SERVER["REMOTE_HOST"] : '' ?></p>
        </div>
    </div>

</body>
