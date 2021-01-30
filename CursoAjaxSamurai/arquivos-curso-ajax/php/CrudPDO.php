<?php


/**
 * Description of CrudPDO
 *
 * @author Carlos Ferreira
 */
class CrudPDO {
    private $table;
    private $conn;
    
    public function __construct($table, $conn) {
        $this->table = $table;
        $this->conn = $conn;
    }
    
    public function lists(){
        $data = $this->conn->query("SELECT * FROM {$this->table}");
        
        return $data->fetchAll();
    }
    
    public function find($id){
        $data = $this->conn->prepare("SELECT * FROM {$this->table} WHERE ID=:id");
        $data->bindValue(':id', $id);
        $data->execute();
        
        return $data->fetch(PDO::FETCH_OBJ);
    }
    
    public function insert(array $dados){
        $fields = implode(', ', array_keys($dados));
        $keys = ':'.implode(', :', array_keys($dados));
        
        $insert = $this->conn->prepare("INSERT INTO {$this->table} ({$fields}) VALUES ({$keys})");
        foreach ($dados as $key => $value){
            $insert->bindValue(":{$key}", $value);
        }
        
        return $insert->execute();
    }
    
    public function update($id, array $dados){
        $fields = array();
        foreach($dados as $key => $values){
            $fields[] = "$key=:$key";
        }
        $fields = implode(', ', $fields);
        
        $update = $this->conn->prepare("UPDATE {$this->table} SET {$fields} WHERE ID=:id");
        
        foreach ($dados as $key => $value){
            $update->bindValue(":{$key}", $value);
        }
        $update->bindValue(':id', $id, PDO::PARAM_INT);
        
        return $update->execute();
    }
    
    public function delete($id){
        $delete = $this->conn->prepare("DELETE FROM {$this->table} WHERE ID=:id");
        $delete->bindValue(':id', $id);
        
        return $delete->execute();
    }
}
