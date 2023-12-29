<!-- If you have the following array, how do you extract the value 3
from the array?
$a = array(
    array(0,1),array(2,array(3))
    ); -->

<!DOCTYPE html>
<html>
<body>
    <?php
        $a = array(
            array(0,1),array(2,array(3))
            );
        echo $a[1][1][0];
    
?>
</body>
</html>