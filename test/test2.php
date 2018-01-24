<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;
?>
<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    <h1><?php echo SayHello::world(); ?></h1>
    <p><a href="http://status.gandi.net">More info</a></p>
  </body>
</html>