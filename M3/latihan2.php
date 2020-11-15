<?php
$random = array("lanime","aduh","qifuat","toda","anevi","samid","kifuat");
sort($random); echo "Ascending"; echo "<br>";
$length = count($random);
for($x = 0; $x < $length; $x++) {
  echo $random[$x];
  echo "<br>"; 
}
echo "<br>";echo "<br>";
rsort($random); echo "Descending"; echo "<br>";
for($x = 0; $x < $length; $x++) {
    echo $random[$x];
    echo "<br>";
  }
?>