
function validateData() {
  
  let uname = document.getElementById("uname").value;
  let pass=document.getElementById("password-field").value;
  let flag=true;

  if(uname.trim()=="")
  {
    console.log("Error at uname err",pass);
    setError("u_error","Please fill the fields","uname");
    flag=false;
  }


  if(pass.trim()="")
  {
    console.log("Error at pass");
    setError("pass_error","Please fill the fields","pass");
    flag=false;
  }

  return flag;

}

function setError(id,error,id2)
{
 document.getElementById(id).innerHTML = error;
   document.getElementById(id).style.color = "red";
   document.getElementById(id2).style.borderColor = "red";

}

function setCorrect(id1,id2)
{
 document.getElementById(id1).innerHTML = "";
 document.getElementById(id2).style.borderColor = "blue";

}

// To handle show password field
$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
input.attr("type", "text");
} else {
input.attr("type", "password");
}
});
