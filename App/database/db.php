<?php
    session_start();
    require('dbconnect.php');

    function dd($value){
        echo "<pre>", print_r($value, true),"</pre>";
        die();
    } 

    function executeQuery($sql, $data){
        global $conn;

        $stat = $conn -> prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stat -> bind_param($types, ...$values);
        $stat->execute();
        return $stat;
    }

    

    function selectOne($table, $conditions){
        global $conn;
        $sql = "SELECT * FROM $table";
        $i=0;
        foreach($conditions as $key => $value){
            if($i===0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $sql = $sql." LIMIT 1";
        $stat = executeQuery($sql, $conditions);
        $records = $stat->get_result()->fetch_assoc();
        return $records;
        
    }
    function create($table, $data){
        global $conn;

        $sql = "INSERT INTO $table SET ";

        $i=0;
        foreach($data as $key => $value){
            if($i===0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        $stat = executeQuery($sql, $data);
        $id = $stat->insert_id;
        return $id;
    }

?>