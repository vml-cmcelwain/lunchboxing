<?php
if(isset($_GET['generate'])){
    $encodedString = $_GET['generate'];
    $decodeString = base64_decode($encodedString);
    $decodedArray = explode('&', $decodeString);
    $bbfname        = str_replace('fname=', $decodeArray['0']);
    $bblname        = str_replace('lname=', $decodeArray['1']);
    $bbimage        = str_replace('img=', $decodeArray['2']);
    $bbgo           = str_replace('go=',$decodeArray['3']);
    $bbimg          = str_replace('img=', $decodeArray['2']);
    $sharelink      = $_SERVER['HTTP_REFERER'];
    $sharequery     = $decodeString;
    $shareme        = $sharelink . '?'. $sharequery;
    $bbimagename    = $bbfname . '_' . $bblname . '_' . $bbimg;
    $bbsubmit       = 'try again';
}else{
    $bbfname        = '';
    $bblname        = '';
    $bbsubmit       = 'name me';
    
    if(isset($_GET['go'])){
        $bbfname        = $_GET['fname'];
        $bblname        = $_GET['lname'];
        $bbimage        = $_GET['img'];
        $bbgo           = $_GET['go'];
        $bbimg          = $_GET['img'];
        $sharelink      = $_SERVER['HTTP_REFERER'];
        $sharequery     = $_SERVER['QUERY_STRING'];
        $shareme        = $sharelink . '?'. $sharequery;
        $bbimagename    = $bbfname . '_' . $bblname . '_' . $bbimg;
        $bbsubmit       = 'try again';
    }
    else{
        $bbfname        = '';
        $bblname        = '';
        $bbsubmit       = 'name me';
    }
}   
?>