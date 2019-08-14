<div class="row align-content-around flex-wrap m-auto">

    <?php
// $a = [
//     'a' => 1,
//     'b' => 2,
//     'c' => 3,
// ];

// echo dirname(__DIR__).'/exemples<br>'.'..'.__DIR__;

$dossExemples = 'exemples/'; // Dossier des exemples
$files        = new DirectoryIterator(dirname(__DIR__).'/'.$dossExemples);
// var_dump($files, pathinfo(__FILE__));
foreach ($files as $fileInfo) {
    if ($fileInfo->isDot() || $fileInfo->isDir()) {
        continue;
    }
    $ext = '.'.$fileInfo->getExtension();
    // echo $ext;?>
    <div class="col shadow p-2 m-2 bg-white rounded"><a href=<?php echo $dossExemples.$fileInfo->getFilename(); ?>
            target="_blank" class="text-decoration-none font-weight-bold">
            <span class="<?php echo ('.php' === $ext) ? 'bgcmaroon' : ''; ?>">
                <?php echo $fileInfo->getBasename($ext);
    // ($fileInfo->key()).' '.
                ?>
            </span>
        </a>
    </div>
    <?php
}

    // var_dump($a);
?>
</div>