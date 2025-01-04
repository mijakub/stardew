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
            <form method="post" action="postac.php">
                <div class="row">
                    <div class="col-5">
                        <div class="img_character"></div>
                        <table style="margin: 0 auto;">
                            <tr>
                                <td>
                                    <label for="m" class="radio_label" id="m_label" onclick="man()">
                                        <input type="radio" id="m" name="gender" value="m" checked>
                                        <img src="man.png">
                                    </label>
                                </td>
                                <td style="float: right;">
                                    <label for="w" class="radio_label" id="w_label" onclick="woman()">
                                        <input type="radio" id="w" name="gender" value="w">
                                        <img src="woman.png">
                                    </label>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="b_submit" value="Create" id="b_submit">
                    </div>
                    <div class="col-7">
                        <table>
                            <tr>
                                <td style="padding-top: 0px;">Name:</td> 
                                <td style="padding-top: 0px;"><input type="text" name="name" id="name" required></td>
                            </tr>
                            <tr>
                                <td>LastName:</td> 
                                <td><input type="text" name="lastName" id="lastName" required></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan="2">Roles:</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="roles[]" id="Mining" value="Mining"><label for="Mining">Mining</label></td>
                                <td><input type="checkbox" name="roles[]" id="Farming" value="Farming"><label for="Farming">Farming</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="roles[]" id="Combat" value="Combat"><label for="Combat">Combat</label></td>
                                <td><input type="checkbox" name="roles[]" id="Fishing" value="Fishing"><label for="Fishing">Fishing</label></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan="3">Select your farm:</td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 0px;">
                                    <label for="f1" class="radio_label">
                                        <input type="radio" id="f1" name="farm" value="SpringFarm" checked>
                                        <img src="farm_1.png">
                                    </label>
                                </td>
                                <td style="padding-bottom: 0px;">
                                    <label for="f2" class="radio_label">
                                        <input type="radio" id="f2" name="farm" value="SummerFarm">
                                        <img src="farm_2.png">
                                    </label>
                                </td>
                                <td style="padding-bottom: 0px;">
                                    <label for="f3" class="radio_label">
                                        <input type="radio" id="f3" name="farm" value="FallFarm">
                                        <img src="farm_3.png">
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const block = document.querySelector(".img_character");
        function woman() {   
            block.style.backgroundImage = "url('characterWoman.png')";
        }
        function man() {
            block.style.backgroundImage = "url('characterMan.png')";
        }
    </script>
</body>
</html>
