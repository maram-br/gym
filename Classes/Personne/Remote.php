<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
class Remote
{
    public static $db;
    public $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        self::$db = ConnexionBD::getInstance();
    }

    public function getAll(): Response
    {
        try {
            $query = "SELECT * FROM $this->tableName";
            $statement = self::$db->prepare($query);
            $statement->execute();
            $res = $statement->fetchAll(PDO::FETCH_OBJ);
            return new Response(true, "Found Successfully", $res);
        } catch (PDOException $e) {
            return new Response(false, $e->getMessage(), "");
        }
    }

    //filter have this form : ['email' => ['test@gmail.com', '=']]
    public function getByCriteria($filter): Response
    {
        try {
            $query = "SELECT * FROM $this->tableName WHERE ";
            $params = [];
            foreach ($filter as $key => $values) {
                $query .= "$key $values[1] :$key AND ";
                $params[$key] = $values[0];
            }
            $query = substr($query, 0, -4);
            $query .= ";";
            $statement = self::$db->prepare($query);
            $statement->execute($params);
            $res = $statement->fetchAll(PDO::FETCH_OBJ);
            return new Response(true, "User found by criteria successfully", $res);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return new Response(false, $e->getMessage(), "");
        }
    }

    //data have this form : ['email' => 'test@gmail.com','nom' => 'test']
    public function insert(array $data): Response
    {
        try {
            $query = 'INSERT INTO ' . $this->tableName . ' (';
            foreach ($data as $key => $value) {
                $query .= "$key, ";
            }
            $query = substr($query, 0, -2);
            $query .= ') VALUES (';
            foreach ($data as $key => $value) {
                $query .= ":$key , ";
            }
            $query = substr($query, 0, -3);
            $query .= ');';
            $statement = self::$db->prepare($query);
            $statement->execute($data);
            return new Response(true, 'User inserted successfully', "");
        } catch (PDOException $e) {
            echo $e->getMessage();
            return new Response(false, $e->getMessage(), "");
        }
    }

    //conditions have this form : ['email' => ['s%', 'like'],'nom' => ['test', '=']]
    //toUpdate have this form : ['email' => 'aziz', 'nom' => 'test']
    public function update($toUpdate, $conditions): Response
    {
        try {
            $query = "UPDATE $this->tableName SET ";
            foreach ($toUpdate as $key => $value) {
                $query .= "$key = :$key, ";
            }
            $query = substr($query, 0, -2);
            $query .= " WHERE ";
            foreach ($conditions as $key => $values) {
                $query .= "$key $values[1] :$key AND ";
            }
            $query = substr($query, 0, -4);
            $query .= ";";
            foreach ($conditions as $key => $values) {
                $conditions[$key] = $values[0];
            }
            $params = array_merge($toUpdate, $conditions);
            $statement = self::$db->prepare($query);
            $statement->execute($params);
            return new Response(true, 'User updated successfully', "");
        } catch (PDOException $e) {
            echo $e->getMessage();
            return new Response(false, $e->getMessage(), "");
        }
    }

    //conditions have this form : ['email' => ['s%', 'like'],'nom' => ['test', '=']]
    public function delete($conditions): Response
    {
        try {
            $query = "DELETE FROM $this->tableName WHERE ";
            foreach ($conditions as $key => $values) {
                $query .= "$key $values[1] :$key AND ";
            }
            $query = substr($query, 0, -4);
            $query .= ";";
            foreach ($conditions as $key => $values) {
                $conditions[$key] = $values[0];
            }
            $statement = self::$db->prepare($query);
            $statement->execute($conditions);
            return new Response(true, 'User deleted successfully', "");
        } catch (PDOException $e) {
            echo $e->getMessage();
            return new Response(false, $e->getMessage(), "");
        }
    }
    public function login($login, $password): Response
    {
        if (get_called_class() === 'client') {
            $user = $this->getByCriteria(['email' => [$login, "="]]);
        } else {
            $user = $this->getByCriteria(['username' => [$login, "="]]);
        }
        if (!$user->getStatus()) {
            return $user;
        }
        if (count($user->getData()) == 0) {
            return new Response(false, 'There is no user with this email', "");
        }
        if (password_verify($password, $user->getData()[0]->PASSWORD)) {
            session_start();
            session_regenerate_id();
            if (get_called_class() === 'client') {
                $_SESSION['user']['name'] = $user->getData()[0]->NAME;
                $_SESSION['user']['email'] = $user->getData()[0]->EMAIL;
                $_SESSION['user']['phone'] = $user->getData()[0]->PHONE_NUMBER;
                $_SESSION['user']['id'] = $user->getData()[0]->ID;
            } else {
                $_SESSION['admin']['name'] = $user->getData()[0]->USERNAME;
            }
            setcookie(session_name(), session_id(), time() + 60 * 30, '/');
            return new Response(true, 'Login success', '');
        } else {
            return new Response(false, 'Password is incorrect', '');
        }
    }


    



    public function exist($id_client): Response
    {
        $req = "SELECT * FROM $this->tableName WHERE id_client = ?";
        $res = self::$db->prepare($req);
        $res->execute([$id_client]);
        $row_count = $res->rowCount();
        if ($row_count > 0) {
            return new Response(true, "Le client existe", true);
        } else {
            return new Response(false, "Le client n'existe pas", false);
        }
    }


}
