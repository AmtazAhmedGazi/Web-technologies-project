document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("chatForm");
  const messageInput = document.getElementById("messageInput");

  form.addEventListener("submit", function (event) {
    if (messageInput.value.trim() == "") {
      event.preventDefault();
      alert("Please enter a message before sending.");
    }
  });
});

function switchChat(chatId) {
  const chats = document.querySelectorAll(".messages");
  chats.forEach((chat) => (chat.style.display = "none"));

  const selectedChat = document.getElementById(chatId);
  selectedChat.style.display = "block";
}

document
  .getElementById("send")
  .addEventListener("click", function validateForm() {
    const message = document.getElementById("messageInput").value;

    if (message == "") {
      alert("message cannot be empty");
      return false;
    }

    alert("message Successful");
    return true;
  });
