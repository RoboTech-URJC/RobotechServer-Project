<?php

    $link = bbdd_connection("localhost","root","asddsa","members");


    $table = "members";
    // $field_values = array('NAME','PASSWORD');
    // $input_values = array("'ENANO'","'PUTO'");
    //
    //
    // $sample=get_bbdd_field($link,$table, 'NAME', 'Daniel','DNI');

    // echo $sample;

    function bbdd_connection($servername, $username, $password, $database){
        $link = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
        }
        return $link;
    }

    function bbdd_insert($link,$table,$field,$input){

        $field_values= implode(',',$field);
        $input_values=implode(',',$input);

        $sql="INSERT INTO ".$table." (".$field_values.") VALUES (".$input_values.")";

        if (mysqli_query($link, $sql)) {
              echo "New record created successfully";
        }else
              echo "Error: " . $sql . "<br>" . mysqli_error($link);

    }

    function get_bbdd_field($link,$table,$field_input,$value_input,$field_output){

        $sql = "SELECT " .$field_output." FROM " .$table." WHERE ".$field_input. "= '".$value_input."'";
        $rs =mysqli_query($link,$sql);

        if (mysqli_num_rows($rs)!=0){
            $query = mysqli_fetch_row($rs);
            $value_output = $query[0];
            echo "successfull";
        }else
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        return $value_output;
    }

 ?>
