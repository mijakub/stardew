<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stardew Valley</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
        //Klasy abtrakcyjne
        abstract class Character{
            //konstruktor
            public function __construct(
                public string $name = "Eric",
                public string $lastName = "Barone",
                public string $farm = "SummerFarm",
                public array $roles = []
            ){}
            protected $gender = "m";
            public function setGender($gender){
                $this->gender = $gender;
            }
            //metoda abstrakcyjna
            abstract public function makePlayerImage();
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
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["roles"])){
            $name = $_POST['name'];
            $lastname = $_POST['lastName'];
            $gender = $_POST['gender'];
            $farm = $_POST['farm'];
            $roles = $_POST['roles'];
            print_r($roles);
            if(count($roles) == 1){
                if($roles[0] == "Mining"){
                    //Klasa
                    class Player extends Character implements Mining{
                        
                    }
                }
                else if($roles[0] == "Combat"){
                    //Klasa
                    class Player extends Character implements Combat{
                        
                    }
                }
                else if($roles[0] == "Fishing"){
                    //Klasa
                    class Player extends Character implements Fishing{
                        
                    }
                }
                else if($roles[0] == "Farming"){
                    //Klasa
                    class Player extends Character implements Farming{
                        
                    }
                }
            }
            else if(count($roles) == 2){
                if(($roles[0] == "Mining" && $roles[1] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining")){
                    //Klasa
                    class Player extends Character implements Mining, Combat{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Mining" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining")){
                    //Klasa
                    class Player extends Character implements Mining, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Mining" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Mining")){
                    //Klasa
                    class Player extends Character implements Mining, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Combat" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat")){
                    //Klasa
                    class Player extends Character implements Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Combat" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Combat")){
                    //Klasa
                    class Player extends Character implements Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Fishing" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Fishing")){
                    //Klasa
                    class Player extends Character implements Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
            }
            else if(count($roles) == 3){
                if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Mining") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                    //Klasa
                    class Player extends Character implements Mining, Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                    //Klasa
                    class Player extends Character implements Mining, Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Mining")){
                    //Klasa
                    class Player extends Character implements Mining, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
                else if(($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Combat")){
                    //Klasa
                    class Player extends Character implements Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                        
                    }
                }
            }
            else if(count($roles) == 4){
                //Klasa
                class Player extends Character implements Mining, Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                    
                }
            }
            $playerCharacter = new Player($name, $lastname, $farm, $roles);
            $playerCharacter->setGender($gender);
            echo $playerCharacter->makePlayerImage();
        }
    ?>
</body>
</html>