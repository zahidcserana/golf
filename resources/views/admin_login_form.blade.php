<?php
    $asset = asset('/'); 
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <link rel="stylesheet" href="{{$asset}}css/bootstrap.min.css">
        <link rel="stylesheet" href="{{$asset}}css/font-awesome.min.css">
        <link rel="stylesheet" href="{{$asset}}css/style.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login_box">
                            <img src="{{$asset}}image/logo.png" alt="logo">
                            <form method="POST" action="{{ url('admin/login') }}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <label class="fn"><input type="checkbox"> <span>Remember me</span></label>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
        <script src="{{$asset}}js/bootstrap.min.js"></script>
        <script src="{{$asset}}js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
