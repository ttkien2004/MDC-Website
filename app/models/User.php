<?php 
class User{
    private $connect;

    public function __construct($conn) {
        $this->connect = $conn;
    }

    public function checkExistedUser($email) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $res = $this->connect->query($query);

        if ($res->num_rows > 0) {
            return true;
        }
        return false;
    }
    public function registerUser($email, $password) {
        $query = "INSERT INTO users (email, password_hash) VALUES ('$email', '$password')";
        $res = $this->connect->query($query);

        return $res === true;
    }
    public function loginUser($email, $password) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $res = $this->connect->query($query);

        if ($res->num_rows > 0) {
            $user = $res->fetch_assoc();

            // Check password 
            if (password_verify($password, $user['password_hash'])) {
                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                return true;
            }
        }
        return false;
    }
}
?>
