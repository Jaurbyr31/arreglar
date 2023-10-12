<?php
require ('database.php');
$query = "select * from login";
if($is_query_run = mysqli_query($conn, $query)){
    $userData = [];
    while($query_executed = mysqli_fetch_assoc($is_query_run)){
        $userData[] = $query_executed; // Aquí se corrigió el nombre de la variable.
    }
}
else{
    echo "Error in execution!";
}

echo json_encode($userData);
?>
