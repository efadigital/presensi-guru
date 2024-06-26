<?php
date_default_timezone_set('Asia/Jakarta');
require_once 'cfgcom.php';

class Database
{
    private $host;
    private $user;
    private $pass;
    private $db;
    protected $koneksi;

    public function __construct()
    {
        global $config;

        $this->host = $config['host'];
        $this->user = $config['ulaya6463_miss'];
        $this->pass = $config['ds8P)yHtwi+P'];
        $this->db = $config['laya6463_presensi'];

        try {
            $this->koneksi = new PDO("mysql:host=$this->host; dbname=$this->db", $this->user, $this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->koneksi;
    }
}
?>