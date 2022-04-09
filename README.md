# HACKATHON 22 ( en cours de rédaction )
Pour mener à l'organisation de la 6ème édition du Technovore Hackathon (édition 2022) le Conseil Estudiantin de l'Esatic m'a confié la conception et la réalisation d'une application pour assurer d'une part la gestion des inscriptions  et d'autre part les différentes activités liées à celle-ci.
Je vous présenterai en premier lieu les différentes pages et par la suite les différentes configurations à faire après avoir cloner le projet.
Merci et surtout bonne lecture!!!

##### J'aimerais preciser que les images seront celles des testes en local d'où le fait que le site en non sécurisé soit en http merci

## Page d'accueil
![Aceuill (751)](https://user-images.githubusercontent.com/62190055/160437217-f239db67-7d04-4f81-bb38-e58e4a16928f.png)

Comme vous pouvez le voir à partir de cette page, les différents participants ont la possibilité d'effectuer leurs inscriptions et aussi de se connecter à leur espace utilisateur. Sans plus tarder je vous présente la page d'inscription avant de vous présenter l'espace administrateur

## Page d'inscription

![Capture d’écran (753)](https://user-images.githubusercontent.com/62190055/160438152-728597f4-3c53-4ae6-9e24-4c4d205e5fec.png)

Durant l'inscription, nous demandons aux différents participants de nous donner leur nom et leur prénom, leur matricule ainsi que les informations relatives à leur classe. Il faut noter que le choix des classes est une liste sélective qui elle est fonction des paramètres définis par l'administrateur.

Je sais que vous avez hâte de découvrir en détails l'espace administrateur, ouvrez grand vos yeux.
Pour commencer je vous présenterez l'espace de paramétrage 

### Hackathons
![Capture d’écran (756)](https://user-images.githubusercontent.com/62190055/160440952-00f47990-b493-4e31-84fc-23c372d5f43b.png)

Ici comme vous pouvez le voir l'on à pensé à la réutilisabilité de ladite application pour les hackathons à venir, pour ce faire nous permettons aux différents gestionnaires de créer de nouveaux Hackathons en enregistrant les informations des différents Présidents du Comité d'Organisation (PCO).
Pour cette année moi, **N'DA REGIS RICHMOND et DJE BI MOINTI** sommes les différents PCO. il est bon de noter que dès la création d'un nouvel hackathon les données présentes sur toutes les pages en partant de l'inscription à l'administration sont relative qu'a ce Hackathon les précédentes informations sont automatiquement archivées.

### Niveaux et classes
![Capture d’écran (759)](https://user-images.githubusercontent.com/62190055/160442083-5c65c105-bf3c-40ad-a3f6-aba1d5707a42.png)

Ici nous vous présentons l'espace permettant à l'administrateur d'ajouter une classe et de la liée à un niveau.
Comme nous vous l'avions dit au cours de l'inscription dés que le participant choisi le niveau, les classes qui sont affichées ne sont que celles du niveau concerné et voici l'espace permettant à l'administrateur d'effectuer cette configuration.


### Salles et équipes

 Chaque année le C2E effectue un répartition des équipes dans les différentes salles de classes disponible et répondant aux normes qu'il s'est fixé ainsi grâce à la page qui suivra vous aurez la possibilité d'une part d'enregistrer les salles sélectionnées. Il faut noter qu'au moment d'enregistrer une salle l'on précise le nombre d'équipes que cette salle peut accueillir. 

![Capture d’écran (759)](https://user-images.githubusercontent.com/62190055/160443343-de652834-375b-41c0-9e68-33a0de969c68.png)

Après l'enregistrement des salles il faut effectuer une répartition des équipes la pages qui suit vous présente comment se fera la répartition
l'on aura devant soit la liste des équipes sélectionnées et la salle qui leur est affiliée pourra être sélectionnée et enregistrée.
comme vous pourrez l'observer, la liste des différents salles et les équipes de celles-ci

![Capture d’écran (763)](https://user-images.githubusercontent.com/62190055/160444284-03711afb-2c1e-4fee-89c3-a6e698d88081.png)

### restauration

Pour la restauration nous avons pensé à rendre dynamique les différentes collations qui seront servies aux participants mais aussi les différents moment de restauration . Il faut noter que chaque participant sélectionné à sur son espace un **Qr Code** qui sera scanné à chaque fois qu'il ira se faire restaurer 
Les chefs d'équipe quant à eux auront la possibilité aux moment opportun de choisir en commun accord avec les autres membres les différentes collations qu'ils désirent et ils seront servis incessamment.

__Commençons avec la création des collations et des moments de restauration _

![Capture d’écran (762)](https://user-images.githubusercontent.com/62190055/160445108-4949271b-c938-4ec3-92c9-e48e90095200.png)

__Nous vous présentons l'espace du gestionnaire de la restauration__

![Capture d’écran (767)](https://user-images.githubusercontent.com/62190055/160445964-16db84b3-d30f-4adb-9c57-700014200db8.png)

Ici se trouve le scanner de code Qr, au moment de la restauration les différents participants présenteront leur code et après un scan ceux-ci ne pourront plus avoir accès à la nourriture en utilisant un code déjà scanné. Aussi pour des besoins statistiques après le scan d'un code nous incrémentant le nombre de repas servis



## **Concernant l'espace participants je vous le laisse découvrir par vous même**

# Installation

Nous allons maintenant vous décrire la procédure à suivre pour installer ce projet 

1) Cloner le projet 
2) Créer le fichier .env
4) Installer composer
5) Générer la clef 
6) Installer npm 
7) Configurer le fichier .env ( Base de donnée etc )
8) Lancer l'application


