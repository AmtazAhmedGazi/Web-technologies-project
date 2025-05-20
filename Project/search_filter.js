function validateSearchForm() {
  const keyword = document.getElementById('keyword').value.trim();
  const category = document.getElementById('category').value;
  const message = document.getElementById('searchMessage');

  message.style.color = 'red';

  if (keyword === '') {
    message.textContent = 'Please enter a keyword to search.';
    return false;
  }

  if (category === '') {
    message.textContent = 'Please select a category to filter.';
    return false;
  }

  // Success feedback
  message.style.color = 'green';
  message.textContent = `Searching "${keyword}" in category "${category}"...`;

  return false; // Prevent actual form submission for demo purposes
}
