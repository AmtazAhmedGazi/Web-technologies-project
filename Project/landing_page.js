function validateLandingForm() {
  const fullName = document.getElementById('fullName').value.trim();
  const email = document.getElementById('email').value.trim();
  const interest = document.getElementById('interest').value;
  const message = document.getElementById('responseMessage');

  message.style.color = 'red';

  if (fullName === '') {
    message.textContent = 'Please enter your full name.';
    return false;
  }

  if (!validateEmail(email)) {
    message.textContent = 'Please enter a valid email address.';
    return false;
  }

  if (interest === '') {
    message.textContent = 'Please select an interest topic.';
    return false;
  }

  message.style.color = 'green';
  message.textContent = 'Your inquiry has been submitted successfully!';
  return false; // prevent actual form submission for demo
}

function validateEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}
