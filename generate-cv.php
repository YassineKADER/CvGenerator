<?php
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$profession = $_POST['profession'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$zip_code = $_POST['zip'];
$p_description = $_POST['description'];
$skill_name = array();
$skill_rate = array();
$lang_name = array();
$lang_level = array();
$exp_discription = array();
$exp_date = array();
$social_user = array();
$social_link = array();
$social_name = array();
$image_file = $_FILES["image"];
$image_location;
if (isset($image_file) && $image_file["name"] != "") {
    move_uploaded_file(
        $image_file["tmp_name"],
        __DIR__ . "/tmp/" . $image_file["name"]
    );
    $image_location = "./tmp/" . $image_file["name"];
} else {
    $image_location = "./images/guest.jpg";
}

$icons_array = array("Facebook" => 'fa-brands fa-facebook', "Instagram" => 'fa-brands fa-instagram', "Twitter" => 'fa-brands fa-twitter', "Linkedin" => 'fa-brands fa-linkedin', "Github" => 'fa-brands fa-github', "Discord" => 'fa-brands fa-discord', "Website" => 'fa-solid fa-browser');
foreach ($_POST as $x => $x_value) {
    if (str_contains($x, "Skill")) {
        array_push($skill_name, $x_value);
    } elseif (str_contains($x, "skillrate")) {
        array_push($skill_rate, $x_value);
    } elseif (str_contains($x, "language")) {
        array_push($lang_name, $x_value);
    } elseif (str_contains($x, "langlevel")) {
        array_push($lang_level, $x_value);
    } elseif (str_contains($x, "expe")) {
        array_push($exp_discription, $x_value);
    } elseif (str_contains($x, "expdate")) {
        array_push($exp_date, $x_value);
    } elseif (str_contains($x, "user")) {
        array_push($social_user, $x_value);
    } elseif (str_contains($x, "link")) {
        array_push($social_link, $x_value);
    } elseif (str_contains($x, "social")) {
        array_push($social_name, $x_value);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
            echo $first_name . "-CV";
            ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="style/style_css.css" />
    <script src="https://kit.fontawesome.com/8a0867621f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
</head>

<body>
    <style>
        .icon {
            color: #03a9f4;
        }
    </style>
    <div style="margin: 0 auto; width:200px">
        <a id="download">Download CV</a>
    </div>

    <div id="body">
        <div class="container" id="main">
            <div class="left-side">
                <div class="profiletext">
                    <div class="imgBx">
                        <img src=<?php echo '"' . $image_location . '"' ?>>
                    </div>
                    <h2><?php
                        echo $first_name . " " . $last_name . "<br><span>" . $profession . "</span>"; ?></h2>
                </div>
                <div class="contactInfo">
                    <h3 class="title">Contact Info</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa-solid fa-mobile" aria-hidden="true"></i></span>
                            <span class="text"><?php echo $phone ?></span>
                        </li>
                        <li style="width:250px;">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <span class="text"><?php echo $email ?></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span class="text"><?php echo $city . ", " . $adress . ", " . $zip_code; ?></span>
                        </li>

                    </ul>
                </div>
                <div class="contactInfo_education">
                    <h3 class="title">Education</h3>
                    <ul>
                        <?php
                        for ($i = 0; $i < count($exp_discription); $i++) {
                            echo "<li><h5>" . $exp_date[$i] . "</h5><h4>" . $exp_discription[$i] . "</h4></li>";
                        }
                        ?>

                    </ul>
                </div>
                <div class="contactInfo_language">
                    <h3 class="title">Language</h3>
                    <ul>
                        <?php
                        for ($i = 0; $i < count($lang_name); $i++) {
                            echo '<li><span class="text">' . $lang_name[$i] . '</span><span> ' . $lang_level[$i] . '</span></li>';
                        }
                        ?>

                    </ul>
                </div>
                <div class="contactInfo_language">
                    <h3 class="title" style="margin-top: 10px;">Social Media</h3>
                    <ul>
                        <?php
                        for ($i = 0; $i < count($social_user); $i++) {
                            echo '<li style="margin-top:5px;"><a href="' . $social_link[$i] . '" style="font-size:25px;" class="text ' . $icons_array[$social_name[$i]] . '"></a><span style="color:white;"> ' . $social_user[$i] . '</span></li>';
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="right-side">
                <div class="about">
                    <h2 class="title2">Profile</h2>
                    <p><?php echo $p_description ?></p>
                    <div class="skills">
                        <h2 class="title2">Skills</h2>
                        <?php
                        for ($i = 0; $i < count($skill_name); $i++) {
                            echo '<div class="box">
                        <h4>' . $skill_name[$i] . '</h4>
                        <div class="percent">
                            <div style="width:' . $skill_rate[$i] . '%" ;></div>
                        </div>
                    </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <script src="generated_cv.js"></script>
</body>

</html>