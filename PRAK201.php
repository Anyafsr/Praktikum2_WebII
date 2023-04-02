<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak201.php</title>
</head>
<body>
    <form method="POST">
        Nama = 1 <input type="text" name="name1"></br>
        Nama = 2 <input type="text" name="name2"></br>
        Nama = 3 <input type="text" name="name3"></br>
        <input type="submit" name="submit" value="Urutkan">
    </form></br>
    <?php
        if (isset($_POST['submit'])) {
            $name1 = $_POST['name1'];
            $name2 = $_POST['name2'];
            $name3 = $_POST['name3'];

            if ($name1 < $name2 && $name1 < $name3) {
                if ($name2 < $name3) {echo "$name1 <br> $name2 <br> $name3";
                } else {
                    echo "$name1 <br> $name3 <br> $name2";}
                } elseif ($name2 < $name1 && $name2 < $name3) {
                    if ($name1 < $name3) {
                        echo "$name2 <br> $name1 <br> $name3";
                    } else {
                        echo "$name2 <br> $name3 <br> $name1";}
                 } else {
                    if ($name1 < $name2) {
                        echo "$name3 <br> $name1 <br> $name2";
                    } else {
                        echo "$name3 <br> $name2 <br> $name1";
                }
            }
        }
    ?>
</body>
</html>