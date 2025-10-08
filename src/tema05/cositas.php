<?php

setcookie("fecha", "08/10/2025",time() + 3600);
setcookie("hora", "10:15", time() + 3600);
?>

<!doctype html>
<html lang="s">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>COOKIES</h2>
<pre>

    <?= print_r ($_COOKIE); ?>
</pre>

</body>
</html>
