<?php
require_once __DIR__ . '/../content/initialize.php';
require(__DIR__.'/../content/disablemobile.php'); ?>
<?php
$t = $_GET['t']; // Tag by user input
session_start();
require_once(__DIR__ . '/../../services/GraphicListRenderService.php');
require_once(__DIR__ . '/../../repositories/repositorymanager.php');
$perPage = 12;
$offset = $_GET['o'] ?? 0;
$graphicsRepository = RepositoryManager::get()->getGraphicsRepository();
$graphicListRenderService = new GraphicListRenderService($graphicsRepository);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include(__DIR__ . '/../content/head.php') ?>
    <link rel="stylesheet" type="text/css" href="/css/sploder_v2p22.min.css" />
    <script type="text/javascript">
    var _sf_startpt = (new Date()).getTime()
    </script>
    <?php include(__DIR__ . '/../content/onlinechecker.php'); ?>
    <script type="text/javascript">window.rpcinfo = <?= json_encode("Viewing Graphics with Tag: " . $t) ?>;</script>
</head>
<?php include(__DIR__ . '/../content/addressbar.php'); ?>

<body id="everyones">

    <?php include(__DIR__ . '/../content/headernavigation.php') ?>
    <div id="page">
        <?php include(__DIR__ . '/../content/subnav.php') ?>


        <div id="content">
            <h3><?= ucfirst($t); ?> Graphics</h3>

            <p>Tags are keywords or phrases that describe your graphic. They help people find your graphics, and make browsing
                them more fun! <a href="tags.php">Browse all tags now.</a>
            <h4>Graphics with tag <span class="tagcolor1"><?= $t ?></span>:</h4>
            </p>
            <?php
            $graphicListRenderService->renderPartialViewForGraphicsWithTag($t, $offset, $perPage);
            ?>

        
        <div id="sidebar">
            <br /><br /><br />
            <div class="spacer">&nbsp;</div>
        </div>
        </div>
        <div class="spacer">&nbsp;</div>
        <?php include(__DIR__ . '/../content/footernavigation.php') ?>
</body>

</html>