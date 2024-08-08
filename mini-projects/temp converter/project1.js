var cel = document.querySelector("#cel");
var fah = document.querySelector("#fah");

cel.addEventListener("input",function(){
    var value = cel.value;
    var formula = (value * 9/5)* 32; 
    fah.value = formula;
});
fah.addEventListener("input",function(){
   var Value = fah.value;
   var Formula = (Value * 9/5)* 32;
   cel.value = Formula
});
