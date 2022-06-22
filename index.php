<?php

require_once __DIR__ . "/Department.php";
require_once __DIR__ . "/database.php";


// Query per il data base 
$sql = "SELECT `id`, `name` FROM `departments`;";
$result = $conn->query($sql);
// var_dump($result);

$departments = [];

// Controllo se il risultato c'è e se ha non è vuoto
if($result && $result->num_rows > 0){
    //abbiamo dei risultati della quary
    while($row = $result->fetch_assoc()){
        // var_dump($row);
        $curr_department = new Department($row ["$id"], $row["name"]);
        $departments[]= $curr_department;
    }
    // var_dump($departments);

} elseif($result){
    //query è andata a buon fine però non ci sono risultati 
} else {
    //non è andata a bun fine
    //errore di sintassi della quary 
    echo "query error";
    die();
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
    <h1>Lista dipartimenti</h1>

    <?php foreach($departments as $department) {?>
        <div>
        <h2><?php echo $department->name; ?></h2>
        <a href="single-department.php?id=<?php echo $department->id;?>">Vedi informazioni</a>
    </div>
    <?php }?>
  
</body>  
</html>   