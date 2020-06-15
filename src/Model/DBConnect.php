<?php
namespace App\Model;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;


    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=ProductManager";
        $this->user = "root";
        $this->password = "Tuyen@159090";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $exception) {
           echo $exception->getMessage();
           exit();
        }
    }
}