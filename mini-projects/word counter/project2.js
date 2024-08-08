var textbox = document.querySelector("textarea")

textbox.addEventListener("input",function(){
    var text = this.value;
    var char = text.length;
    document.querySelector("#char").innerHTML=char;
    text = text.trim();
    var word = text.split(" ");
    var cleanlist = word.filter(function(elm){
        return elm != "";
    })    

    document.querySelector("#words").innerHTML= cleanlist.length;

})
