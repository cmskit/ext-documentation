
# Generische Modelle

## Sinn

cms-kit ist mit seiner Daten-Modellierung bereits sehr flexibel. Manchmal muss es aber noch ein bisschen flexibler sein :-)

Nehmen wir an, ein Inhaltselement soll mal ein Textfeld, mal ein Quiz und mal ein Youtube-Video sein. Redakteure sollen dabei angepasste Eingabefelder angeboten bekommen um nicht umständliche HTML-Codes in Freitextfeldern eingeben zu müssen.

Wird ein Objekt/Bereich auf der Datenbank-/Objekt-Ebene modelliert gilt das Datenmodell für *alle* Einträge in dem Bereich. Sollen nun die Einträge *unterschiedliche Eingabefelder* aufweisen kommt man mit der Modellierung auf Bereichs-Ebene nicht weiter.

Hier bieten sich Generische Modelle an, die das bestehende Modell individuell um zusätzliche Strukturen erweitern.

### ...und so funktioniert es

Das Backend von cms-kit interpretiert Felder vom Typ "Modell (MODEL)" als Felder, die ein Generisches Modell enthalten (können).

Ist in dem Feld ein spezielles JSON-Objekt mit den richtigen Struktur hinterlegt werden aus dem Modell Eingabefelder erzeugt, die an Stelle des Modell-Felds auftauchen. Eingaben in diese Felder werden in die hinterlegte JSON-Struktur zurückgeschrieben[^shadow].

[^shadow] : Optional lassen sich die eingegebenen Felder zusätzlich in einer eigenen Tabelle hinterlegen. Damit sind einfachere Mengenabfragen auf Datenbankebene realisierbar.

Die Modellierung der Generischen Modelle erfolgt in einem eigenen Editor [mehr](.generic_modeling.md).
 

