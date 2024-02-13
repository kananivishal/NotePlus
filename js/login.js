let isSubmitting = false;
let userEmail;

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
    setTimeout(function () {
      $("#message").fadeOut("slow");
    }, 2000);
  } else {
    setCookie("TOKEN", response.token, 15);
    setTimeout(() => (window.location.href = "/noteplus/"), 500);
  }
}


async function sendOTP() {
  if (isSubmitting) {
    return;
  }

  isSubmitting = true;

  const email = document.getElementById("email").value;
  const userData = { email };

  try {
    showSpinner("btnemail");

    const [status, response] = await ajaxRequest(
      "/login/otp/sendotp.php",
      "POST",
      userData,
      false
    );

    $("#EmailError").show();
    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("EmailError").innerHTML = error;
      setTimeout(function () {
        $("#EmailError").fadeOut("slow");
      }, 2000);
    } else {
      // console.log("OTP Sent Successfully");
      userEmail = email;
      // window.location.href = "/noteplus/pages/sendMail";
      document.getElementById("email-form").style.display = "none";
      document.getElementById("otp-form").style.display = "block";
    }
  } finally {
    hideSpinner("btnemail");
    isSubmitting = false;
  }
}

async function resendOTP() {
  if (isSubmitting) {
    return;
  }

  isSubmitting = true;

  const userData = { email: userEmail };

  try {
    showSpinner("btnresendotp");

    const [status, response] = await ajaxRequest(
      "/login/otp/sendotp.php",
      "POST",
      userData,
      false
    );

    $("#OtpError").show();
    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("ResendOtpError").innerHTML = error;
    } else {
      document.getElementById("OtpError").innerHTML = error;
      setTimeout(function () {
        $("#OtpError").fadeOut("slow");
      }, 2000);
    }
  } finally {
    hideSpinner("btnresendotp");
    document.getElementById("btnresendotp").innerHTML = "Resend OTP";
    isSubmitting = false;
  }
}

async function verifyOTP() {
  if (isSubmitting) {
    return;
  }

  isSubmitting = true;

  const otp = document.getElementById("otp").value;
  const userData = { email: userEmail, otp };

  try {
    showSpinner("btnotp");

    const [status, response] = await ajaxRequest(
      "/login/otp/verifyotp.php",
      "POST",
      userData,
      false
    );

    $("#OtpError").show();
    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("OtpError").innerHTML = error;
      setTimeout(function () {
        $("#OtpError").fadeOut("slow");
      }, 2000);
    } else {
      login();
      document.getElementById("otp-form").style.display = "none";
      document.getElementById("password-form").style.display = "block";
    }
  } finally {
    hideSpinner("btnotp");
    isSubmitting = false;
  }
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

function showSpinner(buttonId) {
  const button = document.getElementById(buttonId);
  button.innerHTML =
    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
  button.disabled = true;
}

function hideForm(formId) {
  document.getElementById(formId).style.display = "none";
}

function hideSpinner(buttonId) {
  const button = document.getElementById(buttonId);
  button.innerHTML = "Next";
  button.disabled = false;
}

document.addEventListener("DOMContentLoaded", function () {
  const emailForm = document.getElementById("email-form");
  const otpForm = document.getElementById("otp-form");
  const passwordForm = document.getElementById("password-form");

  document.getElementById("btnemail").addEventListener("click", sendOTP);
  document.getElementById("btnotp").addEventListener("click", verifyOTP);
  document
    .getElementById("btnsignup")
    .addEventListener("click", submitPassword);
});



async function logout() {
  delete_cookie("TOKEN");
  window.location.href = "/noteplus/pages/login.php";
}

async function delete_cookie(name) {
  document.cookie = name + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
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
