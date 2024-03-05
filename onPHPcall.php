<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script>
    function doStuff()
    {
        console.log("<?php doingStuff() ?>");
    }
</script>

<body>
    <button onclick="doStuff()">Click to see Effect</button>

    <?php

function doingStuff()
{
    echo "I am oh";
    return "I am ok";
}
?>

    
</body>
</html>


<!-- here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSP</title>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Style sheet link -->
    <link rel="stylesheet" href="NewRegistrationStyle.css">
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/d19fd4286f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <style>
        body {
            background-color: #D9AFD9;
            background-image: linear-gradient(0deg, #e3d7e3 0%, #97D9E1 100%);


            background-repeat: no-repeat;
            font-family: 'Times New Roman', Times, serif;
            background-size: 100% 100%;
            background-attachment: fixed;
            padding: 0.5%;

        }


        .head {
            font-size: 4vw;
            font-family: 'Times New Roman', Times, serif;
            background: -webkit-linear-gradient(hsla(304, 89%, 48%, 0.555), rgb(11, 101, 122));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        .Mynavbar {
            margin-left: auto;
        }

        .hover-underline-animation {
            display: inline-block;
            position: relative;
            color: #6b6f71;
        }

        .hover-underline-animation:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #6b6f71;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hover-underline-animation:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .box {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            opacity: 0.9;

        }

        #avtarimg {
            max-width: 12%;
            max-height: 12%;
            display: block;
            border-radius: 50%;
            padding: 2%;
            margin-left: auto;
            margin-right: auto;
        }


        .data {
            margin-left: 1vw;
            margin-top: 2%;
        }

        .inputdata {
            width: 90%;
            height: 2.2rem;
        }

        #fname,
        #lname,
        #city,
        #state {
            width: 79%;
            height: 2rem;
        }

        #male,
        #female,
        #other {
            margin-left: 4px;
        }

        #bottom {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1vw;
            color: rgba(71, 67, 67, 0.642);
            margin-top: 12%;
        }

        .column {
            float: left;
            padding-left: 1.5%;
        }

        .left {
            width: 90%;
        }

        .right {
            width: 10%;
        }

        #password-field2,
        #password-field1 {
            width: 100%;
        }
    </style>
</head>
<!-- Body Start Here -->


<body onload="GenerateCaptcha();">
    <!-- <header>
  <h1 class="head  text-center">The Knowledge कट्टा</h1>
</header> -->
    <header>
        <nav class="navbar navbar-expand-sm  justify-content-end">
            <!-- Navbar text-->
            <!-- <span class="navbar-text text-left">
    Navbar text
  </span> -->
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="navbar.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="uploads.html">Uploads</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="Login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="AboutUs.html">About_Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="#">Contact_Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="#">FAQ</a>
                    </li>
                </ul>
            </div>

        </nav>


    </header>

    <!-- Registration form start Here -->
    <div>
        <div class="text-center head" style="font-size:3vw;">
            New Registration
        </div>
        <br>
    </div>

    <div class="box" style="margin-left: 15%;margin-right: 15%;">
        <img src="user.png" alt="Avtar" class="center" id="avtarimg">

        <!-- Registration Form -->
        <form method="post" onsubmit="return validateData()" action="Login.html">


            <div class="form-group">

                <div class="row">

                    <div class="col">

                        <!-- First name input field -->
                        <div class="data">
                            <label>First Name:</label><label style="color: red;">*</label>
                            <input type="text" class="form-control inputdata" placeholder="Enter First Name" id="fname"
                                oninput="isValidData('fname','fname_error')"
                                onfocusout="isEmptyField('fname','fname_error')">
                            <!-- first name Error msg -->
                            <small class="mandatory" id="fname_error"></small>
                        </div>
                    </div>


                    <div class="col">

                        <!--  input field -->
                        <div class="data">
                            <label>Last Name:</label><label style="color: red;">*</label>
                            <input type="text" class="form-control inputdata" placeholder="Enter Last Name" id="lname"
                                oninput="isValidData('lname','lname_error')"
                                onfocusout="isEmptyField('lname','lname_error')">
                            <!--Last Name Error msg -->
                            <small class="mandatory" id="lname_error"></small>
                        </div>
                    </div>
                </div>

                <!-- Mail ID input field -->
                <div class="data">
                    <label>Mail ID:</label><label style="color: red;">*</label>
                    <input type="text" class="form-control inputdata" placeholder="Enter Mail-ID" id="mail"
                        onfocusout="validateMailID('mail','mail_error')" oninput="validateMailID('mail','mail_error')">
                    <!-- Mail ID  Error msg -->
                    <small class="mandatory" id="mail_error"></small>
                </div>

                <!-- College or University input field -->
                <div class="data">
                    <label>Institution / University Name:</label><label style="color: red;">*</label>
                    <input type="text" class="form-control inputdata" placeholder="Enter Institution / University Name"
                        id="college" onfocusout="isEmptyField('college','college_error')" oninput="isValidInstitute()">
                    <!-- College Error msg -->
                    <small class="mandatory" id="college_error"></small>
                </div>

                <!-- Address input field -->
                <div class="row" style="padding-top: 5px;">

                    <div class="col">

                        <!-- State name input field -->
                        <div class="data">
                            <label>State:</label><label style="color: red;">*</label>
                            <input type="text" class="form-control inputdata" placeholder="State" id="state"
                                oninput="isValidData('state','state_error')"
                                onfocusout="isEmptyField('state','state_error')">
                            <!-- first name Error msg -->
                            <small class="mandatory" id="state_error"></small>
                        </div>
                    </div>


                    <div class="col">

                        <!-- City input field -->
                        <div class="data">
                            <label>City:</label><label style="color: red;">*</label>
                            <input type="text" class="form-control inputdata" placeholder="City" id="city"
                                oninput="isValidData('city','city_error')"
                                onfocusout="isEmptyField('city','city_error')">
                            <!--Last Name Error msg -->
                            <small class="mandatory" id="city_error"></small>
                        </div>
                    </div>
                </div>


                <div class="data">
                    <label for="education"> Highest Education:</label><label style="color: red;">*</label>
                    <select class="form-control inputdata" id="education"
                        onfocusout="isSelected('education','education_error')"
                        oninput="isSelected('education','education_error')">
                        <option value="select">Please Select</option>
                        <option value="SSC">SSC</option>
                        <option value="HSC">HSC </option>
                        <option value="Bachelor's">Bachelor's</option>
                        <option value="Master's">Master's</option>
                        <option value="PhD">PhD</option>
                        <option value="Other">Other</option>


                    </select>
                    <!-- Username Error msg -->
                    <small class="mandatory" id="education_error"></small>
                </div>

                <!-- Profession -->
                <div class="data">
                    <label for="profession">Profession:</label><label style="color: red;">*</label>
                    <select class="form-control inputdata" id="profession"
                        onfocusout="isSelected('profession','profession_error')"
                        oninput="isSelected('profession','profession_error')">
                        <option value="select">Please Select</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher / Professor </option>
                        <option value="Employ">Employ</option>
                        <option value="Other">Other</option>
                    </select>
                    <!-- Username Error msg -->
                    <small class="mandatory" id="profession_error"></small>
                </div>

                <!-- Gender -->

                <div class="data">
                    <label>Gender:</label><label style="color: red;">*</label>

                    <div class="form-check-inline">

                        <label class="form-check-label" for="male">
                            <input type="radio" class="form-check-input" id="male" name="gender" value="male"
                                oninput="isGenderChecked()">Male
                        </label>

                        <label class="form-check-label" for="female">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="female"
                                oninput="isGenderChecked()">Female
                        </label>

                        <label class="form-check-label" for="other">
                            <input type="radio" class="form-check-input" id="other" name="gender" value="other"
                                oninput="isGenderChecked()">Other
                        </label>
                    </div>
                    <br>
                    <!-- Username Error msg -->
                    <small class="mandatory" id="gender_error"></small>
                </div>


                <!-- password input field -->
                <div class="data ">
                    <label>Enter The Password:</label></label><label style="color: red;">*</label>
                    <div class="row">
                        <div class="column left">
                            <input type="password" class="form-control inputdata" id="password-field1"
                                placeholder="Enter Password" oninput="isStrongPass()" onfocusout="isStrongPass()">
                        </div>
                        <div class="col right">

                            <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password1"
                                style="font-size: 1.3vw;"></span>
                        </div>
                    </div>
                    <!-- password Error msg -->
                    <small class="mandatory" id="pass_error1">Password Should be strong (length should be at least 5
                        ,combination of upper,lower characters,numbers & Special symbol )</small>

                </div>

                <!-- confirm password input field -->
                <div class="data ">

                    <label>Confirm Password:</label></label><label style="color: red;">*</label>
                    <div class="row">
                        <div class="column left">
                            <input type="password" class="form-control inputdata" id="password-field2"
                                placeholder="Confirm Password" oninput="confirmedPass()" onfocusout="confirmedPass()"
                                onpaste="return false;">
                        </div>
                        <div class="col right">

                            <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password2"
                                style="font-size: 1.3vw;"></span>
                        </div>
                    </div>
                    <!-- password Error msg -->
                    <small class="mandatory" id="pass_error2"></small>
                </div>

                <!-- confirm password input field -->
                <div class="data ">
                    <label>Enter The Captcha:</label></label><label style="color: red;">*</label>
                    <div class="row">
                        <div class="column">
                            <input type="text" class="form-control inputdata" id="txtCompare"
                                placeholder="Enter Captcha" onfocusout="isEmptyField('txtCompare','captcha_error')"
                                onpaste="return false;">
                            <small class="mandatory" id="captcha_error"></small>
                        </div>

                        <div class="column">
                            <input type="text" id="txtCaptcha" class="form-control inputdata" readonly />

                        </div>

                        <div class="column">

                            <input type="button" id="btnrefresh" value="Refresh" onclick="GenerateCaptcha();"
                                class="btn btn-primary" />
                        </div>


                    </div>
                    <!-- password Error msg -->
                    <small class="mandatory" id="pass_error"></small>
                </div>

                <div class="data">
                    <div class="form-group form-check">

                        <input class="form-check-input " type="checkbox" id='cbox' oninput="isCheckBoxSelected()">I have
                        read and accept
                        <a href="#" title=""> Terms & Conditions</a>

                    </div>
                </div>

                <!-- Buttons -->

                <div style="border: 0px solid red;text-align: center;margin-bottom: 2%;">

                    <button type="submit" class="btn btn-success">Save & Continue</a>
                </div>
                <br>

            </div>

        </form>

    </div>
    <footer>
        <p ID="bottom" class="text-center">Copyright © 2022 Knowledge कट्टा -All Rights Reserved</p>
    </footer>
</body>



<!-- <script src="Registration.js"></script> -->
<script>

    function setError(id, error, id2) {
        document.getElementById(id).innerHTML = error;
        document.getElementById(id).style.color = "red";
        document.getElementById(id2).style.borderColor = "red";

    }

    function setCorrect(id1, id2) {
        document.getElementById(id1).innerHTML = "";
        document.getElementById(id2).style.borderColor = "blue";

    }

    // Validation for  first name,last name,city & state
    function isValidData(inputID, errorID) {

        let flag = isEmptyField(inputID, errorID);
        if (flag == false) {
            return false;
        }
        var regName = /^[a-zA-Z]+$/;
        let lname = document.getElementById(inputID).value
        if (!regName.test(lname)) {
            console.log("Invalid Data of", inputID);
            setError(errorID, "Please enter the valid data", inputID);
            return false;


        } else if (lname.length < 2) {
            console.log("Short lname");
            setError(errorID, "Length of data should be at least 2", inputID);
            return false;

        }
        else {
            console.log("Correct lname");
            setCorrect(errorID, inputID);
            return true;
        }
    }

    // Strong Password Check

    function isStrongPass() {


        let flag = isEmptyField("password-field1", "pass_error1");
        if (flag == false) {
            return false;
        }

        console.log("I got call")
        var regPass = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{6,12}$/;
        let pass = document.getElementById("password-field1").value

        if (!regPass.test(pass)) {
            console.log("Invalid pass");
            setError("pass_error1", "Please Enter The Strong Password", "password-field1");
            return false;

        } else {
            setCorrect("pass_error1", "password-field1");

            console.log("Valid pass")
            return true;
        }
    }

    // To confirmed the password 
    function confirmedPass() {

        let flag = isEmptyField("password-field2", "pass_error2");
        if (flag == false) {
            return false;
        }
        console.log("I got call with wrong pass")

        let pass1 = document.getElementById("password-field1").value
        let pass2 = document.getElementById("password-field2").value

        if (pass1 != pass2 || pass2 == "") {
            setError("pass_error2", "Password Not Matched ", "password-field2");
            return false;

        }
        else {
            setCorrect("pass_error2", "password-field2");
            return true;

        }
    }

    // To validate Institute name
    function isValidInstitute() {
        let flag = isEmptyField("college", "college_error");
        if (flag == false) {
            return false;
        }
        console.log("College data");
        var regName = /college|university|institute|school|academy/
        var name = document.getElementById('college').value;

        if (regName.test(name.toLowerCase())) {
            setCorrect("college_error", "college");
            console.log("Valid college name")

            return true;

        } else {
            console.log("inValid college name")
            setError("college_error", "Please Enter Valid College Name", "college");
            return false;

        }

    }
    // To Validate MAil ID
    function validateMailID() {

        let flag = isEmptyField("mail", "mail_error");
        if (flag == false) {
            return false;
        }

        console.log("mail id");
        var regName = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/
        var name = document.getElementById('mail').value;

        if (regName.test(name)) {
            setCorrect("mail_error", "mail");
            return true;

        } else {
            console.log("inValid mail")
            setError("mail_error", "Please Enter Valid Mail ID", "mail");
            return false;

        }

    }

    // To check whether input filed is empty or not
    function isEmptyField(inputID, errorID) {
        let data = document.getElementById(inputID).value

        if (data.length == 0) {
            console.log("Invalid Data of", inputID);
            setError(errorID, "Please Fill The Field", inputID);
            return false;
        }

        else {
            console.log("Correct data");
            setCorrect(errorID, inputID);
            return true;
        }
    }

    // Code for Drop down whether input is selected or not
    function isSelected(inputID, errorID) {
        var ddl = document.getElementById(inputID);
        var selectedValue = ddl.options[ddl.selectedIndex].value;
        if (selectedValue == "select") {

            document.getElementById(inputID).style.border = "1px solid red";
            document.getElementById(errorID).innerHTML = "Please Select The Option";
            document.getElementById(errorID).style.color = "red";
            return false;
        }
        else {
            document.getElementById(inputID).style.border = "1px solid blue";
            document.getElementById(errorID).innerHTML = "";
            return true;
        }

    }


    // To check does radio button of gender
    function isGenderChecked() {
        if (document.getElementById('male').checked) {
            document.getElementById("gender_error").innerHTML = "";
            return true;
        } else if (document.getElementById('female').checked) {
            document.getElementById("gender_error").innerHTML = "";

            return true;
        } else if (document.getElementById('other').checked) {
            document.getElementById("gender_error").innerHTML = "";
            return true;
        }
        else {
            console.log("Gender not selected");
            document.getElementById("gender_error").innerHTML = "Please Select The Option";
            document.getElementById("gender_error").style.color = "red";
            return false;
        }
    }

    function isCheckBoxSelected() {
        var confirm = document.getElementById("cbox");
        if (document.getElementById("cbox").checked) {
            console.log("selected cbox");
            confirm.parentNode.style.color = "black";

            return true;
        }
        else {

            console.log("plz selected cbox");
            confirm.parentNode.style.color = "red";

            return false;
        }
    }


    // This function get call at the time of form submission & check whether data is correctly fill
    function validateData() {


        let flag1 = isValidData('fname', 'fname_error');
        let flag2 = isValidData('lname', 'lname_error');
        let flag3 = isStrongPass();
        let flag4 = confirmedPass();
        let flag5 = isValidData('city', 'city_error');
        let flag6 = isValidData('state', 'state_error');
        let flag7 = validateMailID();
        let flag8 = isSelected('profession', 'profession_error');
        let flag9 = isValidInstitute();
        let flag10 = ValidCaptcha();
        let flag11 = isGenderChecked();
        let flag12 = isCheckBoxSelected();
        let flag13 = isSelected('education', 'education_error');

        if (flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7 && flag8 && flag9 && flag10 && flag11 && flag12 && flag13
        ) {
            alert("Congratulation ... Registration Successful")
            return true;
        }
        else {
            return false;
        }

    }



    //  To handle show password field
    $(".toggle-password1").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-password2").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    /* Function to Generat Captcha */
    function GenerateCaptcha() {
        var chr1 = Math.ceil(Math.random() * 10) + '';
        var chr2 = Math.ceil(Math.random() * 10) + '';
        var chr3 = Math.ceil(Math.random() * 10) + '';

        var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });
        var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;
        document.getElementById("txtCaptcha").value = captchaCode
    }

    /* Validating Captcha Function */
    function ValidCaptcha() {

        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('txtCompare').value);
        let flag = isEmptyField("txtCompare", "captcha_error");
        if (flag == false) {
            return false;
        }

        if (str1 == str2) {
            console.log("Valid captcha")
            return true;

        }
        else {
            console.log("Invalid Captcha")
            setError("captcha_error", "Please Enter The Valid Captcha", "txtCompare");
            return false;

        }
    }

    /* Remove spaces from Captcha Code */
    function removeSpaces(string) {
        return string.split(' ').join('');
    } 
</script>

<?php
function doStuff()
{
    return "php got call";
}
?>
</html>