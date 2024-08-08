
    function display(value) {
        document.getElementById("a").value += value;
    }
    function clr(){
        document.getElementById("a").value=" ";
    }
    function cal(){
        var p=document.getElementById("a").value;
        var q=eval(p);
        document.getElementById("a").value=q
    }
