document.getElementById('locationForm').addEventListener('submit', function(event) {
  event.preventDefault();
  clearErrors();

  var tournameInput = document.getElementsByName('tourname')[0];
  var timeVisitInput = document.getElementsByName('timeVisit')[0];

  var isValid = true;

  if (tournameInput.value === 'chose') {
      isValid = false;
      showError('tournameError', 'Please select a tour name');
  }

  if (timeVisitInput.value.trim() === '') {
      isValid = false;
      showError('timeVisitError', 'Visit time is required');
  }

  if (isValid) {
      // Submit the form
      this.submit();
  }
});

function showError(id, message) {
  var errorElement = document.createElement('div');
  errorElement.classList.add('error');
  errorElement.textContent = message;
  document.getElementsByName(id)[0].parentNode.appendChild(errorElement);
}

function clearErrors() {
  var errorElements = document.querySelectorAll('.error');
  errorElements.forEach(function(element) {
      element.parentNode.removeChild(element);
  });
}
