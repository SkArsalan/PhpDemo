<!DOCTYPE html>
<html>
<head>
    <title>PHP Hello World</title>
</head>
<body>
    <h1><?php echo "Hello World, from PHP!"; ?></h1>
    <p>Server Time: <?php echo date('Y-m-d H:i:s'); ?></p>
    <p>Running on: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
</body>
</html>