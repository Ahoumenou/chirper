## Modèles, migrations et controllers

Pour permettre à l'utilisateur de poster des commentaires , on aura 
besoin d'un:

- Modèle: qui fournit un moyen simple d'interagir avec la BDD
- migration: qui nous permet de facilement créer la table de notre BDD
- controller: responsable de traiter les requêtes et de renvoyer les réponses

## Middleware

un  Middleware est une fonctionnalité permettant de filtrer les requêtes HTTP effectuées dans l'application .
Les middlewares sont des couches intermediaires qui peuvent être ajoutées au pipeline de traitement des requêtes HTTP 
pour effectuer spécifiques avant que la requête n'atteigne la route appropriée ou après que la réponse ait été 
générée par le contrôleur.

## Composants

### composants sous forme de classes

composants les plus versatiles et robustes.
Ils peuvent prendre des paramètres

### composants anonymes
composants simples ne prennent aucun paramètre

## Fonctions d'aide Laravel
`route()` : fonction qui génère l'URL correspondant à une route nommée.
`action()`: fonction qui génère l'URL correspondant à l'action (méthode)
d'un controller donné.
`url()`:fonction qui génère l'URL complet (http://.../url)


`__()`: fonction qui renvoie la traduction pour une chaîne de caractère donnée.

`session()`: fonction qui recupère les données de session

`setLocale()`: fonction qui change la Langue de l'application

`auth()->user()`: permet de récuperer l'utilisateur connecté

## La mass assignation
 La mass assignation est une technique qui permet de définir plusieurs attributs d'un 
modèle en une seule fois. Par exemple, imaginez que vous avez un modèle `Utilisateur`
avec des champs tels que `nom`, `email`, `rôle`. La mass assignation permet de définir 
tous ces champs en une fois, ce qui peut être très pratique et vous faire gagner du temps.

Cependant , si elle n'est pas gérée avec précaution , la mass assignation peut entraîner 
une vulnérabilité de sécurité appelée "over-possting" ou "vulnérabilité  de mass assignation".

## Les étapes de création d'une notification

1. créer une notification(sms, email, slack)
2. créer un évènement 
3. dispatcher un évènement
4. créer un Event Listiner
5. Lier l'Event Listiner à l'évènement créé