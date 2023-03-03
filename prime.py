a=int(input("enter your number:"))
if a>1:
    for i in range(2,a):
        if(a%i==0):
            print(a,"is not prime")
        else:
            print(a,"is prime number")