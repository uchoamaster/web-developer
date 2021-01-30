<?php

class PDOConnect{
    private $conn = null;
    
    public function connect(){
        try{
            if( $this->conn == null )
                $this->conn = new PDO(DSN.':host='.HOST.';dbname='.DB, USER, PASSWORD);
            
            return $this->conn;
        } catch (PDOException $e) {
            echo "Falha ao conectar com o banco de dados. {$e->getMessage()}";
        }
    }
}