import gestionElmt
from os import path
from argparse import ArgumentParser

P_BDD1 = path.join(path.dirname(__file__), 'bdd1.json')
P_BDD2 = path.join(path.dirname(__file__), 'bdd2.json')



if __name__ == "__main__":
    element = gestionElmt.Element("service")
    print(element.afficherElement())

