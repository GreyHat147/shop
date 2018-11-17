<?php
class Publishment {
	private $pdo;
    
   /*  public $id;
    public $Nombre;
    public $Apellido;
    public $Sexo;
    public $FechaRegistro;
    public $FechaNacimiento;
    public $Foto;
    public $Correo; */

	public function __CONSTRUCT() {
		try {
			$this->pdo = Database::StartUp();     
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function getPublishments() {
		try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM publishments");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			die($e->getMessage());
		}
    }
    
    public function filterBy($field, $value) {
        echo $field . " = " .  $value;
        try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM publishments WHERE $field = $value");
			$stm->execute();


            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $result) {
                echo $result->name, '<br>';
            }
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			die($e->getMessage());
		}
    }

    public function create($data) {
        try {
		echo "ID USER => " . $_SESSION['id'];
		$sql = "INSERT INTO publishments (name,vehicle_type,brand,model,type,status,price, accesories, city, thumbnail, id_user) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		return $this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data["name"],
                    $data["vehicle_type"],
                    $data["brand"],
                    $data["model"],
                    $data["type"],
                    $data["status"],
                    $data["price"],
                    $data["accesories"],
                    $data["city"],
                    $data["thumbnail"],
                    $_SESSION['id'],
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }

}