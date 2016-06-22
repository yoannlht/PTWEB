<!DOCTYPE html5>
<html lang="fr">
<head>
    <title> Yoann Laheurte | Graphiste & Webdesigner </title> 
	<meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
    <link type="text/css" rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
    
<body>
    <div class="wrapper">
        <div class="row">
            <div class="col s2 nav wrap">
            <a href="index.html"><img src="images/logo.png" class="logo responsive-img"></a>
                <ul>
                    <li><a href="presentation.html">présentation</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="services.html">services</a></li>
                    <li><a href="competences.html">compétences</a></li>
                    <li><a href="parcours.html">parcours</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </div>
            <div class="col s10 main wrap">
                <main>
                      <h1>Contactez-moi</h1>
                        <h3>N'hésitez pas !</h3>
                <div class="form_mail">
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Qui êtes-vous ?</label>
                </div>
                <div class="input-field col s4 email">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="email non valide" data-success="">Email</label>
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">comment</i>
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Objet du message</label>
                </div>
            <div class="input-field col s8">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
              <label for="icon_prefix2">Votre message</label>
            </div>

              <div class="envoi">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
                </button></div>
            </div>
            </main>
        </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        </div>
        </body>
</html>