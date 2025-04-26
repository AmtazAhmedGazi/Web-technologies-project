form = document.getElementById("form-1");

document
  .getElementById("submitBtn")
  .addEventListener("click", function validateForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const email = document.getElementById("email").value;
    const username = document.getElementById("username").value;

    if (email == "") {
      alert("Email cannot be empty");
      return false;
    }

    if (username == "") {
      alert("Username cannot be empty");
      return false;
    }

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
    form.action = "otpeEmail.html";
    form.submit();
  });
