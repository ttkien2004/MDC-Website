<?php 
require_once __DIR__ . '/../models/User.php';
header('Content-Type: application/json');

class AuthController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new User($conn);
    }
    
    public function login($email, $password) {
        session_start();
        $user = $this->userModel->loginUser($email, $password);
        if ($user) {            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: ../public/index.php");
            exit();
        }else {
            $_SESSION['error'] = "Invalid email or password";
        }
    }

    public function register($email, $password) {
        session_start();
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        if ($this->userModel->checkExistedUser($email)) {
            $_SESSION['error'] = "Email already exists";
            exit();
        }else {
            if ($this->userModel->registerUser($email, $password)) {
                $_SESSION['success'] = "Registration successful";
                header("Location: ../public/mdc-login.php");
                exit();
            }
        }
    }
}
?>