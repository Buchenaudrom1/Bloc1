# bloc1 TD1

## question 1 
 
avec la méthodes GET demande une représentation de la ressource spécifiée. Les requêtes GET doivent uniquement être utilisées afin de récupérer des données.
avec la méthodes POST envoie des données au serveur. Le type du corps de la requête est indiqué par l'en-tête

## question 2

| comparatif | get         | post |
| :---------- | :----------| :----------- |
| Visibilité | Visible pour l’utilisateur dans le champ d’adresse | Invisible pour l’utilisateur |
| Marque-page et historique de navigation  |   Les paramètres de l’URL sont stockés en même temps que l’URL |  L’URL est enregistrée sans paramètres URL |
| Cache et fichier log du serveur  | Les paramètres de l’URL sont stockés sans chiffrement   |  Les paramètres de l’URL ne sont pas enregistrés automatiquement |
| Comportement lors de l’actualisation du navigateur / Bouton « précédent »	 | Les paramètres de l’URL ne sont pas envoyés à nouveau | Le navigateur avertit que les données du formulaire doivent être renvoyées |
| Type de données |Caractères ASCII uniquement | Caractères ASCII mais également données binaires |
| Longueur des données  | Limitée  |   Illimitée |

## question 3

le protocle http est extensible, grace un accord entre le client et le server De nouvelles fonctionnalités peuvent être introduites à propos de la sémantique des nouveaux en-têtes.

## question 4

HTTP est sans état : il n'y a pas de lien entre deux requêtes qui sont effectuées successivement sur la même connexion.

## question 5

http correspond au protocle

www. .com correspond au nom du domain

:00 correspond au port de url

/ / correspond au chemin pour allers au site

## question 6

- Codes de réponse HTTP
- Les réponses informatives ( 100 - 199 ),
- Les réponses de succès ( 200 - 299 ),
- Les messages de redirection ( 300 - 399 ),
- Les erreurs du client ( 400 - 499 ),
- Les erreurs du serveur ( 500 - 599 ).

## question 7

Les principes de la négociation de contenu
Lorsqu'un client souhaite obtenir une ressource, il la demande via une URL.
