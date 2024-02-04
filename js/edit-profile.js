async function getProfile() {
  const [status, response] = await ajaxRequest((path = "/profile/get.php"));
  if (status == 200) {
    document.getElementById("uname").value = response.Name;
    document.getElementById("mobilenumber").value = response.Phonenumber;
    document.getElementById("dob").value = response.DateOfBirth;
    document.getElementById("gender").value = response.Gender;
    document.getElementById("maritalstatus").value = response.MaritalStatus;
    document.getElementById("age").value = response.Age;
    document.getElementById("country").value = response.Country;
    document.getElementById("state").value = response.State;
    document.getElementById("cname").value = response.City;
    document.getElementById("address").value = response.Address;
  } else if (status == 400) {
    location.href = "/noteplus/pages/login";
  } else {
    console.error(response);
  }
}

getProfile();

async function editProfile(event) {
  event?.preventDefault();

  const UserData = {
    Name: $("#uname").val(),
    Phonenumber: $("#mobilenumber").val(),
    DateOfBirth: $("#dob").val(),
    Gender: $("input[id='gender']:checked").val() || "Male",
    MaritalStatus: $("#maritalstatus").val(),
    Age: $("#age").val(),
    Country: $("#country").val(),
    State: $("#state").val(),
    City: $("#cname").val(),
    Address: $("#address").val(),
  };

  const [status, response] = await ajaxRequest(
    "/profile/update.php",
    "POST",
    UserData,
    true
  );

  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById("message").innerHTML = error;
  } else {
    window.location.href = "/noteplus/pages/profile.php";
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}

document.addEventListener("DOMContentLoaded", function () {
  const editprofile = document.getElementById("edit-profile");

  editprofile.addEventListener("submit", editProfile);
});
