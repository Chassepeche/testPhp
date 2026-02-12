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
                <script>
                    function connect()
                    {
                        location.href = '../config.php';
                    }
                </script>
                <button onclick="signIn()" class="button">S'inscrire</button>
                <script>
                    fuction signIn()
                    {
                        location.href("/sign_in.php");
                    }
            </div>

            <div class="div4">

            </div>
            
            <div class="div5">

            </div>

        </div>
    </body>
</html>