Afin de pouvoir lancer le projet :

il est important de disposer d’un serveur utilisant php, ainsi que de composer ayant une base de données fonctionnant sous MariaDB via MySQL et disposant d’un accès SSH.
il vous faudra Git afin de pouvoir deployer rapidement votre projet sur votre site web toutefois, vous pouvez telecharger manuellement le fichier et le deplacer au sein de votre serveur.


Comment lancer le projet :

- recuperer le dossier existant via Git ou télécharger le dossier depuis Github.

git clone https://github.com/DamienBT/listedetaches.git

- Configurer la ligne du fichier caché .env avec les informations ou se situe votre base de données en remplacant les valeurs par defaut par les informations de connexions de votre serveur de la ligne ci dessous:
"DATABASE_URL=mysql://utilisateur:motdepasse@adressedelabasededonnées:portdelabasededonnées/nomdelabasepouvotreprojet"

- Connectez vous à votre serveur via l’accès SSH.

- lancer la commande "php bin/console doctrine:database:create" 

- lancer la commande "composer dump-env prod" (afin de passer votre projet en mode production)

- lancer la commande "composer require symfony/requirements-checker" pour verifier que tous les fichiers sont présents

- lancer la commande "APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear"

votre applicatione est prete a l'emploi

