<?php
/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
if (array_key_exists('to', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('subject', $_POST)) {
        $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject = 'No subject given';
    }
    //Apply some basic validation and filtering to the query
    if (array_key_exists('query', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['query']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No query provided!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
    //Validate to address
    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
    // if (array_key_exists('to', $_POST) and in_array($_POST['to'], ['sales', 'support', 'accounts'])) {
    //     $to = $_POST['to'] . '@example.com';
    // } else {
    //     $to = 'support@example.com';


        $to = 'hunter.warren@gmail.com';
    // }
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Error: invalid email address provided";
        $err = true;
    }
    if (!$err) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 2500;
        $mail->CharSet = 'utf-8';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('hunter.warren@hunterwarren.us', (empty($name) ? 'Contact form' : $name));
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Contact form: ' . $subject;
        $mail->Body = "Contact form submission\n\n" . $query;
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg .= "Message sent!";
        }

    }
} ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Noticia+Text:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="vendors/scrolloverflow.min.js"></script>
  <script src="js/jquery.fullPage.js"></script>
  <!-- <script src="js/move.js"></script> -->
  <link rel="stylesheet" href="css/site_2.css">
  <script type="text/javascript">



      $(document).ready(function() {
        $('#fullpage').fullpage({
          anchors: ['hello','work', 'resumé'],
          menu: '#myMenu',
          bigSectionsDestination: 'null',
          scrollOverflow: true,
          scrollOverflowOptions: ({
            scrollbars: false,
            bounce: true,
          fixedElements:
            '#resumeSection',


          }),

          onLeave: function(index, nextIndex, direction) {
            if ((index == 1 || index == 2) && direction == 'down') {
              $.fn.fullpage.setAllowScrolling(false, 'down');
              setTimeout(function(){
                $.fn.fullpage.setAllowScrolling(true, 'down');
              }, 2000);
              if (nextIndex == 3) {
                $("ul li a").css("color", "#bd4dd4");
                $("nav").css("border-bottom", "1px solid rgba(189,77,212,.7)")
              }
            } else if ((index == 2 || index == 3) && direction == 'up') {
              $.fn.fullpage.setAllowScrolling(false, 'up');
              setTimeout(function(){
                $.fn.fullpage.setAllowScrolling(true, 'up');
              }, 2000);
              if (nextIndex == 2) {
                $("ul li a").css("color", "white");
                $("nav").css("border-bottom", "1px solid rgba(255,255,255,.7)")
              }
            }



          }
        });
        // afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex){
      	// 	// var loadedSlide = $(this);
        //
      	// 	//first slide of the second section
      	// 	if (anchorLink == 'secondPage' && slideIndex == 1){
      	// 		alert("First slide loaded");
      	// 	}
        //
      	// 	//second slide of the second section (supposing #secondSlide is the
      	// 	//anchor for the second slide
      	// 	if(index == 2 && slideIndex == 'secondSlide'){
      	// 		alert("Second slide loaded");
      	// 	}
      	// };
        $( "#portfolio" ).hover(
          function() {
            $( this ).css( "cursor", "url(/img/hand2.gif), auto" );
          }, function() {
            $( this ).css( "cursor", "default" );
          }
        );
        $.fn.fullpage.setScrollingSpeed(700);
      });





  </script>
</head>
  <body>
    <html>
    <nav>
    <ul id="myMenu">
      <li data-menuanchor="hello" id="sayHello"><a href="#hello">Home</a></li>
      <li data-menuanchor="resumé" id="resumeLink"><a href="#resumé">Resumé</a></li>
      <li data-menuanchor="work" id="portfolioLink"><a href="#work">Portfolio</a></li>
    </ul>
    </nav>
    <div id="fullpage">
      <section class="section" id="intro" data-anchor="hello">
        <div id="backgroundPhoto" class="MainContainer">
          <div id="introContent">
            <div id="hi">Hello!</div>
              <h1>I’m front-end developer, Hunter Warren.</h1>
              <button id="buyNow">Buy Now</button>
          </div>
        </div>
        <div id="myModal" class="Modal is-hidden is-visuallyHidden">
          <!-- Modal content -->
          <div class="Modal-content">
            <span id="closeModal" class="Close">&times;</span>
            <h2>Contact Me</h2>
            
            <?php if (empty($msg)) { ?>
              <form id="emailForm" action="#hello" method="POST">
              <!-- <label for="to">Send to:</label>
              <select name="to" id="to">
              <option value="sales">Sales</option>
              <option value="support" selected="selected">Support</option>
              <option value="accounts">Accounts</option>
              </select><br> -->
  <!--             <label for="subject">Subject: <input type="text" name="subject" id="subject" maxlength="255"></label><br> -->
              <label for="name">Your name: <input type="text" name="name" id="name" maxlength="255"></label><br>
              <label for="email">Your email address: <input type="email" name="email" id="email" maxlength="255"></label><br>
              <label for="query">Let's talk!</label><br>
              <textarea cols="30" rows="8" name="query" id="query" placeholder="Enter your message here"></textarea><br>
              <input type="submit" value="Submit">
              </form>
            <?php } else {
                echo $msg;
            } ?>
            



          </div>
        </div>

            
      </section>

      <section class="section" id="portfolio">
        <h1 style="text-align:center">COMING SOON!</h1>
      </section>
<!--     <section class="section fp-auto-height" id="portfolio" data-anchor="work">
      <div class="container slide" id="projects">
        <div class="col-xs-11 col-sm-6 singleProject">
          <div class="icon"></div>
          <p class="iconTitle">Globetrotter</p>
          <h2 class="projectName">Globetrotter.pro</h2>
          <p class="projectDesc">Web-based travel budgeting application</p>
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <div class="icon"></div>
          <p class="iconTitle">Lorem Ipsum</p>
          <h2 class="projectName">Lorem Ipsum</h2>
          <p class="projectDesc"> Here's where the projects go</p>
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <div class="icon"></div>
          <p class="iconTitle">Lorem Ipsum</p>
          <h2 class="projectName">Lorem Ipsum</h2>
          <p class="projectDesc"> Here's where the projects go</p>
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <div class="icon"></div>
          <p class="iconTitle">Lorem Ipsum</p>
          <h2 class="projectName">Lorem Ipsum</h2>
          <p class="projectDesc"> Here's where the projects go</p>
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <div class="icon"></div>
          <p class="iconTitle">Lorem Ipsum</p>
          <h2 class="projectName">Lorem Ipsum</h2>
          <p class="projectDesc"> Here's where the projects go</p>
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <div class="icon"></div>
          <p class="iconTitle">Lorem Ipsum</p>
          <h2 class="projectName">Lorem Ipsum</h2>
          <p class="projectDesc"> Here's where the projects go</p>
        </div>

      	<div id="globetrotter" class="slide">Globetrotter</div>
      	<div class="slide">Reddit.dev</div>
      	<div class="slide">OldLister</div>
      	<div class="slide"> Project 4 </div>
      	<div class="slide"> Project 5 </div>
      	<div class="slide"> Project 6 </div>

      </div>


    </section> -->
    <section class="section" id="resume" data-anchor="resumé">

      <div class="row">
<!--       <div class="resume col-md-6 col-md-offset-3">
        <h2>About Me</h2>
        <h4>I’m a PHP / JavaScript full-stack web developer transitioning to programming after 7+ years experience as an Advertising Art Director /Designer. What excites me about programming is the potential to make people’s lives easier and better through technology, and provide them with value they never expected. Currently working on a multiple crypto-to-fiat currency converter to gain better understanding of available crypto APIs.</h4>
      </div> -->
      </div>
      <div id="resumeSection" class="row">
        <div class="col-xs-12">
          <div id="downloadHere">
            <h2>Download full resumé here:</h2>
            <button class="resumeButton">Download</button>
          </div>
        </div>
        <div class="resume col-md-4 col-xs-12">
          <h3>Education</h3>
          <p>June-September 2017</p>
          <h5>Codeup</h5>
          <p>Completed 16-week software development immersive in San Antonio, consisting of  536+ hours of curriculum covering full-stack web development and associated technologies. Built various programming projects alone and in teams.</p>
          <p>2007-2010</p>
          <h5>Texas State University</h5>
          <p>San Marcos, TX. BFA Communication Design.</p>
        </div>
        <div class="resume col-md-4 col-xs-12">
          <h3 style="margin-bottom:.5em">Skills</h3>
          <h5>Programming</h5>
          <ul><li>PHP / Laravel</li>
              <li>MySQL</li>
              <li>JavaScript / jQuery  / AJAX</li>
              <li>Custom CSS / Bootstrap</li>
              <li>HTML</li>
          </ul>
          <h5>Software</h5>
          <ul><li>Photoshop, Illustrator, inDesign, After Effects, Premiere, Audition</li>
              <li>Excel, Google Sheets</li>
              <li>Powerpoint, Keynote</li>
          </ul>
          <h5>Professional / Interpersonal</h5>
          <ul><li>Visual design and mass communication sensibilites</li>
              <li>Presentation experience</li>
              <li>Familiar with giving / receiving constructive feedback, and team collaboration</li>
          </ul>
        </div>
        <div class="resume col-md-4 col-xs-12">
          <h3>Previous Experience</h3>
          <p>2017-2014</p>
          <h5>Art Director at DDB New York</h5>
          <p>Digital, Social, Video and 360 advertising campaign work for Clean & Clear, State Farm, Frigidaire, Electrolux, Lipton, Breyers, Exxon Mobil, and Royal Canin. Also responsible for digital content creation / content optimization.
          </p>
          <p>2014-2012</p>
          <h5>Interactive Designer at DDB New York</h5>
          <p>Design work and UI /UX on mobile and desktop sites, and digital ads for: Frigidaire, Electrolux, State Farm, Reebok, USTA, RoC Skin Care, Aveeno, Lipton. Worked with developers to guide translation from design into digital product.
          </p>
          <p>2012-2011</p>
          <h5>Graphic Designer at Imagemme, Inc.</h5>
          <p>Created logos, identity work, websites, UI/UX, packaging, digital work and print materials.
          Additional duties: customer contact/relations, print/materials sourcing, creating mockups, on-site installations, and press checks.
          </p>
        </div>
      
      </div>


    </section>
    <section id="footer" class="section fp-auto-height">
      <div>
        <h2 id="contactMe"><a>Contact Me</a></h2>
      </div>
    </section>
  </div>
    <script src="/js/jquery.backgroundMove.js"></script>
    <script src="/js/svg.js"></script>
    <script>
              // Get the modal
        var modal = document.getElementById('myModal');

        // Get the main container and the body
        var body = document.getElementsByTagName('body');
        var container = document.getElementById('backgroundPhoto');

        // Get the open button
        var btnOpen = document.getElementById("buyNow");

        // Get the close button
        var btnClose = document.getElementById("closeModal");

        // Open the modal
        btnOpen.onclick = function() {
            modal.className = "Modal is-visuallyHidden";
            setTimeout(function() {
              container.className = "MainContainer is-blurred";
              modal.className = "Modal";
            }, 100);
            container.parentElement.className = "ModalOpen";
        }

        // Close the modal
        btnClose.onclick = function() {
            modal.className = "Modal is-hidden is-visuallyHidden";
            body.className = "";
            container.className = "MainContainer";
            container.parentElement.className = "";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.className = "Modal is-hidden";
                body.className = "";
                container.className = "MainContainer";
                container.parentElement.className = "";
            }
        }
    </script>
    <script>
      $(document).ready(function() {

        $('#contactMe').onclick(function (){
          $('nav ul li').css("color","white");
          console.log("hello");
        });

      });
    </script>
  </body>
</html>
