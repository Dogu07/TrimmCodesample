<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
echo <<<TESKT
<h3>Single quote</h3>
<br> Single quoted strings will display things almost completely "as is." Variables and most escape sequences will not be interpreted.
<br />
<h3>Double quote</h3>
<br>
Double quote strings will display a host of escaped characters (including some regexes), and variables in the strings will be evaluated.
<br />
TESKT;


?>

</body>
</html>





