<div class="container-fluid muted mt-3">
    <ul class="list-group list-group-horizontal-sm">

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
        <li class="list-group-item p-1"><a href=<?php echo $dossExemples.$fileInfo->getFilename(); ?> target="_blank">
                <span class="<?php echo ('.php' === $ext) ? 'bgcmaroon' : ''; ?>">
                    <?php echo $fileInfo->getBasename($ext);
    // ($fileInfo->key()).' '.
                ?>
                </span>
            </a>
        </li>
        <?php
}

    // var_dump($a);
?>
    </ul>
</div>