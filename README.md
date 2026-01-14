- Cloner le projet
- lancer la commande
```bash
composer install
```

- Créé fichier .env.local et mettre ses identifiant BDD de mysql : 
```bash
DATABASE_URL="mysql://username:password@host:3306/nom_bdd?serverVersion=13&charset=utf8"
```
(Note au lecteur : j'ai ajouter 2 paramètre pour évité les problème de dépréciation)

- Aller dans php.ini 
    - Windows + R → %LOCALAPPDATA% → dossier : php-8.x.x
    - Trouver php.ini, puis décommenter 'extension=intl'

- Utiliser ses 3 commandes pour :
    - Créé la base de donnée
    - Faire les migrations
    - Mettre les fixtures

```bash
php bin/console d:d:c
php bin/console d:m:m
php bin/console d:f:l
```

- Lancer le serveur

```bash
symfony serve
```

- Pour lancer les tests : 

```bash
php bin/phpunit
```