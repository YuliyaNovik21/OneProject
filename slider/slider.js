// $(window).scroll(function(){

//     if ($(window).scrollTop() > ) {

//         let windowHeight = $(window).height() +  $(window).scrollTop();

//         $('html, body').animate({
//             scrollTop : windowHeight
//         }, 1000);

        
    
//         let scroll = $(window).scrollTop();
    
//         console.log(scroll + 'px');

//     }



// });

let counter = 1;
let lastSlide;
$('.slider-item').click(function() {

    let len = $('.slider-item').length;


    if (counter == len  || (lastSlide > counter && counter !=0 )) {

    lastSlide = counter;
    if(counter == len) counter -= 2;

    else counter--;   

    let left = (counter * -100)+ '%';

    $('.slider').css('left', left);

} else { 
    if(counter == 0) counter++;

    let left = (counter * -100)+ '%';

    $('.slider').css('left', left);

    counter++;

}



    // $(`.slider(${counter})`).css('display','none');

    // if (counter == len) counter = 0;


    // $(`.slider-item:nth-child(${++counter})`).css('display','flex');

});