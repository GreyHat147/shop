<?php
require_once 'model/publishment.php';

class PublishmentController{
    
    private $model;
    private $publishments;
    public $optionSelected;
    public $publishmentSelected; 
    
    public function __CONSTRUCT(){
        $this->model = new Publishment();
        $this->publishments = $this->model->getPublishments();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/publishment/publishments.php';
        require_once 'view/footer.php';
    }

    public function filterBy() {
        
        $field = $_REQUEST['field'];
        $value = $_REQUEST['value'];
        $this->publishments = $this->model->filterBy($field, $value);
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

}