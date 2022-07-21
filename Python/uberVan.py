from car import Car

class UberVan(Car):
    TypeCarAccepted = []
    SealtMaterial = []

    def __init__(self, license, driver, TypeCarAccepted, SealtMaterial):
        super().__init__(license, driver)

        self.TypeCarAccepted = TypeCarAccepted
        self.SealtMaterial = SealtMaterial