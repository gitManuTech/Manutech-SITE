a=[]
b=[]
c=[]

for i in range(10):
    usuario=int(input("Informe 10 numeros: "))
    a.append(usuario)
    

for i in range(10):
    usuario2=int(input("Informe mais 10 numeros"))
    b.append(usuario2)

for a,b in zip(a,b):
    if a==b:
        c.append(a)

print(c)

