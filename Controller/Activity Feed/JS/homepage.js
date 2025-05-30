window.onclick = function (event) {
  const dropdownRow = document.getElementById("dropdownRow");
  const menuTable = event.target.closest(".menu-table");
  if (!menuTable) {
    dropdownRow.style.display = "none";
  }
};

function toggleDropdown() {
  const dropdownRow = document.getElementById("dropdownRow");
  if (dropdownRow.style.display === "none") {
    dropdownRow.style.display = "block";
  } else {
    dropdownRow.style.display = "none";
  }
}

function togglePosts(type) {
  const topPosts = document.getElementById("topPosts");
  const recentPosts = document.getElementById("recentPosts");

  if (type === "top") {
    topPosts.style.display = "block";
    recentPosts.style.display = "none";
  }
  if (type === "recent") {
    topPosts.style.display = "none";
    recentPosts.style.display = "block";
  }

  document.getElementById("topBtn").classList.toggle("active", type === "top");
  document
    .getElementById("recentBtn")
    .classList.toggle("active", type === "recent");
}
function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
