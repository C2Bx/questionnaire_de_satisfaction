# Questionnaire de Satisfaction - Forum de Football

Ce projet est un questionnaire de satisfaction en ligne développé en PHP, HTML et CSS. Il permet de recueillir les retours des participants à un forum sur le football. Les réponses des utilisateurs sont stockées dans une base de données MySQL.

## Prérequis

--Serveur web (Apache, Nginx, etc.)
--PHP 7.x ou supérieur
--MySQL/MariaDB
--Navigateur moderne

### Installation

#### 1. Cloner le projet

Clonez le dépôt GitHub dans le répertoire de votre serveur web local ou distant :

`bash
git clone git@github.com:C2Bx/questionnaire_de_satisfaction.git
`

#### 2. Configuration de la base de données

1. Créez une base de données MySQL en utilisant votre outil préféré (phpMyAdmin, ligne de commande, etc.).
2. Importez la structure de la base de données en exécutant le fichier **BDD.sql** fourni avec le projet :

`bash
mysql -u [-votre_utilisateur-] -p [-nom_de_la_base_de_donnees-] < /chemin/vers/le/fichier/BDD.sql
`

Cela créera une table `reponses` pour stocker les réponses des utilisateurs.

#### 3. Configuration du fichier de connexion à la base de données

Modifiez le fichier PHP pour renseigner les informations de connexion à votre base de données. Dans le fichier principal où se trouve le traitement des formulaires, complétez les variables `servername`, `username`, `password`, et `dbname` avec vos propres informations de connexion :

`php
$servername = "localhost"; // ou l'adresse de votre serveur MySQL
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "nom_de_la_base_de_donnees";
`

#### 4. Déploiement sur un serveur

Assurez-vous que votre serveur est configuré pour exécuter du PHP et qu'il est connecté à la base de données MySQL.

Déposez tous les fichiers du projet dans le répertoire accessible par le serveur web (ex. `/var/www/html/` pour Apache).

#### 5. Accès au formulaire

Une fois le serveur configuré et les fichiers correctement placés, accédez à l'application via un navigateur à l'adresse suivante :

`http`://[votre_domaine]/questionnaire_de_satisfaction/

## Fonctionnalités

- **Formulaire dynamique** : Collecte de données telles que le niveau de satisfaction, l'organisation, les suggestions, et une recommandation.
- **Système d'emoji interactif** pour noter l'expérience des utilisateurs.
- **Base de données MySQL** : Les réponses sont sauvegardées dans une table dédiée pour faciliter l'analyse.

## Personnalisation

- Vous pouvez personnaliser le formulaire et le design en modifiant les fichiers `.html` et `.css` pour l'adapter à vos besoins spécifiques.

## Contributeurs

- **Bastian Cazaux** - Développeur principal
- **Arthis** - Collaboration sur divers projets du Forum des sports

## Licence

Ce projet est sous licence MIT - voir le fichier `[LICENSE]` pour plus de détails.
