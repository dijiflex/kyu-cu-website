<?php

class USER extends SESSION
{
    public function getuserbyid($id)
    {
        $sql= "SELECT * from user where user_id = ?;";
        $data = $this->query_1($sql, $id);
        return $data;
    }
    //checks if the email address entered alredy exists in the db
    public function getuserbyEmail($email)
    {
        
        $sql = ("SELECT user_email FROM user WHERE user_email = ?");
        
        if ($stmt = $this->conn()->prepare($sql)) {
            $stmt->execute([$email]);
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getAllUsers($start,$limit){
        
        $sql = ("SELECT *  FROM user LIMIT $start,$limit"); 
        $data = $this->queryNone($sql);
        return $data;
    }

    public function count ($sql){
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute();
        $row =$stmt->fetch();
        return $row;
    }
}