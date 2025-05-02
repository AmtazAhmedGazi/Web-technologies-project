form = document.getElementById("form-1");

// LOGIN PAGE
document
  .getElementById("loginBtn")
  .addEventListener("click", function validateForm() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (email == "") {
      alert("Email cannot be empty");
      return false;
    }

    if (!email.includes("@")) {
      alert("Please enter a valid email");
      return false;
    }

    const atSymbolIndex = email.indexOf("@");
    const dotSymbolIndex = email.indexOf(".", atSymbolIndex);

    if (
      atSymbolIndex === -1 ||
      dotSymbolIndex === -1 ||
      dotSymbolIndex < atSymbolIndex
    ) {
      alert("Please enter a valid email address ");
      return false;
    }

    if (password == "") {
      alert("Password field missing");
      return false;
    }
    alert("Login Successful");
    form.submit();
  });
