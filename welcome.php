<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="welcome.css">
        <title>Welcome page</title>

        <style>
            
           .navbar {
                background-color: #ba89e4;
                padding: 10px 20px;
                margin: 0;
            }

            .navbar a {
                color: white; 
                text-decoration: none;
            }

            .sub-maths {
                background-color: #e489e4;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .sub-physics {
                background-color: #8c4ed4;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .sub-ict {
                background-color: #d4a1e2;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .sub-science {
                background-color: #a16abf;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .topic {
                color:#ba89e4;
                font-family: Arial, sans-serif;
            }

            .main-comtent {
                display:flex;
            }
            
            .quize-illustrator {
                margin-top:5%;
                width: 450px;
            }

            .sub-box {
                width: 50%;
                margin-top:6%;
                
            }

            .a-user-circle-o {
                font-size: 24px;
                color:white;
            }

            .navbar-brand {
                color:white;
            }

            .logout-container {
                display: flex; 
                justify-content: space-between;   
                justify-content: center; 
                align-items: center;
                height: 10px;
                margin-left:90%;
                background-color:#ba89e4;
            }

            .logout-button {
                border:none;
                background-color:#ba89e4;
                justify-content: center; 
                align-items: center; 
                /* margin:0; */
                width:100px;
                margin-bottom:30%;
                color:white;
                transition: transform 450ms;
            }

            .logout-button:hover {
                transform: scale(1.03);
            }

            .fa-sign-out {
                color:white;
            }
        </style>
    </head>
    <body>

        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="fa fa-camera-retro fa-lg"></i>
                    <!-- <i class="fa fa-user-o fa-lg" aria-hidden="true"></i> -->
                    <?php
                        if (isset($_SESSION["userName"])) {
                            echo $_SESSION["userName"];
                        } else {
                            echo "User Name";
                        }
                    ?>
                </a>
            </div>
            <div class="logout-container">
                <a href="logout.php">
                <button class="logout-button">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </button>
                </a>
            </div>
        </nav>

        <div class="main-comtent">
            <div class="illustrator">
                <img src="./img/undraw_Quiz_re_aol4.png" alt="" srcset="" class="quize-illustrator">
            </div>

            
            <div class="container overflow-hidden text-center sub-box">
                <div class="container text-center topic">Please select the subject you like</div>
                <div class="row gy-5">
                    <div class="col-6">
                        <div class="p-5 sub-maths"><a href="./subject_pages/maths.php">Maths</a></div>
                    </div>
                    <div class="col-6">
                        <div class="p-5 sub-physics"><a href="./subject_pages/physics.php">Physics</a></div>
                    </div>
                    <div class="col-6">
                        <div class="p-5 sub-ict"><a href="./subject_pages/ict.php">ICT</a></div>
                    </div>
                    <div class="col-6">
                        <div class="p-5 sub-science"><a href="./subject_pages/science.php">Science</a></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>