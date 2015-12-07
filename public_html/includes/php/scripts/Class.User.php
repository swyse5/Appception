<?php
    class User {
        private $db;

        function __construct($connection) {
            $this -> db = $connection;
        }

        public function register($First_name, $Last_name, $email, $password) {
            try {
				// $new_password = password_hash($password, PASSWORD_DEFAULT);
				$new_password = $password;

                $stmt = $this -> db -> prepare("INSERT INTO account(new_password, email, First_name, Last_name, date_joined)
                                                VALUES(:upass, :uemail, :ufirst, :ulast, CURDATE())");

                $stmt -> bindparam(":upass", $password);
                $stmt -> bindparam(":uemail", $email);
                $stmt -> bindparam(":ufirst", $First_name);
                $stmt -> bindparam(":ulast", $Last_name);
                $stmt -> execute();

                return $stmt;

            } catch (PDOException $e) {
                echo $e -> getMessage();
            }

        }

        public function login($email, $password) {
            try {
                $stmt = $this -> db -> prepare("SELECT * FROM account WHERE email = :uemail LIMIT 1");
                $stmt -> execute(array(
                            ':uemail' => $email,
                         ));
                $row = $stmt -> fetch(PDO::FETCH_ASSOC);

                if ($stmt -> rowCount() > 0) {
                    if (password_verify($password, $row['Password'])) {
                        $_SESSION['user_session'] = $row['A_id'];
                        return true;
                    } else {
                        return false;
                    }
                }
            } catch (PDOException $e) {
                echo $e -> getMessage();
            }
        }

        public function is_loggedin() {
            if (isset($_SESSION['user_session'])) {
                return true;
            }
        }

        public function redirect($url) {
            header("Location: $url");
        }

        public function logout() {
            session_destroy();
            unset($_SESSION['user_session']);
            return true;
        }

    }
?>