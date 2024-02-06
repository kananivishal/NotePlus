async function login() {
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
    setCookie("TOKEN", response.token, 15);
    setTimeout(() => (window.location.href = "/noteplus/"), 500);
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}
