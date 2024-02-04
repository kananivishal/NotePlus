const API_HOST = "localhost";
const API_PORT = "80";

const API_BASE_URL = `http://${API_HOST}:${API_PORT}/noteplus-api`;

async function ajaxRequest(path, type = "GET", data = "", sendToken = true) {
  let url = API_BASE_URL + path;

  let requestInit = "";
  let headers = {
    "Content-Type": "application/json",
  };
  
  if (sendToken)
  {
    let token = getCookie("TOKEN");
    headers["Authorization"] = `Bearer ${token}`;
  }

  if (type == "GET")
  {
    requestInit = {
      method: type,
      headers: headers,
    };
  }
  else
  {
    requestInit = {
      method: type,
      headers: headers,
      body: JSON.stringify(data),
    };
  }

  let result = await fetch(url, requestInit);

  if (result.status == 401) {
    location.href = "/noteplus/pages/login.php"
  }

  let response = "";

  try {
    response = await result.json();
  } catch (error) {}

  return [result.status, response];
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}

function setCookie(name, value, expTimeInDays) {
  const currentDate = new Date();
  currentDate.setTime(currentDate.getTime() + (expTimeInDays * 24 * 60 * 60 * 1000));
  let expires = "expires=" + currentDate.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}