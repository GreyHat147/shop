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

}