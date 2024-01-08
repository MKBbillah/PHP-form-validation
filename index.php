<?php

//echo $mymessage;
//$filelength = filesize("message.txt"); 
//echo $filelength;
//exit();

$mymessage = fopen("message.txt", "r") or die("ami pari nai");

//echo fgetc($mymessage);
//while(!feof($mymessage)){
  //  echo fgets($mymessage);
// }

while(!feof($mymessage)){
    echo fgetc($mymessage);
}

fclose($mymessage);

?>
