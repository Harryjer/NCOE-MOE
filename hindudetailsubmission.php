<?php
session_start();
                                    require('db.php');
                                    $hinducoursename = $_POST['hinducoursename'];
                                    $fromdate = $_POST['fromdate'];
                                    $todate = $_POST['todate'];
                                    $validdate = $_POST['validdate'];
                                    
                                    
                             
                                    // var_dump($district);
                                //if(isset($_POST["submit"])){
                                //if(
                                $query = mysqli_query($conn,"INSERT INTO hinduexamresults (hinducoursename, fromdate, todate, validdate, userid) 
                                VALUES('".$hinducoursename."', '".$fromdate."', '".$todate."', '".$validdate."', '".$_SESSION["userid"]."');");
                                // //echo "<script>alert('Record Successfully Added!')</script>";
                                //header("Location: index3.php");
                                //}else{
                                echo json_encode($query);
        
    
?>