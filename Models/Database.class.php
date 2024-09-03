<?php
abstract class Database
{
    protected $db;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", '');
    }
}
