function validate(){
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var name = "Rohan Rajendra";
    if(!regName.test(name)){
      console.log("Invalid name");
        return false;
    }else{
       console.log("Valid name")
        return true;
    }
}

validate();