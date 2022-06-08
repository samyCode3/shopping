var cart = document.querySelector(".cart_input");
const productBtn = document.querySelector(".productBtn");
const close = document.querySelector("#cancel");
const button = document.querySelector('.upload');
const error = document.querySelector('.error');

productBtn.addEventListener("click", (e) =>  
{
    e.preventDefault();
    cart.setAttribute("style", "display : block");
})
close.addEventListener("click", (e) =>  
{
    e.preventDefault();
    cart.setAttribute("style", "display : none;");
})
button.addEventListener("onload", (e) =>  
{
    e.preventDefault();
    error.setAttribute("style", "display : block");
})



