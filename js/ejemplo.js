var perro = "hola";

gato = "gato";

var numero = 3,
	numero2 = 4;

console.log(perro);
console.log(gato);
console.log(numero);
console.log(numero2);

sumar(numero, numero2);

sumar(10, 4);

function sumar(x, y) {
	suma = x + y;
	console.log("La suma de" + x + " " + y + "es ");
	console.log(suma);
}