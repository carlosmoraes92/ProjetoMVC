<?php

namespace App\Models;

use App\DB;

class Lists {

    public static function selectAll($location_id = null) { 
        
        $where = '';
        
        if (!empty($location_id)) {
            $where = 'WHERE location_id = :location_id';
        } 
        
        $sql = sprintf("SELECT location_id,
                               location_name,
                               location_number,
                               location_state,
                               location_city,
                               location_country
                        FROM location %s 
                        ORDER BY location_state 
                        ASC", $where); 

        $DB = new DB;

        $stmt = $DB->prepare($sql);
 
        if (!empty($where))
        {
            $stmt->bindParam(':location_id', $location_id, \PDO::PARAM_INT);
        }
 
        $stmt->execute();
 
        $lists = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
        return $lists;
    }
    public static function save($location_name, $location_number, $location_state, $location_city, $location_country)
    {
        if (empty($location_name) || empty($location_number) || empty($location_state) || empty($location_city) || empty($location_country))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }

        $DB = new DB;
        $sql = "INSERT INTO location(location_name,
                                     location_number,
                                     location_state, 
                                     location_city, 
                                     location_country
                                    )VALUES(
                                     :location_name,
                                     :location_number, 
                                     :location_state, 
                                     :location_city, 
                                     :location_country)";

        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':location_name', $location_name);
        $stmt->bindParam(':location_number', $location_number);
        $stmt->bindParam(':location_state', $location_state);
        $stmt->bindParam(':location_city', $location_city);
        $stmt->bindParam(':location_country', $location_country);
 
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao cadastrar";
            print_r($stmt->errorInfo());
            return false;
        }
    }

    public static function update($location_id, $location_name, $location_number, $location_state, $location_city, $location_country)
    {

        if (empty($location_name) || empty($location_number) || empty($location_state) || empty($location_city) || empty($location_country))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }

        $DB = new DB;
        $sql = "UPDATE location SET location_name = :location_name, 
                                    location_number = :location_number, 
                                    location_state = :location_state, 
                                    location_city = :location_city, 
                                    location_country = :location_country 
                                WHERE location_id = :location_id";

        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':location_name', $location_name);
        $stmt->bindParam(':location_number', $location_number);
        $stmt->bindParam(':location_state', $location_state);
        $stmt->bindParam(':location_city', $location_city);
        $stmt->bindParam(':location_country', $location_country);
        $stmt->bindParam(':location_id', $location_id, \PDO::PARAM_INT);
 
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao cadastrar";
            print_r($stmt->errorInfo());
            return false;
        }
    }
 
 
    public static function remove($location_id)
    {
        if (empty($location_id))
        {
            echo "location_id não informado";
            exit;
        }

        $DB = new DB;
        $sql = "DELETE FROM location WHERE location_id = :location_id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':location_id', $location_id, \PDO::PARAM_INT);
          
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao remover";
            print_r($stmt->errorInfo());
            return false;
        }
    }
}