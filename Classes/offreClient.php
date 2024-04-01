<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
 class offreClient extends Remote{
    public function __construct() {
        parent::__construct('OFFRE_CLIENT');
    }
    public function findAll():Response {
        return parent::getAll();
    }
    
    //data : ['ID_CLIENT'=>'1','ID_OFFRE'=>'1','DATE_FIN'=>'2021-12-12']
    public function insert($data):Response {
        return parent::insert($data);
    }
    
    public function findById($id):Response {
        return parent::getByCriteria(['ID_CLIENT'=>[$id,'=']]);

    }
    public function getSubscriptionEndDate($clientId)
    {
        try {
            $req = self::$db->prepare("SELECT DATE_FIN FROM OFFRE_CLIENT WHERE ID_CLIENT = ?");
            $res = $req->execute([$clientId]);
    
            if ($req->rowCount() > 0) {
                $res = $req->fetchAll(PDO::FETCH_OBJ);
                $endDate = isset($res[0]->DATE_FIN) ? $res[0]->DATE_FIN : null;
                return new Response(true, "end_date found by successfully", $endDate);
    
            } else {
                return new Response(false, 'not yet registred ', 'not yet registred ');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return new Response(false, $e->getMessage(), "");
        }

    }
    
}