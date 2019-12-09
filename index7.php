<?php include "db.php"; ?>

<!-- <?php
//session_start();
?> -->

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>
        <script src="~/Scripts/jquery-2.1.4.js"></script>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            
            <header>
                <h1>View Submitted Details</h1>
				<nav class="personal_details_form">
				
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                            
                    <div id="" class="animate form">
                        <form id="religiousDetailsForm"  action="index8.php"  autocomplete="on">

                        <!-- <div class="topnav">
                        <a class="active" href="#home">Personal Details</a>
                        <a href="#news">A/L Details</a>
                        <a href="#contact">O/L Details</a>
                        <a href="#about"></a>
                        </div>
 -->

                            <p>
                            <div class="input-group input-group-sm mb-3">
                                <label for="" class="religiondetails_idreligiondetails" data-icon="p">What You Want to Edit </label>
                                <select name="religiondetails_idreligiondetails" id="religiondetails_idreligiondetails" class="form-control">
                                <option value="pick" disabled selected>submission</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From weblist WHERE status=1");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='".$row['idweblist']."'>" .$row['weblistname'] ."</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>
                        
                            <div id="personaldetailform">    
                            <div class="container">
            
                            <header>
                                <h1>Personal Details Form</h1>
				                <nav class="personal_details_form">
					
				                </nav>
                            </header>
                            <section>				
                            <div id="container_demo" >
                   
                            <a class="hiddenanchor" id="toregister"></a>
                            <div id="wrapper">
                            

                            <div id="" class="animate form">
                            <form method="post" action="personaldetailsubmit.php" autocomplete="on"> 
                                
                                <p>
                                <div class="input-group input-group-sm mb-3">
                                    <label for="fullname" class="fname" data-icon="u">Full Name</label>
                                    <input class="form-control" id="fullname" name="fullname" required="required" type="text" placeholder="full name" />
                                </div>
                                </p>
                               
                               
                                <p> 
                                <div class="input-group input-group-sm mb-3">
                                    <label for="nameinitial" class="nameinitial" data-icon="e" > Name With Initial</label>
                                    <input class="form-control" id="nameinitial" name="nameinitial" required="required" type="text" placeholder="Name With Initial"/> 
                                </div>
                                </p>
                               
                               
                                <p> 
                                <div class="input-group input-group-sm mb-3">
                                    <label for="paddress" class="paddress" data-icon="p">Permanent Address  </label>
                                    <input class="form-control" id="paddress" name="paddress" required="required" type="text" placeholder="permanent address"/>
                                </div>
                                </p>
                               
                               
                                <p> 
                                <div class="input-group input-group-sm mb-3">
                                    <label for="cnumber" class="cnumber" data-icon="p">Contact Number </label>
                                    <input class="form-control" id="cnumber" name="cnumber" required="required" type="number" placeholder="xxx-xxxxxxx"/>
                                </div>
                                </p>
                                <p> 
                                
                                
                                <div class="input-group input-group-sm mb-3">
                                    <label for="nic" class="nic" data-icon="p">National Identity Number </label>
                                    <input class="form-control" id="nic" name="nic" required="required" type="text" placeholder="xxxxxxxxxxV"/>
                                </div>
                                </p>
                                <p>
                                <div class="input-group input-group-sm mb-3"> 
                                    <label for="dob" class="dob" data-icon="p">Date of Birth </label>
                                    <input class="form-control" id="dob" name="dob" required="required" type="date" placeholder="xx-xx-xxxx"/>
                                </div>
                                </p>
                                
                                
                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="districtdetails_iddistrictdetails" data-icon="p">District of Permanent Residence </label>
                                <select name="districtdetails_iddistrictdetails" id="districtdetails_iddistrictdetails" class="form-control">
                                <option value="pick" disabled selected>District</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From districtdetails WHERE status=1");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['iddistrictdetails']."'>" .$row['districtname'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>

                            <p>
                            <div class="input-group input-group-sm mb-3">
                                <label for="" class="ethnicity_idethnicity" data-icon="p">Ethnicity </label>
                                <select name="ethnicity_idethnicity" id="ethnicity_idethnicity" class="form-control">
                                <option value="pick" disabled selected>Ethnicity</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From ethnicity WHERE status=1");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='".$row['idethnicity']."'>" .$row['ethnicityname'] ."</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>

                            <p>
                            <div class="input-group input-group-sm mb-3">
                                <label for="" class="religiondetails_idreligiondetails" data-icon="p">Religion </label>
                                <select name="religiondetails_idreligiondetails" id="religiondetails_idreligiondetails" class="form-control">
                                <option value="pick" disabled selected>Religion</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From religiondetails WHERE religionstatus=1");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='".$row['idreligiondetails']."'>" .$row['religionname'] ."</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>

                            <p>
                            <div class="input-group input-group-sm mb-3">
                                <label for="" class="genderdetails_idgenderdetails" data-icon="p">Gender </label>
                                <select name="genderdetails_idgenderdetails" id="genderdetails_idgenderdetails" class="form-control">
                                <option value="pick" disabled selected>Gender</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From genderdetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='".$row['idgenderdetails']."'>" .$row['gender'] ."</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>      

                            <p>
                            <div class="input-group input-group-sm mb-3">    
                                <br>
                                <label for="" class="attemptcount" data-icon="p">Number of Attempts (Advanced Level) </label>
                                <select name="attemptcount" id="attemptcount" class="form-control">
                                <option value="pick" disabled selected>attempt</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From attemptcount");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='".$row['idattemptcount']."'>" .$row['attemptcount'] ."</option>" ;
                                }
                                ?>
                                </select>
                            </div>        
                                </br>
                            </p>
                            </form>
                            <br>
                                <input id="btnSubmit" class="btn success" type="submit" name="submit" value="Submit"> <a href="index2.php"></a>
         
          
           
                        </br> 
                        </div>
          </div>
</div>
</div>
</div>

            <div id="alform">
                        <div class="container">
            
            <header>
                <h1>A/L Results Details Submission</h1>
				<nav class="personal_details_form">
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                            



                        <div id="" class="animate form">
                        <form method="post" action="index3.php" id="alDetailsForm" autocomplete="on">

                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="academicyr" data-icon="p">Academic Year </label>
                                <select name="academicyr" class="form-control">
                                <option value="pick" disabled selected>Year</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From academicyr");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idacademicyr']."'>" .$row['academicyr'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>
                        
                           <p>
                           <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="stream" data-icon="p">Stream </label>
                                <select name="stream" class="form-control">
                                <option value="pick" disabled selected>stream</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From streamdetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idstreamdetails']."'>" .$row['streamdetails'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="medium" data-icon="p">Medium </label>
                                <select name="medium" class="form-control">
                                <option value="pick" disabled selected>medium</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From mediumdetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idmediumdetails']."'>" .$row['mediumdetails'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>

                                <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="attempt" data-icon="p">Attempt </label>
                                <select name="attempt" class="form-control">
                                <option value="pick" disabled selected>attempt</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From attemptcount");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idattemptcount']."'>" .$row['attemptcount'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                           
                        


	                        <table style="width:100%">
                            <tr>
                            <th>Subject Name</th>
                            <th>Grade</th>
                            </tr>
                            <tr>
                            
                            <td> </label>
                                <select name="subject1" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='al'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="grade1" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                            <tr>    
                            <td> </label>
                                <select name="subject2" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='al'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="grade2" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>    

                        <tr>    
                            <td> </label>
                                <select name="subject3" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='al'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="grade3" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>
                        </table>              

                        </div>
                        </div>
                        </div>
                    </div>
                </div>



                            <div id="olform">

                            <div class="container">
            
                                <header>
                                <h1>O/L Results Details Submission</h1>
				                <nav class="personal_details_form">
					
				                </nav>
                                </header>
                            <section>				
                            <div id="container_demo" >
                   
                            <a class="hiddenanchor" id="toregister"></a>
                            <div id="wrapper">
                            

                            <div id="" class="animate form">
                            <form method="post" action="o_lresultssubmission.php" autocomplete="on">

                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="academicyr" data-icon="p">Academic Year </label>
                                <select name="academicyr" class="form-control">
                                <option value="pick" disabled selected>Year</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From academicyr");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idacademicyr']."'>" .$row['academicyr'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>
                        
                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="medium" data-icon="p">Medium </label>
                                <select name="medium" class="form-control">
                                <option value="pick" disabled selected>medium</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From mediumdetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idmediumdetails']."'>" .$row['mediumdetails'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="attempt" data-icon="p">Attempt </label>
                                <select name="attempt" class="form-control">
                                <option value="pick" disabled selected>attempt</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From attemptcount");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idattemptcount']."'>" .$row['attemptcount'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


                           
                        <div class="output">
                                <div id="biology" class="stream biology"> 

	                        <table style="width:100%">
                            <tr>
                            <th>Subject Name</th>
                            <th>Grade</th>
                            </tr>

                            <tr>
                            
                            <td> </label>
                                <select name="olsubject1" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade1" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject2" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade2" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject3" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade3" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject4" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade4" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject5" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade5" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject6" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade6" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject7" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade7" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject8" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade8" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        <tr>
                            
                            <td> </label>
                                <select name="olsubject9" class="form-control">
                                <option value="pick" disabled selected>Subject</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From subjectdetails WHERE examname='ol'");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsubjectdetails']."'>" .$row['subjectname'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        
                            <td> </label>
                                <select name="olgrade9" class="form-control">
                                <option value="pick" disabled selected>grade</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From gradedetails");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idgradedetails']."'>" .$row['gradedetails'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>
                        </tr>        

                        </table>    

                        </div>
                        </div>
                      </div>
                    </div>
                </div>                    





               

                <div id="sportform" class="container">
            
                <header>
                <h1>Sport Details Submission</h1>
				<nav class="personal_details_form">
					
				</nav>
                </header>
                <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                            

                        <div id="" class="animate form">
                        <form id="sportDetailsForm"  action="index5.php"  autocomplete="on">

                        
                        
                         

	                        <table style="width:100%">
                            <tr>
                            <th>Year</th>
                            <th>Ministry Which Issues the Certificate</th>
                            <th>The Level of Performance</th>
                            <th>Sport Activity</th>
                            <th>Position</th>
                            <th> Marks Gained(according to the 4.20.3.1)</th>
                            </tr>

                            
                        <tr>
                            
                            <td> </label>
                            <select name="academicyr" class="form-control">
                                <option value="pick" disabled selected>Year</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From academicyr");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idacademicyr']."'>" .$row['academicyr'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </td>

                            
                            <td> </label>
                                <select name="issuedministry" class="form-control">
                                <option value="pick" disabled selected>Ministry</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From sportcertificateministry");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsportcertificateministry']."'>" .$row['sportcertificateministry'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>

                            <td> </label>
                                <select name="levelperformance" class="form-control">
                                <option value="pick" disabled selected>Performance Level</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From sportperfomancelevel");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsportperfomancelevel']."'>" .$row['sportperfomancelevel'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>

                            <td> </label>
                                <select name="sportactivity" class="form-control">
                                <option value="pick" disabled selected>Sport Activity</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From sportactivity");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsportactivity']."'>" .$row['sportactivity'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>

                            <td> </label>
                                <select name="position" class="form-control">
                                <option value="pick" disabled selected>Position</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From sportposition");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idsportposition']."'>" .$row['sportposition'] ."</option>" ;
                                    
                                }
                                ?>
                                </select>
                            </td>

                            <td>                          
                            <input class="form-control" id="dob" name="marks"  type="number" placeholder="xx"/>
                            </td>
                    </tr>

                   </table>
  
                   </form>     
                        
                        </div>
                       </div>
                     </div>
                  </div>      



</body>
                        <script
                        src="https://code.jquery.com/jquery-3.4.1.js"
                        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                        crossorigin="anonymous"></script>
                        <script src="index7.js"></script>

</html>