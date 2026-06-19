<?php 

namespace Libs\Database;

use PDO;
use PDOException;

class MySQL
{
    private $db;

    public function __construct(
        private $dbhost="localhost",
        private $dbuser="root",
        private $dbpass="",
        private $dbname="project",
    )
    {
        //
    }
        
    public function connect()
    {
        try {
            $this->db = new PDO(
                "mysql:dbhost=$this->dbhost;dbname=$this->dbname",
                $this->dbuser,
                $this->dbpass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                    // Errorတက်ရင် PDO Exceptionကိုပို့တဲ့ codeဖြစ်တယ်
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    // Data ထုတ်ယူရင် array မဟုတ်ပဲ Object အနေနဲ့ထုတ်ယူမယ်ဆိုတဲ့ codeဖြစ်တယ်
                ]
            );

            return $this->db;
        
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}

// mysql classကိုသုံးပြီး object ဆောက်တဲ့အခါ ပုံစံ၂မျိုးနဲ့ ဆောက်လို့ရပါတယ်
// ပုံစံ ၁: default parameters တွေနဲ့ object ဆောက်ခြင်း
// ပုံစံ ၂: user-defined parameters တွေနဲ့ object ဆောက်ခြင်း

/* $mysql1 = new MySQL;
$mysql2 = new MySQL("mysql.domain.com", "someuser", "somepass", "dbname"); */