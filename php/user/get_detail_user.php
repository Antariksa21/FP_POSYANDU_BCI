<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try{

        include "../functions.php";
  
        $id = isLogged();

        if($id){

            echo(runSQL("


            SELECT provinsi, kota, kecamatan, kelurahan, rt, rw, no_telp, nik FROM detail_user WHERE id_user = $id;


            "));
        }else{
            echo(json_encode("Logged Out"));
        };
        exit;
    }catch(Exception $e){
        echo(json_encode("Error: $e"));
    };

}else{
    include "../functions.php";
    echo(messageH1("Mana POST nya"));
    exit;
};
?>