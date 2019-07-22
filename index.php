<?php
define('TITLE', 'React Tutorial')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo TITLE ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header id="header">
    <nav id="navigation">
      <div class="container clearfix">
        <div class="navleft">
          <a href="#"><?php echo TITLE ?></a>
        </div>
        <div class="navbtn">
          <div class="navbar"></div>
          <div class="navbar"></div>
          <div class="navbar"></div>
        </div>
        <div class="navright">
          <a href="#">home</a>
          <a href="#">about</a>
          <a href="#">services</a>
          <a href="#">contact</a>
        </div>
      </div><!-- container -->
    </nav>
  </header>
  <div class="hero">
    <div class="container clearfix">
      <h1>react tutorial <br> straight <br>no chaser</h1>
    </div>
  </div>

  <section id="installation">
    <div class="container clearfix">
      <div class="tutor_box clearfix">
        <h3 class="skill">check that node.js is installed</h3>
        <p><span class="details">node -v</span></p>
      </div><!-- tutor_box -->

      <div class="tutor_box clearfix">
        <h3 class="skill"> install react globally</h3>
        <p><span class="details">npm i -g create-react-app</span></p>
      </div><!-- tutor_box -->

      <div class="tutor_box clearfix">
        <h3 class="skill">create your react app folder</h3>
        <p><span class="details">create-react-app (user defined name)</span></p>
      </div><!-- tutor_box -->

    </div><!-- container -->
  </section>

  <script src="js/app.js"></script>
</body>

</html>