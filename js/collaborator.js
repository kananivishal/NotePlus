async function addEmail(event) {
  event?.preventDefault();

  const emailInput = $("#emailInput");
  const newEmail = emailInput.val().trim();

  if (isEmailAlreadyAdded(newEmail)) {
    console.log("Email is already added.");
    return;
  }

  const UserData = {
    Email: $("#emailInput").val(),
  };

  const [status, response] = await ajaxRequest(
    (path = "/collaborator/show.php"),
    (type = "POST"),
    UserData,
    true
  );

  if (status !== 200) {
    let error = createErrorMessage(response.error);
    console.log(error);
  } else {
    if (response.hasOwnProperty("Email")) {
      addValidatedEmail(response.Email);
    } else {
      console.error("Email property not found in the response:", response);
    }
  }
}

function addValidatedEmail(Email) {
  var displayEmails = document.getElementById("displayEmails");
  var emailDiv = document.createElement("div");

  emailDiv.innerText = Email;

  var removeButton = document.createElement("button");
  removeButton.type = "button";
  removeButton.className = "btn btn-link ml-auto";
  removeButton.innerHTML = '<i class="ri-close-fill"></i>';

  removeButton.onclick = function () {
    displayEmails.removeChild(emailDiv);
  };

  emailDiv.appendChild(removeButton);
  displayEmails.appendChild(emailDiv);

  document.getElementById("emailInput").value = "";
}

function isEmailAlreadyAdded(newEmail) {
  var displayEmails = document.getElementById("displayEmails");

  for (var i = 0; i < displayEmails.children.length; i++) {
    var existingEmail = displayEmails.children[i].innerText.trim();

    if (existingEmail.toLowerCase() === newEmail.toLowerCase()) {
      return true;
    }
  }

  return false;
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}
