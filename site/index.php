<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sample Dockerize App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <h1>Apparel Prices</h1>
  <ul>
    <?php
      foreach(json_decode(file_get_contents('http://prices')) as $price_item) {
        echo "<li>$price_item->name : $$price_item->price</li>";
      }
    ?>
  </ul>
</body>
</html>