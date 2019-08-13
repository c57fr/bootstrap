<?php

/*
 * Ce fichier est la propriété de C57.fr
 *
 * (c) Membre@c57.fr - 2019
 *
 * Et C57... C'est à VOUS !
 *
 * Sérieusement, ce fichier source est sujet à la license MIT*.
 * Mais je compte sur vous pour toujours chercher à l'améliorer et à votre tour, en faire profiter
 * un max de monde grâce aux techniques offertes dans c57.fr.
 *
 * @Bi1tô, & Bon code !
 *
 *  *: En gros...: Vous en faites ce que vous voulez !!!
 */

$a = ['a' => 1,
    'b'   => 2,
    'c'   => 3, ];

$files = new DirectoryIterator(__DIR__);
foreach ($files as $fileInfo) {
    if ($fileInfo->isDot()) {
        continue;
    }
    echo "<a href='".$fileInfo->getFilename()."'>".

  $fileInfo->getBasename()."</a><br>\n";
}