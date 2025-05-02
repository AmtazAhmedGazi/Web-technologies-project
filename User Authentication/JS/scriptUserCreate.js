form = document.getElementById("form-1");

document
  .getElementById("submitBtn")
  .addEventListener("click", function validateForm() {
    const name = document.getElementById("name").value;
    const date = document.getElementById("date").value;
    const contactNumber = document.getElementById("contacNumber").value;
    const fileInput = document.getElementById("profilPic");
    const gender =
      document.querySelector('input[name="gender"]:checked')?.value || "";

    if (name === "") {
      alert("Name cannot be empty");
      return false;
    }

    if (!isNaN(name)) {
      alert("Name cannot be a number");
      return false;
    }

    if (gender === "") {
      alert("Gender cannot be empty");
      return false;
    }

    if (date === "") {
      alert("Date cannot be empty");
      return false;
    }

    if (!fileInput.files.length) {
      alert("Please upload a profile picture.");
      return false;
    }

    if (contactNumber !== "") {
      const prefix = "+880";
      if (!contactNumber.startsWith(prefix)) {
        alert("Contact Number must start with +880");
        return false;
      }

      const numberPart = contactNumber.slice(prefix.length);
      if (numberPart.length !== 10 || isNaN(numberPart)) {
        alert("Contact Number must have exactly 10 digits after +880.");
        return false;
      }
    }

    alert("Profile Updated Successful");
    form.action = "login.html";
    form.submit();
  });
