<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Learning Echo -->

    <?php

        echo "<h1>Hello World!</h1>";
        echo "My name is Mayuresh.";

    ?>

    <hr>

    <!-- Learning Variables -->

    <?php

        $fname = "Mayuresh";
        $lname = "Naidu";

        echo "<h2>Hello $fname $lname</h2>";

    ?>

    <hr>

    <!-- Learning Arrays -->

    <?php

        $groceries = array("salt", "sugar", "apples");
        echo "Grocery List: $groceries[0], $groceries[1], $groceries[2]";

    ?>

</body>
</html>