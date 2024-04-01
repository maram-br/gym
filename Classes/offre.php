<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
 class Offre extends Remote{
    public function __construct() {
        parent::__construct('OFFRES');
    }
    public function findAll():Response {
        return parent::getAll();
    }
    
    //data : ['name'=>'maram','duration'=>'3','price'=>'100']
    public function insert($data):Response {
        return parent::insert($data);
    }
    public function delete( $id ):Response {
        return parent::delete(['id' => [$id, '=']]);
    }
    public function findById($id):Response {
        return parent::getByCriteria(['id'=> [$id, '=']]);
}

}