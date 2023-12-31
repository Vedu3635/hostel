<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'partials/_dbconnect.php';
  $name = $_POST["search"];
  $email = $_POST["search3"];
  $password = $_POST["search1"];

  $sqluserexist = "SELECT * FROM admin WHERE name='$name' ";
  $result = mysqli_query($conn, $sqluserexist);
  $numExistsRows  = mysqli_num_rows($result);

  if ($numExistsRows >= 1) {

    $showError = "Name Already Exists";
  } else {

    $sqlemailexist = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($conn, $sqlemailexist);
    $numExistsRowse  = mysqli_num_rows($result);

    if ($numExistsRowse >= 1) {
      $showError = "Email Already Exists";
    } else {

      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `admin` (`name`, `email`, `password`) VALUES ('$name','$email','$hash')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        $showAlert = true;
      }
    }
  }
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global/global3.css" />
    <link rel="stylesheet" href="index/index3.css" />
    <link rel="stylesheet" href="sc(js)/sc.js">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Medula One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@700&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Balsamiq Sans:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh Sans:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monomaniac One:wght@400&display=swap" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="hi1.css" />
    <link rel="stylesheet" href="hi.css" />
    <link rel="stylesheet" href="sc.js">

</head>

<body>


    <?php
  if ($showAlert) {

    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div> ';
  }

  if ($showError) {


    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $showError . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div> ';
  }
  ?>

    <div class="image-1-parent">
        <video class="video" src="img\SaveTube.io-Clouds forming waves-(1080p).mp4" autoplay muted loop></video>

        <div class="div"></div>
        <div class="text" id="tEXTContainer">
            <div class="gotilo">Gotilo.</div>
            <div class="a-better-choice">A BETTER CHOICE</div>
        </div>
        <div class="frame-child"></div>
        <form action="/hostel/signup.php" method="post">

            <b class="sign-up">Sign Up</b>
            <div class="frame-item"></div>
            <div class="email2">
                <input type="text" id="search" name="search" class="" placeholder="Name" required
                    style="border: none; background: transparent;outline: none;">
                <span id="clear-search" title="clear"></span>
            </div>
            <div class="email4">
                <input type="email" id="search3" name="search3" class="input-text" placeholder="Email" required
                    style="border: none; background: transparent;outline: none;">
                <span id="clear-search" title="clear"></span>
            </div>
            <div class="email1">
                <input type="password" id="search1" name="search1" class="input-text" placeholder="Password" required
                    style="border: none; background: transparent;outline: none;">
                <span id="clear-search1" title="clear">x</span>
            </div>


            <div class="frame-inner"></div>
            <div class="line-div"></div>
            <div class="rectangle-div"></div>
            <button type="submit" class="sign-up1" style="border: none; background: transparent;outline: none;">Sign
                Up</button>
            <img class="mail-icon" alt=""
                src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/4837ab8d-1a3d-4333-b758-1700645a3baa_1696558388228861950?Expires=-62135596800&Signature=QxuDkS4QTkuF9fNGMLCC0MFe5pi227OfWZfyUvzTZeIXLrHKzDy1wsB4AUi0hP2jCkzdkSJVj6~NDNF6DYsPHdhWbWJawfy1M~0oBUJdCJNCVTCkXo-HhUZ69wIjYxQ78PyoQEk8k50wMLBzjbtRhAGw8XVQwpOt3ZBBnXqQNZP6D6YceYLtkYEsxRo1AA3Ir1myI7iiME8Qa~cmDzpO17ZTKBUohhlz46eMjvM3aNOsqPFzSWE6VoHwFjSy0KbV0TeSYeCrEnrLm~IeD2F3fuWpn3WopSfx6quOG9MS-8tV4PtFPnUs-dohWPludEV~bBUp5NqU4YcwWGsPWgAxDA__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="lock-icon" alt=""
                src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/dbf27546-ff4b-487a-b4c8-798c61f42139_1696558388228980855?Expires=-62135596800&Signature=KJMF39acuhFW-8EO5zTxlydFMbZdELdnjT8ZFVgEZ5pL7rncizEkX6Kqh6Ozq3daKr1de84u6vw3pAO9w7koaia4zk-~oRQYdGir0JPtrE1HzxSqgUX7DBob9pC5J2CP7a4jKeToCDeF-Jcqa0SlL2m5xJ4gNKwfYBbExPHIN2VL~aXD4tGXjnHJHM4x~gbNlNlLrl18ppDUJUOARGMcDqPKPLiuGvkVYEgmcJIraMDRF-UIgnC4sURmVdBmBXwjpLEv4ozbWp6kkM4rF8pHWv6WXaw9rN9Dn6AF0kNf0E7AfrzKQK2IjVMt6-qEBcBFT~Ir8goyZjQ8r3NrhxQrsw__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="user-icon" alt=""
                src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/60acb116-7cd7-4d0a-a30a-42c8aca7ce17_1696558388229074750?Expires=-62135596800&Signature=Kw~B8xlBlZ9jE07XN8838zlRtKL6IS0W-7jwKLnh0gbK6kXIyxpeBo~6QjjoEmtO-v663cprRsu3TTDlr-uI5faeYyHOuB30u9oNFylNBQApzTxs4om8RSQjgJzDcqfA1KgcFAWs~6-ZRKlUmXHbQMLJlTPtsLqrq1dDELkaniuwirOzUR8JqSeP~LqFsvBUWoQPaPq~5ITFxtpdLFgB2hm1orznxJKHO7AAQUEFNv1jujSWvMlucWbElGpCz481b1izTYP32-0OXH9sUV10SNHIgYLJ9nEZAJhjd9RWUdO00kXrVqffnyIDmGSUk15ffRvc~pohRt8E4-VJiEIx5g__&Key-Pair-Id=K1P54FZWCHCL6J" />

        </form>
        <div class="home" id="home">Login</div>
    </div>

    <script>
    var tEXTContainer = document.getElementById("tEXTContainer");
    if (tEXTContainer) {
        tEXTContainer.addEventListener("click", function() {
            window.open("home.php", "_self");
        });
    }

    var rectangle5 = document.getElementById("rectangle5");
    if (rectangle5) {
        rectangle5.addEventListener("click", function() {
            window.open("www.google.com");
        });
    }
    var home = document.getElementById("home");
    if (home) {
        home.addEventListener("click", function() {
            window.open("login.php", "_self");
        });
    }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>