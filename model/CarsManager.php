<?php
class CarsManager extends DbConnect
{
    function viewAllCars(){
        $query = "SELECT * FROM cars";
        $viewCars = $this->Connect()->prepare($query);
        foreach ($datas = $viewCars as $entry)
    }
}


