<!-- 2.Create a PHP script that declares three variables: $num1, $num2, and $result. Assign any numeric values to $num1 and $num2.
Write a function called calculateSum that takes these two variables as parameters, calculates their sum, and stores the result 
in the $result variable. Finally, display the result using echo or print. Additional requirement, If the result is the floating
point number, Round up the result to the ceiling value.
Example:
Input: num1 = 5.6, num2 = 5
Output: 11 -->


<!DOCTYPE html>
<html>
<body>

<?php
$num1 = 5.6;
$num2 = 5;
$result = 0;

function calculateSum($num1, $num2){
    global $result; 
    $result = $num1 + $num2;
    if (is_float($result)) {
        $result = ceil($result);
        echo $result;
    } else {
        echo $result;
    }
}

calculateSum($num1, $num2);
?>

</body>
</html>