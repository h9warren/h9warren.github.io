
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
          // fixedElements:
          //   '#resumeSection',


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
              <h1>I’m Hunter Warren, full-stack developer.</h1>
              <button id="buyNow">Buy Now</button>
          </div>
        </div>
        <div id="myModal" class="Modal is-hidden is-visuallyHidden">
          <!-- Modal content -->
          <div class="container">
          <div class="Modal-content">
            <span id="closeModal" class="Close">&times;</span>
            <!-- <h2 style="display:none">Contact Me</h2> -->
            
              <div style="padding-top:20px">
              <div id="thankYou" style="display:none">
                <h2>Thanks! I'll be in touch shortly.</h2>
              </div>
              <form id="emailForm" action="" method="POST"  accept-charset="utf-8" enctype="multipart/form-data">

              <label for="name">Your name: </label><input type="text" name="name" id="name" maxlength="255" autofocus>
              <label for="email">Your email address: </label><input type="email" name="email" id="email" maxlength="255">
              <label for="query">Let's talk!</label>
              <div style="width: 100%;">
              <textarea name="query" id="query" placeholder="Enter your message here"></textarea>
              </div>
              <br>
              <button type="submit">Submit</button>
              </form>
              </div>

            



          </div>
        </div>

            
      </section>

<!--       <section class="section" id="portfolio">
        <h1 style="text-align:center">COMING SOON!</h1>
      </section> -->
    <section class="section fp-auto-height" id="portfolio" data-anchor="work">
      <div class="container slide" id="projects">
        <div class="col-xs-11 col-sm-6 singleProject">
          <a href="#work/slide1"><div class="icon"></div></a>
          <!-- <p class="iconTitle">Globetrotter</p> -->
          <h2 class="projectName">Globetrotter.pro</h2>
          <!-- <p class="projectDesc">Web-based travel budgeting application</p> -->
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <a href="#work/slide2"><div class="icon"></div></a>
          <!-- <p class="iconTitle">Reddit</p> -->
          <h2 class="projectName">Reddit.dev</h2>
          <!-- <p class="projectDesc">Reddit clone built with Laravel</p> -->
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <a href="#work/slide3"><div class="icon"></div></a>
          <!-- <p class="iconTitle">Old Lister</p> -->
          <h2 class="projectName">OldLister</h2>
          <!-- <p class="projectDesc">Craigslist-like classifieds site</p> -->
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <a href="#work/slide4"><div class="icon"></div></a>
          <!-- <p class="iconTitle">Street Simon</p> -->
          <h2 class="projectName">Street Simon</h2>
          <!-- <p class="projectDesc">Simple Simon v. Street Fighter 2</p> -->
        </div>
        <div class="col-xs-11 col-sm-6 singleProject">
          <a href="#work/slide5"><div class="icon"></div></a>
          <!-- <p class="iconTitle">Calculator</p> -->
          <h2 class="projectName">Calculator</h2>
          <!-- <p class="projectDesc">A calculator built with JavaScript</p> -->
        </div>
      </div>

      	<div class="container slide" data-anchor="slide1">
  			<div class="row slideTopBar">
  				<div class="col-sm-4 col-sm-offset-4 col-xs-12">
  					<h2 class="slideTitle">Globetrotter</h2>
      			</div>
      			<div class="col-sm-2 col-sm-offset-2 col-xs-12">
      				<ul class="slideLink">
                <a href=""><li></li></a>
                <a href=""><li></li></a>
      				</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12">
  					<div class="siteImage">
              <a href="http://globetrotter.pro"></a>
            </div>
				</div>
					<div class="col-xs-10 col-xs-offset-1">
  					<h4 class="description"></h4>
  					</div>
  			</div>      		
      	</div>

      	<div class="container slide" data-anchor="slide2">
  			<div class="row slideTopBar">
  				<div class="col-sm-4 col-sm-offset-4 col-xs-12">
  					<h2 class="slideTitle">Reddit.dev</h2>
      			</div>
      			<div class="col-sm-2 col-sm-offset-2 col-xs-12">
      				<ul class="slideLink">
                <a href=""><li></li></a>
      					<a href=""><li></li></a>
      				</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12">
  					<div class="siteImage">
              <a href="http://reddit.hunterwarren.codes"></a>   
            </div>
					<div class="col-xs-10 col-xs-offset-1">
  					<h4 class="description"></h4>
  					</div>
				</div>
  			</div>
      	</div>
      	<div class="container slide" data-anchor="slide3">
  			<div class="row slideTopBar">
  				<div class="col-sm-4 col-sm-offset-4 col-xs-12">
  					<h2 class="slideTitle">OldLister</h2>
      			</div>
      			<div class="col-sm-2 col-sm-offset-2 col-xs-12">
      				<ul class="slideLink">
                <a href=""><li></li></a>
                <a href=""><li></li></a>
      				</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12">
  					<div class="siteImage">
              <a href="http://oldlister.hunterwarren.codes"></a>     
            </div>
					<div class="col-xs-10 col-xs-offset-1">
  					<h4 class="description"></h4>
  					</div>
				</div>
  			</div>      		
      	</div>
      	<div class="container slide" data-anchor="slide4">
  			<div class="row slideTopBar">
  				<div class="col-sm-4 col-sm-offset-4 col-xs-12">
  					<h2 class="slideTitle">Street Simon</h2>
      			</div>
      			<div class="col-sm-2 col-sm-offset-2 col-xs-12">
      				<ul class="slideLink">
                <a href=""><li></li></a>
                <a href=""><li></li></a>
      				</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12">
  					<div class="siteImage">
              <a href="http://simon.hunterwarren.codes"></a>
            </div>
					<div class="col-xs-10 col-xs-offset-1">
  					<h4 class="description"></h4>
  					</div>
				</div>
  			</div>      		
      	</div>
      	<div class="container slide" data-anchor="slide5">
  			<div class="row slideTopBar">
  				<div class="col-sm-4 col-sm-offset-4 col-xs-12">
  					<h2 class="slideTitle">Calculator</h2>
      			</div>
      			<div class="col-sm-2 col-sm-offset-2 col-xs-12">
      				<ul class="slideLink">
                <a href=""><li></li></a>
                <a href=""><li></li></a>
      				</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12">
  					<div class="siteImage">
              <a href="http://calc.hunterwarren.codes/calculator.html"></a>     
            </div>
					<div class="col-xs-10 col-xs-offset-1">
  					<h4 class="description"></h4>
  					</div>
				</div>
  			</div>      		
      	</div>



    </section>
    <section class="section" id="resume" data-anchor="resumé">
      <div style="padding: 0vh 5vw 5vh 5vw; height:100vh">

      <div id="resumeSection" class="row">
        <div class="col-xs-12">
          <div id="downloadHere">
            <h2>Download full resumé here:</h2>
            <a href="file/resume.pdf" download><button type="submit" class="resumeButton">Download</button></a>
            
          </div>
        </div>
        <div class="resume col-md-4 col-xs-12">
          <h3>Experience</h3>
          <p>Current-2017</p>
          <h5>Front-End Developer at USAA</h5>
          <p>Work within the Chief Design Office on a team of Front-End Developers of wide-ranging expertise to build pages for USAA’s digital storefront. Most pages involve a significant degree of custom HTML, CSS & JS, as our team’s storefront pages can’t use frameworks or rely on external libraries. QA designs with their respective designers and project stakeholders, and with Accessibility Ops team. Upload all page code into Tridion CMS, and maintain CSS for other teams within Tridion. Contribute to a library of components used by our storefront FED’s to faciliate rapid development of pages. Over the past 6 months, have been using Node, NPM, SCSS, and scripting to more quickly develop pages.
          </p>
          <p>2017-2014</p>
          <h5>Art Director at DDB New York</h5>
          <p>Digital, Social, Video and 360 advertising campaign work for Clean & Clear, State Farm, Frigidaire, Electrolux, Lipton, Breyers, Exxon Mobil, and Royal Canin. Also responsible for digital content creation / content optimization.
          </p>
          <p>2014-2012</p>
          <h5>Interactive Designer at DDB New York</h5>
          <p>Design work and UI /UX on mobile and desktop sites, and digital ads for: Frigidaire, Electrolux, State Farm, Reebok, USTA, RoC Skin Care, Aveeno, Lipton. Worked with developers to guide translation from design into digital product.
          </p>
        </div>
        <div class="resume col-md-4 col-xs-12">
          <h3 style="margin-bottom:.5em">Skills</h3>
          <h5>Programming</h5>
          <ul><li>JS / CSS / SCSS / HTML</li>
              <li>React / Redux / ES6</li>
              <li>Java, PHP</li>
              <li>MySQL, Git</li>
              <li>Node, NPM, Bash</li>
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
          <h3>Education</h3>
          <p>June-September 2017</p>
          <h5>Codeup</h5>
          <p>Completed 16-week software development immersive in San Antonio, consisting of  536+ hours of curriculum covering full-stack web development and associated technologies. Built various programming projects alone and in teams.</p>
          <p>2007-2010</p>
          <h5>Texas State University</h5>
          <p>San Marcos, TX. BFA Communication Design.</p>
        </div>
      
      </div>
      </div>
      <div id="footer">
          <div id="contactMe"><h3><a href="#hello">Contact Me</a></h3></div>
      </div>

    </section>
<!--     <section id="footer" class="section fp-auto-height">
      <div>
        <h2 id="contactMe"><a href="#hello">Contact Me</a></h2>
      </div>
    </section> -->
  </div>
    <script src="/js/jquery.backgroundMove.js"></script>
    <script src="/js/site.js"></script>
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
            $('nav').css('display','none');
            $("#emailForm")[0].reset();
            $('.Modal-content').css('opacity', 1);
            $('#thankYou').css('display','none');
            $('#emailForm').css('display','inline');
            $('#closeModal').css('display', 'inline');
            $('#myModal').css('background-color', 'rgba(0, 0, 0, 0.4)');
            setTimeout(function() {
              container.className = "MainContainer is-blurred";
              modal.className = "Modal";
            }, 100);
            container.parentElement.className = "ModalOpen";
        }

        // Close the modal
        btnClose.onclick = function() {
            modal.className = "Modal is-hidden is-visuallyHidden";
            $('nav').css('display','inline');
            body.className = "";
            container.className = "MainContainer";
            container.parentElement.className = "";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                $('nav').css('display','inline');
                modal.className = "Modal is-hidden";
                body.className = "";
                container.className = "MainContainer";
                container.parentElement.className = "";
            }
        }
    </script>
    <script>
      $(document).ready(function() {

        $('#contactMe').on('click', function() {
          $("ul li a").css("color", "white");
          $("nav").css("border-bottom", "1px solid rgba(255,255,255,.7)");
          $('#buyNow').trigger('click');
        });
      });
    </script>
    <script>

      $('#emailForm').submit(function(e) {

          e.preventDefault(); // Prevent Default Submission
          
          function afterForm() {
            $('#closeModal').css('display','none');
            $('#thankYou').fadeIn('fast').css("display", "inline");
            $('#thankYou h2').css('margin-top', '170px');
          };
          function closeBox() {
          
              $('#myModal').css('background-color', 'rgba(0, 0, 0, 0.0)');         
              $('.Modal-content').animate({
                'opacity':0
              },300);
              $('nav').css('display','inline');     
                   
              setTimeout(function() {
              var modal = document.getElementById('myModal');
              modal.className = "Modal is-hidden is-visuallyHidden";
              var container = document.getElementById('backgroundPhoto');
              container.className = "MainContainer";
              },300)

            };
        
          
        
          $.ajax({
       url: 'email.php',
       type: 'POST',
       data: $(this).serialize(), // it will serialize the form data
              dataType: 'html'
          })
          .done(function(data){
           $('#emailForm').fadeOut('fast', function() {
            afterForm();  
            setTimeout(closeBox, 1500);  

            });

          })
          .fail(function(){
          alert('Email couldn\'t be sent'); 
          });
      });
</script>
  </body>
</html>
