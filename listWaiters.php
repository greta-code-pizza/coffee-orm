<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edible</title>
</head>
<body>

<h1>Les serveurs !</h1>

<?php
  foreach ($waiters as $waiter) {
    echo "<p>" . $waiter->info() . "</p>";
  }
?>
  
</body>
</html>