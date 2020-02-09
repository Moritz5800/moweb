<?php
$name = $_GET['name'];
$email = $_GET['email'];
$text = $_GET['text'];

echo $name;
echo $email;
echo $text;

$empfanger = "moritzwehr2004@gmx.de";
$betreff = "Nachricht von deiner Website!";
$nachricht = "$name hat dir eine E-Mail geschickt! \nDie Nachricht lautet. $text. \nSeine E-Mail Lautet: $email";
$header = "From: $name <$email>";

mail($empfanger, $betreff, $nachricht, $header);

?>


<script type="text/javascript">
  var uid = '257769';
  var wid = '533158';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>E-Mail Versendet!</title>
</head>

<body>
<h1>E-Mail Versendet!</h1>
</body>
</html>