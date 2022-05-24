<?php
class DataBaseConfig
{
    public $servername;
    public $phon;
    public $password;
    public $databasename;

    public function __construct()
    {

        $this->servername = 'localhost';
        $this->phon = 'root';
        $this->password = '';
        $this->databasename = 'ilac';

    }
}

?>
