let isSubmitting = false;
let userEmail;

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
      userEmail = email;
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

async function submitPassword() {
  if (isSubmitting) {
    return;
  }
  isSubmitting = true;

  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;
  const userData = {
    Email: userEmail,
    Password: password,
    ConfirmPassword: confirmPassword
  };
  try {
    showSpinner("btnsignup");

    const [status, response] = await ajaxRequest(
      "/auth/signup.php",
      "POST",
      userData,
      false
    );

    if (status !== 200) {
      let error = createErrorMessage(response.error);
      document.getElementById("message").innerHTML = error;
    } else {
      console.log("Registration Succesfully");
      location.href = "/noteplus/pages/login.php";
    }
  } finally {
    hideSpinner("btnsignup");
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
  document.getElementById("btnsignup").addEventListener("click", submitPassword);
});
