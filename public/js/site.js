
//assign images to project icons

  $(".icon").eq(0).css('background-image','url(../img/icons/GT.gif)');
  $(".icon").eq(1).css('background-image','url(../img/icons/RD.gif)');
  $(".icon").eq(2).css('background-image','url(../img/icons/OL.gif)');
  $(".icon").eq(3).css('background-image','url(../img/icons/NP.gif)');
  $(".icon").eq(4).css('background-image','url(../img/icons/SS.gif)');
  $(".icon").eq(5).css('background-image','url(../img/icons/CA.gif)');

//assign hrefs to icon links on slides

  $('.slideLink a').eq(0).attr('href','https://github.com/globetrotterbudget/site').attr('target', 'blank');
  $('.slideLink a').eq(1).attr('href','http://globetrotter.pro').attr('target', 'blank');
  $('.slideLink a').eq(2).attr('href','https://github.com/h9warren/Reddit.dev').attr('target', 'blank');
  $('.slideLink a').eq(3).attr('href','http://reddit.hunterwarren.us').attr('target', 'blank');
  $('.slideLink a').eq(4).attr('href','https://github.com/microchemglobulecore/adlister.dev').attr('target', 'blank');
  $('.slideLink a').eq(5).attr('href','http://oldlister.hunterwarren.us').attr('target', 'blank');
  $('.slideLink a').eq(6).attr().attr();
  $('.slideLink a').eq(7).attr().attr();
  $('.slideLink a').eq(8).attr().attr();
  $('.slideLink a').eq(9).attr().attr();
  $('.slideLink a').eq(10).attr('href','https://github.com/h9warren/calc.dev').attr('target', 'blank');
  $('.slideLink a').eq(11).attr('href','http://calc.hunterwarren.us/calculator.html').attr('target', 'blank');

//assign images to slides

 $(".siteImage").eq(0).css('background-image','url(../img/screens/globetrotter.jpg)');
 $(".siteImage").eq(1).css('background-image','url(../img/screens/reddit.jpg)');
 $(".siteImage").eq(2).css('background-image','url(../img/screens/oldlister.jpg)');
 $(".siteImage").eq(3).css('background-image','url(../img/screens/comingsoon.png)');
 $(".siteImage").eq(4).css('background-image','url(../img/screens/streetsimon.jpg)');
 $(".siteImage").eq(5).css('background-image','url(../img/screens/calc.jpg)');

//project descriptions
$('.description').eq(0).html('A mobile-responsive app for travel budgeting, built as a group project at Codeup. Built with Laravel, we used PHP to call an API with cost data from 30,000 locations. User budgets are built with a jQuery and JavaScript ‘wizard’ and stored in a MySQL database.');

$('.description').eq(1).html('Using a Laravel framework, we built an analogue to the famous ‘front page of the internet’ that usesMySQL to store user info, votes and content, and PHP to allow voting, ranking, and posting.');

$('.description').eq(2).html('Using vanilla PHP, MySQL, HTML and custom CSS, we created an online community/ classfieds website that allows account holders to buy and sell goods, while allowing anyone to browse what’s for sale.');

$('.description').eq(3).html('Built a site using PHP, MySQL, CSS, and HTML that allows users to add, edit and delete their favorite national parks.');

$('.description').eq(4).html('Worked with a classmate to build a Simple Simon game influenced by Street Fighter 2. Uses JavaScript, jQuery, and CSS with custom animation and sound.');

$('.description').eq(5).html('Created using JavaScript, custom CSS, and HTML. Allows for negative and decimal numbers, and accounts for order of operation.');
