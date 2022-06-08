const url = "http://localhost/shopifyapi/api/controller/signupController.php"
const addUsers = document.getElementById("add-users");
var fullValue = document.getElementById("fullname");
var userValue = document.getElementById("username");
var emailValue = document.getElementById("email");
var countryValue = document.getElementById("country");
var passwordValue = document.getElementById("password");
var dateValue = document.getElementById("date");
var confirmedValue = document.getElementById("confirm");


addUsers.addEventListener("submit", (e) => {
    // e.preventDefault();
    fetch(url, {
        method: 'POST',
        body: JSON.stringify({
            fullname: fullValue.value,
            username: userValue.value,
            email: emailValue.value,
            country: countryValue.value,
            date: dateValue.value,
            password: passwordValue.value,
            confirm:  confirmedValue.value
        })
    })
        .then(res => res.json())
        .catch(err=>alert(err))


})