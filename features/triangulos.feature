#language: pt

Funcionalidade: Calculo de triangulo
Como um aluno de matemática
Eu quero informar os lados de um triangulo
De modo que eu saiba qual o tipo do triangulo

Cenario: Triangulo Equilatero
	Dado que eu estou na pagina de calculo de triangulos
	Quando eu informo que o lado1 eh "3"
	E eu informo que o lado2 eh "3"
	E eu informo que o lado3 eh 3
	Entao exibe mensagem triangulo "equilatero"

Cenario: Triangulo Isosceles
	Dado que eu estou na pagina de calculo de triangulos
	Quando eu informo que o lado1 eh "3"
	E eu informo que o lado2 eh "3"
	E eu informo que o lado3 eh 1
	Entao exibe mensagem triangulo "isosceles"


Cenario: Triangulo Escaleno
	Dado que eu estou na pagina de calculo de triangulos
	Quando eu informo que o lado1 eh "3"
	E eu informo que o lado2 eh "2"
	E eu informo que o lado3 eh 1
	Entao exibe mensagem triangulo "escaleno"