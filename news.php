<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

  <title>Walla Walla Acupuncture</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <meta http-equiv="Content-Language" content="en" />
    <meta name="author" content="Walla Walla Acupuncture: Inviting you to gain a deeper understanding of your potential for wellness." />
    <meta name="keywords" content="acupuncture walla advance clinic eastern medicine integrative health wellness guasha cupping herbal therapy nutrition" />
    <meta name="description" content="Walla Walla Acupuncture" />
    <link href='img/favicon.gif' rel='shortcut icon' type='image/gif'>
    <link href='img/favicon.ico' rel='shortcut icon' type='image/ico'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48880240-1', 'wallawallaacupuncture.org');
  ga('send', 'pageview');

</script>


  <link rel="stylesheet" href="css/layouts/pure.css">




  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
        <!--<![endif]-->

        <!--Typekit Code -->
        <script type="text/javascript" src="//use.typekit.net/qnt1hyf.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

      </head>
      <body id="top">

        <div id="layout">
        </div>    <div id="main">

        
        <nav class="fixed">
          <a href="index.html" class="title">Walla Walla<br><span>Acupuncture</span></a>
          <a href="#bottom" class="mobile_nav">Menu</a>

          <div class="btngroup">
            <a href="services.html" class="button">Services</a>
            <a href="about.html" class="button">About</a>
            <a href="news.php" class="button active">Blog</a>
            <a href="contact.html" class="button">Contact</a>
            <a href="#" class="fb_button button"></a>

          </div>

        </nav>
      </div>

      <div class="news_hero fixed_adj">
        <h1>Blog</h1>
      </div>



      <?php

      $request_url = "http://wwacpt.tumblr.com/api/read?type=post&start=0&num=5";
      $xml = simplexml_load_file($request_url);
      $posts = $xml->xpath("/tumblr/posts/post");

      foreach($posts as $post) {
        $body = $post->{'regular-body'};
        $title = $post->{'regular-title'};
        $date = $xml->posts->post ['date'];
        $date = date("D, d M Y", strtotime($date));
        echo '<div class="backing news">'.'<h1>'.$title.'</h1>'.'<h2>'.$date.'</h2>'.'<p>'.$body.'</p>'.'</div>';
   // '<h1>'.$title.'</h1>';
   //  '<h2>'.$date.'</h2>'; 
   // '<p>'.$body.'</p>';

      }

      ?>

      <a href="#top" class="linkbutton back2top" >Back to Top</a>

      <footer>
        <ul>
          <a href="https://www.facebook.com/wallawallaacupuncture"><div id="fb-icon"></div></a>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="news.php">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>

        <p >Copyright &copy; 2014 Walla Walla Acupuncture</p>
        <p id="bottom">Website Design: <a href="http://mattwujek.com/">Matt Wujek</a></p>

      </footer>





      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="js/ui.js"></script>



      <script type="text/javascript">
        $( document ).ready(function() {
          $('#top').fadeIn(400);
        });
      </script>        <!-- Scroll to Top -->
      <script type="text/javascript">


        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
           $('html,body').animate({
             scrollTop: target.offset().top
           }, 1000);
           return false;
         }
       }
     });

      </script><script type="text/javascript">
      $( document ).ready(function() {
        $('#top').fadeIn(400);
      });
    </script>


  </body>
  </html>
