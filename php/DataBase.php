<?php
require "DataBaseConfig.php";
class DataBase extends \mysqli
{
    public $connect;
    public $data;
    private $sql;
    protected $servername;
    protected $phon;
    protected $password;
    protected $databasename;
    public function __construct()
    {
        $this->connect = null;
        $this->data = null;
        $this->sql = null;
        $dbc = new DataBaseConfig();
        $this->servername = $dbc->servername;
        $this->phon = $dbc->phon;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
    }
    function dbConnect()
    {
        $this->connect = mysqli_connect($this->servername, $this->phon, $this->password, $this->databasename);
        return $this->connect;
    }
    function prepareData($data)
    {
        return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));
    }

    function signUp($table, $ilac, $karekod)
    {
        $ilac = $this->prepareData($ilac);
        $karekod = $this->prepareData($karekod);
        $this->sql = "INSERT INTO " . $table . " (ilac, karekod) VALUES ('" . $ilac . "','" . $karekod . "')";
        if (mysqli_query($this->connect, $this->sql))
        {
            return true;
        }
        else return false;
    }

}
?>
