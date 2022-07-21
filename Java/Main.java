package Java;

class Main {
    public static void main(String[] args) {
        //Car 1
        UberX uberX = new UberX("CDMZ98 ", new Account("Adan Marchena ", "18159756-9 "),"chevrolet ", "Spark");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("POUI88", new Account("Adan Marchena", "18159756-9"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
        
    }
}