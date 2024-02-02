// login.js
async function login(event) {
  event?.preventDefault();

  // document.getElementById('login').setAttribute('disabled', 'disabled');

  const UserData = {
    email: $('#email').val(),
    password: $('#password').val()
  };

  const [status, response] = await ajaxRequest(
    "/auth/login.php",
    "POST",
    UserData,
    false
  );

  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById('message').innerHTML = error;
  } else {
    setTimeout(() => (window.location.href = "/noteplus/"), 500);
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}

document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.querySelector("form");

  loginForm.addEventListener("submit", login);
});


