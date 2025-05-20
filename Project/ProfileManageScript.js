function validateForm() {
    const fullName = document.getElementById("fullName").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
  
    if (fullName === "" || email === "") {
      alert("Please fill in all required fields.");
      return false;
    }
  
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
      alert("Invalid email format.");
      return false;
    }
  
    if (password && password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
  
    alert("Profile updated successfully!");
    return true;
  }
  