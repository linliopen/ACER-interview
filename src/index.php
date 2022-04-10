<html>
 <head>
  <title>ACER interview</title>
 </head>
 <body>
 <?php echo '<p>Hire Me!</p>'; ?>
 </body>
</html>

<?php
    $mysql = mysql_connect('mysql:3306', 'root', 'root');

    if ($mysql) {
        print('<p>MySQL OK!!!</p>');
    } else {
        print('<p>MySQL NG!!!</p>');
    }

    mysql_close($mysql);

    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('root');

    if ($redis->ping()) {
        echo "Redis OK!!!";
    } else {
        echo "Redis NG!!!";
    }
?>
