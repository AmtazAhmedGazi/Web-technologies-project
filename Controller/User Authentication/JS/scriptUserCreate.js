function previewImage(event) {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function () {
    const imagePreview = document.getElementById("imagePreview");
    const imagePreviewText = document.getElementById("imagePreviewText");

    imagePreview.src = reader.result;
    imagePreview.style.display = "block";
    imagePreviewText.style.display = "none";
  };

  if (file) {
    reader.readAsDataURL(file);
  }
}
form = document.getElementById("form-1");

document
  .getElementById("submit")
  .addEventListener("click", function validateForm() {
    const name = document.getElementById("name").value;
    const date = document.getElementById("date").value;
    const contactNumber = document.getElementById("contacNumber").value;
    const gender =
      document.querySelector('input[name="gender"]:checked')?.value || "";
    const address = document.getElementById("address").value;
    const fileInput = document.getElementById("profilPic");

    // if (!fileInput.files.length) {
    //   alert("Please upload a profile picture.");
    //   return false;
    // }
    // const file = fileInput.files[0];
    // const fileName = file.name.toLowerCase();
    // if (
    //   !fileName.endsWith(".jpg") &&
    //   !fileName.endsWith(".jpeg") &&
    //   !fileName.endsWith(".png")
    // ) {
    //   alert("Profile picture must be a JPG or PNG file.");
    //   return false;
    // }

    if (name == "") {
      alert("Name cannot be empty");
      return false;
    }

    if (!isNaN(name)) {
      alert("Name cannot be a number");
      return false;
    }

    if (gender == "") {
      alert("Gender cannot be empty");
      return false;
    }

    if (date == "") {
      alert("Date cannot be empty");
      return false;
    }
    if (contactNumber == "") {
      alert("Contact Number is missing");
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
    return true;
  });
