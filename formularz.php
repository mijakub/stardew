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
                                    <label for="w" class="radio_label" id="w_label">
                                        <input type="radio" id="w" name="gender">
                                        <img src="women.png">
                                    </label>
                                </td>
                                <td style="float: right;">
                                    <label for="m" class="radio_label" id="m_label">
                                        <input type="radio" id="m" name="gender">
                                        <img src="men.png">
                                    </label>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="b_submit" value="Wyślij" id="b_submit">
                    </div>
                    <div class="col-7">
                        <table>
                            <tr>
                                <td style="padding-top: 0px;">Imię:</td> <td style="padding-top: 0px;"><input type="text" name="name" id="name"></td>
                            </tr>
                            <tr>
                                <td>Nazwisko:</td> <td><input type="text" name="lastName" id="lastName"></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan="2">Rola:</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="Mining" id="Mining"><label for="Mining">Górnik</label></td><td><input type="checkbox" name="Farming" id="Farming"><label for="Farming">Farmer</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="Combat" id="Combat"><label for="Combat">Wojownik</label></td><td><input type="checkbox" name="Fishing" id="Fishing"><label for="Fishing">Rybak</label></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan="3">Wybierz swoją farmę:</td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 0px;">
                                    <div class="farm_div">
                                        
                                    </div>
                                </td>
                                <td style="padding-bottom: 0px;">
                                    <div class="farm_div">
                                        
                                    </div>
                                </td>
                                <td style="padding-bottom: 0px;">
                                    <div class="farm_div">
                                        
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
