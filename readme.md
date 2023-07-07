# MVC_Event

Voici notre projet d'évènement

### Description

Il s'agit d'un projet ayant pour but la gestion d'évènements.

Un utilisateur peut sur ce site créer son évènement.\
Un évènement est défini par son nom, sa date, son adresse et sa catégorie.\
L'utilisateur peut visualiser un evenement en particulier, ses évènements crées, les modifier ou les supprimer.\
Ce projet est bien sûr appliqué à une structure mvc.
N'étant pas des plus familiers avec les dépendances, composer et même la structure mvc.
Nous avons choisi de faire assez minimaliste pour bien comprendre ce que nous utilisions.

### Comportement

Lorsque l'on arrive sur le site, la première page est l'index de la view.
Cette page propose un bouton de création d'évènement.

#### Processus de Création d'évènement

Pour créer un evenement, on part de l'index qui via un bouton amène sur un formulaire create.\
Ce formulaire validé renvoie vers une page store invisible avec les données dans un POST.\
La page store se charge seulement d'appeler une fonction save du controller.\
Cette fonction a simplement pour rôle d'executer une fonction insert dans un model et en fonction de son résultat rediriger l'utilisateur sur la bonne view.\
La fonction insert crée en bdd l'evenement, si cela fonctionne on affiche en view la synthèse de l'evenement dans un show avec en GET l'id de l'evenement, sinon on reste sur la page de création create.

View/index.php -> create -> store -> eventController -> eventModel -> eventController -> show/create\
View->Controller->Model->Controller->View
#### Processus de Modification d'évènement

la modification d'un évènement se fait depuis sa synthese dans show en cliquant sur le bouton Modifier.\
En cliquant dessus, on se redirige vers une page edit en transmettant l'id en GET.\
En validant le formulaire edit, on renvoie vers une page invisible update avec les informations en POST.\
Cette page appelle le controller qui se charge d'appeler une fonction update dans un model.\
En fonction de la réponse, on redirige vers la synthèse de l'evenement show si c'est un succès sinon on revient sur l'index.\

la view:
* edit
* view/index

sont des formulaires

la view:
* event/index
* show

sont des pages pour indexer

La view: 
* delete
* store
* update

ne servent que d'appel au controller

Le controller lui contient tout l'algorithme\
Cependant dans notre cas, il sert surtout à appeler le model et rediriger en conséquence
