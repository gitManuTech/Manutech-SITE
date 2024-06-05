#Fazer um vetor que veja 6 vezes se o numero que o usuario digitou tem no vetor

definição=[3,6,66,666,69,67]
a=[]

for j in range(1):
    a.insert(j,int(input("Tente advinhar um numero que está no vetor: ")))


for i in range(6):
    if definição[i]==a[j]:
        print(f"{a} está incluso no vetor.")
    else:
        print(f"{a} esse numero nao esta incluso no vetor.")

        