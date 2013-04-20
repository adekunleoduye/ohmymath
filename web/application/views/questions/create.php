<!DOCTYPE html>
<html lang="en">
<head>
    <title>Oh My Math</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://ohmymath.my.phpcloud.com/tmo/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="http://ohmymath.my.phpcloud.com/tmo/css/bootstrap-responsive.min.css" rel="stylesheet">

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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Questions
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="http://ohmymath.my.phpcloud.com/tmo/admin/questions/">List</a></li>
                            <li><a href="http://ohmymath.my.phpcloud.com/tmo/admin/questions/create">create</a></li>
                        </ul>
                    </li>
                    <li><a href="http://ohmymath.my.phpcloud.com/tmo/admin/results">Results</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

<div class="row">
    <div class="span3">
        <h4>ESPN Search Form</h4>
<label>
    Sports Theme:
        <select id="sport" onchange="OhMyMath.setSportsTheme();">
            <option value="nba" selected>NBA</option>
            <option value="wnba">WNBA</option>
            <!--
            <option value="golf">Golf</option>
            -->
            <option value="nfl">NFL</option>
            <option value="mlb">Baseball</option>
        </select>
</label>

        <label id="team"></label>
        <label id="player"></label>

        <!--
        <form class="form-search">
            <input type="text" class="input-medium search-query" id="player_name">
            <button type="button" class="btn" onclick="javascript:ESPN.player_search('player_name','espn_result');">Search</button>
        </form>
        -->

        <div id="espn_result">

        </div>
    </div>
    <div class="span8">
        <h3>Question Area</h3>
        <div>
            <form action='save' method='post'>
                <input type="hidden" name="sport_theme" id="sport_theme" value="nba" />
                <input type="hidden" name="headshot" id="headshot" />
                <input type="hidden" name="playername" id="playername" />

                <textarea placeholder="Question" required="required" rows="5" class="input-block-level" id="question" name="question"></textarea>

                <div style="padding-bottom:25px;">
                <label class="radio inline">
                    <input type="radio" name="answerType" id="multiple" value="multiple" onclick="javascript:OhMyMath.useMultipleChoice();">
                    Multiple Choice
                </label>
                <label class="radio inline">
                    <input type="radio" name="answerType" id="trueFalse" value="trueFalse" onclick="javascript:OhMyMath.useTrueOrFalse();">
                    True / False
                </label>
                </div>

                <div id="multipleChoiceAnswers" style="padding-bottom:25px; display:none;">
                    <input type="text" placeholder="Answer 1" id="answer1" name="answer1" class="input-block-level"/>

                    <input type="text" placeholder="Answer 2" id="answer2" name="answer2" class="input-block-level"/>

                    <input type="text" placeholder="Answer 3" id="answer3" name="answer3" class="input-block-level"/>

                    <input type="text" placeholder="Answer 4" id="answer4" name="answer4" class="input-block-level"/>
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