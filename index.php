<?php
    $old_file = fopen("old.txt","w+");
    fwrite($old_file, "www.github.com/mohammad01dev");
    fclose($old_file);

    $openedFile = fopen("old.txt","r");
    $new_file = fopen("new.txt","w+");

    while ( !feof($openedFile) ) {
        fwrite($new_file, fgets($openedFile));
    }

    fclose($openedFile);
    fclose($new_file);

    unlink("old.txt");

    echo "Succesed";
?>