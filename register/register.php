<?php
require_once("../unsecure/processUnsecure.php");
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Gaze - Student Management System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta name="author" content="Ronald Nettey">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/materialize.min.css">
        <link rel="stylesheet" href="../css/rstyle.css">
        <link rel="stylesheet" href="../css/gaze.css">
        <link rel="icon" href="#">
    </head>

    <body>
        <section class="rFullScreen gHome">
            <section class="rFullWrap">
                <section class="container rContent">
                    <div class="valign-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m8">
                                    <div class="card homeCard loginSide">
                                        <div class="card-content white-text">
                                            <div class="valign-wrapper">
                                                <div class="container">

                                                    <div class="row">
                                                        <h4>Hey There!</h4>
                                                        <p class="left">Welcome to Gaze</p>

                                                    </div>
                                                    <div class="row">

                                                        <form class="col s12" method = "POST">
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <i class="material-icons prefix">account_circle</i>
                                                                    <input id="icon_prefix" type="text" name="reg_Username" class="validate">
                                                                    <label for="icon_prefix">Username</label>
                                                                </div>
                                                                <div class="input-field col s12">
                                                                    <i class="material-icons prefix">https</i>
                                                                    <input id="icon_https" type="password" name="reg_Password" class="validate">
                                                                    <label for="icon_https">Password</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <i class="material-icons prefix">account_circle</i>
                                                                    <input id="icon_https" type="text" class="validate" name="reg_Firstname">
                                                                    <label for="icon_https">Firstname</label>
                                                                </div>
                                                                <div class="input-field col s6 ">
                                                                    <i class="material-icons prefix">account_circle</i>
                                                                    <input id="icon_https" type="text" class="validate" name="reg_Lastname">
                                                                    <label for="icon_https">Lastname</label>
                                                                </div>
                                                                <div class="input-field col s12">
                                                                    <i class="material-icons prefix">email</i>
                                                                    <input id="icon_https" type="email" class="validate" name="reg_Email">
                                                                    <label for="icon_https">Email</label>
                                                                </div>
                                                                <div class = "col m6">
                                                                    <p>
                                                                        <input name="reg_Gender" type="radio" id="male" value = "m" />
                                                                        <label for="male">Male</label>
                                                                        </p>
                                                                        <p>
                                                                        <input name="reg_Gender" type="radio" id="female" value = "f" />
                                                                        <label for="female">Female</label>                                                       
                                                                    </p>
                                                                </div>
                                                                <div class="input-field col m6 s12">
                                                                    <select name="reg_Majors">
                                                                        <option value="0" selected>Choose your major</option>
                                                                      <?php loadallmajors(); ?>
                                                                    </select>
                                                                    <label>Major</label>
                                                                </div>
                                                                 <div class="row btnHolder">
                                                        <div class="container">
                                                            <button class="waves-effect waves-light roundedBtn btn" name = "registerBtn" type = "submit">Sign Up</button>

                                                        </div>
                                                    </div>

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card darken-1 homeCard reg infoSect">
                                        <div class="card-content white-text">
                                            <div class="valign-wrapper">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="container logo">
                                                            <div class="logoHolder">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row message">
                                                        <div class="col s12 container">
                                                            <h4>Gaze</h4>
                                                            <p>Student Information System</p>
                                                        </div>
                                                    </div>
                                                    <!--
                                                <div class="row" style="text-align: center">
                                                    <p>Pick Your Major</p>
                                                </div>-->

                                                   
                                                    <p style="text-align: center;">Or</p>
                                                    <div class="row">
                                                        <div class="col s12 loginDir">
                                                            <a href="../login/login.php" class="waves-effect waves-light roundedBtn  btn">Sign In</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </section>
            </section>



            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="../js/materialize.min.js"></script>
            <script src="../js/gaze.js"></script>

            <script>
                $(document).ready(function() {
                    $('select').material_select();
                });
            </script>
    </body>

    </html>