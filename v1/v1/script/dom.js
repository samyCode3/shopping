function dom(x) {
    return document.querySelector(x)
}
var btn = dom(".btn_dom");
var doms = dom(".dom");


btn.addEventListener("click", () => 
{

    doms.setAttribute("style", "display: block;");
})

