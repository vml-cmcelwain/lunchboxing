<?php
    $image = $_POST['image'];
    $name = $_POST['name'];

    $image = str_replace('data:image/png;base64,', '', $image);
    $decoded = base64_decode($image);

    file_put_contents('../_images/generated/'.$name . ".png", $decoded, LOCK_EX);


    echo $image;
?>