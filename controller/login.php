<?php

session_start();

if (!empty($_POST)) {

    include('../require/conexion.class.php');
    include('../require/Users.class.php');

    $Users = new Users();
    if (isset($_POST['_username']) && isset($_POST['_password'])) {

        // Define $username and $password
        $username = $_POST['_username'];
        $password = $_POST['_password'];

        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        //$result=$Users->verifyUserAndPass($username, $password)
        if ($Users->verifyUserAndPass($username, $password) == 1) {

            $_SESSION['usuario'] = $username; // Initializing Session
            $Logout = array(
                'response' => 1,
                'message' => "Usuario iniciado correctamente");
            // header("location: index.php"); // Redirecting To Other Page
        } else {
            $Logout = array(
                'response' => 0,
                'message' => "Username or Password is invalid hoy 2018",
                'rpta'=>$Users->verifyUserAndPass($username, $password));
            //echo "alert('Username or Password is invalid')";
            //header("location: index.php"); // Redirecting To Other Page
        }
    } else {
        $Logout = array(
            'response' => 0,
            'message' => "Parameters username and password doesn't found");
    }
} else {
    $Logout = array(
        'response' => 0,
        'message' => "Parameters not found");
}
echo json_encode($Logout);