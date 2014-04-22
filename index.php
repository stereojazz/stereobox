<?php require('config.php') ?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <title><?= STEREOBOX_USER ?> - <?= STEREOBOX_TITLE ?></title>

    <link rel="icon" type="image/png" href="assets/favicon.png" />
    <link rel="stylesheet" href="assets/style.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="content">
        <div id="header">
            <span class="title"><h2><?= STEREOBOX_USER ?>: test site</h2></span>
            <span class="userpic" />
        </div>

        <div id="menu">
            <span><a href="/">Home</a></span>
        </div>

        <div id="files">
            <div class="text">
                Available code files:
            </div>
            <div>
                <?php foreach (Stereobox::getInstance()->getCodeFiles() as $file): ?>
                <a href="/?<?= http_build_query(array('file' => $file)) ?>"><?= $file ?></a><br />
                <?php endforeach ?>
            </div>
        </div>

        <div id="code">
            <?php if (Stereobox::getInstance()->getCodeFileFromRequest()): ?>
                <?php require(Stereobox::getInstance()->getCodeFileFromRequest()) ?>
            <?php else: ?>
                Code output will be shown here. Just select a code file from a list on the right side.
            <?php endif ?>
        </div>

        <hr />
        <div id="footer">
            <p><a href="phpinfo.php" target="_blank">phpinfo()</a></p>
            <p>Server host: <?= $_SERVER["SERVER_ADDR"]; ?></p>
            <p>Remote host: <?= $_SERVER["REMOTE_ADDR"]; ?></p>
            <p>If you like that testing board, you can easily git clone it from <a href="https://github.com/stereojazz/stereobox">here</a></p>
        </div>
    </div>

</body>
