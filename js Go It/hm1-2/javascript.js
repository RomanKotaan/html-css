// function pow(x, n) {
//   let result = x;

//   for (let i = 1; i < n; i++) {
//     result *= x;
//   }

//   return result;
// }

// let x = prompt("x?", '');
// let n = prompt("n?", '');

// if (n < 1) {
//   alert(`Степень ${n} не поддерживается, используйте натуральное число`);
// } else {
//   alert( pow(x, n) );
// }
var arr = [];
for (var i = 0; i < 5; i++){
	arr[i] = prompt("Ваше ім'я");
}
var name = prompt("Вкажіть ваше ім'я");
alert(arr.indexOf(name) != -1 ? name + ", все збс, ти проходиш далі" : "Щось пішло не так");
