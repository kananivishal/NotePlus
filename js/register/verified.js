const urlParams = new URLSearchParams(window.location.search);
const otp = urlParams.get("otp");
const email = urlParams.get("email");

async function verifyEmail() {
  
    const userData = { email: email, otp :otp};
  
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
        const verify = `<h3 class="mb-2" id="">Your Email is Successfully Verified.</h3>
        <form id="email-form">
        <a href="/noteplus/pages/login.php" type="button" id="btnemail" class="btn btn-primary" >Login</a>
        </form>`;
        document.getElementById("verified").innerHTML = verify;

    }
}
  verifyEmail();