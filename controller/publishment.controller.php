<?php
require_once 'model/publishment.php';

class PublishmentController{
    
    private $model;
    public $optionSelected;
    
    public function __CONSTRUCT(){
        $this->model = new Publishment();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/publishment/publishments.php';
        require_once 'view/footer.php';
    }

    public function filterBy() {
        $field = $_REQUEST['field'];
        $value = $_REQUEST['value'];
        $this->model->filterBy($field, $value);
    }

    public function goToCreate() {
        require_once 'view/header.php';
        require_once 'view/publishment/publishment-create.php';
        require_once 'view/footer.php';
    }

    public function create() {
        $this->model->create($_POST);
        header('Location: index.php?c=Publishment');
    }
   
    /*public function Crud(){
        $alm = new Alumno();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Alumno();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Sexo = $_REQUEST['Sexo'];
        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }*/
}