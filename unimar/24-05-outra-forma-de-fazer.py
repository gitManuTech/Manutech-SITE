vetor=[1,2,3,4,5,6]

numero=int(input("Qual o numero? "))
verifica=False

for i in range(6):
    if numero==vetor[i]:
        verifica=True

if verifica==True:
    print("O numero esta no vetor")
else:
    print("O numero nao esta no vetor")