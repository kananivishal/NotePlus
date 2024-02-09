async function getProfile() {
  const [status, response] = await ajaxRequest("/profile/get.php");
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

      const imageName = response.ImageName;
      if (imageName) {
          const profileImage = `<img id="profile-image" class="crm-profile-pic avatar-100" src="../assets/images/user/${imageName}" alt="Profile Image">`;
          document.getElementById("imageName").innerHTML = profileImage;
      } else {
          // Handle the case when no image is found
          console.error("No profile image found");
      }
  } else if (status == 400) {
      location.href = "/noteplus/pages/login";
  } else {
      console.error(response);
  }
}

getProfile();


function saveChanges() {
  var selectedImage = document.querySelector(".image-selection img.selected");
  if (selectedImage) {
    var imageUrl = selectedImage.src;
    document.getElementById("profile-image").src = imageUrl;
    $("#image").modal("hide");
  } else {
    console.error("No image selected.");
  }
}
document.addEventListener("DOMContentLoaded", function () {
  var images = document.querySelectorAll(".image-selection img");
  images.forEach(function (image) {
    image.addEventListener("click", function () {
      images.forEach(function (img) {
        img.classList.remove("selected");
      });
      this.classList.add("selected");
    });
  });
});
saveChanges();

async function editProfile(event) {
  event?.preventDefault();

  const selectedImage = document.querySelector(".image-selection img.selected");
  const imageName = selectedImage ? selectedImage.name : "";

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
    ImageName: imageName,
  };
  console.log(imageName);

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

async function changePassword(event) {
  event?.preventDefault();

  const UserData = {
    oldPassword: $("#confirmpassword").val(),
    newPassword: $("#newpassword").val(),
    confirmNewPassword: $("#verifypassword").val(),
  };

  const [status, response] = await ajaxRequest(
    "/profile/forgot-password.php",
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
  const changepassword = document.getElementById("change-password");

  editprofile.addEventListener("submit", editProfile);
  changepassword.addEventListener("submit", changePassword);
});

document.addEventListener("DOMContentLoaded", function () {
  var images = document.getElementById(".crm-profile-pic");

  images.forEach(function (image) {
    image.addEventListener("click", function () {
      images.forEach(function (img) {
        img.classList.remove("selected");
      });

      this.classList.add("selected");
    });
  });
});
