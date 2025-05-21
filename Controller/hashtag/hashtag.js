function validateHashtagForm() {
  const hashtag = document.getElementById('hashtag').value.trim();
  const message = document.getElementById('message');

  message.style.color = 'red';

  if (hashtag === '') {
    message.textContent = 'Please enter a hashtag.';
    return false;
  }

  if (!hashtag.startsWith('#') || hashtag.length < 2) {
    message.textContent = 'Hashtag must start with "#" and contain at least one character.';
    return false;
  }

  // If valid
  const follow = document.getElementById('follow').checked;
  const trending = document.getElementById('trending').checked;

  message.style.color = 'green';
  message.textContent = `Searching for ${hashtag}...${follow ? ' Following enabled.' : ''}${trending ? ' Showing trending data.' : ''}`;

  return false; // Prevent actual form submission for demo
}
