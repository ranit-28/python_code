
function MatchPass()  //To check whether password matches or not
{
    let pass1 = document.getElementById("password-field1").value
    let pass2 = document.getElementById("password-field2").value

    if (pass1 != pass2 ) {
        setError("pass_error2", "Password Not Matched ", "password-field2");
        return false;

    }
    else {
        setCorrect("pass_error2", "password-field2");
        return true;

    }

}

function CheckPass()  //To check whether password is strong or not
{
    var regName = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{6,12}$/;
    let pass = document.getElementById("password-field1").value

   
        if (!regName.test(pass)) {
            console.log("Invalid pass");
            setError("pass_error1", "Please Enter The Strong Password", "password-field1");
            return false;

        } else {
            setCorrect("pass_error1", "password-field1");

            console.log("Valid pass")
            return true;
        }

}
// To Validate MAil ID
function validateMailID() {
    console.log("mail id");
    var regName = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var name = document.getElementById('mailid').value;

    if (regName.test(name)) {
        setCorrect("mail_error", "mailid");
        document.getElementById("otp").disabled = false;
        document.getElementById("otp_btn").disabled = false;
        document.getElementById("mail_btn").value = "Resend OTP";


        alert("OTP is shared to your mail ID");


    } else {
        console.log("inValid mail")
        setError("mail_error", "Invalid Mail ID", "mailid");

    }
}

// To validate OTP
function checkOTP() {

    let OTP = document.getElementById("otp").value;

    if (OTP == "1234") {
        console.log("I got call with correct OTP");
        setCorrect("otp_error", "otp");
        document.getElementById("password-field1").disabled = false;
        document.getElementById("password-field2").disabled = false;
        document.getElementById("continue_btn").disabled = false;

    }
    else {
        console.log("I got call with wrong OTP");
        setError("otp_error", "Invalid OTP", "otp");

    }
}


    // To check whether password is strong or not
    function isStrongPass() {
        let pass = document.getElementById("password-field1").value;
        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{6,12}$/;
        return re.test(pass);
    }

// To handle show password field
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

function setError(id, error, id2) {
    document.getElementById(id).innerHTML = error;
    document.getElementById(id).style.color = "red";
    document.getElementById(id2).style.borderColor = "red";

}

function setCorrect(id1, id2) {
    document.getElementById(id1).innerHTML = "";
    document.getElementById(id2).style.borderColor = "blue";

}

function validateData()
{
    // if(MatchPass()&&CheckPass())
    // {
    //     alert("Do you want to continue");
    // return true;

    // }
    // else
    // {
    //     alert("Please Fill The Fields");
    // return false

    // }
}