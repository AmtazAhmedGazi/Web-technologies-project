form = document.getElementById("form-1");

document
  .getElementById("confirmPasswordBtn")
  .addEventListener("click", function validateForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    let hasUppercase = false;
    let hasLowercase = false;
    let hasNumber = false;

    if (password == "") {
      alert("Password field is empty");
      return false;
    }

    if (confirmPassword == "") {
      alert("Confirm Password field cannot be empty");
      return false;
    }

    if (password.length <= 7 || confirmPassword.length <= 7) {
      alert("Password length must be at least 8 characters");
      return false;
    }

    for (let i = 0; i < password.length; i++) {
      const char = password[i];
      if (char >= "A" && char <= "Z") hasUppercase = true;
      else if (char >= "a" && char <= "z") hasLowercase = true;
      else if (char >= "0" && char <= "9") hasNumber = true;
    }

    if (!hasUppercase || !hasLowercase || !hasNumber) {
      alert(
        "Password must contain at least one uppercase letter, one lowercase letter, and one number."
      );
      return false;
    }

    if (confirmPassword !== password) {
      alert("Password Doesn't match");
      return false;
    }

    alert("Password Change Successful");
    return true;
  });

function myFunction() {
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirmPassword");
  if (password.type === "password") {
    password.type = "text";
    confirmPassword.type = "text";
  } else {
    password.type = "password";
    confirmPassword.type = "password";
  }
}
