form = document.getElementById("form-1");

document
  .getElementById("submit")
  .addEventListener("click", function validateForm() {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username == "" || password == "") {
      alert("Username or Password field cannot be empty");
      return false;
    }

    return true;
  });

function myFunction() {
  const password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}
