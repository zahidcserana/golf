<?php
  $asset = asset('/');
?>
<!DOCTYPE html >
<html>
<head>
<title>Zahid-Ecommerce</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{$asset}}css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/coin-slider.css') }}" />

<script src="{{$asset}}js/cufon-yui.js"></script>
<script src="{{$asset}}js/cufon-aller.js"></script>
<script src="{{$asset}}js/jquery-1.4.2.min.js"></script>
<script src="{{$asset}}js/script.js"></script>
<script src="{{$asset}}js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="#">Zahid-<span>Ecommerce</span> <small>Company Slogan Goes Here</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="{{ URL::to('/') }}"><span>Home Page</span></a></li>
          <li><a href="{{route('register_form_view')}}"><span>Registration</span></a></li>
          <li><a href="{{route('login_form_view')}}"><span>Login</span></a></li>
          <li><a href="{{ URL::to('/product_view') }}"><span>Product</span></a></li>
          <li><a href="{{route('about_view')}}"><span>About Us</span></a></li>
          <li><a href="{{route('blog_view')}}"><span>Blog</span></a></li>
          <li><a href="{{route('contact_view')}}"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
       @yield('slider')
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      @yield('maincontent')
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="{{$asset}}images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
              Unlimited Amazing Stock Photos</li>
            <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="http://www.csshub.com/">CSS Hub</a><br />
              Premium CSS Templates</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="{{$asset}}images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{$asset}}images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{$asset}}images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{$asset}}images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{$asset}}images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{$asset}}images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
