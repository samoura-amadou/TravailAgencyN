<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="styles.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
        <title>Travel Agency</title>

         <style>

         /* GENERAL */

         *
         {
             margin: 0;
             padding: 0;
         }
         body
         {
             font-family: Arial,sans-serif;
             font-size: 15px;

         }
         h1, h2,h3,h4
         {
           color: #444;
         }
         h1
         {
             font-family: 'Crete Round', serif;
             font-size: 45px;
         }
         h2
         {
             font-size: 55px;
         }
         h3
         {
             font-size: 30px;
         }
         h4
         {
             font-size: 24px;
         }
         p
         {
             line-height: 20px;
             color: #777;
         }
         ul
         {
             list-style: none;
         }
         a
         {
             text-decoration: none;
             color: #444;
         }
         .wrapper
         {
             width: 940px;
             margin: 0 auto;
             padding: 0 10px;
         }
         .orange
         {
             color: #ff7a00;
         }
         .clear
         {
             clear: both;
         }
         small
         {
             font-size: 13px;
             font-style:italic;
         }

         /* HEADER */

         header
         {
             height: 120px;
             background-color: #DCBFCB;
         }
         header h1
         {
             float: left;
             margin-top: 32px;
         }
         header nav
         {
             float: right;
             margin-top: 50px;
         }
         header nav ul li
         {
             float:left;
             display: inline-block;
         }
         header nav ul li a
         {
             text-transform: uppercase;
             font-weight: bold;
             margin-right: 20px;
         }

         /* MAIN IMAGE */

         #main-image
         {
             height: 580px;
             background: url('images/main.jpg') center;
         }
         #main-image h2
         {
             font-weight: normal;
             text-transform: uppercase;
             text-align: center;
             padding: 150px 0 40px 0;
             margin-bottom: 20px;
         }
         .button-1
         {
             display: block;
             width: 120px;
             height: 50px;
             background: #ff7a00;
             color: #fff;
             font-size: 20px;
             margin: 0 auto;
             line-height: 50px;
             text-align: center;
             border-radius:  3px;
         }
         .button-1:hover
         {
              background: #02b8dd;
         }

         /* STEPS */

         #steps ul
         {
             margin: 80px 0;
         }
         #steps ul li
         {
             width: 300px;
             float:left;
             padding-top: 140px;
             text-align: center;
             margin-right: 10px;

         }
         #steps h4
         {
             text-transform: uppercase;
             margin-bottom: 20px;
         }
         #steps p
         {
             margin-bottom: 20px;
         }
         #step-1
         {
             background: url('images/steps-icon-1.png') no-repeat top center;
         }
         #step-2
         {
             background: url('images/steps-icon-2.png') no-repeat top center;

         }
         #step-3
         {
             background: url('images/steps-icon-3.png') no-repeat top center;
         }


         /* POSSIBILITIES */


         #possibilities
         {
             background-color: #efefef;
             padding:  60px 0;
         }
         #possibilities article
         {
             width: 460px;
             height: 270px;
             float: left;
             border-radius: 10px;
         }
         #possibilities article:first-child
         {
             margin-right: 20px;
         }
         .overlay
         {
             background: rgba(255,255,255, 0.95);
             height: 100%;
             width: 190px;
             padding: 20px;
             border-radius: 10px 0 0 10px;
             text-align: center;
             box-sizing: border-box;
         }
         article h4
         {
             border-bottom:  1px solid #ddd;
             padding-bottom: 20px;
             text-transform: uppercase;
             margin-bottom: 20px;
             text-align: center;
         }
         #possibilities p
         {
             text-align: center;
             margin-bottom: 20px;
         }
         .button-2
         {
             color: #fff;
             background-color: #ff7a00;
             padding: 6px 20px;
             border-radius: 3px;
         }
         .button-2:hover
         {
             color: #fff;
             background-color: #02b8dd;
         }



         /* CONTACT */

         #contact
         {
             padding: 60px 0;
             text-align: center
         }
         #reserver
         {
             padding: 60px 0;
             text-align: center
             background-color:red;
         }
         #contact h3
         {
             width: 400px;
             text-transform: uppercase;
             margin: 0 auto 20px auto;
             border-bottom:  1px solid #02b8dd;
             padding-bottom: 20px;
         }
         form
         {
             margin: 60px 0 20px 0;
         }
         label
         {
             font-weight: bold;
             font-size: 20px;
             margin-right: 10px;
             color: #777;
         }
         input[type="text"]
         {
             padding:10px;
             font-size: 20px;
             margin-right: 20px;
             border: 2px solid #ddd;
             border-radius: 3px;
         }
         .button-3
         {
             color: #fff;
             font-size: 20px;
             font-weight: bold;
             padding: 11px;
             background-color: #02b8dd;
             border-style: none;
             border-radius: 3px;
         }
         .button-3:hover
         {
             color: #fff;
             background-color: #444;
         }

         /* FOOTER */

         footer
         {
             height: 260px;
             background-color: #444;
         }
         footer h1
         {
             color:#fff;
             text-align: center;
             padding-top: 80px;
         }
         .copyright
         {
             text-align: center;
             font-weight: bold;
             padding-top: 30px;
             color: #777;
         }


         </style>



    </head>

    <body>
        <header>
            <div class="wrapper">
                <h1>Travel Agency<span class="orange">.</span></h1>
                <nav>
                    <ul>
                        <li><a href="#main-image">Accueil</a></li>
                        <li><a href="#steps">Destinations</a></li>
                        <li><a href="#possibilities">Circuits</a></li>
                        <li><a href="#reserver">Reserver billet</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="main-image">
			<div class="wrapper">
                <h2>Organisez votre<br><strong>voyage sur mesure</strong></h2>
                <a href="#" class="button-1">Par ici</a>
			</div>
		</section>

        <section id="steps">
             <div class="wrapper">
                 <ul>
                    <li id="step-1">
                        <h4>Planifier</h4>
                        <p>Confiez-nous vos rêves d’évasion : en famille ou entre amis, nous trouverons la formule qui comblera vos attentes.</p>
                     </li>
                     <li id="step-2">
                        <h4>Organiser</h4>
                        <p>Bénéficiez de l’expertise de nos spécialistes de chaque destination, ils vous accompagnent dans la réalisation de votre voyage.</p>
                     </li>
                     <li id="step-3">
                        <h4>Voyager</h4>
                        <p>Nous nous chargeons d’assurer votre sécurité et de veiller à votre pleine sérénité tout au long de votre voyage.</p>
                     </li>
                     <div class="clear"></div>
                 </ul>
            </div>
        </section>

       <section id="possibilities">
			<div class="wrapper">
                <article style="background-image: url(images/article-image-1.jpg);">
                    <div class="overlay">
                        <h4>Partez en famille</h4>
                        <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</small></p>
                        <a href="#" class="button-2">Plus d'infos</a>
                    </div>
                </article>

                <article style="background-image: url(images/article-image-2.jpg);">
                    <div class="overlay">
                        <h4>Envie de s'evader</h4>
                        <p><small>Parfois un peu d'évasion serait le bienvenue et ferait le plus grand bien !</small></p>
                        <a href="#" class="button-2">Plus d'infos</a>
                    </div>
                </article>

                <div class="clear"></div>

                <section id="reserver">
                  <div class="reservation">
                  </div>
                  </section>
                  <br/>
                  <section id="reserver">
                      <div class="wrapper">
                          <h3>Rervez votre tranjet:</h3>
                          <p>Tout voyage est une agression. Il vous contraint à faire confiance à des inconnus et à perdre de vue le confort familier du
                            foyer et des amis, on est en perpétuel déséquilibre. On ne possède rien en dehors de l'essentiel
                             l'air, le sommeil, les rêves, la mer, le ciel - toutes choses qui tendent à l'éternité ou du moins à ce que nous en imaginons"
                    <br/>
                      </div>
                  </section>
                  <br/>
                  <form action="#" method="GET">
                    <fieldset>
                    <legend>Rerservation:</legend>
                      <label for="name">Genre</label>
                      <input type="text" id="name" placeholder="homme/femme">
                      <label for="text">nombre billet</label>
                      <input type="text" id="text" placeholder="commbien de billet">

                      <label for="text">Destination</label>
                      <input type="text" id="text" placeholder="Destination">

                      <label for="text">nombre billet</label>
                      <input type="text" id="textl" placeholder="Votre email">




                      <input type="submit" value="envoyez" class="button-3">
                      </fieldset>



                  </form>

			</div>
		</section>

        <section id="contact">
            <div class="wrapper">
                <h3>Contactez-nous</h3>
                <p>Chez Travel Agency nous savons que voyager est une aventure humaine mais également un engagement financier important pour vous. C'est pourquoi nous mettons un point d'honneur à prendre en compte chacune de vos attentes pour vous aider dans la préparation de votre séjour, circuit ou voyage sur mesure.</p>

                <form action="#" method="GET">
                  <fieldset>
                  <legend>Information:</legend>
                    <label for="name">Nom</label>
                    <input type="text" id="name" placeholder="Votre nom">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Votre email">
                    <input type="submit" value="envoyez" class="button-3">
                    </fieldset>
                </form>
                <?php
                echo "<div>";
                if (isset($_GET ['name'])) {
                  echo "le nom est: " .$_GET['name'];
                  if (isset($_GET['email'])) {
                    echo "email est:" .$_GET['email'];
                  }
                    echo "</div>";
                }
                 ?>

            </div>
        </section>
        <footer>
            <div class="wrapper">
                <h1>Travel Agency<span class="orange">.</span></h1>
                <div class="copyright">Copyright © Tous droits réservés.</div>
			</div>
        </footer>



    </body>

</html>
