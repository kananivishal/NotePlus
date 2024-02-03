async function getProfile() {
  const [status, response] = await ajaxRequest(path = "/profile/get.php");
  console.log(response);

  if (status == 200) {
    console.log("Profile data fetched successfully:", response);

    document.getElementById("name").value = response.Name;
    document.getElementById("dob").value = response.DateOfBirth;
    document.getElementById("mobilenumber").value = response.Phonenumber;
    document.getElementById("gender").value = response.Gender;
    document.getElementById("email").value = response.Email;
    document.getElementById("address").value = response.Address;
    document.getElementById("merital").value = response.MaritalStatus;
    document.getElementById("age").value = response.Age;
    document.getElementById("country").value = response.Country;
    document.getElementById("state").value = response.State;
    document.getElementById("city").value = response.City;
  } else if (status == 400) {
    location.href = "/noteplus/pages/login";
  } else {
    console.error(response);
  }
}

getProfile();
