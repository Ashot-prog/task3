<?php
 class DB {
     private $link;

     public function __construct()
     {
        $this->connect();
     }
     private function connect(){
         $dsn= 'myscl:host=localhost;dbname=task3;charset=utf8';
         $this->link = new PDO($dsn, 'root', '');
     }
     public function execute($scl){
        $sth = $this->link->prepare($scl);
        return $sth->execute();
     }
     public function query($scl){
        $exe = $this->execute($scl);
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false){
                return [];
        }
        return $result;
     }






 }


?>