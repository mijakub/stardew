
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
<h1>Stardew Valley</h1>
    <div class="container min-vh">
        <div class='main'>
                <div class="row">
                    <div class="col-7" style="margin: 0;">
                        <div class="img_character2">
                            <?php
                                //Klasy abtrakcyjne
                                abstract class Character{
                                    //konstruktor
                                    public function __construct(
                                        protected string $name = "Eric",
                                        protected string $lastName = "Barone",
                                        protected string $farm = "Spring",
                                        protected array $roles = []
                                    ){}
                                    protected string $mining;
                                    protected string $combat;
                                    protected string $fishing;
                                    protected string $farming;
                                    protected $gender = "m";
                                    public function setGender($gender){
                                        $this->gender = $gender;
                                    }
                                    public function displayCharacterInfo(){
                                        return "Name: $this->name $this->lastName<br>Selected Farm: $this->farm farm<br>Roles: <br>*".implode("<br>*", $this->roles);
                                    }
                                    //metoda abstrakcyjna
                                    abstract public function makePlayerImage();
                                }

                                //Interfejsy
                                interface Mining{
                                    public function makeHelmet();
                                }
                                interface Combat{
                                    public function makeSword();
                                }
                                interface Fishing{
                                    public function makeRod();
                                }
                                interface Farming{
                                    public function makeHay();
                                }

                                //Klasy przedmiotów dla ról - do polimorfizmu
                                class MiningItem{
                                    public function makeItem(){
                                        return "<img src='pickaxeBlock.png' alt='pickaxe'>";
                                    }
                                }
                                class CombatItem{
                                    public function makeItem(){
                                        return "<img src='swordBlock.png' alt='sword'>";
                                    }
                                }
                                class FishingItem{
                                    public function makeItem(){
                                        return "<img src='rodBlock.png' alt='rod'>";
                                    }
                                }
                                class FarmingItem{
                                    public function makeItem(){
                                        return "<img src='canBlock.png' alt='can'>";
                                    }
                                }

                                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["roles"])){
                                    $name = $_POST['name'];
                                    $lastname = $_POST['lastName'];
                                    $gender = $_POST['gender'];
                                    $farm = $_POST['farm'];
                                    $roles = $_POST['roles'];
                                    $mining = $combat = $fishing = $farming = false;
                                    if(count($roles) == 1){
                                        if($roles[0] == "Mining"){
                                            //Klasa
                                            class Player extends Character implements Mining{
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                        }
                                        else if($roles[0] == "Combat"){
                                            //Klasa
                                            class Player extends Character implements Combat{
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeSword();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='characterMan.png' alt='Man' class='man'>" : "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $combat = true;
                                        }
                                        else if($roles[0] == "Fishing"){
                                            //Klasa
                                            class Player extends Character implements Fishing{
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeRod();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $fishing = true;
                                        }
                                        else if($roles[0] == "Farming"){
                                            //Klasa
                                            class Player extends Character implements Farming{
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $farming = true;
                                        }
                                    }
                                    else if(count($roles) == 2){
                                        if(($roles[0] == "Mining" && $roles[1] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining")){
                                            //Klasa
                                            class Player extends Character implements Mining, Combat{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    $this->makeSword();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                            $combat = true;
                                        }
                                        else if(($roles[0] == "Mining" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining")){
                                            //Klasa
                                            class Player extends Character implements Mining, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    $this->makeRod();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                            $fishing = true;
                                        }
                                        else if(($roles[0] == "Mining" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Mining")){
                                            //Klasa
                                            class Player extends Character implements Mining, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                            $farming = true;
                                        }
                                        else if(($roles[0] == "Combat" && $roles[1] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat")){
                                            //Klasa
                                            class Player extends Character implements Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeSword();
                                                    $this->makeRod();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $combat = true;
                                            $fishing = true;
                                        }
                                        else if(($roles[0] == "Combat" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Combat")){
                                            //Klasa
                                            class Player extends Character implements Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeSword();
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $combat = true;
                                            $farming = true;
                                        }
                                        else if(($roles[0] == "Fishing" && $roles[1] == "Farming") || ($roles[0] == "Farming" && $roles[1] == "Fishing")){
                                            //Klasa
                                            class Player extends Character implements Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeRod();
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $fishing = true;
                                            $farming = true;
                                        }
                                    }
                                    else if(count($roles) == 3){
                                        if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Mining") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                                            //Klasa
                                            class Player extends Character implements Mining, Combat, Fishing{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    $this->makeSword();
                                                    $this->makeRod();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                            $combat = true;
                                            $fishing = true;
                                        }
                                        else if(($roles[0] == "Mining" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Combat" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Mining")){
                                            //Klasa
                                            class Player extends Character implements Mining, Combat, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    $this->makeSword();
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                            $combat = true;
                                            $farming = true;
                                        }
                                        else if(($roles[0] == "Mining" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Mining" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Mining" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Mining") || ($roles[0] == "Farming" && $roles[1] == "Mining" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Mining")){
                                            //Klasa
                                            class Player extends Character implements Mining, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeHelmet(){
                                                    $this->mining = "helmet.png"; 
                                                }
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeHelmet();
                                                    $this->makeRod();
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $mining = true;
                                            $fishing = true;
                                            $farming = true;
                                        }
                                        else if(($roles[0] == "Combat" && $roles[1] == "Fishing" && $roles[2] == "Farming") || ($roles[0] == "Combat" && $roles[1] == "Farming" && $roles[2] == "Fishing") || ($roles[0] == "Fishing" && $roles[1] == "Combat" && $roles[2] == "Farming") || ($roles[0] == "Fishing" && $roles[1] == "Farming" && $roles[2] == "Combat") || ($roles[0] == "Farming" && $roles[1] == "Combat" && $roles[2] == "Fishing") || ($roles[0] == "Farming" && $roles[1] == "Fishing" && $roles[2] == "Combat")){
                                            //Klasa
                                            class Player extends Character implements Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                                public function makeSword(){
                                                    $this->combat = "sword.png"; 
                                                }
                                                public function makeRod(){
                                                    $this->fishing = "rod.png"; 
                                                }
                                                public function makeHay(){
                                                    $this->farming = "hay.png"; 
                                                }
                                                public function makePlayerImage(){
                                                    $this->makeSword();
                                                    $this->makeRod();
                                                    $this->makeHay();
                                                    return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                                }
                                            }
                                            $combat = true;
                                            $fishing = true;
                                            $farming = true;
                                        }
                                    }
                                    else if(count($roles) == 4){
                                        //Klasa
                                        class Player extends Character implements Mining, Combat, Fishing, Farming{ //Dziedziczenie, dziedziczenie z abstrakcji oraz dziedzieczenie z kilku interfejsów
                                            public function makeHelmet(){
                                                $this->mining = "helmet.png"; 
                                            }
                                            public function makeSword(){
                                                $this->combat = "sword.png"; 
                                            }
                                            public function makeRod(){
                                                $this->fishing = "rod.png"; 
                                            }
                                            public function makeHay(){
                                                $this->farming = "hay.png"; 
                                            }
                                            public function makePlayerImage(){
                                                $this->makeHelmet();
                                                $this->makeSword();
                                                $this->makeRod();
                                                $this->makeHay();
                                                return $this->gender == "m" ? "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterMan.png' alt='Man' class='man'></div>" : "<div class='farm $this->farm'><img src='$this->mining' alt='mining helmet' class='helmet'><img src='$this->combat' alt='sword' class='sword'><img src='$this->fishing' alt='fishing rod' class='rod'><img src='$this->farming' alt='hay' class='hay'><img src='characterWoman.png' alt='Woman' class='woman'></div>";
                                            }
                                        }
                                        $mining = true;
                                        $combat = true;
                                        $fishing = true;
                                        $farming = true;
                                    }
                                    $playerCharacter = new Player($name, $lastname, $farm, $roles);
                                    $playerCharacter->setGender($gender);
                                    echo $playerCharacter->makePlayerImage();

                                    //Polimorfizm
                                    $items = [];
                                    if($mining){
                                        $items[] = new MiningItem();
                                    }
                                    if($combat){
                                        $items[] = new CombatItem();
                                    }
                                    if($fishing){
                                        $items[] = new FishingItem();
                                    }
                                    if($farming){
                                        $items[] = new FarmingItem();
                                    }
                                    foreach($items as $item){
                                        echo $item->makeItem();
                                    }
                                }
                                else{
                                    echo "<p>Wybierz profesję</p>";
                                }
                            ?>
                        </div>
                        
                        
                    </div>
                    <div class="col-5">
                        <?php
                        echo $playerCharacter->displayCharacterInfo();
                        ?>
                    </div>
                </div>
            
        </div>
    </div>

    
</body>
</html>