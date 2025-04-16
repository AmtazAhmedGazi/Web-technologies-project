document.getElementById("loginBtn").addEventListener("click",function validateForm(){
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    
    if (email.length == 0) {
      alert("Email cannot be empty");
      return false;
    }
    else if(password == "" ){
    alert("Password field missing");
    return false;
    }
    alert("Registration Successful");
    return true;
}
)
