<?php
/**
* Initialize the cURL session
*/
$ch = curl_init();


/**
* Set the URL of the page or file to download.
*/
curl_setopt($ch, CURLOPT_URL, "http://lalitharakshitha.com/Services.html");

/**Create a new file
*/
//$fp = fopen("file.txt", "w");

/**
* Ask cURL to write the contents to a file
*/
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


/**
* Execute the cURL session*/
$contents = curl_exec($ch);

//curl_exec ($ch);


echo " LALLU USERS";
echo "<br>";
echo $contents;

/**
* Close cURL session and file
*/

//fclose("file.txt");
?>