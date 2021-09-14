//mi primer script
//para que se use de manera moderna pongo el use strict
"use strict";
alert('Hola Soy javascript');
//Los punto y coma separan lineas
alert(12+1);
/* soy un estudiante de sistemas
que quiere ver como se desarrollan las paginas web*/
let message;
message = "Bienvenido a mi mundo ";
alert(message); //en estas lineas declare variable, le di un valor y luego la imprimo
//tambien se puede utilizar var en lugar de let
var mess2 = "Bienvenido Otra vez ";
alert(mess2);
//constantes
const BIRTHDAY = '29-06-2001';
//cambio el valor de mess2
mess2=BIRTHDAY;
alert(mess2);
//mezclar cadenas en operaciones da error
alert("hola"/2);
//operaciones booleanas
let mayorque = 4>1;
//alert(mayorque);
let name="Emilio";
alert(`hola ${name}`);
//funcion prompt
let resultado = prompt("nombre","Alex");
alert(`te llamas ${resultado} ?, mucho gusto`);
let sexo= confirm("Eres hombre?");
alert(sexo);
//Matematicas
let x=2,y=33;
//residuo
alert(y%x);
//exponente
alert(y**x);
let r=0.1+0.2;
alert(r);
let b=10,a=1;
while (!(a>b)){
  a++;
}
alert(a>b);
