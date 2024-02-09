async function showFolder() {
  const [status, response] = await ajaxRequest((path = "/folder/show.php"));

  if (status == 200) {
    let rows = "";
    response.forEach((folder) => {
      rows += `
            <li class="">
                <a href="/noteplus/pages/foldernotes?folderId=${folder.Id}" class="svg-icon">
                    <i>
                        <svg width="20" class="svg-icon" id="iq-main-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </i>
                    <span>${folder.Name}</span>
                </a>
            </li>
            `;
    });

    $("#notebooks").html(rows);
  }
}

async function addFolder(event) {
  event?.preventDefault();

  const UserData = {
    Name: $("#folderName").val(),
  };
  const [status, response] = await ajaxRequest(
    (path = "/folder/add.php"),
    "POST",
    UserData,
    true
  );
  $('#FolderError').show();
  if (status !== 200) {
    let error = createErrorMessage(response.error);
    document.getElementById("FolderError").innerHTML = error;
    setTimeout(function() {
      $('#FolderError').fadeOut('slow');
    }, 2000);
  } else {
    window.location.href = "/noteplus/";
  }
}

function createErrorMessage(message) {
  return `<strong>Error:</strong> ${message}`;
}

showFolder();
