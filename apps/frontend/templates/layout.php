<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
      <style type="text/css">
          body {
              background: url("../images/sfondo_ca.jpg") no-repeat fixed left top #E3E0D9;
              color: #777777;
              font-size: 12px;
              line-height: 18px;
              /*min-width: 1100px;*/
              width: 100%;
              padding-top: 80px;
              padding-bottom: 60px;
          }
          .links{
              text-align: center;
          }

          /* CUSTOMIZE THE NAVBAR
          -------------------------------------------------- */

          /* Special class on .container surrounding .navbar, used for positioning it into place. */
      .navbar-wrapper {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          z-index: 10;
          margin-top: 30px;
          margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
      }
      .navbar-wrapper .navbar {

      }

          /* Remove border and change up box shadow for more contrast */
      .navbar .navbar-inner {
          border: 0;
          -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
          -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
          box-shadow: 0 2px 10px rgba(0,0,0,.25);
      }

          /* Downsize the brand/project name a bit */
      .navbar .brand {
          padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
          font-size: 16px;
          font-weight: bold;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
      }

          /* Navbar links: increase padding for taller navbar */
      .navbar .nav > li > a {
          padding: 15px 20px;

      }

          /* Offset the responsive button for proper vertical alignment */
      .navbar .btn-navbar {
          margin-top: 10px;
      }

      /* RESPONSIVE CSS
      -------------------------------------------------- */

      @media (max-width: 979px) {

          .container.navbar-wrapper {
              margin-bottom: 0;
              width: auto;
          }
          .navbar-inner {
              border-radius: 0;
              margin: -20px 0;
          }

          .carousel .item {
              height: 500px;
          }
          .carousel img {
              width: auto;
              height: 500px;
          }

          .featurette {
              height: auto;
              padding: 0;
          }
          .featurette-image.pull-left,
          .featurette-image.pull-right {
              display: block;
              float: none;
              max-width: 40%;
              margin: 0 auto 20px;
          }
      }


      @media (max-width: 767px) {

          .navbar-inner {
              margin: -20px;
          }

          .carousel {
              margin-left: -20px;
              margin-right: -20px;
          }
          .carousel .container {

          }
          .carousel .item {
              height: 300px;
          }
          .carousel img {
              height: 300px;
          }
          .carousel-caption {
              width: 65%;
              padding: 0 70px;
              margin-top: 100px;
          }
          .carousel-caption h1 {
              font-size: 30px;
          }
          .carousel-caption .lead,
          .carousel-caption .btn {
              font-size: 18px;
          }

          .marketing .span4 + .span4 {
              margin-top: 40px;
          }

          .featurette-heading {
              font-size: 30px;
          }
          .featurette .lead {
              font-size: 18px;
              line-height: 1.5;
          }

      }
      </style>
    <?php include_javascripts() ?>

  </head>
  <body>
  <!-- NAVBAR
  ================================================== -->
  <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

          <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                  <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="brand" href="#">B&B Le Vie Del Centro</a>
                  <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                  <div class="nav-collapse collapse">
                      <ul class="nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="#about">About</a></li>
                          <li><a href="#contact">Contact</a></li>
                          <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li class="nav-header">Nav header</li>
                                  <li><a href="#">Separated link</a></li>
                                  <li><a href="#">One more separated link</a></li>
                              </ul>
                          </li>
                      </ul>
                  </div><!--/.nav-collapse -->
              </div><!-- /.navbar-inner -->
          </div><!-- /.navbar -->

      </div> <!-- /.container -->
  </div><!-- /.navbar-wrapper -->
    <?php echo $sf_content ?>
      </div>
  </body>
</html>
