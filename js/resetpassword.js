let isSubmitting = false;
let userEmail;

async function resetEmail() {
  if (isSubmitting) {
    return;
  }

  isSubmitting = true;

  const email = document.getElementById("email").value;
  const userData = { email };

  try {
    showSpinner("btnresetemail");

    const [status, response] = await ajaxRequest(
      "/otp/reset-otp.php",
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
      document.getElementById("reset-email").style.display = "none";
      document.getElementById("otp-form").style.display = "block";
    }
  } finally {
    hideSpinner("btnresetemail");
    isSubmitting = false;
  }
}

async function verifyOTP() {
  const otp = document.getElementById("otp").value;
  const userData = { email: userEmail, otp };

  try {
    showSpinner("btnotp");

    const [status, response] = await ajaxRequest(
      "/otp/verifyotp.php",
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
      document.getElementById("otp-form").style.display = "none";
      document.getElementById("reset-password").style.display = "block";
    }
  } finally {
    hideSpinner("btnotp");
  }
}

async function resetPassword() {
  if (isSubmitting) {
    return;
  }

  isSubmitting = true;

  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  // if (password !== confirmPassword) {
  //   let error = createErrorMessage("New passwords do not match");
  //   document.getElementById("PasswordError").innerHTML = error;
  //   return;
  // }

  const userData = { password, confirmPassword, email: userEmail };

  try {
    showSpinner("btnresetpassword");

    const [status, response] = await ajaxRequest(
      "/otp/reset-password.php",
      "POST",
      userData,
      false
    );

    $("#PasswordError").show();
    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("PasswordError").innerHTML = error;
      setTimeout(function () {
        $("#PasswordError").fadeOut("slow");
      }, 2000);
    } else {
      location.href = "/noteplus/pages/login.php";
    }
  } finally {
    hideSpinner("btnresetpassword");
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
  const resetemail = document.getElementById("reset-email");
  const resetpassword = document.getElementById("reset-password");

  document
    .getElementById("btnresetemail")
    .addEventListener("click", resetEmail);
  document.getElementById("btnotp").addEventListener("click", verifyOTP);
  document
    .getElementById("btnresetpassword")
    .addEventListener("click", resetPassword);
});
