<!------ IMPORTO LA LOGICA ------>
<?php
include __DIR__ . '/partials/function.php';
?>

<!------ INIZIO HTML ------>
<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <!-- titolo -->
    <title>PHP Strong Password Generator</title>
    <!-- CSS Style -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .flex-column-center {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        body {
            height: 100vh;
        }

        p {
            color: grey;
        }

        form {
            background-color: white;
            color: black;
            padding: 25px 35px;
            border-radius: 10px;
        }

        .inputText {
            width: 60px;
            height: 25px;
            outline: none;
        }

        button,
        a {
            background-color: lightgrey;
            color: black;
            text-decoration: none;
            border: 0px;
            border-radius: 10px;
            margin-top: 2em;
            transition: 0.2s ease;
        }

        .invio {
            padding: 5px;
        }

        a {
            padding: 8.5px;
        }

        button:hover,
        a:hover {
            background-color: grey;
            color: white;
            transition: 0.2s ease;
        }

        .risultato {
            background-color: white;
            color: black;
            width: fit-content;
            padding: 10px;
            border-radius: 10px;
            font-size: 1.5em;
        }

        .avviso {
            background-color: lightcoral;
            color: darkred;
            padding: 10px;
            border: 2px solid red;
            border-radius: 10px;
        }

        .avviso h4 {
            margin: 0px;
        }
    </style>
</head>

<body class="bg-dark text-white flex-column-center">
    <div class="container flex-column-center mt-5">
        <!-- titolo -->
        <h1>Strong Password Generator</h1>
        <p class="pb-3">Da minimo 6 caratteri e massimo 26</p>

        <!-- FORM -->
        <form action="" method="GET" class="flex-column-center">

            <!-- input lunghezza password -->
            <div class="mb-3">
                <label for="pass_len">Lunghezza password: </label>
                <input type="number" min="6" max="26" name="pass_len" id="pass_len" class="inputText">
            </div>

            <!-- caratteri ripetuti -->
            <h6 class="mb-1">Opzioni minime:</h6>
            <div>
                <div>
                    <input type="checkbox" name="maiuscole">
                    <span>Maiuscole</span>
                </div>
                <div>
                    <input type="checkbox" name="minuscole">
                    <span>Minuscole</span>
                </div>
                <div>
                    <input type="checkbox" name="numeri">
                    <span>Numeri</span>
                </div>
                <div>
                    <input type="checkbox" name="speciali">
                    <span>Speciali</span>
                </div>
                <div>
                    <input type="checkbox" name="ripetuti">
                    <span>Evita caratteri ripetuti</span>
                </div>
            </div>

            <!-- button -->
            <div>
                <button class="invio" type="submit">Genera</button>
                <button>
                    <a href="http://localhost:8888/-php-proj/php-strong-password-generator">Reset</a>
                </button>
            </div>
        </form>

        <!-- risultato -->
        <?php if (isset($max_len)) {
            if (check_checkbox() == true) {
                if (strlen(passwordGenerator($max_len)) != '0') { ?>
                    <div class="risultato mt-5">
                        <span>Password: </span>
                        <?php echo passwordGenerator($max_len); ?>
                    </div>
                <?php } else { ?>
                    <div class="avviso mt-5">
                        <h4>Inserisci una lunghezza!</h4>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="avviso mt-5">
                    <h4>Seleziona almeno una casella!</h4>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</body>

</html>