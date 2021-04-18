console.log(Math.ceil(6.1))

const objeto1 = {}
objeto1.nome = 'Bola'
// objeto1['nome'] = 'Bola2'
console.log(objeto1.nome)

function Objeto(nome) {
    this.nome = nome
    this.exec = function () {
        console.log('Exec...')
    }
}

const objeto2 = new Objeto('Cadeira')
const objeto3 = new Objeto('Mesa')

console.log(objeto2.nome)
console.log(objeto3.nome)
objeto3.exec()