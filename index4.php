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
                        <br>
                        <button id="btnAdd">Submit Sport Activity</button>
                        </br>        
                        <br>    
                            <button id="btnNew1" class="btn success" value="Submit Religious Activities">Submit Religious Activities </button>
                        </br>

                        </body>
    
                        <script
                        src="https://code.jquery.com/jquery-3.4.1.js"
                        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                        crossorigin="anonymous"></script>
                        <script src="index4.js"></script>

                        </html>