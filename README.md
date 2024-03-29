# Resturant_Okebab_marseille

Dans le cadre de ma formation en autodidate et pour me preparer au différents entretiens que je devrais passer dans ma recherche d'emploi je me suis lancé comme défi de réaliser Ce projet qui est une application pour la gestion d'un restaurant, construite avec Symfony 6, API Platform et React. Le fichier composer.json fournit les dépendances et la configuration nécessaire pour le projet.

## Configuration requise

- PHP 8.1 ou supérieur
- Symfony CLI
- Composer
- Node.js et NPM (pour React)

## Installation

1.  Clonez ce dépôt :

        `git clone https://github.com/naglaa77/Resturant_Okebab_marseille.git
        cd Resturant_Okebab_marseille `

2.  Installez les dépendances PHP à l'aide de Composer :

        `composer install`

3.  Installez les dépendances de React avec NPM :

        `npm install'

4.  Configurez vos paramètres de base de données dans le fichier .env ou .env.local.

5.  Configurez votre fichier .env avec les identifiants de la base de données corrects.

6.  Créez la base de données et exécutez les migrations :

        `php bin/console doctrine:database:create
        php bin/console doctrine:schema:create`

7.  Chargez les données de démonstration avec les fixtures (facultatif) :

        `php bin/console doctrine:fixtures:load`

## Utilisation

- Pour lancer le serveur de développement Symfony :

        `symfony serve`

- Pour lancer le serveur de développement React :

        `npm start`

## Technologies utilisées

1. API RESTful
2. Node.js
3. npm (Node Package Manager)
4. React
5. Git et GitHub
6. Visual Studio Code

## Support et contribution

Si vous rencontrez des problèmes ou avez des suggestions d'amélioration, n'hésitez pas à créer une issue sur GitHub. Les contributions sont les bienvenues !
