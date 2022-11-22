<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tab = array("Belgique" => "Liège", "Italie" => "Rome", "France" => "Paris");
        $a = "This is a string";

        echo "This is an echo: $a";
    ?>
    <!-- Display variable -->
    <p><?php echo $a; ?></p>

    <!-- Display variable in loop -->
    <?php foreach($tab as $country => $city): ?>
        <h4><?php echo "La capital de $country est $city." ?></h4>
    <?php endforeach; ?>
    
</body>
</html>