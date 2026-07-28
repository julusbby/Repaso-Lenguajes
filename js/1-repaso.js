console.log("hola")

console.log(2 + 2)

var v = "var"

//cambia
let l = "let"

//no cambia
const c = "const"

//cadena de texto
let nombre = "juliana"

//numeros
let edad = 19
let decimal = 1.9

//boleanos
let verdad = true
let falso = false

//undefinded
let undefindedValue

//null
let nullVelue = null

//symbol
let mySymbol = Symbol("mysymbol")

//BigInt
let myBigInt = BigInt(123456789)

//mostramos los tipos de datos
console.log(typeof nombre)

//------------------
//------------------

//operadores

//operadores aritmeticas

let a = 5
let b = 10

console.log(a + b) // Suma
console.log(a - b) // resta
console.log(a * b) // multiplicacion
console.log(a / b) // division

console.log(a % b) // modulo
console.log(a ** b) // exponente

a++ //incremento

console.log(a)

b-- //decremento

console.log(b)


// operadores de asignacion

let myVariable = 2
console.log(myVariable)
myVariable+= 2
console.log(myVariable)

myVariable +=2
myVariable -=2
myVariable *=2
myVariable /=2
myVariable %=2
myVariable **=2


//operadores de comparacion

console.log(a > b)
console.log(a < b)
console.log(a <= b)
console.log(a >= b)
console.log(a == b)
console.log(a === b) //igualdad por identidad (por tipo y valor)
console.log(a != 6) //distinto
console.log(a !== 6)


//operadores logicos
// and (&&)
console.log( 5 < 6 && 7 < 2)

//or (||)
console.log(2 > 6 || 8 > 5)

//not (!)
console.log(!(5 > 7 && 6 < 9))


//operador terneario
const isRaining = true

//si se cumple la condicion "esta lloviendo"
//si no se cumple la condicion esta lloviendo
isRaining ? console.log("Esta lloviendo") : console.log("No esta lloviendo")