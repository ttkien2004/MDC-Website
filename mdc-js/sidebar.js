let id = null;
const open = document.getElementById("menu");
open.onclick = function(){
    let element = document.getElementById("sidebar");
    let pos = -200;
    clearInterval(id);
    id = setInterval(frame, 1);
    function frame(){
        if(pos === 0){
            clearInterval(id);
        }else{
            pos++;
            element.style.left = pos + 'px';
        }
    }
}


let id1 = null;
const close = document.getElementById("close");
close.onclick = function(){
    let element = document.getElementById("sidebar");
    let pos = 0;    
    clearInterval(id1);
    id1 = setInterval(frame,1);
    function frame(){
        if(pos === -200){
            clearInterval(id1);
        }else{
            pos--;
            element.style.left = pos + 'px';
        }
    }    
}