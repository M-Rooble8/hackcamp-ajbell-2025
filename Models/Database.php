<?php
Class Database
{
    protected static $dbInstance = null;
    protected $dbHandle;
    public static function getInstance()
    {
        if(self::$dbInstance == null)
        {
            self::$dbInstance = new self();
        }
    }
    private function __construct()
    {
        try
        {
            $this->dbHandle = new PDO("sqlite:StockLifeDB.sqlite");
        }
        catch(PDOException $e)
        {
            echo$e->getMessage();
        }

    }
}