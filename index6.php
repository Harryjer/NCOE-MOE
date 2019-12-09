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
                <h1>Course Selection</h1>
				<nav class="personal_details_form">
				<h2>N O T I C E = You Can Select 3 Courses Only</h2>	
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                            
                    <div id="" class="animate form">
                        <form id="courseDetailsForm"  >

                        <p>
                            <div class="input-group input-group-sm mb-3">
                                <label for="" class="religiondetails_idreligiondetails" data-icon="p">View Course </label>
                                <select name="religiondetails_idreligiondetails" id="religiondetails_idreligiondetails" class="form-control">
                                <option value="pick" disabled selected>Course</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From coursenames WHERE status=1");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='".$row['idcoursenames']."'>" .$row['coursenames'] ."</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>


   
                            <div id="">


                            <?php
                            $sql = mysqli_query($conn, "SELECT idcoursenames From coursenames WHERE status=1");
                            $row = mysqli_num_rows($sql);
                            while ($row = mysqli_fetch_array($sql)){

                            // echo "<option value='".$row['idbudhistexam']."'>" .$row['budhistexam'] ."</option>" ;
                            // echo "<option value='Colombo'>Colombo</option>" ;
                            }
                            ?>
                            
                            <p>
                            <div id="" class="input-group input-group-sm mb-3"> 
                            <label for="" class="coursenameid" data-icon="p">Course ID </label>
                            <p>
                                <div class="input-group input-group-sm mb-3">
                                    <!-- <label for="badmissionnumber" class="fname" data-icon="u"></label> -->
                                    <input value="" class="form-control" id="idcoursenames" disable name="idcoursenames" required="required" type="number" placeholder="xxxx" />
                                </div>
                            </p>

                            
                            
                            
                            <p>
                            <div id="" class="input-group input-group-sm mb-3"> 
                            <label for="" class="coursename" data-icon="p">Course Name </label>
                            <p>
                                <div class="input-group input-group-sm mb-3">
                                    <!-- <label for="badmissionnumber" class="fname" data-icon="u"></label> -->
                                    <input value="" class="form-control" id="coursenames" disable name="coursenames" required="required" type="text" placeholder="" />
                                </div>
                            </p>


                           
                            <p>
                            <div id="" class="input-group input-group-sm mb-3"> 
                            <label for="" class="coursedescription" data-icon="p">Course Descrption </label>
                            <p>
                                <div class="input-group input-group-sm mb-3">
                                    <!-- <label for="badmissionnumber" class="fname" data-icon="u"></label> -->
                                    <input value="" class="form-control" id="coursedescription" disable name="coursedescription" required="required" type="text" placeholder="" />
                                </div>
                            </p>


                            <p>
                            <div class="input-group input-group-sm mb-3"> 
                                <label for="" class="prioritylevel" data-icon="p">Priority Level </label>
                                <select name="prioritylevel" class="form-control">
                                <option value="pick" disabled selected>priority level</option>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * From coursepriority");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){
                                        
                                    echo "<option value='".$row['idcoursepriority']."'>" .$row['coursepriority'] ."</option>" ;
                                    // echo "<option value='Colombo'>Colombo</option>" ;
                                }
                                ?>
                                </select>
                            </div>
                            </p>
                            <br>
                            <button id="btnAdd" type=button >Add Course</button>
                            </br>        
                        
                        <br>    
                            <button id="btnNew" class="btn success" value="Submit Religious Activities">View Profile </button>
                        </br>
                            
                        </form>

                        

                        </body>

                        </div>                           
                       

                        <script
                        src="https://code.jquery.com/jquery-3.4.1.js"
                        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                        crossorigin="anonymous"></script>
                        <script src="index6.js"></script>






</html>