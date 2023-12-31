<?php
$showAlert = false;
$showError = false;
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'partials/_dbconnect.php';
    $name = $_POST["search1"];
    $room_no = $_POST["search2"];
    $email = $_POST["search3"];
    $bill = $_POST["search4"];
    $phone_no = $_POST["search5"];
    $fees = $_POST["search6"];
    $college_id = $_POST["search7"];
    $department = $_POST["search8"];
    $password = $_POST["search9"];

    $sqlemailexist = "SELECT * FROM student WHERE email='$email' ";
    $result = mysqli_query($conn, $sqlemailexist);
    $numExistsRows  = mysqli_num_rows($result);

    $sqlnumberexist = "SELECT * FROM student WHERE phone='$phone_no' ";
    $result5 = mysqli_query($conn, $sqlnumberexist);
    $numExistsRows5  = mysqli_num_rows($result5);

    $sqlidexist = "SELECT * FROM student WHERE id='$college_id' ";
    $result7 = mysqli_query($conn, $sqlidexist);
    $numExistsRows7  = mysqli_num_rows($result7);

    if ($numExistsRows5 >= 1) {
        $showError = "Entered phone number is already registered, Please enter another number. ";
    } else if ($numExistsRows7 >= 1) {
        $showError = "Entered college id is already registered, Please enter correct id. ";
    } else if ($numExistsRows >= 1) {
        $showError = "Entered email already used, Please enter different email. ";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `student` (`name`, `bill`, `fees`, `deparment`, `password`, `room.no`, `phone`, `id`, `email`, `date`) VALUES ( '$name', '$bill', '$fees', '$department', '$hash', '$room_no', '$phone_no', '$college_id', '$email', current_timestamp());";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = true;
        }
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="hi.css" />

    <link rel="stylesheet" href="global/global7.css" />
    <link rel="stylesheet" href="index/index7.css" />
    <link rel="stylesheet" href="sc(js)/sc.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Medula One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh Sans:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Balsamiq Sans:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monomaniac One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=NTR:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@700&display=swap" />
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

    <div class="frame-parent">
        <div class="vector-parent">
            <img class="frame-child" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/cd2e4423-3b5c-46c0-bd21-ab40ef633331_1697561252694655323?Expires=-62135596800&Signature=SFKcEQoOQGDAJKt0xwus5I5eNa-v6wbM7Ga7P-NW4r0jQP4AXhRXEH1XeXe4J4slNI2aTTzhD4xKqUQPz1GfOPTASXP8Wxu37sW2M-S3jg5Mxp1-098TEqdzxdLcBZ~GJmOjzETSvBS-jJ2VHJGkEGVwTWoRGfYUXGJjPrN301rRtlHc6huHXHxIklLF5kTmgYLiqCgaA8zR91qMeZ~V7Eg9ZqdIeQT7X2grlk4U8dbdTreJ~YRq2F7WxQrcU53zLYH3HeH~izZYHbxxJhUHLYGu0AUG77kprlh1hBmc-RR8FBETDosDIntxN~xo~r6kGqMp4396~6UssAMV7rqgbQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="text">
                <div class="gotilo">Gotilo.</div>
                <div class="a-better-choice">A BETTER CHOICE</div>
            </div>

            <div class="frame-item"></div>
            <img class="frame-inner" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/963305d7-2d5d-40c4-bd6b-c6f7e51295bf_1697561252694860450?Expires=-62135596800&Signature=wXHvtxK4T4ELhZbkqbnvB-vzU83W4e7CerA3qDlaRphZtctiWpA7-TeZnvnQPri32IwE6ZLuHT79C2Kor61NBkyCgLK547cpkg6YRombJ1MA1-QQcPSX73nU49Vjf0spT9oiZ~dO4c49b2KehtSKj0jDXdpCIhbOtNS5qNwOhYX9V24kR0flS002o8EKEBf2OwRCb9Daz29RlDFcwIDDfx78-kc3QRbteD0NhFTiKPfR2Dy-UTTJB1j-PKnxg3cODsacMVTKh3EDSb5F-gLoSaPMJWLHfDW87YYaoIrpOtH4s1w9hPdweDGPGGXOTdvh4QMa0QKmov2~qnAsNG6LvQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="admin-panel">Admin Panel</div>
            <div class="explore-the-administrators">
                “Explore the administrator's background, credentials, and key insights
                on this page, offering a comprehensive overview of the driving force
                behind the website's success."
            </div>
            <div class="rectangle-div" id="explore"></div>
            <div class="explore-details">Explore Details</div>
            <div class="home" id="home1">HOME</div>
            <img class="arrow-right-circle-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/19b3b7ff-f525-47af-adff-a14c9d8f3a12_1697561252694965271?Expires=-62135596800&Signature=SZwHhMz54~FOz34QMXWCTqfkQaMCKVAnWH9Xj5b12c4TojPg2hI9uRpT-Bp0c-AyjmuaQfcIbTwI6r6XPWmtcnq8BKZYjJhkw4ZsCjHSI1O8kj~mmz6w0sBENGxttQxuotIPij63ODKfzyKMNkBoZtbVPnpCD6WhRahnXphnTb6e6LLcv0Ne4jTyw0ynxg62yRPH34iNIHLW1iQ-IZw2UcoxaVFYhlZbTF-0jNToZePepmcRdFuoLjGc~kL0m9SUkWGYWD1LCmQGxzkbN6-8lFt8KeozdTg1H9~3aXRMSzjV-ltR4GjYtt-Zat4Du5kpMG4iXQsepCm84jx9ZySqRw__&Key-Pair-Id=K1P54FZWCHCL6J" />
        </div>

        <div class="vector-group" id="admindetails">
            <img class="frame-child" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/dd82e67f-8143-42af-a470-f7cd7751b581_1697561252695078578?Expires=-62135596800&Signature=hoq1F~IEoapucV~exHfP6kbpU60UsrThhonFEAEJr5K4M7K-azGw3QuXkeasDbZy4redRmwSLfMlkjSYiUZBgITEQOJcTXDJB4PIMFwUW6fCCwBisQigzeRGPEIHBWW2xsY9KfQRVgXPvPKRaNXKNeHZoVYxEA0tmRZpaTBAKBQbQvfy1AmNg6hczEt9MrXfRLcl7fTwEZ7udOU7Pc3Gxxg5v2px72kwWwoQ0cYe~f44Xx1uKr-SHOCjd0dxK06ieIh9IYchKH~3Y3wVcg2o9cZ2IzCLgbhWMtMUIp707C0cnih~wJ8AfpF9bHuaccck-YB1kzVQyiSvAxNzEPTLDQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="text1">
                <div class="gotilo">Gotilo.</div>
                <div class="a-better-choice">A BETTER CHOICE</div>
            </div>
            <div class="details">Details</div>
            <div class="frame-child1"></div>
            <form action="/hostel/admin.php" method="post">

                <div class="name">Name</div>
                <div class="line-div"></div>
                <div class="frame-child4">
                    <input type="text" id="search1" name="search1" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="room-no">Room No</div>
                <div class="frame-child12">
                    <input type="text" id="search2" name="search2" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>
                <div class="frame-child5"></div>


                <div class="email">Email</div>
                <div class="frame-child14">
                    <input type="email" id="search3" name="search3" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>
                <div class="frame-child2"></div>

                <div class="electricity-billamount">Electricity Bill(Amount)</div>
                <div class="frame-child6"></div>
                <div class="frame-child15">
                    <input type="number" id="search4" name="search4" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="phone-no">Phone No</div>
                <div class="frame-child7"></div>
                <div class="frame-child16">
                    <input type="number" id="search5" name="search5" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="fees">Fees</div>
                <div class="frame-child8"></div>
                <div class="frame-child17">
                    <input type="number" id="search6" name="search6" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="college-id">College ID</div>
                <div class="frame-child9"></div>
                <div class="frame-child18">
                    <input type="text" id="search7" name="search7" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="department">Department</div>
                <div class="frame-child10"></div>
                <div class="frame-child19">
                    <input type="text" id="search8" name="search8" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="password">Password</div>
                <div class="frame-child3"></div>
                <div class="frame-child13">
                    <input type="password" id="search9" name="search9" class="input-text" required style="border: none; background: transparent;outline: none; font-size:large; color: aliceblue; ">
                </div>

                <div class="frame-child11"></div>
                <div class="save">
                    <button type="submit" class="login1" style="border: none; background: transparent;outline: none;">SAVE</button>

                </div>
        </div>
    </div>
    </form>

    <script>
        var contact = document.getElementById("explore");
        if (explore) {
            explore.addEventListener("click", function() {
                var contactSection = document.getElementById("admindetails");
                if (contactSection) {
                    contactSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        }

        var home = document.getElementById("home1");
        if (home1) {
            home.addEventListener("click", function() {
                window.open("home.php", "_self");
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