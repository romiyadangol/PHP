<!-- Create an associative array representing a person with keys
'name', 'age', and 'occupation'. Populate the values with
appropriate information and display the entire array. -->

<!DOCTYPE html>
<html>
<body>
    <?php
    $person = array(
        'name' => 'Romiya Dangol',
        'age' => 22,
        'occupation' => 'Graphic Designer'
    );
    foreach($person as $key => $value){
        echo "$key: $value"."<br>";
    }
    ?>
</body>
</html>