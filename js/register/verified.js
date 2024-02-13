const urlParams = new URLSearchParams(window.location.search);
const otp = urlParams.get("otp");
const email = urlParams.get("email");

async function verifyEmail() {
  const userData = { email: email, otp: otp };

  const [status, response] = await ajaxRequest(
    "/otp/verifyotp.php",
    "POST",
    userData,
    false
  );

  if (status !== 200) {
    const verify = `<h3 class="mb-2" id="">Something Went Wrong Please Try Again</h3>
        <form id="email-form">
        <a href="/noteplus/pages/register.php" type="button" id="btnemail" class="btn btn-primary" >Register</a>
        </form>`;
    document.getElementById("verified").innerHTML = verify;
  } else {
    await userAdd();
    const verify = `<h3 class="mb-2" id="">Your Email is Successfully Verified.</h3>
    <form id="email-form">
    <a href="/noteplus/pages/login.php" type="button" id="btnemail" class="btn btn-primary" >Login</a>
    </form>`;
    document.getElementById("verified").innerHTML = verify;
  }
}
verifyEmail();

async function userAdd() {
  const userData = {
    Email: email,
  };
console.log(email);
  const [status, response] = await ajaxRequest(
    "/auth/signup.php",
    "POST",
    userData,
    false
  );
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
