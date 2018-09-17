<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php include 'data.php'; ?>
  </head>
  <body>
    <div class="container">
      <?php foreach ($array as $key => $value) {; ?>
        <div class="question">
          <?php echo "$key"; ?>
        </div>
        <div class="answer">
          <?php echo "$value"; ?>
        </div>
      <?php }; ?>
    </div>
  </body>
</html>
