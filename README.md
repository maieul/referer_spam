<h1><img src="http://contrib.spip.net/local/cache-gd2/8d/d89e3fe02c8b41b8f23f33b541a209.png?1453217799"/> Referer spam</h1>


###### Le but de ce plugin est d’exclure les liens entrants frauduleux des statistiques à l’aide d’une liste noire.



Afin de lutter contre le [referer spam](https://fr.wikipedia.org/wiki/Pourriel_de_r%C3%A9f%C3%A9rant), qui peut rapidement rendre inutilisable les statistiques de visites fournies par spip, ce plugin apporte la possibilité de marquer les liens entrants suspects comme indésirables. Ils ne seront alors plus pris en compte dans le calcul des visites.

### Fonctionnement du plugin

- Ajout d'une table *referer_spam* dans la base de donnée listant les liens entrants frauduleux
- Ajout d'un onglet *Liste noire* dans les statistiques affichant les liens bloqués
- Surcharge de la tâche cron du plugin Statistiques pour ne pas prendre en compte les visites indésirables
- Surcharge de la page d'affichage des lien entrants :
 - Ajout de boutons dans la liste des liens entrants pour marquer les spam
 - Filtrage des liens entrants affichés en fonction de la liste noire


### Installation

Pour installer le plugin depuis l’espace privé de spip, il est nécessaire d’ajouter le dépôt suivant en plus de celui proposé par défaut :

http://files.spip.org/externals/archives_externals.xml

### Comment s'en servir

L'utilisation du plugin est simple : il suffit de marquer manuellement les liens entrants suspects sur la page *Liens entrants*.

![Liens entrants](http://contrib.spip.net/IMG/png/capture_d_ecran_2016-01-19_18-49-46.png)

Marquer un lien comme spam empêchera les futures visites en provenance de ce site d'être prises en compte, **mais ne changera pas les statistiques de visites passées** (celles-ci sont stockées indépendamment des liens entrants).  

En cas d'erreur, il suffit d'aller sur la page *Liste noire* et de cliquer sur *Retirer des spam*.

![Liste noire](http://contrib.spip.net/IMG/png/capture_d_ecran_2016-01-19_18-49-45.png)
