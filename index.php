<?php include "db.php"; ?>

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
                                    <label for="fullname" class="fname" data-icon="u">Full nName</label>
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
                                <select name="districtdetails_iddistrictdetails" class="form-control">
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
                                <select name="ethnicity_idethnicity" class="form-control">
                                <option value="pick" disabled>Ethnicity</option>
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
                                <select name="religiondetails_idreligiondetails" class="form-control">
                                <option value="pick" disabled>Religion</option>
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
                                <select name="genderdetails_idgenderdetails" class="form-control">
                                <option value="pick" disabled>Gender</option>
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
                                <select name="attemptcount" class="form-control">
                                <option value="pick" disabled>attempt</option>
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
                            <br>
                                <input id="btnSubmit" class="btn success" type="submit" name="submit" value="Submit"> <a href="index2.php"></a>
          
           
                        </br>   
                            

                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
                                <script src="contact.js"></script>
                               

                            </body>
                          
                            </html>