<!DOCTYPE html>
<html lang="en">
<head>
    <title>Oh My Math</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <style>

        body {
            padding-top: 60px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
    </style>

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://ohmymath.my.phpcloud.com/tmo/">Oh My Math</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="http://ohmymath.my.phpcloud.com/tmo/admin">Home</a></li>
                    <li class="active"><a href="http://ohmymath.my.phpcloud.com/tmo/admin/questions/">Questions</a></li>
                    <li><a href="http://ohmymath.my.phpcloud.com/tmo/admin/results">Results</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">


    <div class="row">
        <div class="span3">
            <h4>Player Name: <?php echo $playername ?> </h4>
            <img src="<?php echo $headshot ?>" />
        </div>
        <div class="span8">
            <h3>Question Area</h3>
            <div>
                <form action='http://ohmymath.my.phpcloud.com/tmo/questions/save' method='post'>
                    <input type="hidden" name='id'  value="<?php echo $id ?>" />
                    <input type="hidden" name="sport_theme" id="sport_theme" value="<?php echo $sportTheme ?>" />
                    <input type="hidden" name="headshot" id="headshot" value="<?php echo $headshot ?>" />
                    <input type="hidden" name="playername" id="playername" value="<?php echo $playername ?>"/>


                    <textarea placeholder="Question" required="required" rows="5" class="input-block-level" id="question" name="question"><?php echo $question ?></textarea>

                    <div style="padding-bottom:25px;">
                        <label class="radio inline">
                            <input type="radio" name="answerType" id="multiple" value="multiple" onclick="javascript:OhMyMath.useMultipleChoice();" <?php echo ($answerType == 'multiple')?'checked':''; ?> >
                            Multiple Choice
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="answerType" id="trueFalse" value="trueFalse" onclick="javascript:OhMyMath.useTrueOrFalse();"  <?php echo ($answerType == 'trueFalse')?'checked':''; ?> >
                            True / False
                        </label>
                    </div>

                    <div id="multipleChoiceAnswers" style="padding-bottom:25px; <?php echo ($answerType == 'multiple')?'':'display:none'; ?>">
                        <input type="text" placeholder="Answer 1" id="answer1" name="answer1" class="input-block-level" value="<?php echo $answer1 ?>"/>

                        <input type="text" placeholder="Answer 2" id="answer2" name="answer2" class="input-block-level" value="<?php echo $answer2 ?>"/>

                        <input type="text" placeholder="Answer 3" id="answer3" name="answer3" class="input-block-level" value="<?php echo $answer3 ?>"/>

                        <input type="text" placeholder="Answer 4" id="answer4" name="answer4" class="input-block-level" value="<?php echo $answer4 ?>"/>
                    </div>


                    <input type="submit" class="btn"/>
                </form>
            </div>
        </div>
    </div>





</div> <!-- /container -->

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://ohmymath.my.phpcloud.com/tmo/js/jquery.min.js"></script>
<script src="http://ohmymath.my.phpcloud.com/tmo/js/bootstrap.min.js"></script>


<script type="text/javascript" src="http://ohmymath.my.phpcloud.com/tmo/js/OhMyMath.js"></script>


</body>
</html>