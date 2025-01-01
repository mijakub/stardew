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
            $roles = ["Farming", "Mining"];//$_POST['roles'];
            if($gender == 'm'){
                if(count($roles) == 1){
                    
                }
                else if(count($roles) == 2){
                    
                }
                else if(count($roles) == 3){
                    
                }
                else if(count($roles) == 4){
                    //Klasa
                    class Character extends Man implements Mining, Combat, Fishing, Farming{
                        
                    }
                }
            }
            else{
                if(count($roles) == 1){
                    
                }
                else if(count($roles) == 2){
                    
                }
                else if(count($roles) == 3){
                    
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