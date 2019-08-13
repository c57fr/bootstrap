<ul>
    <div class="container-fluid muted mt-3">
        <?php
// $a = [
//     'a' => 1,
//     'b' => 2,
//     'c' => 3,
// ];

//echo DIRNAME(DIRNAME(__FILE__)) .'/exemples<br>'.'..'.__DIR__;
?>
    </div>
    <?php
        $files = new DirectoryIterator(dirname(__DIR__).'/exemples');
    foreach ($files as $fileInfo) {
        if ($fileInfo->isDot()) {
            continue;
        } ?>

    <li><a href=<?php echo $fileInfo->getFilename(); ?> target="_blank">
            <?php echo $fileInfo->getBasename(); ?></a><br></li>
    <?php
    }

// var_dump($a);
?>
</ul>