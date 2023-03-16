<?php
namespace DB;

require 'db_link.inc.php';

use DB\DBLink;
use Exception;
use PDO;

class User {
    private $id, $first_name, $last_name, $email, $pseudo, $password, $is_actif, $is_org, $url_img;

    public function __get($prop) {return $this->$prop;}

    public function __set($prop, $val) {
        switch ($prop) {
            case 'email':
                $this->$prop = strtolower($val);
                break;
            case 'last_name':
                $this->$prop = strtoupper($val);
                break;
            default:
                $this->$prop = $val;
        }
    }
}

class UserRepository {
    const TABLE_NAME = "web1_users";

    public function getAllMembers(&$message) {
        $result = array();
        $bdd    = null;
        try {
            $bdd    = DBLink::connect2db(MY_DB, $message);
            $result = $bdd->query(
                "SELECT * FROM ". self::TABLE_NAME . " ORDER BY email;",
                PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                "HELMO\Member"
            );

        } catch (Exception $e) {
            $message .= $e->getMessage().'<br>';
        }
        DBLink::disconnect($bdd);
        return $result;
    }
}
