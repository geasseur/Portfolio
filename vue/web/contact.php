<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
      <link rel="icon" type="image/png" href=".png" />
      <title>Contact</title>
    </head>
    <body>
      <?php
      include("header.php");
       ?>
       <?php if (isset($_SESSION['prenom'])){
         ?>
         <p><?php echo $_SESSION['prenom'];?></p>
         <?php
       } ?>
      <main>
        <section class ='card'>
          <h1 class='text-center'>Contact</h1>
          <p>Numéro de Téléphone : 06 42 62 80 01</p>
          <p>adresse Mail : baptiste.ventura@neuf.fr</p>
        </section>

      </main>
      <?php include('footer.php');?>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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
