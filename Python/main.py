#Importamos desde la clase car el elemento Car
#La clase es el nombre del archivo y el elemento es lo que está dentro de esta

from car import Car
from account import Account

if __name__=="__main__":
    car = Car("PDJS54", Account("Adan Marchena","18159756-9"))

    print(vars(car))
    print(vars(car.driver))