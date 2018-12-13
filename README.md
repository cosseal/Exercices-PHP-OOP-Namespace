Consignes :

- Ajouter deux classes ayant le même nom puis créer leurs namespace
- Utiliser ces deux classes en utilisant la syntaxe appropriée
- Executer la méthode de chacune de vos nouvelles classes depuis le fichier index.php



Théorie :

En PHP orienté Objet, les espaces de nom servent à éviter les conflits entre les classes ( par exemple si vous utilisez
des scripts php qui ont des noms de classes identiques aux votres )

Grâce aux espaces de nom, deux classes peuvent avoir le même nom dans deux espaces de noms différents.

On déclare un namespace dans le fichier de la classe de cette façon  :

namespace nom

class maClasse
{
    //methodes
    //propriétés
}


Dans un autre fichier :

use nom_du_namespace\nom_de_la_classe as alias

Pour instancier la classe, on utilisera par la suite :

$inst = new alias();


Dans le dossier classes, vous trouverez un exemple fonctionnel de classes ayant le même
nom mais qui sont présentes dans deux espaces de nom différents.

Dans mon fichier index.php, j'effectue un require sur les deux fichiers de classes
puis je demande à PHP d'utiliser ces classes, j'attribue un alias maClasse1 et maClasse2 à chacun de mes deux classes

Comme j'ai déclaré mes méthodes de classes en statique, je les appelle directement
sans instancier les classes grâce à l'opérateur de portée "::"





