var a = 3 // Evitar criar variaveis com var
let b = 4 // Sempre utilize let

// Ao trabalhar com 'var' é possivel redeclarar a variável duas vezes no mesmo escopo
var a = 30
b = 40
console.log(a, b)

a = 300
b = 400
console.log(a, b)

// Não é possivel atribuir um novo valor
const c = 5
// c = 50
console.log(c)