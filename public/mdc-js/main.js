// let prevContainer = document.querySelector('.prev-container');
// prevContainer.addEventListener("mouseenter", mouseEnter);
// prevContainer.addEventListener("mouseleave", mouseLeave);

// function mouseEnter(){
//     let prevButton = document.getElementById("prev-button");
//     let pos = 0;
//     let id = null;    
//     clearInterval(id);
//     id = setInterval(frame,2);
//     function frame(){
//         if(pos === 10){
//             clearInterval(id);
//         }else{
//             pos++;
//             prevButton.style.left = pos + 'px';
//         }
//     }
// }

// function mouseLeave(){
//     let prevButton = document.getElementById("prev-button");
//     let pos = 10;
//     let id = null;
//     clearInterval(id);
//     id = setInterval(frame,2);
//     function frame(){
//         if(pos === -50){
//             clearInterval(id);
//         }else{
//             pos--;
//             prevButton.style.left = pos + 'px';
//         }
//     }
// }

// let nextContainer = document.querySelector('.next-container');
// nextContainer.addEventListener("mouseenter", prevEnter);
// nextContainer.addEventListener("mouseleave", prevLeave);

// function prevEnter(){
//     let nextButton = document.getElementById("next-button");
//     let pos = 0;
//     let id = null;
//     clearInterval(id);
//     id = setInterval(frame,2);
//     function frame(){
//         if(pos === 10){
//             clearInterval(id);
//         }else{
//             pos++;
//             nextButton.style.right = pos + 'px';
//         }
//     }
// }
// function prevLeave(){
//     let nextButton = document.getElementById("next-button");
//     let pos = 0;
//     let id = null;
//     clearInterval(id);
//     id = setInterval(frame,2);
//     function frame(){
//         if(pos === -50){
//             clearInterval(id);
//         }else{
//             pos--;
//             nextButton.style.right = pos + 'px';
//         }
//     }
// }

let slideIndex = 0;
showSlides();

function showSlides(){
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    slideIndex++;
    if(slideIndex > slides.length) {slideIndex = 1;}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides,3000);
}

