function dom(x) {
    return document.querySelector(x)
}

var account = dom("#account");
var update_store = dom("#update_store");
var bank_number = dom("#bank_number");
var phone = dom("#phone");
var country = dom("#country");

account.addEventListener("click", () => 
{
   account.setAttribute("style", "border: 1px solid green;")
})
bank_number.addEventListener("click", () => 
{
    bank_number.setAttribute("style", "border: 1px solid green;")
})
phone.addEventListener("click", () => 
{
   phone.setAttribute("style", "border: 1px solid green;")
})
country.addEventListener("click", () => 
{
   country.setAttribute("style", "border: 1px solid green;")
})
