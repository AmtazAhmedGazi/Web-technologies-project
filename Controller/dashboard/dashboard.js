function validateDashboardForm() {
  const category = document.getElementById('category').value;
  const action = document.getElementById('action').value;
  const message = document.getElementById('message');

  message.style.color = 'red';

  if (category === '') {
    message.textContent = 'Please select a summary widget.';
    return false;
  }

  if (action === '') {
    message.textContent = 'Please select a quick action.';
    return false;
  }

  message.style.color = 'green';
  message.textContent = `Action "${action}" on "${category}" processed successfully!`;

  return false; // Prevent actual form submission for demo
}
