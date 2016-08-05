<!--
    Author Aarick Lameman

    LamemanAarick@gmail.com

    Aarick's WebDev

    Date: June 1, 2016
-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php require_once("lib/head-utils.php");?>

        <link href="/lib/css/loadscreen.css" rel="stylesheet">

        <link rel="short icon" href="lib/images/starwarsnative.ico"/>

    </head>

        <body data-spy="scroll" data-target=".navbar" data-offset="50">

         <script src="lib/js/scripts.js"></script>


         <!-- Navigation Part -->
         <nav class="navbar navbar-inverse navbar-fixed-top">
             <div class="container-fluid">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>

                     </button>

                     <a class="navbar-brand "  href="#" " >Aarick's WebDev
                        <img class="img-responsive img-circle displayed logo"
                          src="lib/images/webDevLogo1.png">
                     </a>

                     <!-- Copyright Footer -->
                     <div class="navvar navbar-inverse navbar-fixed-bottom">
                         <div class="navbar-footer">
                             <footer>
                             <h4>Aarick's WebDev © 2016 All Rights Reserved</h4>
                             </footer>

                         </div>
                     </div>
                 </div>
                 <div class="collapse navbar-collapse myNavbar">
                     <ul class="nav navbar-nav navbar-right">
                         <li class="active">
                             <a href="#home">
                                 <span class="glyphicon glyphicon-tent"></span> Home | </a>
                         </li>

                         <li>
                             <a href="#portfolio">
                                 <span class="glyphicon glyphicon-briefcase"></span> Portfolio | </a>
                         </li>

                         <li>
                             <a href="#partners">
                                 <span class="glyphicon glyphicon-globe"></span> Partners | </a>
                         </li>

                         <li>
                             <a href="#experience">
                                 <span class="glyphicon glyphicon-info-sign"></span> Experience | </a>
                         </li>


                         <li>
                             <a href="#contact">
                                 <span class="glyphicon glyphicon-comment"></span> Contact | </a>
                         </li>

                     </ul>

                 </div>
             </div>

         </nav>


         <!-- Home -->
         <section class="home" id="home">
             <!-- <img class="img-responsive img-circle displayed me" src="lib/images/webDevLogo3.png"> -->

             <h6>

             </h6>

             <img class="img-responsive img-circle displayed pic" src="lib/images/profilepic4.jpg">
             <div class="img-text">

                 <h3>Ya'aa'teeh, Hello
                     </br> my name is Aarick Lameman.
                     </br>Tachiinii. Tl'aash'chi'i
                     </br>Tl'izi'lani. Kin'lichii'nii.
                     </br>Bluff, Utah
                     </br>My clans are translated as my first maternal clan is, "Red People Running Into the Water People",
                     and my paternal clan is, "Red Bottom Jaw Bone People". My maternal grandfathers clan is,
                     "Many Goats People" and my paternal grandfathers clan is, "Red House People". I'm a Junior Web Developer
                     graduate from the Cultivating Coders Bootcamp program.
                 </h3>

             </div>

         </section>


         <!-- Portfolio Section -->

         <section class="portfolio" id="portfolio">
             <h1>Portfolio</h1>
             <h3>My upcoming projects will be here!</h3>
             <div class="container">

                 <!-- Row of columns -->
                 <div class="row">


                     <div class="col-md-3">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/igstudiologo1.jpg" alt="Project 1">
                                 <h2 class="gray-text">Indigenous Game Studio</h2>
                             </a>
                             <p class="gray-text">
                                 <a target="_blank" style="color: orange">Indigenous Game Studio</a>
                                 is here to create game platforms to help educate others about
                                 The Indigenous People's cultural preservation of language & heritage for the next seven generations.
                                 Game platforms will be available for mobile apps & game consoles.
                                 </br>
                                 <a class="btn btn-lg btn-primary" href="https://www.facebook.com/indigenousgamestudio"
                                    role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                 </br><a target="_blank" style="color: blue">IndigenousGameStudio.com</a>

                             </p>
                         </div>
                     </div>

                     <div class="col-md-3">
                         <div class="well">
                             <a class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/ecnlogo1.jpg" alt="Project 2">
                                 <h2 class="gray-text">Episcopal Church in Navajoland</h2>
                             </a>
                             <p class="gray-text">This site will display the
                                 <a target="_blank" style="color: orange">Episcopal Church in Navajoland</a>
                                 website information for the area missions of the Utah Region, San Juan Region, and Southeast Region.
                                 Also members may login as a user, and are able to post updates.</br>
                                 <a class="btn btn-lg btn-primary" href="https://www.facebook.com/EpiscopalChurchInNavajolandecn"
                                    role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                 </br><a target="_blank" style="color: blue">ECNavajoland.com</a>
                             </p>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/cheiisDevShop.jpg" alt="Project 3">
                                 <h2 class="gray-text">Cheii's devShop</h2>
                             </a>
                             <p class="gray-text">This site will display the
                                 <a target="_blank" style="color: orange">Cheii's devShop</a>
                                 website for web and mobile development. Using programs such as HTML5, CSS3, MySQL, PHP,
                                    Javascript, Git, Angular.JS, Version Control, Server Admin, Database Admin,
                                    Graphic design, Mobile first design.
                                 <a class="btn btn-lg btn-primary" href="https://www.facebook.com/cheiidevshop/?fref=ts"
                                    role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                 </br><a target="_blank" style="color: blue">CheiiDevShop.com</a>
                             </p>

                         </div>
                     </div>


                     <div class="col-md-3">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/webDevLogo5.png" alt="Project 4">
                                 <h2 class="gray-text">Aarick's WebDev</h2>
                             </a>
                             <p class="gray-text">This site will display the
                                 <a target="_blank"
                                    style="color: orange">Aarick's WebDev</a>
                                 website. Portfolio resume website development for clients to present to potential employers
                                 to compete in this digital economy of employment.
                                 What is required: Cover Letter, Resume, References, & Personal Pictures. </br>
                                 <a class="btn btn-lg btn-primary"
                                    href="https://www.facebook.com/Aarick.11727701"
                                    role="button">
                                     <i class="fa fa-facebook-official"
                                        aria-hidden="true">

                                     </i>
                                 </a>
                                 </br><a target="_blank"
                                         style="color: blue">LamemanAarick@gmail.com
                                 </a>
                             </p>
                         </div>
                     </div>

                 </div>
                 <div class="row">

                     <div class="col-md-4">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/scatering.jpg" alt="Project 5">
                                 <h2 class="gray-text">Sampson's Catering</h2>
                             </a>
                             <p class="gray-text">This site will display the
                                 <a target="_blank"
                                    style="color: orange">Sampson's Catering</a>
                                 website. The menu reflects Navajo Traditional ingredients used in moderen dishes,
                                 with farm to table concept. The Executive Chef is Leon Sampson.  </br>
                                 <a class="btn btn-lg btn-primary"
                                    href="https://www.facebook.com/profile.php?id=100001936191757&fref=ts"
                                    role="button">
                                     <i class="fa fa-facebook-official"
                                        aria-hidden="true">

                                     </i>
                                 </a>
                                 </br><a target="_blank"
                                         style="color: blue">SampsonL74@yahoo.com
                                 </a>
                             </p>
                         </div>
                     </div>

                     <div class="col-md-4">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/mrtanks.jpg" alt="Project 6">
                                 <h2 class="gray-text">Mr. Tank's Tattoos 505</h2>
                             </a>
                             <p class="gray-text">This project site will display the
                                 <a target="_blank" style="color: orange">Mr. Tank's Tattoos 505</a>
                                 website. Tattoo & Piercings - Art Gallery.
                                 Mr. Tank's Tattoos 505 specializes in custom Artwork, Tattoos, and Body Piercings.
                                 Bringing guest artists from all over the country, all the time!!
                                 </br>
                                 <a class="btn btn-lg btn-primary"
                                    href="https://www.facebook.com/mrtanks505/?fref=ts"
                                    role="button">
                                     <i class="fa fa-facebook-official" aria-hidden="true">

                                     </i>
                                 </a>
                             </p>
                         </div>
                     </div>

                     <div class="col-md-4">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/vtp.jpg" alt="Project 7">
                                 <h2 class="gray-text">Valencia Trading Post</h2>
                             </a>
                             <p class="gray-text">This project site will display the
                                 <a target="_blank" style="color: orange">Valencia Trading Post</a>
                                 website for cafe, and advertised merchandise.
                                 Breakfast, Lunch, Dinner, and Groceries!!
                                 Anna's Famous Salsa made fresh daily along with fry bread, and a variety of burittos!!!
                                 </br>
                                 <a class="btn btn-lg btn-primary"
                                    href="https://www.facebook.com/ValenciasTP/?fref=nf"
                                    role="button">
                                     <i class="fa fa-facebook-official" aria-hidden="true">

                                     </i>
                                  </a>
                             </p>
                         </div>
                     </div>

                     <!-- <div class="col-md-3">
                         <div class="well">
                             <a href="#" class="thumbnail">
                                 <img class="img-responsive img-circle displayed me"
                                      src="lib/images/kbdillons.jpg" alt="Project 8">
                                 <h2 class="gray-text">K.B.</br> Dillon's</h2>
                             </a>
                             <p class="gray-text">This project site will display the
                                 <a target="_blank" style="color: orange">K.B. Dillon's</a>
                                 website for a bar and grille. Banquet Rooms. Catering.
                                 K. B. Dillon's has been open in the heart of downtown Farmington since 1983.
                                 Featuring fine dining and a full service, handcrafted bar with daily happy hour and food and drink specials.
                                 </br>
                                 <a class="btn btn-lg btn-primary"
                                    href="https://www.facebook.com/KBDillons/"
                                    role="button">
                                     <i class="fa fa-facebook-official" aria-hidden="true">

                                     </i>
                                 </a>
                             </p>
                         </div>
                     </div> -->


                 </div>
             </div>
         </section>


         <!-- Partners -->
         <!-- Background Photo Credit: Steven Peter -->


         <section class="partners" id="partners">
             <div class="partners">


                 <!-- Main Jumbotron -->
                  <div class="container main-content">
                     <div class="col-md-12">
                         <h1 class="text-center"><span class="text-white">Partners & Sponsors</span></h1>
                     </div>
                 </div>
             </div>

             <div class="container">

                 <div class="col-md-4">
                     <div class="row">
                         <img src="lib/images/dologo.png" alt="DO Logo"
                              class="img-responsive center-block"/>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <h2 class="text-center">Sponsorship</h2>

                             <h3 class="text-center">
                                 Digital Ocean - Hosting Provider
                             </h3>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="row">
                         <img src="lib/images/cclogo.png" alt="CC Logo"
                              class="img-responsive center-block RS21"/>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <h2 class="text-center">Partnership</h2>

                             <h3 class="text-center">
                                 Cultivating Coders - Partner
                             </h3>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="row">
                         <img src="lib/images/jetbrains2.png" alt="Jetbrains Logo"
                              class="img-responsive center-block harmonix"/>
                     </div>
                     <div class="row">
                         <div class="col-md-12">

                             <h2 class="text-center">Sponsorship</h2>

                             <h3 class="text-center">
                                 Jet Brains - PhpStorm Provider
                             </h3>

                         </div>
                     </div>
                 </div>

             </div>
             </div>

             </div>
             </div>


             </div>
         </section>


         <!-- Experience -->

         <section class="experience" id="experience">
             <div class="container">

                 <h2>My Experience</h2>
                     <p>Here is some of my past employment history.</p>
                     <div class="panel-group" id="accordion">
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 <h4 class="panel-title">
                                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        Bureau of Land Management: Fire Truck Driver Operator
                                     </a>
                                 </h4>
                             </div>
                             <div id="collapse1" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                    Over the past two years I have worked with the
                                    </br>Moab Interagency Fire Center as a Fire Driver,
                                    </br>Type 2 Wildland Firefigher, and Camp Help.

                                 </br>March 2015 - Present

                                 </br> Moab, Utah

                                 <h5>
                                    Job Responsibilities
                                 </h5>

                                 <ul>
                                         <li>Prescribed Fires, Political Fires, Ignition, Control, Mop-Up, Suppression, Monitoring.
                                         <li>Experienced with equipment tools such as, Pulaski’s, Shovels, Combination tools, Cubi-containers,
                                                bladder bags, SIG bottles, Radio.
                                         </li>
                                         <li>Lead Grid Line</li>
                                         <li>Lookout Person reports fire behavior with crew radio. Spins weather with a
                                             psychomotor measurement tool</li>
                                         <li>National Safety Council Defensive Driver’s Certification</li>
                                         <li>Off road 4x4 driving</li>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 <h4 class="panel-title">

                                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        Desert Rose Inn & Cabins: Maintenance Warden
                                     </a>

                                 </h4>
                             </div>
                             <div id="collapse2" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    I have worked with Desert Rose during the summer
                                     </br>doing building & yard maintenance. Maintaining immaculate grounds around the hotel.

                                 </br> July 2015 – August 2015

                                 </br> Bluff, Utah

                                     <h5>
                                        Job Responsibilities
                                     <h5>
                                     <ul><li>I use to keep hte weeds under control. . Repair tools and equipment. </li>
                                         <li>did maintenance for the pool area, adding more water, checking temperatures.
                                                Testing the acidity & chlorine levels of the pool.</li>
                                         <li>I used tools such as the lawn mower, weed eater, shovels, rakes, Owner’s truck,
                                             flatbed, wheelbarrows, brooms, grinder, pitch fork, leaf blower, hoe rake,
                                             weed control chemical spray, water hose</li>
                                         <li>Carpentry</li>
                                         <li>Plumbing</li>

                                     </ul>

                                 </div>
                             </div>
                         </div>
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 <h4 class="panel-title">

                                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        Comb Ridge Coffee & Bistro: Dessert Chef & Hydro Ceramic Technician
                                     </a>

                                 </h4>
                             </div>
                             <div id="collapse3" class="panel-collapse collapse">
                                 <div class="panel-body">
                                     I have worked for Comb Ridge Coffee & Bistro as a Dish Washer then promoted to Dessert Chef.

                                     </br>March 2015 – July 2015

                                     </br> Bluff, Utah

                                     <h5>
                                        Job Responsibilities
                                     </h5>

                                     <ul>
                                         <li>Hand washed & cleaned dishes and cookware.</li>
                                         <li>Organized dishes & cookware in orderly fashion for kitchen staff.</li>
                                         <li>Assisted wait staff with bussing tables and preparing table for next customer.</li>
                                         <li>Food server for Customers</li>
                                         <li>Preparing Dessert Menu Items</li>
                                         <li>Cooked eggs for the breakfast weekends</li>
                                         <li>Food Preparation</li>
                                         <li>Utah Food Handler Permit. San Juan Public Health Dept. Expires March 26, 2018.</li>
                                     </ul>

                                 </div>
                             </div>
                         </div>
                     </div>
             </div>
         </section>





         <!-- Contact -->

         <section class="contact" id="contact">
             <div class="contact-info">

                 <h1>Contact Me</h1>
                 <h6>LamemanAarick@gmail.com</h6>

                 <form>
                     <div class="form-group">
                         <label for="InputName">Name</label>
                         <input type="name" class="form-control" id="exampleInputName" placeholder="Name">
                     </div>

                     <div class="form-group">
                         <label for="InputEmail">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                     </div>

                     <div class="form-group">
                         <label for="InputMessage">Message</label>
                         <input type="message" class="form-control" id="InputMessage" rows="3" placeholder="Message">
                     </div>
                     <button type="submit" class="btn btn-success">Submit</button>
                 </form>


                 <!-- social media buttons -->

                 <div class="social" align="center">
                     <div class="btn-group-vertical">
                         <button type="button"
                                 class="btn btn-lg btn-danger"
                                 href="mailto:lamemanaarick@gmail.com"
                                 role="button"><i class="fa fa-envelope fa-fw"></i>
                             <a></a>
                         </button>
                     </div>



                     <div class="btn-group-vertical">
                         <a class="btn btn-lg btn-primary" href="https://www.linkedin.com/in/aarick-lameman-2a977b11b"
                            role="button"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     </div>

                     <div class="btn-group-vertical">
                         <a class="btn btn-lg btn-default" href="https://github.com/AarickL"
                            role="button"><i class="fa fa-github fa-fw" aria-hidden="true"></i></a>
                     </div>

                     <div class="btn-group-vertical">
                         <a class="btn btn-lg btn-danger" href="https://plus.google.com/u/0/101202476091732022579"
                            role="button"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                     </div>

                     <div class="btn-group-vertical">
                         <a class="btn btn-lg btn-info" href="https://twitter.com/AarickL3"
                            role="button"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </div>

                     <div class="btn-group-vertical">
                         <a class="btn btn-lg btn-primary" href="http://facebook.com/Aarick.11727701"
                            role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                     </div>



                 </div>

             </div>
         </section>



         <!-- Copyright Footer

            <footer>
             <h4>Copyright © Aarick's webDev 2016
                 </br>All Rights Reserved</h4>
            </footer>-->

         
         
         




    <!-- Bootstrap core JavaScript
 ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Angulur -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!-- Our Custom JS -->
    <script src="./scripts.js"></script>




</html>