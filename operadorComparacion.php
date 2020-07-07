<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Operadores de Comparacion</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button name="enviar" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_GET["enviar"])){
        if($_GET["email"]=="alexvasquezleon@gmail.com" && $_GET["pass"]=="123456"){
            echo "Ingresastes";
        }
        else{
            echo "No Ingresastes";
        }
    }
        /*$var1="5";
        $var2=5;
        $var3="programadornovato";
        if($var1!==$var2){
            echo "no son iguales";
        }
        else{
            echo "son iguales";
        }
        */
    ?>
</body>
</html>