# Modellierung

## Einführung

Über die Modellierung von Daten lässt sich festlegen, wie Inhalte strukturiert in der Datenbank abgelegt werden und welche Eingabemasken cms-kit für das Datum bereithält.

cms-kit unterscheidet Datenbank-Modelle und Generische Modelle, die pro Eintrag unterschiedliche, angepasste Datenstrukturen erlauben.

### Datenbank-Modelle

Über die Erstellung von Datenbank-Modellen lassen sich die Tabellen in den Datenbanken anlegen.
Zusätzlich werden automatisch Funktions-Bibliotheken erzeugt, die den EntwicklerInnen einen einfachen und sicheren Zugriff auf die Datenbank erlauben.

Wie das geht wird [hier](.object_modeling.md) beschrieben.

### Generische Modelle

Generische Modelle sind gekapselte, extern ladbare Eingabe-Templates, die es erlauben in einem Eintrag unterschiedliche Strukturen zu nutzen. So kann ein Eintrag mal ein Textfeld, mal ein Quiz und mal ein wasauchimmer sein. Pro Eintrag kann eine passende Struktur geladen und im Backend angezeigt werden. Statt in der Datenbank als Felder werden generische Modelle von cms-kit als [JSON](http://de.wikipedia.org/wiki/JSON)-Struktur abgelegt und fügen, einmal geladen, im Backend dem Eintrag zusätzliche Eingabefelder hinzu. Für die User gibt es keinen Unterschied zwischen "echten" Datenbankfeldern, die bei allen Einträgen gleich sind, und Feldern, die passgenau für diesen Eintrag "generiert" wurden. Mit diesem [dokumentenorientierten](http://de.wikipedia.org/wiki/Dokumentenorientierte_Datenbank) Ansatz lassen sich Szenarien realisieren, die insbesondere von [NoSQL](http://de.wikipedia.org/wiki/NoSQL) addressiert werden. 

Die Administration wird [hier](.generic_modeling.md) beschrieben.


