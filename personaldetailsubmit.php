<?php
                                    require('db.php');
                                    $fullname = $_POST['fullname'];
                                    $nameinitial = $_POST['nameinitial'];
                                    $paddress = $_POST['paddress'];
                                    $cnumber = $_POST['cnumber'];
                                    $nic = $_POST['nic'];
                                    $dob = $_POST['dob'];
                                    $districtdetails_iddistrictdetails = $_POST['districtdetails_iddistrictdetails'];
                                    $ethnicity_idethnicity = $_POST['ethnicity_idethnicity'];
                                    $religiondetails_idreligiondetails = $_POST['religiondetails_idreligiondetails'];
                                    $genderdetails_idgenderdetails = $_POST['genderdetails_idgenderdetails'];
                                    $attemptcount = $_POST['attemptcount'];
                             
                                    // var_dump($district);
                                if(isset($_POST["submit"])){
                                if($query = mysqli_query($conn,"INSERT INTO personaldetails (fullname, nameinitial, paddress, cnumber, nic, dob, districtdetails_iddistrictdetails, ethnicity_idethnicity, religiondetails_idreligiondetails, genderdetails_idgenderdetails ,attemptcount) VALUES('".$fullname."', '".$nameinitial."', '".$paddress."', '".$cnumber."', '".$nic."', '".$dob."', '".$districtdetails_iddistrictdetails."', '".$ethnicity_idethnicity."', '".$religiondetails_idreligiondetails."', '".$genderdetails_idgenderdetails."', '".$attemptcount."');")){
                                echo "<script>alert('Record Successfully Added!')</script>";
                                header("Location: index2.php");
                                }else{
                                echo "Failure" . mysqli_error($conn);
        }
    }
?>