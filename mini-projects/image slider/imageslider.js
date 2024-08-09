function controller(x){//1
    flag=flag+x;//2=1+1
    slideShow(flag);//3
}
let flag=0;//1

slideShow(flag);
function slideShow(num){
    let slides= document.getElementsByClassName('slide');
    if(num==slides.length){
        flag=0;
        num=0;
    }else{
        if(num==-1){
            flag=slides.length-1;
            num=slides.length-1;
        }
    }
    for(let y of slides){
        y.style.display="none"
    }
    slides[num].style.display="block";
}
  

