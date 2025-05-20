function validateProfileForm() {
  const profilePic = document.getElementById("profilePic").files[0];
  const coverPic = document.getElementById("coverPic").files[0];
  const theme = document.getElementById("themeSelect").value;
  const bio = document.getElementById("bio").value.trim();

  // Validate image file types
  if (!profilePic || !profilePic.type.startsWith("image/")) {
    alert("Please upload a valid profile photo.");
    return;
  }

  if (!coverPic || !coverPic.type.startsWith("image/")) {
    alert("Please upload a valid cover photo.");
    return;
  }

  // Validate theme selection
  if (theme === "") {
    alert("Please select a theme.");
    return;
  }

  // Validate bio length
  if (bio.length === 0 || bio.length > 150) {
    alert("Please enter a bio (max 150 characters).");
    return;
  }

  alert("Profile customization saved successfully!");
  // You can submit or store data here
}
