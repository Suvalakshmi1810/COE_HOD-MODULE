<?php

// Define the filename and path of the file to be downloaded
$filename = "example.txt";
$file = "/path/to/file/" . $filename;

// Ask the user for the path where they want to save the file
$output_dir = filter_input(INPUT_POST,'file_location');

// Set headers for file download
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: text/plain");

// Read the file into a variable
readfile($file);

// Move the file to the user-specified path using the rename() function
if(rename($file, $output_dir . '/' . $filename)){
    echo 'File has been downloaded successfully';
} else {
    echo 'Error: Unable to download the file';
}

?>