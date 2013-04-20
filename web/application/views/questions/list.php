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
                            <li class="active"><a href="http://ohmymath.my.phpcloud.com/tmo/questions/">List</a></li>
                            <li><a href="http://ohmymath.my.phpcloud.com/tmo/questions/create">create</a></li>
                        </ul>
                    </li>
                    <li><a href="http://ohmymath.my.phpcloud.com/tmo/admin/results">Results</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <h2>Questions</h2>

    <table class='table'>
        <tr><td>Edit</td><td>Question</td></tr>
        <?php foreach($questions as $question):?>
        <tr>
            <td><a href="http://ohmymath.my.phpcloud.com/tmo/questions/edit/<?php echo $question->id ?>">Edit</a></td>
            <td><?php echo $question->question ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</div> <!-- /container -->



<script src="http://code.jquery.com/jquery.js"></script>

<script src="http://ohmymath.my.phpcloud.com/tmo/js/jquery.min.js"></script>
<script src="http://ohmymath.my.phpcloud.com/tmo/js/bootstrap.min.js"></script>

</body>
</html>