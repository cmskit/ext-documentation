# Hooks

**Achtung, nur für Developer interessant!**

Seine Flexibilität & Mächtigkeit bekommt das Backend von cms-kit erst wirklich durch Hooks. Hier lassen sich Eingaben überprüfen, mehrschichtige Freischaltungs- und Vorschau-Prozeduren festlegen, Cache-Daten löschen und Sicherungskopien anlegen, Nachrichten verschicken uvm.

Ist einem Objekt ein Hook zugeordnet, wird dieser -je nach (PRE-/PST-)Einstellung- *vor* oder *nach* jeder Interaktion des Backends mit dem Server aufgerufen.

Die Funktion muss nun selbst entscheiden, auf welche Aktionen(en) sie reagiert.

## Aktionen

* getList
* createContent
* getContent
* saveContent
* deleteContent
* multiSelect
* multiValue
* multiDelete
* getReferences
* getConnectedReferences
* saveReferences
* getTreeList
* getTreePath
* exportList


## Beispiele
$action

	

## Import


