<!DOCTYPE html>
<head>

</head>
<title> STRINGS </title>
<body>
<?php
$p="if you play smart <br>";

$q="Then you can do it<br>";

$combine=$p.$q;

echo "return combination of two strings: "." <br> ". $combine;

?><br>

<?php

echo "first letter in uppercase "." <br> ".ucfirst($combine);

?><br>

<?php

 echo "each first word is in uppercase"." <br> ".ucwords($combine);
 
?><br>

<?php

echo"string in lowercase"." <br> ". strtolower($combine);

?><br>

<?php

echo "string in uppercase"." <br> ". strtoupper($combine);

?><br>


<hr>
<?php

echo "repeat string"." <br> ". str_repeat($combine,2);

?><br>

<?php

echo "make a substring"." <br> ".substr($combine,2,5);

?><br>


<?php

echo"find position of word"." <br> ".strpos($combine,"smart");

?><br>


<?php

echo "find word from character"." <br> ". strchr($combine,"s");

?><br><hr>

<hr>

<?php

 echo "length of string"." <br> ".strlen($combine);
 
?><br>



<?php

echo "trimming of string". " <br> "."A".trim("B C D")."E";

?><br>


<?php

 echo "return word and string after word"." <br> ".strstr($combine,"smart");
 
?><br>


<?php

echo "replace words"." <br> ".str_replace("smart","mind",$combine);

?><br> <hr>
</body>

</html>