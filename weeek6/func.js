function stdForm(){
 var std=   document.getElementById("stdForm")
 var tea=   document.getElementById("teaForm")
 var reg=   document.getElementById("regForm")

 std.classList.remove("unhide");
 std.classList.add("unhide");
 std.classList.remove("hide");
 tea.classList.add("hide");
 std.classList.remove("hide");
 reg.classList.add("hide");


}
function teaForm(){
    var std=   document.getElementById("stdForm")
    var tea=   document.getElementById("teaForm")
    var reg=   document.getElementById("regForm")
   
   
    std.classList.remove("hide"); 
    std.classList.add("hide");
    std.classList.remove("unhide");
    tea.classList.add("unhide");
    std.classList.remove("hide");
    reg.classList.add("hide");
   
   
   }
   function regForm(){
    var std=   document.getElementById("stdForm")
    var tea=   document.getElementById("teaForm")
    var reg=   document.getElementById("regForm")
   
std.classList.remove("hide");
 std.classList.add("hide");
 std.classList.remove("hide");
 tea.classList.add("hide");
 std.classList.remove("unhide");
 reg.classList.add("unhide");
   
   }