const form = document.querySelector('form');
const loginButton = document.querySelector('#login-button');

loginButton.addEventListener('click', (event) => {
  event.preventDefault();

  const username = document.querySelector('#username').value;
  const password = document.querySelector('#password').value;

  if (username === 'myusername' && password === 'mypassword') {
    alert('Login successful!');
    form.reset();
  } else {
    alert('Incorrect username or password.');
  }
});
