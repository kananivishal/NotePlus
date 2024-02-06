function collaboratorAdd() {
  var displayEmails = document.getElementById("displayEmails");
  var enteredEmails = [];
  for (var i = 0; i < displayEmails.children.length; i++) {
    enteredEmails.push(
      displayEmails.children[i].innerText.replace("Remove", "").trim()
    );
  }
  console.log("Entered emails:", enteredEmails);
  return enteredEmails;
}

async function selectfolder() {
  const [status, response] = await ajaxRequest("/folder/show.php");

  if (status == 200) {
    let options = "<option selected>Select</option>";
    response.forEach((folder) => {
      options += `<option>${folder.Name}</option>`;
    });

    $("#selectfolder").html(options);
  }
}
selectfolder();

async function noteAdd(event) {
  event?.preventDefault();

  const enteredEmails = collaboratorAdd();

  const UserData = {
    Title: $("#title").val(),
    Body: $("#quill-toolbar").html(),
    Collaborators: enteredEmails,
    SelectedFolder: $("#selectfolder").val(),
    IsPinned: $("#isPinnedCheckbox").prop("checked"),
    IsFavorite: $("#isFavoriteCheckbox").prop("checked")
  };
  // console.log(Collaborators);

  const [status, response] = await ajaxRequest(
    (path = "/notes/add.php"),
    (type = "POST"),
    UserData,
    true
  );

  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById("message").innerHTML = error;
    console.log(error);
  } else {
    console.log(response);
    window.location.href = "/noteplus/";
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}