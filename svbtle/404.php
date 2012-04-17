<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name'); ?> * 404</title>
  <style type="text/css">
    body { background-color: #fff; color: #000; text-align: center; font-family: arial, sans-serif; }

    h1 { 
      font-size: 100px; 
      color: #000; 
      line-height: 1.5em; 
    }

    a:link, a:hover, a:active, a:visited {
      text-decoration: none;
      color: #000;
      font-weight: bold;
      border-bottom: 1px solid #999;
    }

  </style>
</head>

<body>
  <div class="dialog">
    <h1>Not found :(</h1>
    <br>
    <a href="<?php echo home_url(); ?>">← Back to <?php bloginfo('name'); ?></a>
  </div>


</body></html>