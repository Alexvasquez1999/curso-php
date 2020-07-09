<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nave Espacial</title>
</head>
<body>
    <?php
    /*
        echo (10<=>10)."</br>";
        echo (20<=>10)."</br>";
        echo (10<=>20)."</br>";
    */
        $edad=19;
        $acceso=$edad<=>18;
        if($acceso==0){
            echo "Pasas con las justas";
        }
        elseif($acceso==1){
            echo "Pasastes";
        }
        elseif($acceso==-1){
            echo "No pasas";
        }
    ?>
</body>
</html>