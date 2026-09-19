<?php

    $db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
    $result = $db->query("SELECT * FROM roles"); // Select query result

    $roles = $result->fetchAll(); // rolesထဲကdataကို fetchAllနဲ့ထုတ်ယူ
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h1>List</h1>
    <ul>
        <?php foreach($roles as $role): ?> <!-- foreachနဲ့dataကိုloopလုပ်တယ် -->
            <li>
                <a href="del.php?id=<?= $role['id'] ?>">Del</a>
                <!-- Delနှိပ်ရင် del.phpကိုသွားမယ် urlမှာ?နဲ့ url-valueတွေတွဲပေးလို့ရတယ် အဲ့ကိုvalueကိုယူရတယ် del.phpမှာယူထားတယ်-->
                <a href="edit.php?id=<?= $role['id'] ?>">Edit</a>
                <?= htmlspecialchars($role['name']) ?> 
                <!-- nameနဲ့ valueကိုရိုက်ထုတ်တယ် ရိုက်ထုတ်ဖို့ output tap ?=သုံးတယ်-->
                <!-- XSS attackကိုကာကွယ်ဖို့ html special characterကိုသုံးတယ် -->
                <!-- inputမှာရိုက်ထည့်လိုက်တဲ့ <script>ကို uncodeလုပ်ပြီး ရိုးရိုးstringအနေနဲ့ပြောင်းပေးတယ်  -->
                (<?= $role['value'] ?>)
            </li>
        <?php endforeach ?>
    </ul>
 
    <a href="new.php">New Role</a>

</body>
</html>