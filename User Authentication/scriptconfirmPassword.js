form = document.getElementById("form-1");

document
  .getElementById("confirmPasswordBtn")
  .addEventListener("click", function validateForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    if (confirmPassword == "") {
      alert("Confirm Password field cannot be empty");
      return false;
    } else if (password == "") {
      alert("Password field missing");
      return false;
    }

    if (confirmPassword != password) {
      alert("Password Doesn't match");
      return false;
    }

    if (password.lenght <= 7) {
      alert("You can not save this Password ");
      return false;
    }

    alert("Password Change Successful");
    form.action = "login.html";
    form.submit();
  });
