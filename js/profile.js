
async function getProfile(){
    const token = getCookie("TOKEN");
    // const data = ajaxRequest(path = "/profile/get.php" , UserData);

    const [status, response] = await ajaxRequest("/profile/get.php", "GET", data);

    if (status === 200) {
        console.log("Profile data fetched successfully:", response);

        document.getElementById("name").value = response.Name;
        document.getElementById("dob").value = response.DateOfBirth;
        document.getElementById("mobilenumber").value = response.Phonenumber;
        document.getElementById("gender").value = response.Gender;
        // document.getElementById("email").value = response.dob;
        document.getElementById("address").value = response.Address;
        document.getElementById("merital").value = response.MaritalStatus;
        document.getElementById("age").value = response.Age;
        document.getElementById("country").value = response.Country;
        document.getElementById("state").value = response.State;
        document.getElementById("city").value = response.City;
    } 
}