<?php
    require_once('config/connection.php');
    abstract class ProductAbstract
    {
        protected $DB;
        protected $typeProduct;
        protected $arrayProduct;
        public function __construct($typeProduct, $arrayProduct)
        {
            $this->DB = DBConnection::getInstance();
            $this->typeProduct = $typeProduct;
            $this->arrayProduct = $arrayProduct;
        }
        public function getType()
        {
            return $this->typeProduct;
        }
        
        public function setType($typeProduct)
        {
            $this->typeProduct = $typeProduct;
        }

        abstract public function store();
    }
    


    class Product extends ProductAbstract
    {
        public function store()
        {
            //store
        }

        public function getSimpleProduct()
        {
            $typeProduct = $this->getType();
            $sql = "SELECT p.id, p.sku, a_v.value, a.name FROM product AS p";
            $sql.= " RIGHT JOIN attribute_varchar AS a_v ON a_v.product_id = p.id";
            $sql.= " RIGHT JOIN attribute AS a ON a.id = a_v.attribute_id";
            $sql.= " WHERE p.product_type = '$typeProduct'";
            $stmt = $this->DB->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }