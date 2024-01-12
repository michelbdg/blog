# prise de notes

## Création d'un projet

```bash
symfony new blog --webapp
```

## Lancement et arrêt du serveur

```bash
cd blog
symfony serve --d # -d pour lancer en arrière plan
smfony server:stop
```

## Configuration de la base de données

dans le fichier `.env`, on modifie les informations de connexion à la base données.

## Configuration du serveur de mail

Avec mailtrap, un service gratuit de test de mail qui n'a aucun lien avec Symfony. On a mis en place la ligne de configuration dans un fichier `.env.local` pour ne pas que les informations de connexion à mailtrap se retrouvent sur le dépôt github.

## Première commande avec symfony-cli

la base c'est :
- être dans le dossier du projet avec son terminal
- utiliser `symfony console` pour lancer une commande
- l'autrre alternative est `php bin/console`

Afin de crér notre prelier controlleur, nous avons tapé dans le terminal la commande suivant

```bash
symfony console make:controller
```

Suite à cela créeer notre premier controlleur, nous avons choisi `PageController`

Le résultat a été la création d'un fichier `src/Controller/PageController.php` et d'un fichier `templates/page/index.html.twig`. Cette page est accessible à l'adresse `http://127.0.1:8000/page`.
Pour en faire notre page D'accueil, nous avons modifié le chemin de la route dans le fichier du controlleur.

```php
//Avant
#[Route('/page', name: 'app_page')]

//Après
#[Route('/', name: 'app_page')]
```

## Les extension dans VSCODE

pour travailler pplus facilement avec Symfony, il est conseillé d'installer les extensions suivantes :

- PHP Intelephense 
- Twig Language 2
- Namespace Resolver
- Symfony Pack
- Sqlite3 Editor