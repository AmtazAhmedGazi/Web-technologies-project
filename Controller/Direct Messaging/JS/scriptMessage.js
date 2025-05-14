document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("chatForm");
  const messageInput = document.getElementById("messageInput");

  form.addEventListener("submit", function (event) {
    if (messageInput.value.trim() === "") {
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
