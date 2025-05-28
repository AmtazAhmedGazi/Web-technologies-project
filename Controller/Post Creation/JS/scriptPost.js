const postText = document.getElementById("postText");
const mediaUpload = document.getElementById("mediaUpload");
const preview = document.getElementById("preview");
const postForm = document.getElementById("postForm");

function initializePreview() {
  preview.innerHTML = "<em>Post preview will appear here...</em>";
}

function createTextPreview(text) {
  const paragraph = document.createElement("p");
  paragraph.innerHTML = text.split("\n").join("<br>");
  return paragraph;
}

function createImagePreview(src) {
  const img = document.createElement("img");
  img.src = src;
  img.alt = "Image Preview";
  return img;
}

function updatePostPreview() {
  const text = postText.value.trim();
  const file = mediaUpload.files[0];

  preview.innerHTML = "";

  if (text) {
    const textPreview = createTextPreview(text);
    preview.appendChild(textPreview);
  }

  if (file) {
    const fileURL = URL.createObjectURL(file);
    const fileType = file.type;

    if (fileType.startsWith("image/")) {
      preview.appendChild(createImagePreview(fileURL));
    } else if (fileType.startsWith("video/")) {
      preview.appendChild(createVideoPreview(fileURL));
    } else {
      const errorMsg = document.createElement("p");
      errorMsg.textContent = "Unsupported media type.";
      preview.appendChild(errorMsg);
    }
  }

  if (!text && !file) {
    initializePreview();
  }
}

function handleFormSubmit(event) {
  event.preventDefault();

  const text = postText.value.trim();
  const file = mediaUpload.files[0];

  if (!text && !file) {
    alert("Please enter some text or upload media before submitting.");
    return;
  }

  alert("Post submitted!");
  postForm.reset();
  initializePreview();
}

postText.addEventListener("input", updatePostPreview);
mediaUpload.addEventListener("change", updatePostPreview);
postForm.addEventListener("submit", handleFormSubmit);

initializePreview();
