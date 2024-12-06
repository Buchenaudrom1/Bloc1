# Question Td1

## Question 1

Les méthodes GET et POST sont deux façons courantes d'envoyer des informations à un serveur web. Elles sont souvent utilisées pour les formulaires sur les sites internet. Cependant, elles fonctionnent de manière différente et ont des usages distincts.

1. Méthode GET :

La méthode GET est principalement utilisée pour récupérer des informations d'un serveur. Les données sont envoyées en ajoutant des paramètres à l'URL. Cela signifie que les informations sont visibles directement dans la barre d'adresse du navigateur.

Exemple :

Imaginons que l'on souhaite rechercher des informations sur un site web, comme le titre d'un livre. L'URL pourrait ressembler à ceci :

https://www.site-exemple.com/recherche?titre=LePetitPrince

Ici, "recherche" est la page du serveur qui traite la requête, et titre=LePetitPrince est le paramètre que l'on envoie. Le serveur va traiter cette demande et renvoyer les informations associées au titre "Le Petit Prince".

2. Méthode POST :

La méthode POST, quant à elle, est utilisée pour envoyer des données de manière plus sécurisée. Les informations ne sont pas visibles dans l'URL, car elles sont envoyées dans le corps de la requête HTTP. Cela permet de transmettre 

des données plus volumineuses et plus confidentielles.

Exemple :

Supposons que l'on veuille soumettre un formulaire d'inscription sur un site web. L'URL pourrait être :

https://www.site-exemple.com/inscription

Contrairement à la méthode GET, les informations comme le nom, l'email, et le mot de passe de l'utilisateur seraient envoyées dans le corps de la requête et non dans l'URL. Par exemple :

POST /inscription HTTP/1.1

Host: www.site-exemple.com

Content-Type: application/x-www-form-urlencoded

nom=Dupont&email=dupont@example.com&motdepasse=1234secure


## Question 2

| Critère               | Méthode GET                                                      | Méthode POST                                                   |
|-----------------------|------------------------------------------------------------------|----------------------------------------------------------------|
| **Visibilité des données** | Les données sont visibles dans l'URL (ex : `titre=LePetitPrince`).  | Les données sont envoyées dans le corps de la requête, invisibles dans l'URL. |
| **Sécurité**          | Moins sécurisée (données exposées dans l'URL).                   | Plus sécurisée (données cachées dans le corps de la requête).  |
| **Taille des données** | Limitée par la longueur maximale de l'URL.                      | Pas de limite de taille imposée par l'URL.                     |
| **Usage typique**     | Récupération d'informations (ex : recherche de livres).          | Envoi de données sensibles ou volumineuses (ex : inscription). |
| **Stockage en cache et historique** | Les données peuvent être stockées dans l'historique ou en cache. | Les données ne sont pas stockées, impossible de les récupérer via l'historique. |
| **Partage de l'URL**  | Facile à partager (les données font partie de l'URL).            | Difficile à partager (les données ne sont pas dans l'URL).     |
| **Idempotence**       | Oui, répéter la même requête GET donne le même résultat.         | Non, répéter une requête POST peut avoir des effets différents. |


## Question 3

Le protocole HTTP est extensible pour plusieurs raisons :

* Nouvelles méthodes : HTTP permet d'ajouter des méthodes supplémentaires, comme PATCH, en plus des méthodes classiques (GET, POST).

* En-têtes personnalisés : On peut définir des en-têtes spécifiques aux applications, ce qui permet d'envoyer des informations supplémentaires entre le client et le serveur.

* Codes de statut extensibles : De nouveaux codes de statut peuvent être créés pour des situations spécifiques, comme 429 Too Many Requests.

* Négociation de contenu : Le protocole permet de s'adapter aux différents formats de réponse (HTML, JSON) via des en-têtes comme Accept.

* Extensions de protocoles : HTTP fonctionne avec d'autres protocoles, comme HTTPS pour la sécurité ou WebSocket pour les communications en temps réel.

## Question 4 

Le fait que HTTP soit qualifié de protocole sans état signifie qu'à chaque requête, le serveur ne conserve aucune information sur les interactions précédentes avec le client. En d'autres termes, chaque requête HTTP est indépendante, et le serveur ne se "souvient" pas de ce qui s'est passé auparavant.

### Conséquences pour la navigation Web :

* Gestion de sessions : Pour maintenir une continuité entre les interactions, comme rester connecté à un site, des mécanismes comme les cookies, les sessions ou les tokens sont nécessaires. Ces outils permettent de "mémoriser" l'état entre les requêtes, malgré le caractère sans état de HTTP.

* Sécurité améliorée : L'absence de stockage d'informations entre les requêtes réduit la surface d'attaque pour les pirates. Cependant, cela nécessite une gestion prudente des mécanismes comme les cookies pour éviter les vulnérabilités.

* Scalabilité : Le caractère sans état de HTTP facilite la scalabilité des applications web. Comme le serveur n'a pas besoin de stocker l'état de chaque utilisateur, il peut traiter un grand nombre de requêtes simultanément sans surcharge liée à la gestion d'états multiples.

## Question 5

https://www..exemple.com:80/path/index.html?id=8#article

https = Indique le protocole utilisé pour accéder à la ressource.

www. = Partie facultative qui peut préciser une sous-section du domaine principal. Par exemple, www. est souvent utilisé pour indiquer la version publique d'un site, mais d'autres sous-domaines comme blog. ou shop. peuvent exister pour des sections spécifiques d'un site.

exemple.com = C'est l'adresse principale du site web, qui est unique sur Internet. Il permet de localiser le serveur où se trouve la ressource.

:80 = Partie facultative qui spécifie le numéro de port à utiliser pour accéder au serveur. 

/path/index.html = Indique le chemin d'accès à une ressource spécifique sur le serveur. Il est structuré comme les répertoires d'un système de fichiers, avec des dossiers (/repertoire/) et des fichiers (page.html).

?id=8 = Partie facultative qui contient des paramètres envoyés au serveur pour fournir des informations supplémentaires à traiter

#article = Partie facultative qui identifie une section spécifique à l'intérieur de la page web

## Question 6

Les codes de statut HTTP se décomposent en 5 grandes familles :

* Un code 1xx indique une réponse provisoire (non implémenté avec HTTP/1.0) ;

* Un code 2xx (200, 201, 202, 204) indique que la requête a été traitée avec succès ;

* Un code 3xx(300, 301, 302, 304) indique que la requête doit être redirigée ;

* Un code 4xx (400, 401, 403, 404) indique une erreur côté client ;

* Un code 5xx (500, 501, 502, 503) indique une erreur côté serveur.

## Question 7

La négociation de contenu en HTTP est un processus par lequel un serveur web détermine la meilleure représentation d'une ressource à renvoyer en fonction des préférences exprimées par le client (navigateur web). Ce mécanisme permet de répondre aux divers besoins et capacités des clients, comme la langue, le format ou l'encodage des données.

## Question 10

| En-tête            | Description                                                                 | Exemple d'utilisation                                           |
|--------------------|-----------------------------------------------------------------------------|-----------------------------------------------------------------|
| **Host**           | Indique le nom de domaine du serveur (et éventuellement le numéro de port). | `Host: www.exemple.com`                                          |
| **User-Agent**     | Identifie le client (navigateur, application) qui envoie la requête.         | `User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)`         |
| **Accept**         | Spécifie les types de contenu que le client peut traiter.                   | `Accept: text/html, application/json`                           |
| **Accept-Language**| Indique les langues préférées du client pour le contenu de la réponse.      | `Accept-Language: fr-FR, en-US`                                 |
| **Accept-Encoding**| Indique les encodages de contenu que le client peut décompresser.           | `Accept-Encoding: gzip, deflate`                                |
| **Content-Type**   | Indique le type de média du corps de la requête, lorsque le client envoie des données au serveur. | `Content-Type: application/json`             |
| **Authorization**  | Contient les informations d'authentification pour accéder à une ressource protégée. | `Authorization: Basic YWxhZGRpbjpvcGVuc2VzYW1l`        |
| **Referer**        | Indique l'URL de la page précédente à partir de laquelle la requête a été envoyée. | `Referer: https://www.google.com`                       |
| **Cookie**         | Envoie les cookies du client au serveur pour l'identification de la session ou d'autres informations d'état. | `Cookie: sessionId=abc123; theme=dark`             |
| **Cache-Control**  | Indique les directives de gestion du cache pour la requête.                 | `Cache-Control: no-cache`                                      |
