<!------ IMPORTO LA LOGICA ------>
<?php
include './function.php';
?>

<!------ INIZIO HTML ------>
<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <title>PHP Strong Password Generator</title>
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
            padding: 25px;
            border-radius: 10px;
        }

        input {
            width: 50px;
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
            padding: 7.5px;
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
    </style>
</head>

<body class="bg-dark text-white flex-column-center">
    <div class="container flex-column-center mt-5">
        <!-- titolo -->
        <h1>Strong Password Generator</h1>
        <p class="pb-3">Da minimo 6 caratteri e massimo 30</p>

        <!-- FORM -->
        <form action="" method="GET" class="flex-column-center">
            <!-- input lunghezza password -->
            <div>
                <label for="pass_len">Lunghezza password: </label>
                <input type="number" min="6" max="30" name="pass_len" id="pass_len">
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
        <?php if (isset($max_len)) { ?>
            <div class="risultato mt-5">
                <span>Password: </span>
                <?php echo passwordGenerator($max_len); ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>