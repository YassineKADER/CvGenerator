<?php
$tmp_folder = glob("tmp/*");
foreach ($tmp_folder as $file) {
    if (is_file($file)) {
        unlink($file);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap include-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--include styling file-->
    <link rel="stylesheet" href="./style/cv-form-style.css">
    <!--font awsome include-->
    <script src="https://kit.fontawesome.com/8a0867621f.js" crossorigin="anonymous"></script>
    <title>CV GENERATOR</title>


</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" style="color:white;" href="#">
            <img src="images/logo.png" width="50" class="d-inline-block align-top" style="margin-left: 30px;border-radius: 50%;" alt="">
            Welcome! user
        </a>
    </nav>
    <div class="container" style="margin-bottom:20px ;width:100%;">
        <form action="generate-cv.php" method="post" enctype="multipart/form-data">
            <div id="personal-info">
                <div class="row">
                    <label for="inputname" style="font-size:30px;">Personal info</label>
                    <div class="form-group col-md-6">
                        <label for="inputname">First name</label>
                        <input type="text" class="form-control" name="fname" placeholder="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last name</label>
                        <input type="text" class="form-control" name="lname" placeholder="name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Phone number</label>
                        <input type="tel" class="form-control" name="phone" placeholder="212-456-7890.">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Profession</label>
                        <input type="text" class="form-control" name="profession" placeholder="student...">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Address</label>
                        <input type="text" class="form-control" name="adress" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity" placeholder="Agadir....">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" name="zip" id="inputZip" placeholder="8000">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="inputZip">Upload an image</label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                </div>
            </div>
            <div id="profeil-info">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="font-size:30px ;">Profeil</label>
                    <textarea class="form-control" placeholder="Description about yourself" name="description" rows="3"></textarea>
                </div>
                <div class="form-group" id="skills">
                    <label style="font-size:30px ;">Skills</label>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Skill name</label>
                            <input name="Skill0" type="text" class="form-control" placeholder="Full stack engineer">
                        </div>
                        <div class="col-md-8">
                            <label>Skill-rate</label>
                            <input type="range" class="custom-range" id="customRange2" style="display: block;width:100%;" value="100" name="skillrate0">
                        </div>
                    </div>

                </div>
                <label id="add-skill" class="btn btn-secondary" style="margin-top:10px;">Add another skill</label>
                <div class="form-group" id="language">
                    <label style="font-size:30px ;">Languages</label>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Language</label>
                            <input type="text" class="form-control" name="language0" placeholder="Arabic...">
                        </div>
                        <div class="col-md-6">
                            <label>Level</label>
                            <select id="inputState" class="form-control" name="langlevel0">
                                <option>Native</option>
                                <option>Intermediate</option>
                                <option>Beginner</option>
                            </select>
                        </div>
                    </div>
                </div>
                <label id="add-lang" class="btn btn-secondary" style="margin-top:10px;">Add another language</label>
            </div>
            <div id="exp-info">
                <label for="exampleFormControlTextarea1" style="font-size:30px ;display:block;">Experiences & Educations</label>
                <div id="app-info">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Exeprience | education</label>
                            <input type="text" class="form-control" name="expe0" placeholder="Describe your experience">
                        </div>
                        <div class="col-md-4">
                            <label>Date</label>
                            <input type="date" name='expdate0' class="form-control">
                        </div>
                    </div>
                </div>
                <label id="add-exp" class="btn btn-secondary" style="margin-top:10px;">Add another one</label>
            </div>
            <div id="social-info">
                <label for="exampleFormControlTextarea1" style="font-size:30px ;display:block;">Social links</label>
                <div id="soc-info">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Username</label>
                            <input type="text" class="form-control" name="user0" placeholder="user">
                        </div>
                        <div class="col-md-6">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link0" placeholder="Account link">
                        </div>
                        <div class="col-md-4">
                            <label>social media</label>
                            <select id="inputState" class="form-control" name="social0">
                                <option>Facebook</option>
                                <option>Instagram</option>
                                <option>Twitter</option>
                                <option>Linkedin</option>
                                <option>Github</option>
                                <option>Discord</option>
                                <option>Website</option>
                            </select>
                        </div>
                    </div>
                </div>
                <label id="add-social" class="btn btn-secondary" style="margin-top:10px;">Add another social link</label>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Accept terms and arguments
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>
    <script src="app.js"></script>
    

</body>

</html>