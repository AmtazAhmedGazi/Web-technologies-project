function validateExportForm() {
  const dataType = document.getElementById('dataType').value;
  const format = document.getElementById('format').value;
  const fromDate = document.getElementById('fromDate').value;
  const toDate = document.getElementById('toDate').value;
  const message = document.getElementById('exportMessage');

  message.style.color = 'red';

  if (dataType === '') {
    message.textContent = 'Please select a data type.';
    return false;
  }

  if (format === '') {
    message.textContent = 'Please select an export format.';
    return false;
  }

  if (!fromDate || !toDate) {
    message.textContent = 'Please select both start and end dates.';
    return false;
  }

  if (new Date(fromDate) > new Date(toDate)) {
    message.textContent = 'From Date cannot be after To Date.';
    return false;
  }

  // If valid
  message.style.color = 'green';
  message.textContent = `Exporting ${dataType} as ${format.toUpperCase()} from ${fromDate} to ${toDate}...`;

  return false; // Prevent actual submission for demo
}
