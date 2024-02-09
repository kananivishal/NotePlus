async function editselectfolder() {
  const [status, response] = await ajaxRequest("/folder/show.php");

  if (status == 200) {
    let options = "<option selected>Select</option>";
    response.forEach((folder) => {
      options += `<option>${folder.Name}</option>`;
    });

    $("#editselectfolder").html(options);
  }
}
editselectfolder();

async function addEditEmail(event) {
  event?.preventDefault();

  const emailEditInput = $("#emailEditInput");
  const newEmail = emailEditInput.val().trim();

  if (emailAlreadyAdded(newEmail)) {
    console.log("Email is already added.");
    return;
  }

  const UserData = {
    Email: $("#emailEditInput").val(),
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
      editValidatedEmail(response.Email);
    } else {
      console.error("Email property not found in the response:", response);
    }
  }
}

function editValidatedEmail(Email) {
  var displayEditEmails = document.getElementById("displayEditEmails");
  var emailDiv = document.createElement("div");

  emailDiv.innerText = Email;

  var removeButton = document.createElement("button");
  removeButton.type = "button";
  removeButton.className = "btn btn-link ml-auto";
  removeButton.innerHTML = '<i class="ri-close-fill"></i>';

  removeButton.onclick = function () {
    displayEditEmails.removeChild(emailDiv);
  };

  emailDiv.appendChild(removeButton);
  displayEditEmails.appendChild(emailDiv);

  document.getElementById("emailEditInput").value = "";
}

function emailAlreadyAdded(newEmail) {
  var displayEditEmails = document.getElementById("displayEditEmails");

  for (var i = 0; i < displayEditEmails.children.length; i++) {
    var existingEmail = displayEditEmails.children[i].innerText.trim();

    if (existingEmail.toLowerCase() === newEmail.toLowerCase()) {
      return true;
    }
  }

  return false;
}

function ediCollaboratorAdd() {
  var displayEditEmails = document.getElementById("displayEditEmails");
  var enteredEmails = [];
  for (var i = 0; i < displayEditEmails.children.length; i++) {
    enteredEmails.push(
      displayEditEmails.children[i].innerText.replace("Remove", "").trim()
    );
  }
  console.log("Entered emails:", enteredEmails);
  return enteredEmails;
}

async function viewNoteEditModel(event, noteIndex) {
  event?.preventDefault();

  console.log("noteIndex:", noteIndex);

  const note = cachedNotes[noteIndex];
  const noteId = note.Id;

  const [status, response] = await ajaxRequest(
    "/notes/show-one.php",
    "POST",
    { NoteId: noteId },
    true
  );

  if (status == 200) {
    document.getElementById("edit-title").value = response.title;
    document.getElementById("quill-toolbar1").innerHTML = response.body;
    $("#editselectfolder").val(response.folderName);
    var quill = new Quill("#quill-toolbar1", {
      theme: "snow",
    });

    $("#displayEditEmails").empty();
    response.collabratorEmails.forEach((collaboratorEmail) => {
      editValidatedEmail(collaboratorEmail);
    });
  } else {
    console.error(response);
  }
}

// async function updateNoteStatus(noteId, isPinned, isFavorite) {
//     return new Promise((resolve, reject) => {
//       setTimeout(() => {
//         const updatedNote = cachedNotes.find((note) => note.id === noteId);
//         if (updatedNote) {
//           updatedNote.isPinned = isPinned;
//           updatedNote.IsFavorite = isFavorite;
//           resolve({ status: 200, message: "Note status updated successfully" });
//         }
//       }, 500);
//     });
//   }

async function noteEdit(event, noteIndex) {
  event?.preventDefault();


  console.log("noteIndex:", noteIndex);


    const note = cachedNotes[noteIndex];
    const noteId = note.Id;

  const enteredEmails = ediCollaboratorAdd();

  const UserData = {
    id: noteId,
    Title: $("#title").val(),
    Body: $("#quill-toolbar1").html(),
    Collaborators: enteredEmails,
    SelectedFolder: $("#editselectfolder").val(),
    // IsPinned: $("#isPinnedCheckbox").prop("checked"), // Check if Is Pinned is checked
    // IsFavorite: $("#isFavoriteCheckbox").prop("checked"),
  };

  const [status, response] = await ajaxRequest(
    "/notes/update.php",
    "POST",
    UserData,
    true
  );

  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById("message").innerHTML = error;
    console.log(error);
  } else {
    console.log(response);

    // const noteId = response.id;

    // await updateNoteStatus(
    //     noteId,
    //     $("#isPinnedCheckbox").prop("checked"), // Pass Is Pinned value
    //     $("#isFavoriteCheckbox").prop("checked") // Pass Is Favorite value
    //   );

    window.location.href = "/noteplus/";
  }
}
