    function sound(){
        var audio = new Audio('btn-sound.mp3');
        audio.play();
    }
    function display(value) {
        sound();
        document.getElementById("a").value += value;
    }
    function clr(){
        sound();
        document.getElementById("a").value=" ";
    }
    function cal(){
        sound();
        var p=document.getElementById("a").value;
        var q=eval(p);
        document.getElementById("a").value=q
    }
    function sqrt() {
        sound();
        var p = document.getElementById("a").value;
        var q = Math.sqrt(eval(p));
        document.getElementById("a").value = q;
    }
    function trig(func) {
        sound();
        var p = document.getElementById("a").value;
        var q = Math[func](eval(p) * Math.PI / 180); // Converts degrees to radians
        document.getElementById("a").value = q;
    }


