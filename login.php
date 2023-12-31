<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $person = $_POST["option"];
    $email = $_POST["search"];
    $password = $_POST["search1"];

    if ($person == "adminguy") {

        $sql = "SELECT * FROM admin WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {


            while ($row = mysqli_fetch_assoc($result)) {

                if (password_verify($password, $row['password'])) {

                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;

                    header("location: admin.php");
                } else {
                    $showError = "Password doesn't match.";
                }
            }
        } else {
            $showError = "Couldn't found your account.";
        }
    } else {
        $sql = "SELECT * FROM student WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {

            while ($row = mysqli_fetch_assoc($result)) {


                if (password_verify($password, $row['password'])) {

                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;

                    header("location: student.php");
                } else {
                    $showError = "Password doesn't match.";
                }
            }
        } else {
            $showError = "Couldn't found your account.";
        }
    }
}

?>

<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="login1.html" />
    <link rel="stylesheet" href="global/global.css" />
    <link rel="stylesheet" href="hi.css" />
    <link rel="stylesheet" href="global/global5.css" />
    <link rel="stylesheet" href="index/index.css" />
    <link rel="stylesheet" href="index/index5.css" />
    <link rel="stylesheet" href="sc(js)/sc.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Medula One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=NTR:wght@400&display=swap" />
</head>

<body>

    <?php
    if ($login) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times</span>
          </button>
      </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" .alert{margin-bottom:0rem}  role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
        </button>
    </div> ';
    }
    ?>
    <div class="image-1-parent">
        <!---<img class="image-1-icon" alt="" src="Screenshot 2023-09-19 003942.png" />-->

        <video class="video" src="img\SaveTube.io-Clouds forming waves-(1080p).mp4" autoplay muted loop></video>
        <div class="div"></div>
        <div class="text" id="tEXTContainer">
            <div class="gotilo">Gotilo.</div>
            <div class="a-better-choice">A BETTER CHOICE</div>
        </div>
        <div class="frame-child"></div>

        <form action="/hostel/login.php" method="post">

            <b class="login">Login</b>
            <div class="student">
                <input type="radio" id="search2" name="option" value="studentguy" class="input-text" placeholder="student" required>
                <span id="clear-search2" title="clear">×</span>
            </div>
            <b class="student1">Student</b>

            <div class="Admin">
                <input type="radio" id="search2" name="option" value="adminguy" class="input-text" placeholder="admin" required>
                <span id="clear-search2" title="clear">×</span>
            </div>
            <b class="admin1">Admin</b>

            <div class="email">
                <input type="email" id="search" name="search" class="input-text" placeholder="Email" required style="border: none; background: transparent;outline: none;">
                <span id="clear-search" title="clear">×</span>
            </div>

            <div class="password">
                <input type="password" id="search1" name="search1" class="input-text" placeholder="Password" required style="border: none; background: transparent;outline: none;">
                <span id="clear-search1" title="clear">x</span>
            </div>
            <div class="frame-item"></div>
            <div class="frame-inner"></div>
            <img class="vector-icon" alt="" src="lock.png" />

            <img class="email-icon" alt="" src="mail.png" />


            <div class="forget-password" id="forgetPasswordText">Forget Password?</div>
            <div class="rectangle-div" id="rectangle4"></div>
            <button type="submit" class="login1" style="border: none; background: transparent;outline: none;">Login</button>
            <b class="dont-have-an-container" id="dontHaveAn">
                <span>Don't have an account? Register</span>
                <span class="span"> </span>
            </b>
        </form>
        <iframe id="my-iframe" src=""></iframe>
    </div>

    <script>
        var tEXTContainer = document.getElementById("tEXTContainer");
        if (tEXTContainer) {
            tEXTContainer.addEventListener("click", function() {
                window.open("home.php", "_self");
            });
        }

        var forgetPasswordText = document.getElementById("forgetPasswordText");
        if (forgetPasswordText) {
            forgetPasswordText.addEventListener("click", function() {
                window.open("welcome.php");
            });
        }

        var rectangle4 = document.getElementById("rectangle4");
        if (rectangle4) {
            rectangle4.addEventListener("click", function() {
                window.open("home.php", "_self");
            });
        }

        var dontHaveAn = document.getElementById("dontHaveAn");
        if (dontHaveAn) {
            dontHaveAn.addEventListener("click", function() {
                window.open("signup.php", "_self");
            });
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>