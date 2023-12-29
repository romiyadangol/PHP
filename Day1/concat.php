<!-- 1.Create a PHP script that declares two variables: $firstName and $lastName. Assign your own first and last name to these variables.
Write a function called createUsername that takes these two variables as parameters,concatenates them, and returns a username in lowercase
with no spaces and @ at the beginning. Finally, display the generated username using echo or print.
Example:
Input: firstname = “Roshan”, lastname = “Shrestha”.
Output: “@roshanshrestha”  -->

<!DOCTYPE html>
<html>
<body>
<?php
$firstName = "Romiya";
$lastName = "Dangol";
function createUsername($firstName,$lastName){
echo "@".strtolower($firstName.$lastName);
}
createUsername($firstName,$lastName);
?>
</body>
</html>
