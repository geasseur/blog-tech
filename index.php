        <?php get_header(); ?>

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

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <section id="article">
            <h2>Articles sur les dernières technologies</h2>
            <article <?php post_class() ?> id = post-<?php the_ID(); ?>
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

        <?php get_footer(); ?>
