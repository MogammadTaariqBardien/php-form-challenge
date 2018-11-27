<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php Form Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

    <!-- Challenge 1 -->
    <!-- <form action="index.php" method="post">
        <input type="text" name="username" id="username" placeholder="Name"><br><br>
        <input type="text" name="surname" id="surname" placeholder="Surname"><br><br>
        <input type="number" name="age" id="age" placeholder="Age"><br><br>
        <input type="text" name="color" id="color" placeholder="Favourite Colour"><br><br>
        <input type="text" name="hairType" id="hairType" placeholder="Hair Type"><br><br>
        <input type="submit" value="submit">
    </form>

    <p>
         My Name is <?php echo $_POST['username'] ?> <?php echo $_POST['surname'] ?>
         and I am <?php echo $_POST['age'] ?> years old. My favourite color is <?php echo $_POST['color'] ?>.
         The type of hair I have is <?php echo $_POST['hairType'] ?>.
    </p> -->

    <!-- Challenge 2 -->

    <!-- <form action="index.php" method="post">
        <input id="Radio1" type="radio" name="button" value="true">True
        <input id="Radio2" type="radio" name="button" value="false">False <br><br>
        <input type="submit" value="Submit"><br>
    </form> -->

    <!-- <?php
        if ($_POST['button'] == true) {
            echo "<br>Congratulations";
        } else {
            echo "<br>Come back again soon";
        }
    ?> -->

    <!-- Challenge 3 -->

    <form action="index.php" method="post">
        <input type="number" name="number" id="number" placeholder="Number">
        <input type="text" name="colour" id="colour" placeholder="Colour">
        <input type="text" name="object" id="object" placeholder="Object Name"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        $counter = $_POST['number'];
        for($a=0; $a <= $counter; $a++) {
            echo $a.' '.$_POST['colour'].' '.$_POST['object']."<br>";
        }

    ?>


</body>
</html>