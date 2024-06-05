a=[5,7,9,5,6]
b=[3,5,2,9,5]
c=[]
print("A=", a)
print("B=", b)

for i in range(5):
    for j in range(5):
        if a[i]==b[j]:
            c.insert(i,a[i])
print("C=", c)

