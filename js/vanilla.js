
// let body = document.body;




function getRandom(min,max){
    return Math.ceil((Math.random()*(max-min)) +min);
}




setInterval(function(){
    let flake = document.createElement('div');

let size = getRandom(10,100) ;

flake.style.height = size + 'px';
flake.style.width = size + 'px';

flake.classList.add('flake');

// body.appendChild(flake);

flake.style.left = getRandom(0,100) + '%';

},500);



















// let blocks = document.querySelectorAll('.statistic-item');
// blocks[0].style.backgroundColor = 'orange';
// blocks[2].style.height = '500px';

// blocks.forEach(function(value, index) {
//     value.style.backgroundColor = 'orange';
//     value.classList.add('hello-world');

// } );

// console.dir(blocks);
