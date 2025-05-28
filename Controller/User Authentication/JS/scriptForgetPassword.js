form = document.getElementById("form-1");

document
  .getElementById("forgetBtn")
  .addEventListener("click", function validateForm() {
    const email = document.getElementById("email").value;

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
    alert("Code sent to email");
    return true;
  });
