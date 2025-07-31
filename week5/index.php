<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .color {
            width: 100%;
            height: 50px;
        }


    </style>
    <div class="color" style="background:red;">test</div>
    <?php
        $connect = mysqli_connect('localhost', 'root', '', 'colors');
        if (!$connect) {
            die("Connection Fail: " . mysqli_connect_error());

        }
        $query = 'SELECT * FROM colors';
        $colors = mysqli_query($connect, $query);
        //print_r($colors);        
        if ($colors){
            foreach($colors as $color){
                echo "<div class='color'". " style="."background".":".$color['Hex'].">".$color['Name']."</div>";
            }
        }

    ?>
    
</body>
</html>