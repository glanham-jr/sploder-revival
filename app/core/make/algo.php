<?php
require_once __DIR__ . '/../content/initialize.php';
require(__DIR__.'/../content/disablemobile.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php require(__DIR__ . '/content/head.php'); ?>

    var attributes = {
    v: "1"
    };

    swfobject.embedSWF("../swf/creator3_b01.swf", "flashcontent", "720", "540", "10", "/swfobject/expressInstall.swf",
    flashvars, params);
    </script>
    <script type="text/javascript">window.rpcinfo = "Making a 3d Game";</script>

</head>
<?php include(__DIR__ . '/../content/addressbar.php'); ?>

<body id="creator" class="threedee">
    <?php include(__DIR__ . '/../content/headernavigation.php'); ?>



    <div id="page">
        <?php include(__DIR__ . '/../content/subnav.php'); ?>


        <div id="content">
            <h3>3d Game Maker, Space Adventure</h3>

            <div id="creatorcontainer">
                <div id="flashcontent">
                    <div style="margin: 40px auto; text-align: center; width: 420px;">
                        <p>Make your own 3d space adventure game with this game maker. Create a 3d space station and add
                            aliens, robots, traps and powerups to create your own space missions.</p>
                        <?php include(__DIR__ . '/../content/noflash.php') ?>
                    </div>
                </div>
            </div>

            <div class="spacer">&nbsp;</div>
        </div>
        <div id="sidebar">
            <br /><br /><br />
            <div class="spacer">&nbsp;</div>
        </div>
        <div class="spacer">&nbsp;</div>
        <?php include(__DIR__ . '/../content/footernavigation.php') ?>
</body>

</html>