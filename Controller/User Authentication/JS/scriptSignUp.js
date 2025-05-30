form = document.getElementById("form-1");

document
  .getElementById("submit")
  .addEventListener("click", function validateForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const email = document.getElementById("email").value;
    const username = document.getElementById("username").value;

    const atSymbolIndex = email.indexOf("@");
    const dotSymbolIndex = email.indexOf(".", atSymbolIndex);

    for (let i = 0; i < username.length; i++) {
      const char = username[i];
      const isLetter =
        (char >= "a" && char <= "z") || (char >= "A" && char <= "Z");
      const isDigit = char >= "0" && char <= "9";
      const isUnderscore = char === "_";

      if (!isLetter && !isDigit && !isUnderscore) {
        alert("Username can only contain letters, numbers, and underscores");
        return false;
      }
    }

    let hasUppercase = false;
    let hasLowercase = false;
    let hasNumber = false;

    for (let i = 0; i < password.length; i++) {
      const char = password[i];
      if (char >= "A" && char <= "Z") hasUppercase = true;
      else if (char >= "a" && char <= "z") hasLowercase = true;
      else if (char >= "0" && char <= "9") hasNumber = true;
    }

    if (email == "") {
      alert("Email cannot be empty");
      return false;
    } else if (!email.includes("@")) {
      alert("Please enter a valid email");
      return false;
    } else if (
      atSymbolIndex === -1 ||
      dotSymbolIndex === -1 ||
      dotSymbolIndex < atSymbolIndex
    ) {
      alert("Please enter a valid email address ");
      return false;
    } else if (username == "") {
      alert("Username cannot be empty");
      return false;
    } else if (username[0] >= "0" && username[0] <= "9") {
      alert("Username must not start with a number");
      return false;
    } else if (username[0] === "_") {
      alert("Username must not start with _");
      return false;
    } else if (username.length <= 3) {
      alert("Username must be more than or Equal 4 characters long");
      return false;
    } else if (password == "") {
      alert("Password field missing");
      return false;
    } else if (confirmPassword == "") {
      alert("Confirm Password field cannot be empty");
      return false;
    } else if (!hasUppercase || !hasLowercase || !hasNumber) {
      alert(
        "Password must contain at least one uppercase letter, one lowercase letter, and one number."
      );
      return false;
    } else if (confirmPassword != password) {
      alert("Password Doesn't match");
      return false;
    } else if (password.lenght <= 8) {
      alert("Password length must be at least 8 ");
      return false;
    } else {
      alert("Account Creation Successful");
      return true;
    }
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
