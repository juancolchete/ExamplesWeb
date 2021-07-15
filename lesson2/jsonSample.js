let pessoa = JSON.parse(`{
"nome": "juan",
"numeros": [1,2,3,4,6,78,9],
"parentes":[
{"nome":"vera", "telefone":981238833,"estado":"MG"},
{"nome":"jorge", "telefone":981238833,"estado":"SP"},
{"nome":"caio", "telefone":981238833,"estado":"SP"}
]
}`)
console.log(pessoa['parentes'][1]['nome'])