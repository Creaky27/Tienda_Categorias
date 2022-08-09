<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 3:
                header('location: abarrotes.php');
            break;

            case 2:
                header('location: tecnologia.php');
            break;

            default:
        }
    }

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM users WHERE email = :email AND password = :password');
        $query->execute(['email' => $email, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[0];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 3:
                    header('location: tecnologia.php');
                break;
    
                case 2:
                header('location: abarrotes.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
        Email: <br/><input type="email" name="email"><br/>
        Password: <br/><input type="password" name="password"><br/>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>