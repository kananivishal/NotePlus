let isSubmitting = false;

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
      "/otp/sendotp.php",
      "POST",
      userData,
      false
    );

    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("message").innerHTML = error;
    } else {
      console.log("OTP Sent Successfully");
      document.getElementById("email-form").style.display = "none";
      document.getElementById("otp-form").style.display = "block";
    }
  } finally {
    hideSpinner("btnemail");
    isSubmitting = false;
  }
}

async function verifyOTP() {
  if (isSubmitting) {
    return;
  }

  isSubmitting = true;

  const email = document.getElementById("email").value;
  const otp = document.getElementById("otp").value;
  const userData = { email, otp };

  try {
    showSpinner("btnotp");

    const [status, response] = await ajaxRequest(
      "/otp/verifyotp.php",
      "POST",
      userData,
      false
    );

    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("message").innerHTML = error;
    } else {
      console.log("OTP Verified Successfully");
      document.getElementById("otp-form").style.display = "none";
      document.getElementById("password-form").style.display = "block";
    }
  } finally {
    hideSpinner("btnotp");
    isSubmitting = false;
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}

function showSpinner(buttonId) {
  const button = document.getElementById(buttonId);
  button.innerHTML =
    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
  button.disabled = true;
}

function hideSpinner(buttonId) {
  const button = document.getElementById(buttonId);
  button.innerHTML = "Next";
  button.disabled = false;
}

document.addEventListener("DOMContentLoaded", function () {
  const emailForm = document.getElementById("email-form");
  const otpForm = document.getElementById("otp-form");

  document.getElementById("btnemail").addEventListener("click", sendOTP);
  document.getElementById("btnotp").addEventListener("click", verifyOTP);
});
