form = document.getElementById("form-1");

// FORGET PASSWORD PAGE
document
  .getElementById("otpBtn")
  .addEventListener("click", function validateForm() {
    const otp = document.getElementById("otp").value;

    if (otp == "") {
      alert("OTP cannot be empty");
      return false;
    }
    alert("Code Correct");
    form.action = "userCreate.html";
    form.submit();
  });
