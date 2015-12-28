<?php
    include '_scripts/processor.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>BB Name Generator</title>
    <link rel="stylesheet" type="text/css" href="/_styles/styles.css"/>
    <link rel="stylesheet" type="text/css" href="/_styles/animate.css"/>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <meta property="og:title" content="Lunchboxing Name Generator" /> 
    <meta property="og:image" content="<?php echo $_SERVER['HTTP_REFERER']; ?>_images/generated/<?php echo $bbimagename; ?>.png" /> 
    <meta property="og:description" content="Babybel Name Generator" /> 
    <meta property="og:url" content="<?php echo $sharelink . '?generate=' . base64_encode($_SERVER['QUERY_STRING']); ?>">
</head>
<!-- alt body class equals generated -->
<body class="generate">
    <div class="bb-container">
    <!-- phase 1 -->  
        <div class="bb-wrapper-start">
            <div class="bb-wrapper-start-left">
                
            </div>
            <div class="bb-wrapper-start-right">
            </div>
        </div>
    <!-- end phase 1 -->
        
    <!-- phase 2 -->    
        <div class="bb-wrapper-started">
            <div class="bb-wrapper-left col-onethird">
                <div id="bb-wrapper-left-generate-form">
                    <div class="bb-wrapper-left-logo <?php if(isset($_GET['go']) || isset($_GET['go'])){ }else{ echo 'animated bounceInDown'; } ?>">
                        <img src="/_images/logo.png"/>
                    </div>
                    <div class="mobiledisplay">
                        <div class="bb-wrapper-right col-twothirds">
                            <div class="bb-wrapper-right-firstname animated rubberBand">
                                <?php
                                    if(!empty($bbfname)){
                                        echo $bbfname;
                                    }
                                ?>
                            </div>
                            <div class="bbimagewrapper animated rubberBand">
                                <?php
                                    if(!empty($bbimg)){
                                        echo '
                                            <div class="bb-wrapper-right-image">
                                                <img src="/_images/' . $bbimg . '.png"/>
                                            </div>
                                        ';
                                    }else{
                                        echo '
                                            <div class="bb-wrapper-right-image-prime">
                                                <img class="initimage" src="/_images/0.png"/>
                                            </div>
                                        ';
                                    }
                                ?>
                            </div>
                            <div class="bb-wrapper-right-lastname animated rubberBand">
                                <?php
                                    if(!empty($bblname)){
                                        echo $bblname;
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="bb-wrapper-left-form">
                        <form class="bb-form" id="generator_form" action="" enctype="multipart/form-data" method="GET">
                            <input type="text" value="<?php if(isset($bbfname)){ echo $bbfname; } ?>" placeholder="FIRST NAME" class="bb-fname" name="fname" id="first_name"/>
                            <input type="text" value="<?php if(isset($bblname)){ echo $bblname; } ?>" placeholder="LAST NAME" class="bb-lname" name="lname" id="last_name" />
                            <input type="hidden" value="<?php echo rand(1,15); ?>" class="bb-img" name="img"/>
                            <input type="hidden" value="1" class="bb-go" name="go"/>
                            <!--<span class="bb-submit" id="name_me_submit_alt">name me</span>-->
                            <input type="submit" value="<?php if(isset($bbsubmit)){ echo $bbsubmit; } ?>" class="bb-submit" id="name_me_submit"/>
                        </form>
                        
                        
                        <?php
                            if(!empty($bbgo)){
                                echo '
                                    <div class="bb-share">
                                        <span class="bb-social-each bb-social-facebook">
                                            <a class="bb-facebook" href="http://www.facebook.com/sharer.php?u=' . $sharelink . '?generate='. base64_encode($_SERVER['QUERY_STRING']) . '">Facebook</a>
                                        </span>
                                        <span class="bb-social-each bb-social-twitter">
                                            <a class="bb-twitter" href="http://twitter.com/share?text=Babybel%20Name%20Generator&url=' . $sharelink . '?generate=' . base64_encode($_SERVER['QUERY_STRING']) . '">Twitter</a>
                                        </span>
                                        <span class="bb-social-each bb-social-sharecopy">
                                            <h5 class="bb-sharecopy white">Share your new nickname.</h5>
                                        </span>
                                    </div>
                                ';
                            }else{
                                echo '';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="regulardisplay">
                <div class="bb-wrapper-right col-twothirds">
                    <div class="bb-wrapper-right-firstname animated rubberBand">
                        <?php
                            if(!empty($bbfname)){
                                echo $bbfname;
                            }
                        ?>
                    </div>
                    <div class="bbimagewrapper animated rubberBand">
                        <?php
                            if(!empty($bbimg)){
                                echo '
                                    <div class="bb-wrapper-right-image">
                                        <img src="/_images/' . $bbimg . '.png"/>
                                    </div>
                                ';
                            }else{
                                echo '
                                    <div class="bb-wrapper-right-image-prime">
                                        <img class="initimage" src="/_images/0.png"/>
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                    <div class="bb-wrapper-right-lastname animated rubberBand">
                        <?php
                            if(!empty($bblname)){
                                echo $bblname;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <!-- end phase 2 -->
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/_js/main.js"></script>
    <script type="text/javascript" src="/_js/html2canvas.js"></script> 
    <script type="text/javascript" src="/_js/saveme.js"></script>
    <?php
        if(isset($_GET['go'])){
            echo '
                <script type="text/javascript">
                    $(document).ready(function() {
                        capture("' . $bbimagename . '");
                    });
                </script>
            ';    
        }
    ?>
</body>
</html>

