<?php
    $image = $_POST['image'];
    $name = $_POST['name'];

    $image = str_replace('data:image/png;base64,', '', $image);
    $decoded = base64_decode($image);

    file_put_contents('../_images/generated/'.$name . ".png", $decoded, LOCK_EX);


    echo $image;
?>



<?php

    //$testString = 'fname=Sticky&lname=McSchnickens&img=15&go=1';
    //$codeString = base64_encode($testString);
    //echo $codeString;
    //echo '<br/>';
    //echo '<br/>';
    //$decodeString = base64_decode($codeString);
    //echo $decodeString;
    //echo '<br/>';
    //echo '<br/>';
    //$codeArray = explode('&', $decodeString);
    //print_r($codeArray);

?>