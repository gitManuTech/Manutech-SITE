cand1 = 0
cand2 = 0
cand3 = 0
nulo = 0

print("_________________________________________________")
print("|Numero do candidato                   Candidato|")
print("|13----------------------------------------Dilma|")
print("|45----------------------------------------Aécio|")
print("|43---------------------------------------Marina|")
print("|1-----------------------------------------Nulos|")
print("_________________________________________________")


while True:
    voto = int(input("Digite o código do candidato (ou 0 para encerrar): "))
    if voto == 0:
        break
    
    if voto == 13:
        cand1 += 1
    elif voto == 45:
        cand2 += 1
    elif voto == 43:
        cand3 += 1
    elif voto == 1:
        nulo += 1


print("_________________________________________________")
print("|Numero do candidato                   Candidato|")
print(f"|13-----------------{cand1}---------------Dilma|")
print(f"|45-----------------{cand2}---------------Aécio|")
print(f"|43-----------------{cand3}--------------Marina|")
print(f"|1------------------{nulo}----------------Nulos|")
print("_________________________________________________")

