<?php 
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/Department.php";

// prelevo le info dal database
// problema query injection
// $id = $GET["id"]; // 4 or id<> 4 // 4; drop table 'users';
// $sql = "SELECT * FROM `departments` WHERE `id`=$id;";
// $result = $conn->query($sql);

//Preparazione dello statement
$stmt = $conn->prepare("SELECT * FROM `departments` WHERE `id`=?");
$stmt->bind_param(`d` , $id);
$id = $_GET["id"];

//esecuzione id query
$stmt->exuste();
$result = stmt->get_result();

// var_dump($result);





// var_dump($result);

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $curr_department = new Department($row["id"], $row["name"]);
        $curr_department->setContactData($row["address"],$row["email"],$row["website"] );
        $curr_department->heade_of_department = $roe["head_of_fepartment"];
        $department[]=$curr_department; 
    }
    var_dump($departments);
}elseif($result){
    echo "Il dipartimento è stato trovato";
}else {
    echo "errore nel query";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="index.php">Rirotna al pounto di partenza</a>
    <?php foreach($departments as $department){?>
    <h1><?php echo $department->name; ?></h1>
    <p><?php echo $department->head_of_department; ?></p>

    <h2>[Contati]</h2>
    <ul>
        <?php foreach ($deoartment->getConctactsArray7() as $key  ?>
        <li>telefono</li>
    </ul>
    <?php}?>
   
</body>
</html>