    <?php
        session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <title>User login</title>

        <style>

            .form-container {
                justify-content: center;
                margin: 0 auto;
                padding:2%;
                width: 50%;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin-top:10%;
            }
            
            body {
                /* margin: 0; */
                margin-top: 10px;
                background-image: url('./img/layered-waves-haikei.png');

                height: 370px; 
                /* height:100%; */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <form method = "POST" autocomplete = "off" action="">
                <div class="container col-6">
                    <div class="fs-3 text-center">User Login</div>
                    <div class="row">
                        <div class="mb-3">
                            <div class="form-label" for="user_name">User name : </div>
                            <input type="email" placeholder="type email here" class="form-control" id="user_name" name="user_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <div class="form-label" for="user_name">Password : </div>
                            <input type="password" placeholder="type password here" class="form-control" id="user_password" name="user_password">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!-- insert external css form index.css page  -->
                        <button type="submit" class="btn btn-lg login-btn">log in</button>
                    </div>
                </div>
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_name = $_POST["user_name"];
                $user_password = $_POST["user_password"];

                if ($user_name != null && $user_password != null) {
                    $Server = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "quize_game";

                    $con = new mysqli($Server, $username, $password, $dbname);

                    if ($con->connect_error) {
                        die("Connection failed :". $con->connect_error);
                    }

                    $sql = "SELECT * FROM student_info WHERE user_email = '$user_name' AND user_password = '$user_password'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            $fname = ucfirst(strtolower($row["first_name"]));
                            $lname = ucfirst(strtolower($row["last_name"]));
                            $uid = $row["id"];
                        }
                        // valid credential direct to another page 
                        echo "Valid username and password";
                        $_SESSION["userName"] = $fname . " " . $lname;
                        $_SESSION["uid"] = $uid;
                        header("Location:./welcome.php");
                    } else {
                        echo "<script>
                                Swal.fire(`Invalid username or password`);
                            </script>" ;
                    }

                    $con -> close();
                } else {
                    echo "<script>
                            Swal.fire(`Please enter username and password`);
                        </script>" ;
                }

            }
        ?>
    </body>
</html>