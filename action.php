<?php
    $file_name = $_FILES["input_file"]["name"];
    $file_type = $_FILES["input_file"]["type"];
    $file_size = $_FILES["input_file"]["size"];
    $file_error = $_FILES["input_file"]["error"];
    $file_temp = $_FILES["input_file"]["tmp_name"];


    if(($file_type == "application/pdf")) {
        if (($file_size/1024) > 600){
            echo "-2";
        }else{
            
        if($file_error > 0){
            echo "-1";
        }else{
                if (file_exists("uploads/". $file_name)){
                    echo "0";
                }else{
                    move_uploaded_file($file_temp, "uploads/" . $file_name);
                    echo "1";
                }
            }
        }
        
    }
    else if($file_name == ""){
        echo "-4";
    }
    else{
        echo "-3";
    }

?>