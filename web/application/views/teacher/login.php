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

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
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
                    <li class="active"><a href="http://ohmymath.my.phpcloud.com/tmo/admin">Home</a></li>
                    <li><a href="http://ohmymath.my.phpcloud.com/tmo/questions/">Questions</a></li>
                    <li><a href="http://ohmymath.my.phpcloud.com/tmo/results">Results</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Email address">
        <input type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
    </form>
</div> <!-- /container -->



<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://ohmymath.my.phpcloud.com/tmo/js/jquery.min.js"></script>
<script src="http://ohmymath.my.phpcloud.com/tmo/js/bootstrap.min.js"></script>

</body>
</html>