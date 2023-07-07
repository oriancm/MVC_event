# MVC_Event

Voici notre projet d'évènement

### Description

Il s'agit d'un projet ayant pour but la gestion d'évènements.

Un utilisateur peut sur ce site créer son évènement.\
Un évènement est défini par son nom, sa date, son adresse et sa catégorie.\
L'utilisateur peut visualiser un evenement en particulier, ses évènements crées, les modifier ou les supprimer.\
Ce projet est bien sûr appliqué à une structure mvc.

### Comportement

Lorsque l'on arrive sur le site, la première page est l'index de la view.
Cette page propose un bouton de création d'évènement.

#### Processus de Création d'évènement

Pour créer un evenement, on part de l'index qui via un bouton amène sur un formulaire create.\
Ce formulaire validé renvoie vers une page store invisible avec les données dans un POST.\
La page store se charge seulement d'appeler une fonction save du controller.\
Cette fonction a simplement pour rôle d'executer une fonction insert dans un model et en fonction de son résultat rediriger l'utilisateur sur la bonne view.\
La fonction insert crée en bdd l'evenement, si cela fonctionne on affiche en view la synthèse de l'evenement dans un show, sinon on reste sur la page de création create.

View/index.php -> create -> store -> eventController -> eventModel -> eventController -> show/create\
View->Controller->Model->Controller->View
