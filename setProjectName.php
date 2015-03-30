<?php




function searchAndReplace($folder, $pattern, $callback) {
    $dir = new RecursiveDirectoryIterator($folder);
    $ite = new RecursiveIteratorIterator($dir);
    $files = new RegexIterator($ite, $pattern, RegexIterator::MATCH);
    $fileList = array();
    foreach($files as $file) {
        $callback($file);
    }
    return $fileList;
}

$replaceInFile = function(SplFileInfo $filename) {
    if ($filename->isDir()) {
        return;
    }

    var_dump($filename->getFilename());
};


searchAndReplace(__DIR__."/./data", "#.*(php|conf)#", $replaceInFile);