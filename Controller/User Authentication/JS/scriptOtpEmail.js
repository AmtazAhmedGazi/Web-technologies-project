function validateOtp() {
  const otp = document.getElementById("otp").value;

  if (otp === "") {
    alert("OTP cannot be empty");
    return false;
  }

  if (otp.length !== 6) {
    alert("OTP must be 6 digits");
    return false;
  }
  return true;
}
