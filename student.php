<?php
include 'partials/_dbconnect.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
}

$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);
//$num = mysqli_num_rows($result);
//echo $_SESSION['email'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global/global6.css" />
    <link rel="stylesheet" href="index/index6.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Medula One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh Sans:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Balsamiq Sans:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monomaniac One:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@700&display=swap" />
</head>

<body>
    <div class="frame-parent">
        <div class="vector-parent">
            <img class="frame-child" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/709803bc-d135-4326-be4a-2c69ab25f12b_1697046878398405293?Expires=-62135596800&Signature=K7UIF6HHPuJgwsZxGEFKz48dE8ZX6E1MjBp1nE1aKKdTgoRMH9YeCcX11G1XWb241BSVaq3XDIbuBwXVMUGDbplZokVpH24zzFNxYWhLkENfic3xi3VRlKeJtcdI6yHcXbD7L~QVLIPsYVZpER46atD0hVWraP1gWWZTCNZkmpPM1PvKElwCDtnjJA3LPViwmSbI1~-tM7on-iGJBvBzT4vZjX21PPATXYJAFMXO61y3-aZf-mjuuzlifV8JDM5vmVckiEa8sgt7vW2kDtVYhVQM-5WcW9AAS71xaW3ctP5GCBLLbEt5d-T6tLQSedHtC74aUwFkrSqPLWUk61TJHg__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="text">
                <div class="gotilo">Gotilo.</div>
                <div class="a-better-choice">A BETTER CHOICE</div>
            </div>
            <div class="home" id="home">HOME</div>
            <img class="frame-item" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/1773e009-dc71-4040-9fca-feb0c7c7b0fb_1697046878398592208?Expires=-62135596800&Signature=sIYX6-J~oqv8AzYhlLK8tsDfNOjsG4-AiWZNB1JH8SRiBn7z5VZSm8ooWLUNVnljtla~vEDATAqPlyG764Nx3~NPaIIOmk5vFEazewEuv4paoHMa8PDeojFIZZmgdmUshBaELiF2RkRu0TmwXmro3QveA6P19zPLmenrcFKquqeYQryrtSbmG7~IxoL9jakuucJYiGW3XoKAZpcJNxrpMs8h9r8UpefnxKALJK1owapcGQMExpy-8XfOemLD~Xn3oM7g-KoCdRW1s0nZfmpaND66-MEnW7Fn2aa55yTX0qlzxC7LBsWTrwUY-4xzU7PE4bZSJlSjUHJjQa7p4MHpNQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="frame-inner" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/4f81186b-747b-44a1-be6b-cd69ced3b84a_1697046878398693847?Expires=-62135596800&Signature=JiUeKEUZU4tNTZ4w8LsoGM5XG1DwxZyFeZTpylF4HbMBBBU6Fe3~DDvODLqtoNCY1qaY008-9u5fPqcW30qQHTUykaHI~bq3E-RUajlwEKUBu-y8rzQNsR9JOAvctNmSQckxHfRnxDpevgcB8IDjK3KhqE8Yg7HuyXA8TBcaEPLmEQNqD4kttoz9E-~AO8ErAgePg4RjxjqvaWqUJ3IOp-R3FULBF~fqCRSUFBcf4xJdG0x-ZBEX~VWKOWVFEReuu669HpaCF7LKbDiSb570IiELTCHKf3ZXMizkl-OMo~eFuZyKtHWIRBV0aG51rmGWva5fWn8IOpbbko9LkxIW1g__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="student-details">Student Details</div>
            <div class="here-you-can">
                “Here, you can find essential details about your stay, room
                allocation, and important hostel information. Please explore the page
                for all the resources you need during your stay with us. Manage your
                hostel experience with ease, all in one place."
            </div>
            <div class="rectangle-div"></div>
            <div class="explore-details" id="explore">Explore Details</div>
            <img class="arrow-right-circle-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/c031cda7-a30b-4b13-977c-d0ee16aca108_1697046878398791052?Expires=-62135596800&Signature=NY8mivNV91oIJChidbIyKdjTij57~wRXwB2gm2~U1e-atVUZTkbzWuW4GKB0nI6ln6RC2wSOn7lEVfnLWuNQFM9YGDKXIG4iKjPx0TEb7yor7WXjl~SR5J0ae-CT~y-QhqxZ6TEPj-uBd0jxaa0KPL2Deckx4CFxMatEHH0ZdkWnmux-6Hxz0OTe4PtoCmARpyoufBQFeKnX4Xh9Qju~xVY2i~qaHDWAIGlkh9sRH5CLx~3cdObL-3CzFJlMIHX23kIbOArLfXWpwLu36N80Cv4wWVBtoaSTmGVIJ6EY69DhYCUp2yTFZhV~vhxpqc39DX-s26v~MJ84cFe2zEI8tA__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="group-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/10362921-da28-49dc-b630-70b92edd9944_1697046878398880537?Expires=-62135596800&Signature=sE9l8H3kJhmUbmVNONtxV5lTx8QHbBsBsX0kPPzHzJsaWWQydjTEQMWs6~QhHiWAYE~7-QMxjALYSmfq~mW32LeH-8EXlVl01IlC8XO1-rQlf2lBeRa67uZreN6IsTUnUzr12JKSn5UrSSy3OeZC7GMxrpVG4CP7AX~ZjMp8vqzcw0XCODAHq38iPqDwxdJLLWPnwVw0W~NqNT0z2Oo0lG~JYopVkjMHP5hpVVxVu2g-QQG9UjLAgy6k1OCWLGUUMvUWC4wdnZ43L9U-a3RD-vx~Rcu0e05FzG6ba4B8r47dmUFP4LtEqb1tzfu9Lusws0ByTK2fpfnk3xbJlEX~Qw__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="frame-child1" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/10362921-da28-49dc-b630-70b92edd9944_1697046878398880537?Expires=-62135596800&Signature=sE9l8H3kJhmUbmVNONtxV5lTx8QHbBsBsX0kPPzHzJsaWWQydjTEQMWs6~QhHiWAYE~7-QMxjALYSmfq~mW32LeH-8EXlVl01IlC8XO1-rQlf2lBeRa67uZreN6IsTUnUzr12JKSn5UrSSy3OeZC7GMxrpVG4CP7AX~ZjMp8vqzcw0XCODAHq38iPqDwxdJLLWPnwVw0W~NqNT0z2Oo0lG~JYopVkjMHP5hpVVxVu2g-QQG9UjLAgy6k1OCWLGUUMvUWC4wdnZ43L9U-a3RD-vx~Rcu0e05FzG6ba4B8r47dmUFP4LtEqb1tzfu9Lusws0ByTK2fpfnk3xbJlEX~Qw__&Key-Pair-Id=K1P54FZWCHCL6J" />
        </div>
        <div class="vector-group" id="vector">
            <img class="frame-child" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/5cc7d3e6-d6fa-4ed7-9790-e64234a5269e_1697046878399059015?Expires=-62135596800&Signature=NyNoHHXNtlauxIJh5tQDJVFwUOAJAq~K0ilKV8B1ANR62ayUDGufv3dn1tM9M7S-zAH8l2BNsmgedQnXhNUZm1Y7QrpP~3Guq9eL0SbzNa3X5DrRGAXGQm-kgy1NrgwVOOlBqZ~Vo3y4MWpbyMGmEumrxaOLISolO9Pq51jWPIOnruxjCH1nQHf~EkGibPuNbF8apxjlfs-n4WKsPhl3qFY~kdNvPzJg9ZNpbkKELSlWtbhx2yq3CN50JMlhHsHGZB1h6XFmTK60g-sTvHoOMblGs9LFQbW65CC9JcVwVOdgT2tPhlovttnYjeWJkRSP~mv2uP-XdBoX6p9AJPovNg__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <div class="text1">
                <div class="gotilo">Gotilo.</div>
                <div class="a-better-choice">A BETTER CHOICE</div>
            </div>
            <div class="frame-child2"></div>
            <div class="line-div"></div>
            <div class="email">
                <div class="email-child"></div>
                <div class="email1">
                    <b class="department" style="font-weight: lighter;">Department : <?php
                                                                                        $result = mysqli_query($conn, $sql);
                                                                                        $num = mysqli_num_rows($result);
                                                                                        if ($num > 0) {
                                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                                if ($row['email'] == $_SESSION['email']) {
                                                                                                    echo $row['deparment'];
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                        ?></b>
                </div>
            </div>
            <div class="frame-child3"></div>
            <div class="email2">
                <div class="email-child"></div>
                <div class="email1">
                    <b class="phone" style="font-weight: lighter;">Phone No. : <?php
                                                                                $result = mysqli_query($conn, $sql);
                                                                                $num = mysqli_num_rows($result);
                                                                                if ($num > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                        if ($row['email'] == $_SESSION['email']) {
                                                                                            echo $row['phone'];
                                                                                        }
                                                                                    }
                                                                                }
                                                                                ?></b>
                </div>
            </div>
            <div class="email4">
                <div class="email-child"></div>
                <div class="email1">
                    <b class="id" style="font-weight: lighter;">College ID : <?php
                                                                                $result = mysqli_query($conn, $sql);
                                                                                $num = mysqli_num_rows($result);
                                                                                if ($num > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                        if ($row['email'] == $_SESSION['email']) {
                                                                                            echo $row['id'];
                                                                                        }
                                                                                    }
                                                                                }
                                                                                ?></b>
                </div>
            </div>
            <div class="frame-child4"></div>
            <div class="email6">
                <div class="email-child"></div>
                <div class="email1">
                    <b class="name" style="font-weight: lighter;">Name : <?php
                                                                            $result = mysqli_query($conn, $sql);
                                                                            $num = mysqli_num_rows($result);
                                                                            if ($num > 0) {
                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                    if ($row['email'] == $_SESSION['email']) {
                                                                                        echo $row['name'];
                                                                                    }
                                                                                }
                                                                            }
                                                                            ?></b>
                </div>
            </div>
            <div class="frame-child5"></div>
            <div class="email8">
                <div class="email-child"></div>
                <div class="email1">
                    <b class="fees" style="font-weight: lighter;">Fees : <?php
                                                                            $result = mysqli_query($conn, $sql);
                                                                            $num = mysqli_num_rows($result);
                                                                            if ($num > 0) {
                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                    if ($row['email'] == $_SESSION['email']) {
                                                                                        echo $row['fees'];
                                                                                    }
                                                                                }
                                                                            }
                                                                            ?></b>
                </div>
            </div>
            <div class="frame-child6"></div>
            <div class="email10">
                <div class="email-child"></div>
                <div class="email1">
                    <b class="electricity" style="font-weight: lighter;">Electricity bill: <?php
                                                                                            $result = mysqli_query($conn, $sql);
                                                                                            $num = mysqli_num_rows($result);
                                                                                            if ($num > 0) {
                                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                                    if ($row['email'] == $_SESSION['email']) {
                                                                                                        echo $row['bill'];
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            ?></b>
                </div>
            </div>
            <div class="frame-child7"></div>
            <b class="student-details1">
                <?php
                //     include 'partials/_dbconnect.php';
                //     $sql = "SELECT * FROM student";
                //     $result = mysqli_query($conn, $sql);
                //     $row = mysqli_fetch_assoc($result);
                //     // $check = "SELECT * FROM student WHERE email='$email' ";
                //     // if($email == )
                //     // echo $row['name'];
                // while ($row['email'] != $_SESSION['email']){

                // }
                // echo $row['name'];
                ?>
                Student Details
            </b>
            <img class="user-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/31cfbae1-608a-48fd-9f69-8b9d07bccd05_1697046878399143589?Expires=-62135596800&Signature=FlUyLxE9kx3kZsm0ZQeXhUsveeIalwMosUd46PsHtNXNtTZ~bpv8sUvxnogRGyos8QePpDiNji9eF5kPiVBvxuL6NRNxFo~xC0zV3cL055tq6AVvDU6QUXtpnHfIvwro4QurSM~sos8pGCjLtKKYwDE5IWSxpCzbdeiqgWwa9GNaiBY8GWcxah3nmibeM2Al~FCTX4qbMtoB-fkOyT6i~9yEL0a6TaQa7KE3ox3emeSREEjnGWqxEGO42L4iSq2Sa0gVxxgYUUao-4ioqBvGLIFyOpURf0xQ44ut6X0bIgZZNBxtGODP1XkTlofZht3g9DqkRASVx8v1HlZ213urFQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="identification-documents-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/d6777bd8-c49e-429c-a2f8-934de68c4c37_1697046878399239821?Expires=-62135596800&Signature=FVlBdpYZl1HjKcotT8b4z4fbebChG~tlKu5KraU-fO4TTvYxPrtiQsS9UsMIU35vrHewSMhtapMEZg4XSaWqnEABWYrlBIjjd~oXK5am6nugQAYW06JUU3NH0UqHlnTCLt1mtZUB3kYA8lDLhNYVevnBxC6KeoYKKrTrGcbZoXs6yDpFdsqKRqLDp3BVbaJZ0sb-BeBDkguqGSrR4r0wSuciTU3YJI8C0mJrqC8qW6RfGgc0qHl1-sYQbuw06ojlxgIok3IDyc0HpwPrSVanBteYODFveWvbJ4DUW1OFRtKku58-VWAQVJ2dND3-W47hPZPg5LMeslN8JXNy5UwWNw__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="department-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/801b08ee-ac4e-464a-94b4-7056c26d789f_1697046878399494141?Expires=-62135596800&Signature=wY6y61S2ojL7hMjF~oKMWetFQSil969e1JDnbZjxb3xsxRQU9Bu8mExVF8arUnn9oqi3bPfFUqyKArVieG9LqdmsJiChwU1FKj4IrbTn3EP43yjdlMz~eh04fLO6dhXZAn6cf~S-GtkUV6x9CwOkJWDOpQrG0~YYXBDtMUjF7I5hPUwS-R8nmybnHe~igNB0CWMjQf3R6~hobpyw2lqCGq7gadShU32q9pRqRIcM90YtLSVznH8iCL~5~mIRX7XOFiHWzkc265Syccrd21E5mO1mfG0~-IJSHP~J64FXsbqvC0R~5MNa3~OmOXXcQBIDb5LOGvlBypoBjbLn4jtmmQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="bill-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/d299a2cf-bb50-45dc-ae23-bd697fae5eb8_1697046878399324235?Expires=-62135596800&Signature=dUX8OEwXocfe1ypjS-fREI7REYGoQtHTRlR4XNCXADpUIbOiFnWh3DYBQfwq4cdfaKCT0l51XoSnyIAHYYIZTqkdYkPWfdu6mb9vbqYKgTsKisU2xGvyMFt54DYT-hKzoprwmaI~PeEWDgp4el5c2SeYL1jofvUb-zjPCSPL0np4~KsL3MknwbWt0D-kgsNZgXKMi9taFrLqvoAih42Lmmn82mH1bRfsjf850mpZMkOHU8GffSs2nRuw-YOQLtOKrMUB5LBQYGvfIpXRSqY9ZIfQfxrQTeZCU~pMm7k7Z~p8-b6otmIfmnP9RhZ-sQfRFS-ytaumrIhjAHTd0gFSFg__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="vector-icon" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/554251b3-0c0b-4d31-a663-b88983488448_1697046878399581424?Expires=-62135596800&Signature=oi~CoZ6cUqVYeR~-0ADwRi4fpd5vf4zW3Tk6HTIHRXpST8FQuzpTd0qOCcWcjGn5O79qZgx-oNgt1PAAeCylGc88AHqyNSQYPVyx8g0HXuAlI-AwEbUxgKU1NGYD10Vy5UX3IuJVG~3GyW7XahB36975vjyNlzM5jl8x2TanudsXdOIWDdbg2NR0po6hdZx20aTF0Xfx8Ke6FHynnV3o4gpDWAHlQASNm-gZtvodyg1kDyqLsm~J-LoES-ksO3pTdmZYG4zd6-5T9p7k0e3hRjyLm9BBVFfVWypVd6NJZPsrwhWSuGqpA2KQxLM38VPgGkQKplQ9cHaJlOUjBOh3xQ__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="stack-of-money" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/3479b923-0932-4fbe-8124-d5ae36d1737e_1697046878399408584?Expires=-62135596800&Signature=Btf6GPGLPMB4hM~QaVtzGY2c8rN0H2Hap9VH9O9nuovG74h2xAgXMsAV6hKkWkYZB-EMTFldZ5j-WoW2vf0nkt-dRYc-Ex0pyqq2lffg8SuxDlPmQihOEi2Adpz~Rd0kdkSQkR7UewE4Kv3NH6UujuJYNDnqeG61mRRGbJssDm9rd3UCQpDk1H2e2fTJ2oCHzoLshGdIjSmo6MzZM8fLUDyK06lXctmhXbnbzCPlBOrefMVKEejWkgK277zMuGMMwxNne3JBYN8UpfhxpjfQfVFmCs8TEl6aSCZEg~xHTDy~GldVJkLe68rxz8YWWl38qBpdFLL48f-c3KEUqPkydA__&Key-Pair-Id=K1P54FZWCHCL6J" />

            <img class="frame-child8" alt="" src="https://d1xzdqg8s8ggsr.cloudfront.net/651f1a2e4d493ebdb3053947/d9be486a-809c-4f18-a80e-d731bc0f4a19_1697046878399653764?Expires=-62135596800&Signature=MQzUoTJlSxOkk90khHll-jgE8~e8vG4GqYUExoUxrWjsMiH0W2BgQAp74JqmXz49tA7queqotzXaqBGQYpw5KIvIsI2mGv3TBdWxR7ZObg-qt3HQfD-Csu-MKksUPIrdmFflEAUbPrMJzyvfXxAMBCY~ZvyKuUpvAKsq~b5jJTaP4ukltJSq6HpLRGfqy4yZ0RcvE8LPIXDZbDJ0QoYstclnx1oVC6ZE3fU2G35Vfb~~DorDjrhaS0aHMqDSv8ySHP~Vk-jZo-7FxdhhdRpcCHiu1z0~38AYps7CKbvqXYsTHlG6O2dh8skakwvnWvq~DAXJBnG2K0JrnyZMjdtyIA__&Key-Pair-Id=K1P54FZWCHCL6J" />
        </div>
    </div>

    <script>
        var contact = document.getElementById("explore");
        if (explore) {
            explore.addEventListener("click", function() {
                var contactSection = document.getElementById("vector");
                if (contactSection) {
                    contactSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        }

        var home = document.getElementById("home");
        if (home) {
            home.addEventListener("click", function() {
                // window.open("home.php");
                window.open("home.php", "_self");

            });
        }
    </script>


</body>

</html>