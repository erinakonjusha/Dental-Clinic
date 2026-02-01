<?php
class User {
    private $conn;
    private $table_name = 'users';

    public function __construct($db) {
        $this->conn = $db;
    }

    // REGISTER
    public function register($name, $email, $password, $role = 'user') {
        $query = "INSERT INTO {$this->table_name} (name, email, password, role)
                  VALUES (:name, :email, :password, :role)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
        $stmt->bindParam(':role', $role);

        return $stmt->execute();
    }

    // LOGIN
    public function login($email, $password) {
        $query = "SELECT id, name, email, password, role
                  FROM {$this->table_name}
                  WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email']   = $row['email'];
                $_SESSION['name']    = $row['name'];
                $_SESSION['role']    = $row['role']; // ky është kolona 'role' nga db
                return true;
            }
        }
        return false;
    }

    // LOGOUT
    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        session_destroy();
    }

    // CHECK IF LOGGED IN
    public function isLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['user_id']);
    }

    // CHECK IF ADMIN
    public function isAdmin() {
        if ($this->isLoggedIn()) {
            return ($_SESSION['role'] ?? '') === 'admin';
        }
        return false;
    }

    // GET CURRENT USER DATA
    public function getUser() {
        if ($this->isLoggedIn()) {
            return [
                'id'    => $_SESSION['user_id'],
                'email' => $_SESSION['email'],
                'name'  => $_SESSION['name'],
                'role'  => $_SESSION['role']
            ];
        }
        return null;
    }
}
?>
