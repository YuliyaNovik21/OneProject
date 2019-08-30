// // while () - цикл работает до тех пор пока не выполниться условие
// // for () - выполнеят определенное количество операций
// // forEach () - цикл для массивов
// // do while

// // 1. комп загадывает число от 0 до 100 (случайное). 


// let num = Math.ceil(Math.random() * 100);
// let userNum = prompt('Привет, я загадал число, угадай его с 5 попыток');
// let i = 1;
// let flag = false;
// let allNums = [];
// // 2. пользователь должен угадать число за пять попыток.
// while (i <= 5) {
//     // загад число = 72
//     // пользователь ввел = 24

//     // 0. ничего не введено
//     if(userNum == ''){
//         userNum = prompt('введите что нибуль');
    
//     }
//     // 1. число больше
//     else if(userNum < num){
//         userNum = prompt('Число должно быть меньше');
//         allNums.push(userNum);
//     }

//     // 2. число меньше
//     else if(userNum > num){
//         userNum = prompt('Число должно быть меньше');
//         allNums.push(userNum);

//     }
//     // 3. число равно
//     else if(userNum == num){
//         userNum = alert('Вы отгадали');
//         flag = true;
//         break;

//     }
//     // 4. введенное число вообще не число
//     else if(isNaN(userNum)){
//         userNum = prompt('ошибка');

//     }
//     if(!flag){
//         alert('вы проиграли');
//     }
    
//     i++;


// }




// 3. комп после каждой попытки дает подсказки


// 4. все числа которые вводят пользователь мы должны в конце игры вывести


// 1. кто-то загадывает слово
// let word = 'корова';
// // 2. задача игрока по буквам угадать слово без ограничения попыток
// // join() - массив превратить в строчку текста
// // split() - разьить строку текста на массив
// let wordArray = word.split('');
// let userWord = [];
// wordArray.forEach(function(){
//     userWord.push('_');
// });

// while(true){
//     let userLetter = prompt('введите букву. ЗАГАДАННОЕ СЛОВo ' + userWord.join(' '));
//     if(userLetter.length != 1){
//         userLetter = prompt('нужно ввести только одну букву');

//     };

//     wordArray.forEach(function(value, index){
//         if(userLetter == value){
//             userWord[index] = value;


//         }
        
//     });

//     if(wordArray.join('')==userWord.join('')){
//         alert('браво');
//         break;
//     }


// };




// console.log(userWord);
// 3. такой буквы нет
// 5.такая буква есть. угаданные буквы: _f_f_F_




