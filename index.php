<?php
  include "App/database/db.php";


  $posts = array();
  $postsTitle = 'Recent Posts';

   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  
</head>
<body>
  <?php
    include "App/blocks/header.php";
    include "App/blocks/message.php";
  ?>
  
  <div class="page-wrapper">

  </div>






  
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="Assets/js/scripts.js"></script>
</body>
</html>