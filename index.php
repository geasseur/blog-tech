<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="icon" type="image/png" href=".png" />
      <title>Blog de la tech tonique</title>
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

        <main id="contenu" class="container bg-faded">
          <div class="temps">
            <p id="horaire">
            </p>

            <p id="tmpReste">

            </p>
          </div>

          <section id="tableauProduit">
            <section>
              <table class="table">
                <tr>
                    <th>Ordinateur</th>

                </tr>

                <tr class="toggle">
                    <td><img src="http://i2.cdscdn.com/pdt2/3/n/f/1/300x300/260a103nf/rw/hp-pc-de-bureau-260a103nf-4go-de-ram-windows.jpg" alt="tour hp"></td>

                </tr>

                <tr class="toggle">
                    <td><img src="http://image.darty.com/informatique/bureau-bureau/bureau/asus_g11cd-k-fr107t_p1606134217128A_161304716.jpg" alt="tour asus"></td>
                </tr>

                <tr class="toggle">
                    <td><img src="http://image.darty.com/darty?type=image&source=/market/2016/05/07/mkp_0Vfy3ClfR-1vVQ.jpeg&width=269&height=405" alt="tour z3"></td>
                </tr>

                <tr class="toggle">
                    <td><img src="https://base2code.com/wp-content/uploads/2012/07/LD0000980487_2.jpg" alt="tour hunter"></td>
                </tr>

                <tr>
                    <th>Mobile</th>
                </tr>

                <tr class="toggle2">
                    <td><img src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/H/KH/HKHC2/HKHC2?wid=445&hei=445&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1474481298618" alt="iphone"></td>
                </tr>

                <tr class="toggle2">
                    <td>
                      <img src="http://static.fnac-static.com/multimedia/Images/FR/NR/f5/3b/50/5258229/1540-1/tsp20130610173019/Nokia-Lumia-520-Noir.jpg" alt="nokia lumia">
                    </td>
                </tr>

                <tr class="toggle2">
                    <td><img src="http://images.samsung.com/is/image/samsung/p5/fr/new/galaxy-a5.png?$ORIGIN_PNG$" alt="samsung"></td>
                </tr>

                <tr class="toggle2">
                    <td><img src="http://www.sidetalking.com/images/N-GAGE_QD_Fron_1.jpg" alt="n-gage"></td>
                </tr>

                <tr>
                    <th>PC portable</th>
                </tr>


                <tr class="toggle3">
                    <td><img src="http://image.darty.com/informatique/ordinateur_portable-portable/portable/acer_aspire_v5-591g-57ur_o1601194189396A_164141639.jpg" alt="portable asus"></td>
                </tr>

                <tr class="toggle3">
                    <td><img src="http://img.clubic.com/download/image.php?id=06041630&h=00AB&w=00F8&crop=2&options=YToxOntzOjU6ImNvbG9yIjtzOjU6IndoaXRlIjt9" alt="mac book"></td>
                </tr>

                <tr class="toggle3">
                    <td><img src="http://i2.cdscdn.com/pdt2/0/4/7/1/300x300/ace4713392897047/rw/acer-aspire-e5-773g-58gk.jpg" alt="portable acer"></td>
                </tr>

                <tr class="toggle3">
                    <td><img src="https://images.grosbill.com/ordinateurs_Ordinateur_portable_TOSHIBA_Satellite_C870_145_Blanc_-164555-images800jpg-1.jpg" alt="toshiba"></td>
                </tr>

                <tr>
                    <th>Tablette</th>
                </tr>

                <tr class="toggle4">
                    <td><img src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/pa/ipad/wifi/ipad-wifi-select-gold-201703_GEO_US?wid=1200&hei=630&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1489697004510" alt="ipad"></td>
                </tr>

                <tr class="toggle4">
                    <td><img src="http://images.samsung.com/is/image/samsung/fr_GT-P5210ZWAXEF_011_Standard-1-_white?$TM-Gallery$" alt="tablette samsung"></td>
                </tr>

                <tr class="toggle4">
                    <td><img src="http://images.samsung.com/is/image/samsung/p5/au/tablets/explore-more-tab-a.png?$ORIGIN_PNG$" alt="tablette samsung"></td>
                </tr>

                <tr class="toggle4">
                    <td><img src="http://brain-images.cdn.dixons.com/0/1/10146810/u_10146810.jpg" alt="tablette asus"></td>
                </tr>


            </table>
            </section>
          </section>

          <section id="article">
            <h2>Articles sur les dernières technologies</h2>
            <article>
              <h3>La vr d'oculus</h3>
              <article class="articleBlog">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                <p>non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              </article>
              <article class="imgBlog">
                <img id="vr" class="vr" onmouseover="altImg(this)" onmouseout="nonAltImg(this)" src="img/mobile/samsung-gear-vr-350x237.jpg" alt="un jolie casque vr" width="200" height="200">
                <p id="altimg">

                </p>
              </article>
            </article>


            <article>
            <article class="articleBlog">
              <h3>power glove</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              <p>non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              </article>
              <article class="imgBlog">

              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/NES-Power-Glove.jpg/300px-NES-Power-Glove.jpg" alt="power glove">
              </article>

              </article>



            <article>
              <article class="articleBlog">
              <h3>Roto VR</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              <p>non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              </article>
              <article class="imgBlog">
              <img src="http://www.ginjfo.com/wp-content/uploads/2016/05/Roto_VR.jpg" alt="siege réalité virtuelle">
            </article>
            </article>


            <article>
              <article class="articleBlog">
              <h3>Ordinateur quantique</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              <p>non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              </article>
              <article class="imgBlog">
              <img src="http://www.cnetfrance.fr/i/edit/2015/12/d_wave.jpg" alt="ordi quantique">
            </article>
            </article>
          </section>
        </main>

        <footer class="footerBlog">
          <article>
            <p>baptiste ventura</p>
            <p>23 rue de la boustifaille</p>
            <a href="#">Sur Mars</a>
          </article>


          <form class="formulaire" action="index.html" method="post">
            <p>Abonnez vous</p>

            <input type="text" name="name" value="votre nom">
            <input type="text" name="mail" value="votre mail">
            <button type="submit" name="button" id="btnEnvois" onclick="confirmation()">envoyer</button>
          </form>

        </footer>

        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

        <script>

          var altIMG = document.getElementById("vr").alt;
          function altImg() {

              document.getElementById("altimg").innerHTML += altIMG ;
          }

          function nonAltImg() {
              document.getElementById("altimg").innerHTML = "" ;
          }
        </script>

        <script type="text/javascript">
        //script pour la confirmation d'envois

        function confirmation(){
          confirm("êtez vous sûr de vouloir envoyer?");
        }

        // script pour le compteur
        var duree = 0;
        function tempReste(){
            parseInt(duree += 1);
            document.getElementById("tmpReste").innerHTML += (duree + " secondes") ;
            setTimeout(function () {
              var delet = parseInt(duree);
              document.getElementById("tmpReste").innerHTML = " " ;
            }, 990);
        }

        setInterval(tempReste, 1000);

        //script pour l'heure.
        function horloge(){

        var today = new Date();
        var minute = today.getMinutes();
        var secondes = today.getSeconds();
        var heure = today.getHours();
        var jour = today.getDay();
        var nbjour = today.getDate();
        var mois = today.getMonth();
        var année = today.getFullYear();
        if(jour == 1){
         jour = "lundi";
        }
        else if (jour == 2) {
         jour = "mardi";
        }
        else if (jour == 3) {
         jour = "mercredi";
        }
        else if (jour == 4) {
         jour = "jeudi"
        }
        else if (jour == 5) {
         jour = "vendredi";
        }
        else if (jour == 6) {
         jour = "samedi";
        }
        else {
         jour = "dimanche"
        }

        if(mois == 0){
         mois ="janvier";
        }
        else if (mois ==1) {
         mois = "fevrier"
        }
        else if (mois ==2) {
         mois = "mars";
        }
        else if (mois ==3) {
         mois = "avril";
        }
        else if (mois ==4) {
         mois = "mai";
        }
        else if (mois ==5) {
         mois = "juin";
        }
        else if (mois==6) {
         mois = "juillet";
        }
        else if (mois==7) {
         mois ="août";
        }
        else if (mois==8) {
         mois=="septembre";
        }
        else if (mois==9) {
         mois = "octobre";
        }
        else if (mois ==10) {
         mois = "novembre";
        }
        else{
         mois ="decembre";
        }
        document.getElementById("horaire").innerHTML += (heure + " h "+ minute + " min " + secondes +" sec "+ jour + " " + nbjour + " " + mois + " année " + année);

        }

        horloge();

        </script>


        <script type="text/javascript">
          var invisible = document.getElementsByClassName("toggle");
          var invisible2 = document.getElementsByClassName( "toggle2");
          var invisible3 = document.getElementsByClassName( "toggle3");
          var invisible4 = document.getElementsByClassName( "toggle4");
           console.log(invisible);


              function disparition(invisible,invisible2,invisible3,invisible4){
                  for(i=0;i<4;i++){
                    invisible[i].style.display = "none";
                    console.log(invisible[i]);
                  }
                  for(i=0;i<4;i++){
                    invisible2[i].style.display = "none";
                    console.log(invisible2[i]);
                  }
                  for(i=0;i<4;i++){
                    invisible3[i].style.display = "none";
                    console.log(invisible3[i]);
                  }
                  for(i=0;i<4;i++){
                    invisible4[i].style.display = "none";
                    console.log(invisible4[i]);
                }
              }
              disparition(invisible,invisible2,invisible3,invisible4);

                function apparition(invisible){
                  disparition(invisible,invisible2,invisible3,invisible4);
                  for(i=0;i<4;i++){
                    invisible[i].style.display = "flex";
                    }

                  }


                function apparition2(invisible2){
                  disparition(invisible,invisible2,invisible3,invisible4);
                  for(i=0;i<4;i++){
                    invisible2[i].style.display = "block";
                    }

                  }

                  function apparition3(invisible3){
                    disparition(invisible,invisible2,invisible3,invisible4);
                    for(i=0;i<4;i++){
                      invisible3[i].style.display = "block";
                      }

                    }

                    function apparition4(invisible4){
                      disparition(invisible,invisible2,invisible3,invisible4);
                      for(i=0;i<4;i++){
                        invisible4[i].style.display = "block";
                        }

                      }

              </script>


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
