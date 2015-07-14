#language: pt

Funcionalidade: Calculo de tipo de triangulo
Como um aluno de matemática
Eu quero informar os lados de um triangulo
De modo que eu saiba qual o tipo do triangulo

Esquema do Cenario: Todos os triangulos
	Dado que eu estou na pagina de calculo de triangulos
	Quando eu informo o "<lado1>", "<lado2>" e "<lado3>" do triangulo
	Entao exibe mensagem trianguloResultado "<resultado>"	

Cenarios:
| lado1 | lado2 | lado3 |   resultado   |
|  3	|	3	| 	3 	|  "equilatero" |
|  4	|	3	| 	2	|  "escaleno"   |
|  4	|	4	| 	1	|  "isosceles"  |