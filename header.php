<html class="no-js" lang="">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="<?php bloginfo("css/style.css"); ?>" >
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="icon" type="image/png" href=".png" />
      <title>Blog de la tech tonique</title>
      <?php wp_head(); ?>
    </head>
    <body id= "page">
        <header>
          <img class="logoBlog" src="img/mobile/logo.png" alt="logo du blog">
          <h1>Blog de la tech tonique</h1>
          <nav class="navbar navbar-toggleable-md navbar-light" id="barreNavigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="col-12 navbar-nav mr-auto mb-3 row d-flex flex-nowrap justify-content-around align-items-center">
                <li><button type="button" class="btn btn-secondary mt-3 btn-lg" onclick="apparition(invisible)">Ordinateur</button></li>
                <li><button type="button" onclick="apparition2(invisible2)" class="btn btn-secondary mt-3 btn-lg">Smartphone</button></li>
                <li><button type="button" onclick="apparition3(invisible3)" class="btn btn-secondary mt-3 btn-lg">PC Portable</button></li>
                <li><button type="button" onclick="apparition4(invisible4)" class="btn btn-secondary mt-3 btn-lg">Casque VR</button></li>
              </ul>
            </div>
          </nav>
        </header>

        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

        <script
         src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

          <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
          <script>
              (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
              function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
              e=o.createElement(i);r=o.getElementsByTagName(i)[0];
              e.src='https://www.google-analytics.com/analytics.js';
              r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
              ga('create','UA-XXXXX-X','auto');ga('send','pageview');
          </script>
    </body>
</html>
