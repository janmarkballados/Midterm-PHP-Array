

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $name => $age_value) {
    echo "Key=" . $name . ", Value=" . $age_value;
    echo "<br>";
} 
?>

