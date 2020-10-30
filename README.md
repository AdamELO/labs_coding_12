# The Labs made by : Adam El Omari
## projet final Back-end Coding-school-12
### installation et préparation:
npm i/composer i
storage:link
.env(mailtrap/db avec migrate)
### languages:
- Php
- blade => Html
### parties: 
- Home
- Service
- Blog
- Contact
- Login/Register/Profil
- Backoffice
### Roles et Users dans la DB
- Admin: mail = projet12codingschool@gmail.com || mdp = projet12codingschool@gmail.com
- Webmaster: mail = adam@example.com || mdp = adam@example.com
- Rédacteur: mail = test@example.com || mdp = test@example.com
- membres : mail = membre@example.com || mdp = membre@example.com && mail = member@example.com || mdp = member@example.com
# Home
## Navbar
Logo et les titres des onglets modifiable dans le backoffice.
## Titres
Tout les titres dans une background mauve sont modifiable , changer la couleur d'un mot en surligné
vert en mettant le mot entre parenthese dans le backoffice partie titre.
## Banner carousel
le logo est le meme que celui de la navbar, crud complet pour le carousel avec image et slogan
## Services rapides 
3 services aléatoire
## Présentation->Video->Testimonial
video modifiable avec son thumbnail et information sur presentation seulement modifiable.
Temoignages crud complet du text nom prenom img de la personne.
max 6 dernier témoignages.
## services
9 derniers services avec pagination si il ya plus que 9 services + crud complet dans backoffice.
icones et services sont reliés par one to many.
## Team
CEO au milieu (seulement CEO en majuscule et il si il y deux CEO seulement le premier apparait)
les autres fonctions sur les cotés et de maniere aleatoire.
la partie fonctionalité de team n'a pas été faite car non comprensible
## Ready
petite banniere verte avec texts modifiable et btn va vers contact
## contact
les infos contact sont modifiable et pour le formulaire de contact le message se trouve dans la partie mail du backoffice.

# Services
## Banner
pour la banniere service/contact/blog les noms sont les memes que les noms de la navbar donc on peut les modifier dans le backoffice partie menu.
## services
meme chose que services dans home
le btn va vers service primé
## services primés
les 6 derniers services sont affichés
l'image du telephone n'est pas modifiable
## blog rapides
les 3 derniers article dans la DB qui sont publié
## newsletter
disponible seulement si on est pas connecté car tous les membres sont deja inscrit à la newsletter
si on est inscrit comme invité à la newsletter et que apres on s'inscrit sur le site, on est
automatquement enlvé des inscrit a la newsletter comme invité et on devient inscrit à la newsletter en tant que membre.


# Blog
## Blog
liste des articles avec pagination, le dernier article est tout en haut de la liste
publier seulement si le btn publier a été coché par un webmaster dans le backoffice.
une fonction search est présente et permet de retrouver un article grace a son titre
## blog post 
en appuyant sur read me d'un article 
on peut voir tout l'article les informtions de l'auteur les commentaires (on peut ecrire un commentaire seulement si on est connecté et ça met automatiquement dan le input email et name notre nom et email de user)
et les tags et catégories reliés à l'article en many to many

# Contact
## Googlemaps
la carte de google maps est modifiable

# Footer 
le text est modifiable

# Login
pour se connecter

# Register
pour s'inscrire, on peut rajouter une photo mais c'est pas obligatoire si on le fait pas on aura une img de profil auto.
on recoit un mail de bienvenue.

# profil
dispo seulement quand on est connecté , pour mettre a jour son profil

# admin 
c'est le backoffice.
seulement le rédacteur/webmaster/admin ont accès au backoffice
## backoffice
- Admin : peut tout faire sauf la partie team et n'a ps acces au crud create et edit de Blog Article
- Webmaster : peut tout faire sauf changer le role d'une personne (seulement l'admin peut le faire), il est 
le seul qui peut permettre de publier un article
- Rédacteur : a accès seulement à blog mais ne peut pas publier un article
### backoffice Article publier et newsletter précision
un rédacteur peut écrire un aricle mais l'article ne sera pas publier et aucune newsletter ne sera envoyée.
pour que l'article soit publier il faut qu'un webmaster coche la checkbox publier,
pour qu'une newsletter soit envoyée avec les information de l'article il faut coché le checkbox newsletter.
l'admin peut seulement supprimer un article si il estime que le contenu est offensant.

# fin projet ...
