function sendRequest() {
  const input = document.getElementById("usernameInput");
  const username = input.value.trim();
  if (username === "") {
    alert("Please enter a username.");
    return;
  }

  const list = document.getElementById("requestList");
  const li = document.createElement("li");
  li.textContent = username;

  const actions = document.createElement("div");
  actions.className = "action-buttons";

  const acceptBtn = document.createElement("button");
  acceptBtn.textContent = "Accept";
  acceptBtn.onclick = () => {
    alert(`${username} is now your friend!`);
    li.remove();
  };

  const rejectBtn = document.createElement("button");
  rejectBtn.textContent = "Reject";
  rejectBtn.onclick = () => {
    alert(`You rejected ${username}'s request.`);
    li.remove();
  };

  actions.appendChild(acceptBtn);
  actions.appendChild(rejectBtn);
  li.appendChild(actions);
  list.appendChild(li);
  input.value = "";
}
