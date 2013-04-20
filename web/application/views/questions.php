
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://ohmymath.my.phpcloud.com/tmo/css/style.css">
</head>
<body>
<header>
    <img src="http://ohmymath.my.phpcloud.com/tmo/images/logo.svg" alt="AO Logo">
</header>

<article id="wrap">
    <div class="profile" id="l-top">
        <img src="<?php echo $headshot ?>" id="pImg">
        <p><h1 class="name"><?php echo $playername ?></h1>
        <!--
        <span class="playerInfo">New York Yankees <br> Short Stop</span></p>
         <br>
        <img src="http://placehold.it/50x50"> -->
    </div>

    <p class="question">
        <?php echo $question ?>
    </p>
    <br>
    <?php if ($answerType == 'multiple') :?>
    <ul class="answers">
        <li>A: <span class="mc"><?php echo $answer1 ?></span></li>
        <li>B: <span class="mc"><?php echo $answer2 ?></span></li>
        <li>C: <span class="mc"><?php echo $answer3 ?></span></li>
        <li>D: <span class="mc"><?php echo $answer4 ?></span></li>
    </ul>
    <?php elseif($answerType == 'trueFalse'):?>
        <ul class="answers">
            <li><span class="mc">True</span></li>
            <li><span class="mc">False</span></li>
        </ul>
    <?php endif;?>
</article>



</html>