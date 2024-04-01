<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
class client extends Remote {
    public function __construct()
    {
        parent::__construct("CLIENT");
    }

    public function signup($data):Response
    {
       return parent::insert($data);
    }
    public function login($email, $password): Response
    {
        return parent::login($email, $password);
    }

    //data : ['name'=>'maram','email'=>'maram@gmail','phone'=>'123456','password'=>'123456']
    public function update($id,$data): Response
    {
        $conditon = ['id' => [$id, '=']];
        return parent::update($data, $conditon);
    }

   
    public function findById($id): Response
    {
        return parent::getByCriteria(['id' => [$id, '=']]);
    }

    public function getAll(): Response
    {
        return parent::getAll();
    }

    public function delete($id): Response
    {
        return parent::delete(['id' => [$id, '=']]);
    }
    
}