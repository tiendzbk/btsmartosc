<?php
class DBConnection
{
    protected static $db;
    private function __construct() {
        try {
            self::$db = new PDO( 'mysql:host=localhost;dbname=btsmartosc', 'root', '' );
            self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
    public static function getInstance() {
        if (!self::$db) {
            new DBConnection();
        }
        return self::$db;
    }

    public function __destruct() {
        $db=NULL;
    }

    public function excuteSql($sql)
    {
      $stmt = $this->db->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      return $result;

    }

    public function create()
    {
       //create
    }

    public function read()
    {
        //read
    }

    public function update()
    {
        //update
    }

    public function delete()
    {
        //delete
    }
}