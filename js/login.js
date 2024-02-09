async function login() {
  const UserData = {
    email: $("#email").val(),
    password: $("#password").val(),
  };

  const [status, response] = await ajaxRequest(
    "/auth/login.php",
    "POST",
    UserData,
    false
  );

  // $('#message').show();
  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById("message").innerHTML = error;
    setTimeout(function() {
      $('#message').fadeOut('slow');
    }, 2000);
  } else {
    setCookie("TOKEN", response.token, 15);
    setTimeout(() => (window.location.href = "/noteplus/"), 500);
  }
}

async function logout(){
  delete_cookie("TOKEN");
  window.location.href = "/noteplus/pages/login.php";
}

async function delete_cookie(name){
  document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function createErrorMessage(message) {
  return `<div class="alert  bg-danger" role="alert">
            <div class="iq-alert-text text-left">
              ${message}
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="ri-close-line"></i>
            </button>
          </div>`;
}
