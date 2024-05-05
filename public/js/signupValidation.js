document.getElementById("signup").addEventListener("click", validation);

function validation(){
    alert("In function");
    var name = document.getElementById("name").value;
    alert(name);
    var nameRegex = /^[a-z A-Z]+$/;
    if(!nameRegex.test(name)){
        alert("Invalid Name");
        return false;
    }

    var email = document.getElementById("email").value;
    var emailRegex = /^[a-zA-Z0-9_]+@[a-zA-Z]{4,6}\.[a-zA-Z]{2,4}$/;
    if(!emailRegex.test(email)){
        alert("Invalid Email");
        return false;
    }
    else{
        alert("Valid Email");
    }

    var password = document.getElementById("password").value;
    

    // var cnic = document.getElementById("cnic").value;
    // var cnicRegex = /^[0-9]{5}+-[0-9]{7}+-[0-9]{1}$/;
    // if(!cnicRegex.test(cnic)){
    //     alert("Invalid CNIC");
    //     return false;
    // }
    // else(
    //     alert("Valid CNIC")
    // )

    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;

    
}