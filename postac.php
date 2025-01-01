<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLACEHOLDER!!!!!!!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
        //Klasy abtrakcyjne
        abstract class Man{

        }
        abstract class Woman{
            
        }

        //Interfejsy
        interface Mining{
            
        }
        interface Combat{
            
        }
        interface Fishing{
            
        }
        interface Farming{
            
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $lastname = $_POST['lastName'];
            $gender = $_POST['gender'];
            $farm = $_POST['farm'];
            $roles = $_POST['roles'];
            if($gender == 'm'){
                if(count($roles) == 1){
                    if($roles[0] == "Mining"){
                        //Klasa
                        class Character extends Man implements Mining{
                            
                        }
                    }
                    else if($roles[0] == "Combat"){
                        //Klasa
                        class Character extends Man implements Combat{
                            
                        }
                    }
                    else if($roles[0] == "Fishing"){
                        //Klasa
                        class Character extends Man implements Fishing{
                            
                        }
                    }
                    else if($roles[0] == "Farming"){
                        //Klasa
                        class Character extends Man implements Farming{
                            
                        }
                    }
                }
                else if(count($roles) == 2){
                    if(($roles[0] == "Mining" && $roles[1] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining")){
                        //Klasa
                        class Character extends Man implements Mining, Combat{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining")){
                        //Klasa
                        class Character extends Man implements Mining, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Mining")){
                        //Klasa
                        class Character extends Man implements Mining, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Combat" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat")){
                        //Klasa
                        class Character extends Man implements Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Combat" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Combat")){
                        //Klasa
                        class Character extends Man implements Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Fishing" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Fishing")){
                        //Klasa
                        class Character extends Man implements Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                }
                else if(count($roles) == 3){
                    if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Mining") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                        //Klasa
                        class Character extends Man implements Mining, Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                        //Klasa
                        class Character extends Man implements Mining, Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Mining")){
                        //Klasa
                        class Character extends Man implements Mining, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Combat")){
                        //Klasa
                        class Character extends Man implements Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                }
                else if(count($roles) == 4){
                    //Klasa
                    class Character extends Man implements Mining, Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
            }
            else{
                if(count($roles) == 1){
                    if($roles[0] == "Mining"){
                        //Klasa
                        class Character extends Woman implements Mining{
                            
                        }
                    }
                    else if($roles[0] == "Combat"){
                        //Klasa
                        class Character extends Woman implements Combat{
                            
                        }
                    }
                    else if($roles[0] == "Fishing"){
                        //Klasa
                        class Character extends Woman implements Fishing{
                            
                        }
                    }
                    else if($roles[0] == "Farming"){
                        //Klasa
                        class Character extends Woman implements Farming{ 
                            
                        }
                    }
                }
                else if(count($roles) == 2){
                    if(($roles[0] == "Mining" && $roles[1] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining")){
                        //Klasa
                        class Character extends Woman implements Mining, Combat{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining")){
                        //Klasa
                        class Character extends Woman implements Mining, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Mining")){
                        //Klasa
                        class Character extends Woman implements Mining, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Combat" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat")){
                        //Klasa
                        class Character extends Woman implements Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Combat" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Combat")){
                        //Klasa
                        class Character extends Woman implements Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Fishing" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Fishing")){
                        //Klasa
                        class Character extends Woman implements Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                }
                else if(count($roles) == 3){
                    if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Mining") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                        //Klasa
                        class Character extends Woman implements Mining, Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                        //Klasa
                        class Character extends Woman implements Mining, Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Mining")){
                        //Klasa
                        class Character extends Woman implements Mining, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                    else if(($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Combat")){
                        //Klasa
                        class Character extends Woman implements Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                            
                        }
                    }
                }
                else if(count($roles) == 4){
                    //Klasa
                    class Character extends Woman implements Mining, Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
            }
            $character = new Character($name, $lastname, $farm, $roles);
        }
    ?>
</body>
</html>