package com.example.bilalsalman.hogwartsexpress;

public class AddTrain {
    String TainNumber;
    String Manufacturer;
    String Operator;
    String RouteID;
    Integer BusinessCapacity;
    Integer EconomyCapacity;
    Integer NumberOfCarriages;

    public AddTrain(String tainNumber, String manufacturer, String operator, String routeID, Integer businessCapacity, Integer economyCapacity, Integer numberOfCarriages) {
        TainNumber = tainNumber;
        Manufacturer = manufacturer;
        Operator = operator;
        RouteID = routeID;
        BusinessCapacity = businessCapacity;
        EconomyCapacity = economyCapacity;
        NumberOfCarriages = numberOfCarriages;
    }

    public String getTainNumber() {
        return TainNumber;
    }

    public String getManufacturer() {
        return Manufacturer;
    }

    public String getOperator() {
        return Operator;
    }

    public String getRouteID() {
        return RouteID;
    }

    public Integer getBusinessCapacity() {
        return BusinessCapacity;
    }

    public Integer getEconomyCapacity() {
        return EconomyCapacity;
    }

    public Integer getNumberOfCarriages() {
        return NumberOfCarriages;
    }

    public void setTainNumber(String tainNumber) {
        TainNumber = tainNumber;
    }

    public void setManufacturer(String manufacturer) {
        Manufacturer = manufacturer;
    }

    public void setOperator(String operator) {
        Operator = operator;
    }

    public void setRouteID(String routeID) {
        RouteID = routeID;
    }

    public void setBusinessCapacity(Integer businessCapacity) {
        BusinessCapacity = businessCapacity;
    }

    public void setEconomyCapacity(Integer economyCapacity) {
        EconomyCapacity = economyCapacity;
    }

    public void setNumberOfCarriages(Integer numberOfCarriages) {
        NumberOfCarriages = numberOfCarriages;
    }
}
