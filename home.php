<?php
session_start();

//session_start();
$showAlert_f = false;
$showAlert_c = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'partials/_dbconnect.php';
    $type = $_POST["type"];
    //$person = $_POST["option"];
    if ($type == "feedback") {

        $feedback = $_POST["search1"];
        $email = $_POST["search2"];

        $sql = "INSERT INTO `feedback` (`email`, `description`, `date`) VALUES ('$email', '$feedback', current_timestamp());";

        //mysqli_query function will execute the query we want to run for database.
        $result = mysqli_query($conn, $sql); // $resutl shows if the query is executed or not, it will have true or false value in it.


        if ($result) {


            $showAlert_f = true;
            // header("location: home.php");
        }
    } else if ($type = "contact_us") {

        $firstname = $_POST["search3"];
        $lastname = $_POST["search6"];
        $email = $_POST["search4"];
        $description = $_POST["search5"];

        $sql = "INSERT INTO `contact` (`firstname`, `lastname`, `email`, `description`, `time`) VALUES ('$firstname', '$lastname', '$email', '$description', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {


            $showAlert_c = true;
            // header("location: home.php");
        }
    } else {
        $showError = " Sorry for inconvenience";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global/global41.css" />

    <link rel="stylesheet" href="index/index14.css" />
    <link rel="stylesheet" href="sc.js">
    <script src="sc.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Medula One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Balsamiq Sans:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh Sans:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monomaniac One:wght@400&display=swap" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="hi1.css" />
    <link rel="stylesheet" href="hi.css" />
</head>

<body>
    <?php
    if ($showAlert_f) {

        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your feedback is submited, thanks for feedback
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div> ';
    }
    if ($showAlert_c) {

        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your request is submited, thanks for reaching us.
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

    <div class="homepage-parent">
        <div class="homepage">
            <div class="text">
                <div class="gotilo">Gotilo.</div>
                <div class="a-better-choice">A BETTER CHOICE</div>
            </div>
            <div class="feedback" id="feedback">Feedback</div>
            <div class="contact" id="contact">Contact</div>
            <!-- <div class="about-us" id="about">About Us</div> -->
            <div class="logout" id="log">
                <?php
                // session_start();

                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {

                    echo "Login";
                } else {
                    echo "Logout";
                }
                ?>
            </div>
            <div class="gotilo-is-your">
                Gotilo is your one-stop online platform dedicated to simplifying the
                process of finding affordable and comfortable hostel accommodations
                for college students. Designed with the needs of today's students in
                mind, our website offers a comprehensive and user-friendly solution
                for those seeking a home away from home during their college years.
            </div>
            <div class="welcome-to">Welcome To</div>
            <div class="gotilo1">Gotilo.</div>
            <div class="homepage-child"></div>
            <img class="homepage-item" alt="" src="img\WhatsApp Image 2023-09-28 at 11.48.03_5ee7631b.jpg" />

            <div class="homepage-inner"></div>
            <div class="rectangle-div"></div>
            <div class="homepage-child1"></div>
            <div class="explore-now" id="explore">Explore Now</div>
            <img class="circled-right-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651ea2aee97629e4fef54a7b/3e5ffeb3-bb89-469d-9627-3c59852a8376_1696506559658804029?Expires=-62135596800&Signature=VDc6YFzf2-j5YZTQwltK9EDKk8XUs3GWtJaXU7zlsCyWs432jVDFYCxUVtylV51ODsd7cpmZc07mm9JFhTwUDDuz4hmLUNtczhbOdBc4E-H~gPzCnEQuRUFWsKMX8VIK-hlOYyf2lHUQN6dDuUDdr-nQ3KsumqyjgD7vrNDgXeF6JzGlgFcWliimKbN9KFhzu5GJPFwQNgxgAaBSeC1xqcymsfZAQHUu2QZXxrrnpVFvIteQM2bmp6yPCgw2r6b6IPgWNQwkmcfDOEHTpHRa8ZNR26qL525DfCrHNpAKXs72V6SkkQpa8HlPI4S9YlN3Gndss0b7BDn3~TQaYOGGNA__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="arrow-right-circle-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651ea2aee97629e4fef54a7b/264ccbdb-c00e-46e8-a756-1d320833b9a8_1696506559658938712?Expires=-62135596800&Signature=l1rko9Do4dsssnwaFGeZ0-iqjWptK8pMK9A8GGj1Z3DwOjsDEtYdMCCURpkmP0AY~WeNZhRXOPj2~fpGdyERQIO3xT2SLpo2rHTgoMUYSep42zbpqxcd5jg4QdxfG4mS34WcV-LvMQToDc3s13kGlyH-084hhkRMwroDzOf7K7YwexlaZnHB5e9HXogxW3ymBWSkxBD63CIey~kqlDom8QvANtNT5Bbl060LgYz49FqgzZMVisjZ6nSgVqVV2vAaUIJSGDq6H9hoGM0DG~qhS23PFoY2Ah4aqQiLroXFiHA-s4-UHXgUGas4fmlJYl-zN6p-ITcKOcdxOGce07zq1Q__&Key-Pair-Id=K1P54FZWCHCL6J" />
        </div>
        <div class="homepage1" id="homepagesection">
            <div class="text">
                <div class="gotilo">Gotilo.</div>
                <div class="a-better-choice">A BETTER CHOICE</div>
            </div>

            <img class="rectangle-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/96fcf232-e623-44c6-90b3-44d345e77bf1_1696537187918631431?Expires=-62135596800&Signature=m5Ro5qjH~NRy0XW48MOk4nnNreE9JnO8kQnxr8xKxEq0aG8-8WCTCsX3T4CfCtsC8QXGMt819HYKALH8OIpcX~0drk1KBbYqt7bcPC1SddKGcCr049Rtrv48RdMCfG7B9CB7Sgor1uCCPMggjruSV673FK2WFv~8730-joBpKNAeuLGWSKxtLHu4O99D7c5ctKGRI1lz9zO5USgI0wa7GfKZ81exYDf88Tpjsdg7aOVDd3eFy44nfd1FbiJz8cA73~sdIiPlHhPEpa6mg2SUyTbhtyTU1srKfLGpB-L7DsgYH2CblhMQ~PR6UfW0ji30AyV5uLTLe0--4H0ZHPZIJQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="homepage-child2"></div>
            <b class="select-your-hostel">Select your hostel</b>
            <div class="homepage-child3"></div>
            <div class="approx-800m">Approx 800m</div>
            <img class="homepage-child4" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/89482104-9b89-4cde-b89c-1bcb3fff6fb5_1696537187918838303?Expires=-62135596800&Signature=sIMdQrCn3XoAHlQ3mjm0hg~JQn0Zdd~ki7ePYUz10acKCXsP2N3X3Mno4b3JaZFVo0U~GSC3tJ0RbEfSljRdRHIrqzyQKBIG4m~1tnIZwvGFhDgmne7vGsaJkLKzfJKS5s7UEpVLK2ACBdnQCTTjaX8q2V9WLQjRDLzY9qooc2OzKyu9tKRHKB85ioHiUhJelHVffBozcicysrGjyQ2pmIR~038pGo9GHSqH65Tsjioq-BgfAfaXxqkyoLARtVvnBMtoeen2WuEG0QSlOyiJHa9ihX-Rp5tpDplwXL4WT4vRq0lZqJKWbgl4CegdHCuIChhWcWvuS9dolzLcwt5qFw__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="homepage-child5"></div>
            <img class="homepage-child6" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/38f34de3-50ee-4d19-894f-98fca1136a6d_1696537187918940538?Expires=-62135596800&Signature=M6zn5Ie9jjuzyB9rbEov8OxRNtu49ii69Ih4BiJswDYIzjRcgrHwSOYOCJ4rjOJe4Ujkvu4SNTyV6sY7aRDawKvimOelh4xFk4KI4UlCJJtBSMithN6aPJ~DnCcVhogVXYj3-KghX~vBdQHK5kcs19QxyZWCd2lcvP1p-svMZl5~yoAztqPNbsxNQqfIhGpzroBjzxi5y4Ny8UcRJF8HgXUa~9IGPPDpsOFRlbyM05xs3lcQYmUSti90td3l-X49O72HWeZFRArDBX0SAnAXQGZMSJOYS99q3KghWHPiTEl0Rsh9n-qXH4qXwskLTK~5lN07-tJNXCqXK~BnI4WlaA__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="royal-care-boys" id="royal">Royal Care Boys Hostel</div>

            <div class="aashirvad-boys-hostel-container">
                <p class="aashirvad-boys-hostel" id="ashirwad">Aashirvad Boys Hostel</p>
            </div>
            <div class="approx-600m">Approx 600m</div>
            <img class="home-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/be95df7a-31f4-4076-b911-709e703321eb_1696537187919036248?Expires=-62135596800&Signature=OYNP3Db1~KPWgMkBGbb41KuZ~ZPyNEYF86FHL6kGuFbJerp~4XLCXr~DRzW0WLffF6QrFNK-mRd6TFmfXHiS6dCV9LFomYhk4l-EsD61Y3fY9ntzek3kJXV-rroM3WrDEBwVDlQnt2aGZ~7eRq3Hz0RXKhI4SW3lAY3K3llg6AJLcP7bwhK63t0E~X~cQHY7p6H~chZBeB3jcp6PgMAQBL0CTJWKcVHprVD4y7zzWQkHo9DSrrk2v067CSgWaso4H-fGMO492aBwqgb6Dv5rvpE97yq~v2nWPgNWa2lDjb3BOciZw7QBMKM7zOea7o8CEuKrcoxB19gg-VexJbC6SQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="map-pin-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/39612bd4-3d65-4672-82d5-4b4e26b0b9a2_1696537187919295618?Expires=-62135596800&Signature=c84VPEeaGfo-VdjA9iTHrDP~vL1VBNlE6jdUhumZTkzx~MvFWbGAASM90gtgscVuy9rq~~y5rIYTKyP-Csc7HYmqIpAW28VaL5votbf3-G4vLWOT6k~bTZFRGyp-qmIO3wbuQIZfyoQrCY9-ThEdMTxB2Nz1hqYyeEBLJd9uFRLaphDrz~23Ry-fXxJ8R9co0pe~JQ9pTAYQizJ~ZOE7ekmeLzSV32m29EY27JbnXZXxkY-tLZvzVkpUNgQ4cOLnwtXVPqwxoPCFRwmSmzfSfgwPas69bFwzcsLJOOQud1hxO~GI3HxecbpRTvNjS6F8Utoe3Kb7btdEbi701PsiAw__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="home-icon1" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/be95df7a-31f4-4076-b911-709e703321eb_1696537187919036248?Expires=-62135596800&Signature=OYNP3Db1~KPWgMkBGbb41KuZ~ZPyNEYF86FHL6kGuFbJerp~4XLCXr~DRzW0WLffF6QrFNK-mRd6TFmfXHiS6dCV9LFomYhk4l-EsD61Y3fY9ntzek3kJXV-rroM3WrDEBwVDlQnt2aGZ~7eRq3Hz0RXKhI4SW3lAY3K3llg6AJLcP7bwhK63t0E~X~cQHY7p6H~chZBeB3jcp6PgMAQBL0CTJWKcVHprVD4y7zzWQkHo9DSrrk2v067CSgWaso4H-fGMO492aBwqgb6Dv5rvpE97yq~v2nWPgNWa2lDjb3BOciZw7QBMKM7zOea7o8CEuKrcoxB19gg-VexJbC6SQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="elevate-your-travel">
                Elevate your travel experience by choosing these Hostels, where
                affordability meets quality and every guest is a valued part of our
                story
            </div>
            <img class="map-pin-icon1" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/39612bd4-3d65-4672-82d5-4b4e26b0b9a2_1696537187919295618?Expires=-62135596800&Signature=c84VPEeaGfo-VdjA9iTHrDP~vL1VBNlE6jdUhumZTkzx~MvFWbGAASM90gtgscVuy9rq~~y5rIYTKyP-Csc7HYmqIpAW28VaL5votbf3-G4vLWOT6k~bTZFRGyp-qmIO3wbuQIZfyoQrCY9-ThEdMTxB2Nz1hqYyeEBLJd9uFRLaphDrz~23Ry-fXxJ8R9co0pe~JQ9pTAYQizJ~ZOE7ekmeLzSV32m29EY27JbnXZXxkY-tLZvzVkpUNgQ4cOLnwtXVPqwxoPCFRwmSmzfSfgwPas69bFwzcsLJOOQud1hxO~GI3HxecbpRTvNjS6F8Utoe3Kb7btdEbi701PsiAw__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="line-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/7861c316-1bc8-48f1-862c-892f417681a7_1696537187919385280?Expires=-62135596800&Signature=M8jYhLjDpTCmd8x8HNQi53BU77d4cVizTKVu9j3aRcl~UwixgfMYR38nhOIKVUsrDAV3odvvrqJWTlyqCdCXuuwHdN45nNwxZ~c6KcL1eVhe9ayQLXx8-1qqeJT9A3p6XaforAK22sSImKAyQnl82n4JDySFuK9mqet-drXQUwSxYm-DH1S96kdklxiQthknuGAuolr4JqofqiETiA0hA7M8pzvTzRYWDwDTPVI44dvcTVixCldsLEDIHZEhL3v5a522--U4L6R7vW4wY3yDmXBHnGwR08B2Ya7xun3Mp6hmbpN~nH0vElLs96NcCdKIbWGwWy1bRLZsAos4lAcmxA__&Key-Pair-Id=K1P54FZWCHCL6J" />
        </div>

        <div class="contact-us" id="contact-us-section">

            <form id="contact-form" action="/hostel/home.php" method="post">
                <img class="contact-us-child" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/1fd4a3fa-82e7-49c4-a333-4bdb2d9d2241_1696553235260655530?Expires=-62135596800&Signature=Qwa1t-u7TZTW714UHV8zg8XyIqSSRulclUft2A0CvNDW5SYXS8eB7MdyORh5SrKV~u6UlrhX3pQNg1jbgyQ3OZqzQ0748padjhLkhH6m39nvu5b3SvZRoeTyA9c5hiSStdHXeww6-QLiQXHJctWigA0QDJm93eyLdp0YbSe9st1ULLWZLKRH4QD~qTy30-dRcc0YKr0n3he5L63ygnDa2qVf~C7Vp2EDoUoy0MEK~8uK0KOxzXQECV0jVQ5yBQAtqNQCngezo08Axm8jiNG~iqwBekim1l2ByHhuuQFWTkqcLy5CuC-204NkxTHeAJKB2nRmLByts8ZGgV1FklvB3w__&Key-Pair-Id=K1P54FZWCHCL6J" />

                <img class="cont-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/fa1ccaa4-278c-4f18-8dd2-83619d771134_1696553235260742191?Expires=-62135596800&Signature=fvOEpUZs2ztAIaX-KlBVtuqfqoMAW0h4upod4bBCwVFCcxxYcvtJUQ1kSQ6PhLi8xXpmVXKoLiwK2F3aiB0ZAFVfPKEspGi-UTHwEudZrdJNdHzDf2gP3SHjE2mQ-iAmnxof2nYhVENrm5SlaeJ-53DjiQ~jweuYG2TUPuMwsRIiqmlmoF9li2SJu2j680q6a0NMZfUjNVTqio3f3si2QRNxWuuXit3swytyq8TWJ6jqFtC7m7vgVvfql8p7T6iShcGf4zuY6WwQFvA-fvEgLoPWLgFcNjNrckao1i8cYaKNLIdZWPIb-Hh9YgE0Vp23VcCYC8OdnoWFfkG-Oz3riQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

                <div class="contact-us1">Contact Us.</div>
                <div class="need-to-get">
                    Need to get in touch with us? Either fill out the form with your
                    inquiry or find the department email you’d like to contact below.
                </div>

                <div class="black-box-parent">
                    <div class="black-box"></div>
                    <div class="group-child"></div>
                </div>

                <div class="contact-us-item">
                    <input type="text" id="search3" name="search3" class="input-text" required style="border: none; background: transparent;outline: none; font-size: medium;">
                </div>
                <div class="contact-us-inner">
                    <input type="email" id="search4" name="search4" class="" required style="border: none; background: transparent;outline: none; font-size: medium;">
                </div>
                <div class="contact-us-child1">
                    <input type="text" id="search5" name="search5" class="" required style="border: none; background: transparent;outline: none; font-size: medium;">
                </div>
                <div class="contact-us-child2">
                    <input type="text" id="search6" name="search6" class="" required style="border: none; background: transparent;outline: none; font-size: medium;">
                </div>
                <div class="first-name">First Name</div>
                <div class="last-name">Last Name</div>
                <div class="email">Email</div>
                <div class="what-can-we">What Can We Help You?</div>
                <div class="feedback-inner"></div>
                <div class="submit" id="Submit">
                    <input type="submit" class="login" id="type1" name="type" value="contact_us" placeholder="Submit" style="border: none; background: transparent;outline: none; font-size:x-large;"></input>
                </div>
            </form>
        </div>
        <div class="contact-us" id="feedbacksection">

            <form action="/hostel/home.php" method="post">

                <div class="black-box-parent">
                    <div class="black-box1"></div>
                    <div class="group-item"></div>
                </div>
                <div class="feedback-child">
                    <input type="text" id="search1" name="search1" class="" required style="border: none; background: transparent;outline: none; font-size: large;">
                </div>
                <div class="feedback-item">
                    <input type="email" id="search2" name="search2" class="" required style="border: none; background: transparent;outline: none; font-size: medium;">
                </div>
                <div class="first-name">Text area</div>
                <div class="email1">Email</div>
                <div class="feedback-inner"></div>
                <div class="submit">
                    <input type="submit" class="login" id="type1" name="type" value="feedback" placeholder="Submit" style="border: none; background: transparent;outline: none; font-size:x-large;"></input>
                </div>

                <div class="submit-your-feedback">Submit Your feedback!</div>
                <div class="your-comments-are">
                    Your comments are important for us and are crucial in helping us
                    provide the best service.
                </div>
        </div>
        </form>
    </div>

    <script>
        var log = document.getElementById("log");
        if (log) {
            log.addEventListener("click", function() {
                window.open("logout.php", "_self");
            });
        }



        var about = document.getElementById("about");
        if (about) {
            about.addEventListener("click", function() {
                window.open("www.google.com");
            });
        }

        var feedback = document.getElementById("feedback");
        if (feedback) {
            feedback.addEventListener("click", function() {
                var feedbackSection = document.getElementById("feedbacksection");
                if (feedbackSection) {
                    feedbackSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        }

        var contact = document.getElementById("contact");
        if (contact) {
            contact.addEventListener("click", function() {
                var contactSection = document.getElementById("contact-us-section");
                if (contactSection) {
                    contactSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        }

        var explore = document.getElementById("explore");
        if (explore) {
            explore.addEventListener("click", function() {
                var homepageSection = document.getElementById("homepagesection");
                if (homepageSection) {
                    homepageSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        }

        var royal = document.getElementById("royal");
        if (royal) {
            royal.addEventListener("click", function() {
                window.open("royalcare.php", "_self");
            });
        }

        var ashirwad = document.getElementById("ashirwad");
        if (ashirwad) {
            ashirwad.addEventListener("click", function() {
                window.open("ashirwad.php", "_self");
            });
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


</body>

</html>