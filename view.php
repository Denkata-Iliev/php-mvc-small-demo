<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Cookie</title>
</head>
<body>
    <!-- правим си една форма, чийто action е index.php (тоест там да гледаме за изпълнение на логика) -->
    <!-- и метод post - тоест подаваме някви данни за обработка -->
    <form action="index.php" method="post">

        <!-- бутонът, който при натискане взима бисквитка и показва късметчето ѝ (името - btn, същото като в index.php) -->
        <input type="submit" value="Open fortune cookie!" name="btn" />
        
        <!-- р таг, в който ще се визуализира късметчето от бисквитката -->
        <p>
            <?php 
                //проверяваме дали тази променлива е сетната, тоест дали има нещо в нея
                if (isset($message)) {
                    echo $message; //извеждаме стойността ѝ
                }
            ?>
        </p>
    </form>
</body>
</html>