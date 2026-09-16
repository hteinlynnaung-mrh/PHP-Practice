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
                    // tryမှာ Errorတက်ရင် PDO Exception $e ကိုပို့တဲ့ code
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    // Data ထုတ်ယူရင် array မဟုတ်ပဲ Object အနေနဲ့ထုတ်ယူမယ်ဆိုတဲ့ code
                ] 
            );

            return $this->db;
        
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}

// mysql classကိုသုံးပြီး object ဆောက်တဲ့အခါ ပုံစံ၂မျိုးနဲ့ ဆောက်လို့ရတယ်
// ပုံစံ ၁: default parameters တွေနဲ့ object ဆောက်ခြင်း
// ပုံစံ ၂: user-defined parameters တွေနဲ့ object ဆောက်ခြင်း

/* $mysql1 = new MySQL;
$mysql2 = new MySQL("mysql.domain.com", "someuser", "somepass", "dbname"); */

// Database
// CRUD - Create, Read, Update, Delete

// Create Query
// INSERT INTO roles (name, value) VALUES ('Super', 44)

// Read Query
// SELECT id, name FROM roles ORDER BY name DESC LIMIT 3
// Order by က sorting လုပ်တဲ့ keyword ဖြစ်တယ်
// ASC - အနိမ့်ဆုံး မှ အမြင့်ဆုံး
// DESC - အမြင့်ဆုံး မှ အနိမ့်ဆုံး
// LIMIT - ရလာမယ့် ရလဒ် အရေအတွက်ကို ကန့်သတ်ပေးတယ်

// Update Query
// UPDATE roles SET name='Editor' WHERE id=2
// roles table ရဲ့ id က 2 ဖြစ်တဲ့ record ရဲ့ name ကို Editor လို့ update လုပ်မယ်
// SET nameက update လုပ်မယ့် column ဖြစ်တယ်
// WHEREက  filter လုပ်တဲ့ keyword ဖြစ်တယ်

// Delete Query
// DELETE FROM roles WHERE id=2

// composer require fakerphp/faker နဲဲ့ faker library ကို ထည့်သွင်းထားတယ် vendor fileရလာမယ်
// vendorထဲက autoload file ကိုယူသုံးဖို့အတွက် composer.jsonမှာ autoloadနဲ့ချိတ်ပေးရတယ်
// ချိတ်ပေးပြီးရင် composer dump-autoload နဲ့updateလုပ်ရတယ်