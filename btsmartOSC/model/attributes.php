<?php
    require_once('config/connection.php');
    class Attributes
    {
        private $DB;
        public function __construct()
        {
            $this->DB = DBConnection::getInstance();
        }

        public function getAttributes($name)
        {
            $sql = "SELECT type,id from attribute WHERE name = '$name'";
            $stmt = $this->DB->prepare($sql);
            $stmt->execute();
            while($type = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if($type['type'] == 'varchar') {
                    $typeID = $type['id'];
                    $sql = "SELECT DISTINCT value from attribute_varchar WHERE attribute_id = :id";
                    $stmt = $this->DB->prepare($sql);
                    $stmt->bindValue('id', $typeID);
                    $stmt->execute();
                    return $stmt->fetchAll();
                }
            }
        }
    }