<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Please, Enter Your Name </h1>
        <input type="text" name="name" id="">
        <input type="submit" value="Submit Name">
    </form>
    <?php
  $name = $_POST['name'];
  echo "<h1> Hello " . $name . "</h1>"
  ?>
</body>

</html>