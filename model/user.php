<?php
class User {
	private $pdo;
    
	public function __CONSTRUCT() {
		try {
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
    }
    
    public function getUserByUsername($username) {
        try {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM users WHERE username = ?");
                      
			$stm->execute(array($username));
            return $stm->fetch(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			die($e->getMessage());
		}
    }

    public function create($data) {
        try {
            $sql = "INSERT INTO users (username,password,first_name,last_name,document_type,document_number,phone_number,city, address, email) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            return $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data["username"],
                        md5($data["password"]), 
                        $data["first_name"],
                        $data["last_name"],
                        $data["document_type"],
                        $data["document_number"],
                        $data["phone_number"],
                        $data["city"],
                        $data["address"],
                        $data["email"],
                    )
                );
		} catch(Exception $e) {
			die($e->getMessage());
		}
    }

}