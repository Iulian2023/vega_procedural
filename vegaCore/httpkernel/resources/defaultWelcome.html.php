<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp,notranslate,noimageindex">
        <title>Vega</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&family=Pacifico&display=swap" rel="stylesheet">

        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 100 100'>
  <path d='M10,10 L50,90 L90,10 Z' fill='rgba(1, 1, 97, 0.587)' /></svg>">

        <style>
            body
            {
                background-color: #f8f9fa;
                font-family: 'Open Sans', sans-serif;
            }

            h1, h2, footer, strong
            {
                font-family: 'Pacifico', cursive;
            }

            h1
            {
                text-align: center;
                margin-bottom: 2rem;
                text-shadow: 5px 5px 20px rgba(0, 0, 0, .2);
            }

            .heading-line::after
            {
                content: "";
                width: 8rem;
                height: .2rem;
                display: block;
                margin: .5rem auto;
                background-color: rgba(0, 0, 0, .5);
                padding-top: .2rem;
            }

            section
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 1rem auto;
                
            }
            
            section div
            {
                background-color: white;
                box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
                width: 90%;
                padding: 1rem;
                transition: 1s;
                border-radius: 15px;
            }
            
            section div:hover
            {
                transition: 1s;
                transform: scale(1.03);
            }

            footer
            {
                margin-top: 3rem;
                text-align: center;
                font-size: 1.5rem;
            }

            @media screen and (min-width: 768px)
            {
                section div
                {
                    width: 70%;
                }
            }
            
        </style>
    </head>
    <body>

        <header>
            <h1 class="heading-line">Hello les dwwm</h1>
        </header>
        <section>
            <div>
                <h4>Je vous souhaite la bienvenue sur <strong>Vega</strong>.</h4>
            </div>
        </section>
        <section>
            <div>
                <h4>Si vous voyez cette page, c'est que vous n'avez pas encore créé votre propre page d'accueil.</h4>
                <h4>Pour se faire, veuillez <a target="_blank" href="https://github.com/jc-aziaha/dwwm_vega_framework_procedural.git">consulter la documentation</a>.</h4>
            </div>
        </section>
        <section>
            <div>
                <h2>A propos de Vega : </h2>
                <ul>
                    <li>Ce framework se nomme Vega</li>
                    <li>Il est conçu en php procédural</li>
                    <li>Il implémente le patron de conception Modèle-Vue-Contrôleur</li>
                    <li>Il n'est pas à but commercial mais plutôt à but d'apprentissage</li>
                </ul>
            </div>
        </section>
        <section>
            <div>
                <h2>Les objectifs de Vega : </h2>
                <ul>
                    <li>Recevoir la requête d'un client</li>
                    <li>La traiter</li>
                    <li>Lui retourner la réponse correspondante</li>
                </ul>
            </div>
        </section>
        <section>
            <div>
                <h2>Le cycle de vie de Vega : </h2>

                <ol>
                    <li>Le client via son navigateur, envoie une requête au serveur</li>
                    <li>Le serveur reçoit la requête du client (Exemple de serveur : Apache, Nginx)</li>
                    <li>Le serveur exécute l'index.php qui est le point d'entrée de l'application. On l'appelle encore le contrôleur frontal.</li>
                    <li>Les actions du contrôleur frontal :
                        <ul>
                            <li>Recevoir la requête du client</li>
                            <li>Amorcer l'application (Charger les fichiers de configuration)
                                <ul>
                                    <li>Chargement des raccourcis (constantes)</li>
                                    <li>Chargement des variables d'environnement</li>
                                    <li>Chargement de la configuration système</li>
                                    <li>Chargement de la configuration session</li>
                                    <li>Chargement du monolog</li>
                                </ul>
                            </li>
                            <li>Charger le noyau (kernel)</li>
                            <li>Le noyau va procéder au traitement de la requête du client</li>
                            <li>Pour ça, il a besoin d'être sûr que l'application s'attendait à recevoir cette requête</li>
                            <li>Pour se faire, le noyau exécute le routeur</li>
                            <li>Le rôle du routeur est donc de s'assurer que les requêtes HTTP soient acheminées vers le contrôleur approprié pour traitement.
                                <ul>
                                    <li>Si c'est le cas :
                                        <ul>
                                            <li>Il retourne le contrôleur en charge de la requête au noyau</li>
                                        </ul>
                                    </li>
                                    <li>Dans le cas contraire :
                                        <ul>
                                            <li>Il retourne une réponse nulle au noyau</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Le noyau récupère la réponse du routeur
                                <ul>
                                    <li>Si cette réponse contient les informations du contrôleur en charge de la requête : 
                                        <ul>
                                            <li>Il exécute ce contrôleur
                                                <ul>
                                                    <li>Afin qu'il lui retourne la réponse correspondante à la requête (au format html)</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Dans le cas contraire,
                                        <ul>
                                            <li>Il exécute le contrôleur qui gère les erreurs
                                                <ul>
                                                    <li>Afin qu'il lui retourne la réponse expliquant que la page recherchée est introuvable (au format html)</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Le noyau récupère la réponse du contrôleur 
                            <li>Il retourne ensuite cette dernière au contrôleur frontal</li>  
                            <li>Le contrôleur frontal retourne cette réponse au serveur</li>
                        </ul>                      
                    </li>
                    <li>Le serveur envoie cette réponse au navigateur du client</li>
                    <li>Le navigateur affiche ce rendu au client sous forme de page web.</li>
                </ol>

            </div>
        </section>
        <footer>
            <p>Vega <span id="year"></span></p>
        </footer>
        
        <script>
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("year").innerHTML = year;
        </script>
    </body>
</html>