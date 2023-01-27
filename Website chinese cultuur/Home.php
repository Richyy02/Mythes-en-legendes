<!DOCTYPE html>
<html lang="en" style="font-size: 16px;">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <meta content="" name="description">
    <title>Home</title>
    <link href="css/nicepage.css" media="screen" rel="stylesheet">
    <link href="css/Home.css" media="screen" rel="stylesheet">
    <?php
    require "mythes.php";
    ?>

</head>
<header class="u-body u-xl-mode" data-lang="en">
    <?php
    $mythe = "";

    foreach ($_GET as $key => $mythes) {
        $mythe = $key;
    }

    if (str_contains($mythe, "mythe")) {
        print("<header class='u-clearfix u-header u-header'>");
    } else {
        print("<header class='u-clearfix u-header u-header' style='background-color: #8d0000e6'>");
    }


    ?>
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item">
                    <?php

                    if (str_contains($mythe, "mythe")) {
                        print("<a class='TerugMythe' href='Nederlandse.html' style='padding: 10px 20px;'>Terug naar mythes</a>");
                        print("<button onclick='topFunction()' id='Scrollbtn' class='Scrollbtn' title='Go to top'>Terug naar boven</button>");
                    } else {
                        print("<a class='TerugMytheChina' href='Chinese.html' style='padding: 10px 20px;'>Terug naar mythes</a>");
                        print("<button onclick='topFunction()' id='Scrollbtn' class='Scrollbtnc' title='Go to top'>Terug naar boven</button>");
                    }

                    ?>
                    <div class="dropdown">
                        <button class="dropbtn">Font grote</button>
                        <select class="dropdown-content" onchange="font(this);" size="13">
                            <option value="0.5em">8</option>
                            <option value="0.75em">12</option>
                            <option value="0.875em">14</option>
                            <option value="1em">16</option>
                            <option value="1.125em">18</option>
                            <option value="1.25em">20</option>
                            <option value="1.375em">22</option>
                            <option value="1.5em">24</option>
                        </select>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Font</button>
                        <select class="dropdown-content" onchange="font(this);" size="13">
                            <option>Georgia</option>
                            <option>Palatino Linotype</option>
                            <option>Book Antiqua</option>
                            <option>Times New Roman</option>
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Arial Black</option>
                            <option>Impact</option>
                            <option>Lucida Sans Unicode</option>
                            <option>Tahoma</option>
                            <option>Verdana</option>
                            <option>Courier New</option>
                            <option>Lucida Console</option>
                        </select>
                        <div class="select_arrow">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
            </ul>
        </div>
    </div>
</header>

    <?php

    if (str_contains($mythe, "mythe")) {
        print("<section class='u-align-center u-clearfix u-section-1'>");
        print("<div class='u-clearfix u-sheet u-grey-5 u-sheet-1'>");
    } else {
        print("<section class='u-align-center u-clearfix u-section-1c'>");
        print("<div class='u-clearfix u-sheet u-grey-5c u-sheet-1'>");;
    }

    ?>
        <h2 class="u-text u-text-1"><?php

            if (isset($_GET["mythe1_x"])) {
                if ($_GET["mythe1_x"]) {
                    print(nederlandseMythe1(1));
                }
            }
            if (isset($_GET["mythe2_x"])) {
                if ($_GET["mythe2_x"]) {
                    print(nederlandseMythe2(1));
                }
            }
            if (isset($_GET["mythe3_x"])) {
                if ($_GET["mythe3_x"]) {
                    print(nederlandseMythe3(1));
                }
            }
            if (isset($_GET["mythe4_x"])) {
                if ($_GET["mythe4_x"]) {
                    print(nederlandseMythe4(1));
                }
            }
            if (isset($_GET["mythe5_x"])) {
                if ($_GET["mythe5_x"]) {
                    print(nederlandseMythe5(1));
                }
            }
            if (isset($_GET["mythe6_x"])) {
                if ($_GET["mythe6_x"]) {
                    print(nederlandseMythe6(1));
                }
            }
            if (isset($_GET["mythe7_x"])) {
                if ($_GET["mythe7_x"]) {
                    print(nederlandseMythe7(1));
                }
            }
            if (isset($_GET["legende1_x"])) {
                if ($_GET["legende1_x"]) {
                    print(chineseLegende1(1));
                }
            }
            if (isset($_GET["legende2_x"])) {
                if ($_GET["legende2_x"]) {
                    print(chineseLegende2(1));
                }
            }
            if (isset($_GET["legende3_x"])) {
                if ($_GET["legende3_x"]) {
                    print(chineseLegende3(1));
                }
            }
            if (isset($_GET["legende4_x"])) {
                if ($_GET["legende4_x"]) {
                    print(chineseLegende4(1));
                }
            }
            if (isset($_GET["legende5_x"])) {
                if ($_GET["legende5_x"]) {
                    print(chineseLegende5(1));
                }
            }
            if (isset($_GET["legende6_x"])) {
                if ($_GET["legende6_x"]) {
                    print(chineseLegende6(1));
                }
            }
            if (isset($_GET["legende7_x"])) {
                if ($_GET["legende7_x"]) {
                    print(chineseLegende7(1));
                }
            }

            ?></h2>
        <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <p id="font" class='u-align-justify u-text u-text-3'>
            <?php
            if (isset($_GET["mythe1_x"])) {
                if ($_GET["mythe1_x"]) {
                    print(nederlandseMythe1(0));
                }
            }
            if (isset($_GET["mythe2_x"])) {
                if ($_GET["mythe2_x"]) {
                    print(nederlandseMythe2(0));
                }
            }
            if (isset($_GET["mythe3_x"])) {
                if ($_GET["mythe3_x"]) {
                    print(nederlandseMythe3(0));
                }
            }
            if (isset($_GET["mythe4_x"])) {
                if ($_GET["mythe4_x"]) {
                    print(nederlandseMythe4(0));
                }
            }
            if (isset($_GET["mythe5_x"])) {
                if ($_GET["mythe5_x"]) {
                    print(nederlandseMythe5(0));
                }
            }
            if (isset($_GET["mythe6_x"])) {
                if ($_GET["mythe6_x"]) {
                    print(nederlandseMythe6(0));
                }
            }
            if (isset($_GET["mythe7_x"])) {
                if ($_GET["mythe7_x"]) {
                    print(nederlandseMythe7(0));
                }
            }
            if (isset($_GET["legende1_x"])) {
                if ($_GET["legende1_x"]) {
                    print(chineseLegende1(0));
                }
            }
            if (isset($_GET["legende2_x"])) {
                if ($_GET["legende2_x"]) {
                    print(chineseLegende2(0));
                }
            }
            if (isset($_GET["legende3_x"])) {
                if ($_GET["legende3_x"]) {
                    print(chineseLegende3(0));
                }
            }
            if (isset($_GET["legende4_x"])) {
                if ($_GET["legende4_x"]) {
                    print(chineseLegende4(0));
                }
            }
            if (isset($_GET["legende5_x"])) {
                if ($_GET["legende5_x"]) {
                    print(chineseLegende5(0));
                }
            }
            if (isset($_GET["legende6_x"])) {
                if ($_GET["legende6_x"]) {
                    print(chineseLegende6(0));
                }
            }
            if (isset($_GET["legende7_x"])) {
                if ($_GET["legende7_x"]) {
                    print(chineseLegende7(0));
                }
            }

            ?></p><br>
    </div>
</section>

</div>

</body>
<?php

if (str_contains($mythe, "mythe")) {
    print("<footer style='background-color: #1E4785'>");
} else {
    print("<footer style='background-color: #8d0000e6'>");
}

?>
<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<script>
    function font(selectTag) {
        var listValue = selectTag.options[selectTag.selectedIndex].value;
        document.getElementById("font").style.fontSize = listValue;
        var listValue2 = selectTag.options[selectTag.selectedIndex].value;
        document.getElementById("font").style.fontFamily = listValue2;
    }


    let Scrollbutton = document.getElementById("Scrollbtn");


    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 600) {
            Scrollbutton.style.display = "block";
        } else {
            Scrollbutton.style.display = "none";

        }
    }


    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


</script>

</html>
