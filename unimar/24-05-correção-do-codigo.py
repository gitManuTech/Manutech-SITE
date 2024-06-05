vetor=[1,2,3,4,5,6]
numero=int(input("Qual o numero? "))


for i in range(6):
    if numero==vetor[i]:
        print("O numero esta no vetor")
    else:
        print("O numero nao esta no vetor")