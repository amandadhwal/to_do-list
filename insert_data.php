<?php
    // var_dump($_POST);
    if(isset($_POST['add_Students']))
    {
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age']; 


        if($fname =="" || empty(fname)){
            header('location:index.php?message=you need to fill in first name');
        }
    }
?> 