
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

        if (flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7 && flag8 && flag9 && flag10 && flag11 && flag12 && flag13) {


   
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