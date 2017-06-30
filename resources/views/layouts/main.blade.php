<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js oldie lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js oldie lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js oldie lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
  <!-- <![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="Making Monitoring Great Again.">
    <meta name="author" content="OIT Monitoring">
    <meta name="viewport" content="width=device-width, , initial-scale=1">
    <!-- Place favicon.ico in the the public directory-->
    <link rel="shortcut icon" href="../images/favicon.ico">
    <!-- Styles-->
    <link rel="stylesheet" href="{{ URL::asset('css/semanticUI/semantic.css') }}" >
    <link rel="stylesheet" href="//cloud.typography.com/75214/740862/css/fonts.css">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/drops.css') }}" >
    <!-- Scripts-->
    <script type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.menu-aim.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/semanticUI/semantic.js') }}"></script>
    <script type="text/javascript" src="../js/sorttable.js"></script> 
    @yield('scripts')
    @yield('head')
  </head>
  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
      display: inline;
      font-weight: bold;
    }
  </style>
  <body>
  <header>
    <div id="byu-logo" class="byu-logo"><a href="/"><img src="../../images/BYU-Phone Services.png" alt="Logo"></a></div>
    <nav class="byu-main-nav-wrapper">
      <ul class="byu-main-nav">
        <li><a href="http://crsvm1.byu.edu/">CRSVM1</a></li>
        <li><a href="http://crsvm2.byu.edu/">CRSVM2</a></li>
        <li><a href="http://home.byu.edu/">BYU Home</a></li>
       <!-- <li>
  <div class="ui compact menu">
  <div class="ui simple dropdown item">
    <a href="#">Single Link</a>
    <div class="menu">
      <div class="item"><a class ="link" href="/secondary-nav">Secondary Nav</a></div>
      <div class="item"><a class ="link" href="#">Choice 2</a></div>
      <div class="item"><a class ="link" href="#">Choice 3</a></div>
      <div class="item"><a class ="link" href="#">Choice 4</a></div>
      <div class="item"><a class ="link" href="#">Choice 5</a></div>
      <div class="item"><a class ="link" href="#">Choice 6</a></div>
      <div class="item"><a class ="link" href="#">Choice 7</a></div>
    </div>
  </div>
</div>
</li> -->
          <!-- Login/Logout link -->
          <li>
            <?php 
              if(!(cas()->isAuthenticated())) {
                ?><a href='/login'>Login</a><?php
              }
              else {
                ?><a href='/logout'>Logout</a><?php
              } ?>
         </li>
          <!-- This is the secondary navbar. Edit this on each additional blade. -->
        @yield('dropNav')
      </ul> <!-- .byu-main-nav -->
    </nav> <!-- .byu-main-nav-wrapper -->
    
    <a href="#" class="byu-nav-trigger"><span></span></a>
  </header>
  <main class="byu-main-content">
  <h1 id='page-title'>@yield('page-title')</h1>
  <br><br>
  @yield('content')
  <br><br><br>
  <footer class="byu-footer">
  <div class="byu-footer-wrapper">
  <img src="../../images/BYU Communications Support.png" alt="Logo">
  </div>
  </footer>
  </main>
</body>
</html>