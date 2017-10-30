# pendu-web2
jeu de pendu en ECMAscript
interface html avec : champ de saisie pour valider une lettre
5 mots pre enregistrés
le progrmme choisi un mot random au debut
10 tentives avant echec

//algo
l'app selectionne un mot au hasard
l'user tape une lettre et la valide
    test de l'appartenance de la lettr au mot
        si oui
            on ecrit la lettre
            definis variable mot trouvé o/n
        si non
            le compteur de chances se decremente

si le mot est trouvé :
    aff d'un message gagné en JS
    le pendu est reinitialisé
sinon:

    en fonction de la valeur du compteur
        si le compteur arrive a -1
            affichage d'un message perdu
        sinon
            decrementer simplement le compteur

//interface
un champ texte
un compteur de chances
une div ou le mot s'ecrit progressivement