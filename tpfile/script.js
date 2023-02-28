const form = document.getElementById('upload-form');
const fileInput = document.getElementById('pdf-file');
const submitBtn = document.getElementById('submit-btn');
const message = document.getElementById('message');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData();
  formData.append('pdf-file', fileInput.files[0]);
  message.innerHTML = 'Uploading...';

  fetch('upload.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    message.innerHTML = data.message;
  })
  .catch(error => {
    console.error(error);
    message.innerHTML = 'Une erreur s\'est produite lors de l\'uploadjs';
  });
});
