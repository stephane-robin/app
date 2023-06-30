import json
from os import path

P_BDD1 = path.join(path.dirname(__file__), 'bdd1.json')
P_BDD2 = path.join(path.dirname(__file__), 'bdd2.json')

class Element:

    def __init__(self, chaine):
        self.chaine = chaine

    def afficherElement(self):

        return self.chaine

    def yzx(self, chaine):
        n, e = 143, 7
        chaine = chaine.strip()
        chaineRenvoyee = str()
        listeRenvoyee = list()

        listOfChar = self.stringToListOfChar(chaine)
        longueurListe = len(listOfChar)

        for i in range(0, longueurListe):
            listeRenvoyee.append(str(((ord(listOfChar[i]))**e) % n))
            if len(listeRenvoyee[i]) == 2:
                listeRenvoyee[i] = "0" + listeRenvoyee[i]
            if len(listeRenvoyee[i]) == 1:
                listeRenvoyee[i] = "00" + listeRenvoyee[i]
            chaineRenvoyee += listeRenvoyee[i]

        return chaineRenvoyee

    def xyz(self, chaine):
        n, d = 143, 103
        chaineRenvoyee = str()

        listOfThree = self.stringToListOfThree(chaine)

        for element in listOfThree:
            chaineRenvoyee += chr(((int(element))**d) % n)

        return chaineRenvoyee

    def stringToListOfChar(self, chaine):
        return [char for char in chaine]

    def stringToListOfThree(self, chaine):
        listOfThree = list()

        for i in range(0, len(chaine)-2, 3):
            listOfThree.append(chaine[i] + chaine[i + 1] + chaine[i + 2])

        return listOfThree

    def testerAppartenanceBdd(self):
        reponse = False

        ccategorie = self.yzx(self.categorie)
        cnomCompagnie = self.yzx(self.nomCompagnie)

        with open(P_BDD1, "r") as file:
            data = json.load(file)

        if data[ccategorie] != None:
            for cle in data[ccategorie].keys():
                if cle == cnomCompagnie:
                    reponse = True

        return reponse
