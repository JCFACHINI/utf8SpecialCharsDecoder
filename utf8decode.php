<?php
$fileName = $argv[1];

if (empty($fileName)) {
    die("No filename was given!");
}

$fileContent = file_get_contents($fileName);

try {
    $fileDecoded = utf8_decode($fileContent);
} catch (\Exception $ex) {
    die("An error ocurred: " . $ex->getMessage());
}

file_put_contents($fileName, $fileDecoded);
