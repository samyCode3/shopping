function signup(x) {
    return document.querySelector(x)
}


   

var store_name = signup("#store_name");
var store_email = signup("#store_email");
var store_reg = signup("#reg");
var store_loader = signup(".loader");
var store_package = signup(".store_package");
var pop_up = signup(".pop");
var store_reg_text = signup(".reg_text");


store_name.addEventListener("click", (e) => 
{
 e.preventDefault();
 store_name.setAttribute("style", "border: 1px solid green;");
 
})
store_email.addEventListener("click", (e) => 
{
 e.preventDefault();
 store_email.setAttribute("style", "border: 1px solid green;");
})
pop_up.addEventListener("click", (e) => 
{

 e.preventDefault();
 store_package.setAttribute("style", "display: block;");
})


store_reg.addEventListener("onload", (e) => 
{
   
    store_loader.setAttribute("style", "display: block;");
    store_reg_text.setAttribute("style", "display: none;");
})


