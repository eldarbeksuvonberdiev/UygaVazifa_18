<?php
include "DataBase.php";

class Model extends DataBase
{
    public static function all()
    {
        $sql = "SELECT * FROM " . static::$table;
        $query = static::connect()->query($sql);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public static function show($id)
    {
        if(gettype((int)$id) == "integer"){
            $sql = "SELECT * FROM " . static::$table . " WHERE id = :id";
            $query = static::connect()->prepare($sql);
            $query->bindParam(":id",$id);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }

    }

    public static function create($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("','", array_values($data))."'";
        $sql = "INSERT INTO " . static::$table . " ({$columns}) VALUES ({$values})";
        $result = static::connect()->prepare($sql)->execute();
        if($result){
            return true;
        }
        return false;
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM ".static::$table ." WHERE id = :id";
        $result = static::connect()->prepare($sql);
        $result->bindParam(":id",$id);
        if($result->execute()){
            return true;
        }
        return false;
    }

    public static function update($data,$id)
    {
        $setValue = "";

        foreach ($data as $key => $value) {
            $setValue .= "{$key} = '{$value}',";
        }
        $setValue = rtrim($setValue,",");

        $query = "UPDATE " . static::$table . " SET {$setValue} WHERE id = {$id}";
        $stmt = static::connect()->prepare($query);
        
        return $stmt->execute();
    }
}


?>