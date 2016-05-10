<?php

include_once "model/Request.php";
include_once "model/Competition.php";
include_once "database/DatabaseConnector.php";

class UserController
{
    public function register($request)
    {
        $params = $request->get_params();
        $user = new User($params["name"],
                $params["game"],
                $params["ip"],
                $params["description"];

        $db = new DatabaseConnector("localhost", "jogo", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($user));
    }

    private function generateInsertQuery($user)
    {
        $query =  "INSERT INTO user (name, game, ip, description) VALUES ('".$user->getName()."','".
            $user->getGame()."','".
            $user->getIp()."','".
            $user->getDescrition()."','";

        return $query;
    }
}