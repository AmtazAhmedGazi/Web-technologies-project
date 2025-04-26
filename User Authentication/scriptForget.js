form = document.getElementById("form-1");

// FORGET PASSWORD PAGE
document
  .getElementById("forgetBtn")
  .addEventListener("click", function validateForm() {
    const email = document.getElementById("email").value;

    if (email == "") {
      alert("Email cannot be empty");
      return false;
    }
    alert("Code sent to email");
    form.action = "otp.html";
    form.submit();
  });
