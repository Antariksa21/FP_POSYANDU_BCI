<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try{

        include "../functions.php";
  
        $id = isLogged();

        if($id){

            runSQL_form("


            SELECT users.name, anak.nama
            FROM users 
            LEFT JOIN anak on users.id = anak.id_user
            WHERE users.id = $id;
           


            ");
            

        }else{
            echo(dummyJSON("Logged Out"));
        };
        exit;
    }catch(Exception $e){
        echo(dummyJSON("Error: $e"));
    };

}else{
    include "../functions.php";
    echo(messageH1("Mana POST nya"));
    exit;
};
?>