function validatePrivacyForm() {
  const visibility = document.getElementById('postVisibility').value;
  const blockUser = document.getElementById('blockUser').value.trim();
  const activityAction = document.getElementById('activityAction').value;
  const msg = document.getElementById('privacyMessage');

  msg.style.color = 'red';

  if (visibility === '') {
    msg.textContent = 'Please select a post visibility option.';
    return false;
  }

  if (blockUser && !validateEmailOrUsername(blockUser)) {
    msg.textContent = 'Please enter a valid username or email to block.';
    return false;
  }

  if (activityAction === '') {
    msg.textContent = 'Please choose an activity log action.';
    return false;
  }

  msg.style.color = 'green';
  msg.textContent = 'Privacy settings updated successfully!';
  return false; // Prevent actual form submission for demo
}

function validateEmailOrUsername(input) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const usernamePattern = /^[a-zA-Z0-9_]{3,}$/;
  return emailPattern.test(input) || usernamePattern.test(input);
}
