<?php


$imgLink = json_decode(stripslashes($_POST['imgLink']));
$imgName = json_decode(stripslashes($_POST['imgName']));
$countLoop = $_POST['countLoop'];

for($i=0;$i<$countLoop;$i++){
    error_reporting(E_ERROR | E_PARSE);

    $url = $imgLink[$i];
    $folder ="Census";mkdir ($folder, 0755);
    $img = 'Census/'.$imgName[$i].'.jpeg';

    if(file_get_contents($url)){
        
        file_put_contents($img, file_get_contents($url));
        echo "Yes";
    }
    else{
        // echo "No";
    }
}




// Get real path for our folder
$rootPath = realpath('Census');

// Initialize archive object
$zip = new ZipArchive();
$zip->open('census.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();




?>