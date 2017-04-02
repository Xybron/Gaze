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
                                                <h4>Hey There!</h4>
                                                <p>Welcome to Gaze</p>
                                                <div class="row">
                                                    <form class="col s12">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="material-icons prefix">account_circle</i>
                                                                <input id="icon_prefix" type="text" class="validate">
                                                                <label for="icon_prefix">Username</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <i class="material-icons prefix">https</i>
                                                                <input id="icon_https" type="password" class="validate">
                                                                <label for="icon_https">Password</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <i class="material-icons prefix">account_circle</i>
                                                                <input id="icon_https" type="text" class="validate">
                                                                <label for="icon_https">Firstname</label>
                                                            </div>
                                                            <div class="input-field col s6 ">
                                                                <i class="material-icons prefix">account_circle</i>
                                                                <input id="icon_https" type="text" class="validate">
                                                                <label for="icon_https">Lastname</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <i class="material-icons prefix">email</i>
                                                                <input id="icon_https" type="email" class="validate">
                                                                <label for="icon_https">Email</label>
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
                                                <div class="row" style="text-align: center">
                                                    <p>Pick Your Major</p>
                                                </div>
                                                <div class="row" style="text-align: center">
                                                    <!-- Dropdown Trigger -->
                                                    <a class='dropdown-button majorBtn roundedBtn btn' href='#' data-activates='dropdown1'>Major</a>

                                                    <!-- Dropdown Structure -->
                                                    <ul id='dropdown1' class='dropdown-content'>
                                                        <li><a href="#!">CS</a></li>
                                                        <li><a href="#!">BA</a></li>
                                                        <li><a href="#!">MIS</a></li>
                                                        <li><a href="#!">ME</a></li>
                                                        <li><a href="#!">EE</a></li>
                                                        <li><a href="#!">CE</a></li>

                                                    </ul>
                                                </div>
                                                <div class="row btnHolder">
                                                    <div class="container">
                                                        <a class="waves-effect waves-light roundedBtn btn">Sign Up</a>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12" style="text-align: center">
                                                        <a href="#">or Sign In</a>
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
</body>

</html>