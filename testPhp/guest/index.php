<!DOCTYPE html>
<html>

    <link href="../style/style.css" rel="stylesheet"/>

    <head>
        <title>Acceuil</title>
    </head>

    <body>
        <div class="parent">
            <div class="div1">
                <p>Tests PHP</p>
            </div>

            <div class="div2">

            </div>

            <div class="div3">
                <p>Se Connecter</p>
                <button onclick="connect()" class="button">Se connecter</button>

                <button onclick="signIn()" class="button">S'inscrire</button>

            </div>

            <div class="div4">

            </div>
            
            <div class="div5">

            </div>

        </div>
        <script>
            function connect()
            {
                location.href = '../config.php';
            }
            function signIn()
            {
                location.href 'sign_in.php';
            }
        </script>
    </body>
</html>