<?php

class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct() 
    {
        // data source name
        $dsn = 'mysql:host;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    // private $mhs = [
    //     [
    //         "nama" => "Emilia Paradila S",
    //         "nrp" => '213040043',
    //         "email" => "paradilasemilia@gmail.com",
    //         "jurusan" =>"Teknik Informatika"        
    //     ],
    //     [
    //         "nama" => "Putri Azizah Qudsiyah",
    //         "nrp" => '213040116',
    //         "email" => "putri@gmail.com",
    //         "jurusan" =>"Teknik Informatika"          
    //     ],
    //     [
    //         "nama" => "Mawardhani Salahudin",
    //         "nrp" => '07352111035',
    //         "email" => "mawara@gmail.com",
    //         "jurusan" =>"Teknik Informatika"        
    //     ]
    //     ];

        public function getAllMahasiswa(){
           $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
           $this->stmt->execute();
           return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}