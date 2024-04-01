<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
class admin extends Remote {
    public function __construct()
    {
        parent::__construct("ADMIN");
    } 
}