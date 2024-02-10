function collaboratorAdd() {
  var displayEmails = document.getElementById("displayEmails");
  var enteredEmails = [];
  for (var i = 0; i < displayEmails.children.length; i++) {
    enteredEmails.push(
      displayEmails.children[i].innerText.replace("Remove", "").trim()
    );
  }
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

async function updateNoteStatusClientSide(noteId, isPinned, isFavorite) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const updatedNote = cachedNotes.find((note) => note.id === noteId);
      if (updatedNote) {
        updatedNote.isPinned = isPinned;
        updatedNote.IsFavorite = isFavorite;
        resolve({ status: 200, message: "Note status updated successfully" });
      }
    }, 500);
  });
}

async function noteAdd(event) {
  event?.preventDefault();

  const enteredEmails = collaboratorAdd();

  const UserData = {
    Title: $("#title").val(),
    Body: $("#quill-toolbar").html(),
    Collaborators: enteredEmails,
    SelectedFolder: $("#selectfolder").val(),
    IsPinned: $("#isPinnedCheckbox").prop("checked"),
    IsFavourite: $("#isFavoriteCheckbox").prop("checked"),
  };

  const [status, response] = await ajaxRequest(
    "/notes/add.php",
    "POST",
    UserData,
    true
  );

  $("#NotesError").show();

  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById("NotesError").innerHTML = error;
    setTimeout(function () {
      $("#NotesError").fadeOut("slow");
    }, 2000);
  } else {
    const noteId = response.id;

    await updateNoteStatusClientSide(
      noteId,
      $("#isPinnedCheckbox").prop("checked"),
      $("#isFavoriteCheckbox").prop("checked")
    );

    window.location.href = "/noteplus/";
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}

let cachedNotes = [];

async function showNotes() {
  const UserData = {
    FolderId: 0,
  };
  const [status, response] = await ajaxRequest(
    (path = "/notes/show-all.php"),
    (type = "POST"),
    UserData,
    true
  );
  if (status == 200) {
    cachedNotes = response;
    let rows = "";
    response.forEach((note, index) => {
      const pinnedIcon =
        note.IsPinned == 1
        ? '<a data-toggle="tooltip" data-placement="top" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>'
        : "";
      const favoriteIcon =
        note.IsFavourite == 1
          ? '<a data-toggle="tooltip" data-placement="top" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>'
          : "";

      const AllNotes =
        note.IsPinned == 0
          ? `<div class="col-lg-4 col-md-6" >
          <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
              <div class="card-header d-flex justify-content-between pb-1">
                  <div class="icon iq-icon-box-2 icon-border-info rounded">
                      <svg width="23" height="23" class="svg-icon" id="iq-main-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                  </div>
                  <div class="card-header-toolbar d-flex align-items-center">
              
                  ${pinnedIcon}
                  ${favoriteIcon}

                  <div class="dropdown">

                          <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                              <i class="ri-more-fill"></i>
                          </span>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton4" style="">
                              <a href="#" class="dropdown-item new-note1" data-toggle="modal" data-target="#view-note" onclick="viewNoteModel(event, ${index})"><i class="las la-eye mr-3"></i>View</a>
                              <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note" onclick="viewNoteEditModel(event,${index})"><i class="las la-pen mr-3"></i>Edit</a>
                              <button class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" onclick="noteDelete(event, ${index})"><i class="las la-trash-alt mr-3"></i>Delete</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-body rounded">
                  <h4 class="card-title">${note.Title}</h4>
                  <p class="mb-3 card-description short">${note.Body}</p>
              </div>
              <div class="card-footer">
                  <div class="d-flex align-items-center justify-content-between note-text note-text-info">
                      <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>03
                          share</a>
                      <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>${note.UpdateOnDateTime}</a>
                  </div>
              </div>
          </div>
      </div>`
          : "";
      rows += `
      ${AllNotes}
          `;
    });
    $("#notes").html(rows);
  } else {
  }
  return;
}
showNotes();

async function viewNoteModel(event, noteIndex) {
  event?.preventDefault();

  const note = cachedNotes[noteIndex];
  const noteId = note.Id;

  const [status, response] = await ajaxRequest(
    "/notes/show-one.php",
    "POST",
    { NoteId: noteId },
    true
  );

  if (status == 200) {
    document.getElementById("modal-title").innerHTML = response.title;
    document.getElementById("modal-body").innerHTML = response.body;
    let rows = "";
    response.collabratorEmails.forEach((collaboratorEmail) => {
      rows += `
      <p class="mb-0">${collaboratorEmail}</p>
      `;
    });
    $("#modal-collabrator").html(rows);
  } else {
    console.error(response);
  }
}

// function collaboratorAdd() {
//   var displayEmails = document.getElementById("displayEmails");
//   var enteredEmails = [];
//   for (var i = 0; i < displayEmails.children.length; i++) {
//     enteredEmails.push(
//       displayEmails.children[i].innerText.replace("Remove", "").trim()
//     );
//   }
//   console.log("Entered emails:", enteredEmails);
//   return enteredEmails;
// }

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

async function noteDelete(event, noteIndex) {
  event?.preventDefault();

  const note = cachedNotes[noteIndex];
  const noteId = note.Id;

  const [status, response] = await ajaxRequest(
    "/notes/delete.php",
    "POST",
    { id: noteId },
    true
  );

  if (status === 200) {
    window.location.href = "/noteplus/";
    showNotes();
  } else {
    let error = createErrorMessage(response.error);
    console.log(error);
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}
