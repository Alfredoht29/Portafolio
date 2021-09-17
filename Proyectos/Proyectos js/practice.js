alert("Hola soy practica, vamos a ver los objetos en js");
let user ={
  name:"Emilio",
  age:20,
  occupation:"programador"
}
alert(user.name + " tiene " + user.age);
//Borro la propiedad edad del objeto usuario
delete user.age;
alert(user.name + " tiene " + user.age);
//declaro una condicion como verdadera
let p2={
  "Le gustan los caramelos":true,
  __proto__:user
}
alert(p2["Le gustan los caramelos"]);
if (p2["Le gustan los caramelos"]){
  alert("si")
}
else{
  alert("no")
}
//checamos la existencia de propiedades en objetos con el comando in
alert("name" in user);
// la edad ya no debe aparecer debido a que la eliminamos en el delete de arriba
alert("age" in user);
//usamos proto para herencia
alert(p2.occupation);
// Math.trunc es una función nativa que elimina la parte decimal
alert( String(Math.trunc(Number("1.2"))) );
