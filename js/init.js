const API_HOST = "localhost";
const API_PORT = "80";

const API_BASE_URL = `http://${API_HOST}:${API_PORT}/noteplus-api`;

async function ajaxRequest(path, type = "GET", data = "", sendToken = true) {
  let url = API_BASE_URL + path;

  let token = localStorage.getItem("TOKEN");
  let requestInit = "";
  let headers = {
    "Content-Type": "application/json",
  };

  if (sendToken) headers["Authorization"] = `Bearer ${token}`;

  if (type == "GET")
    requestInit = {
      method: type,
      headers: headers,
    };
  else
    requestInit = {
      method: type,
      headers: headers,
      body: JSON.stringify(data),
    };

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
