const escola = "Cod3r"

console.log(escola.charAt(4))
console.log(escola.charAt(5))

console.log(escola.charCodeAt(2)) // Retorna o valor unicode da posição especificada.
console.log(escola.indexOf('C')) // Retorna o posição que se encontra o caracter especificado.

console.log(escola.substring(1))
console.log(escola.substring(0, 3))

console.log('Escola '.concat(escola).concat('!'))
console.log('Escola '+ escola + '!')

console.log(escola.replace(3, 'e'))
console.log(escola.replace(/\d/, 'e')) // Utilizando regex (/\d/) para que substitua todos os dígitos.
console.log(escola.replace(/\w/g, 'e')) // Utilizando regex (/\w/g) para que substitua todos a letras e dígitos.

console.log('Ana,Maria,Pedro'.split(','))
console.log('Ana,Maria,Pedro'.split(/,/)) //Utilizando regex (/,/)