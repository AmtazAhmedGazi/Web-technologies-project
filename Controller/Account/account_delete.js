function validateDeletionForm() {
    const username = document.getElementById('username').value.trim();
    const deletionType = document.getElementById('deletionType').value;
    const twofa = document.getElementById('twofa').value.trim();
    const message = document.getElementById('message');
  
    message.style.color = 'red';
  
    if (username === '') {
      message.textContent = 'Please enter your username or email.';
      return false;
    }
  
    if (deletionType === '') {
      message.textContent = 'Please select a deletion action.';
      return false;
    }
  
    if (!/^\d{6}$/.test(twofa)) {
      message.textContent = 'Please enter a valid 6-digit 2FA code.';
      return false;
    }
  
    const dataDownload = document.getElementById('downloadData').checked;
    message.style.color = 'green';
    message.textContent = `Request to ${deletionType} account submitted successfully.${dataDownload ? ' Data download selected.' : ''}`;
  
    return false; // Prevent actual form submission for demo
  }
  