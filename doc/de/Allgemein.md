# was ist cms-kit?

cms-kit ist ein flexibles und modulares Content-Management-Framework. Während klassische Content-Management-Systeme auf bestimmte Einsatzzwecke hin entwickelt wurden und entsprechend in Funktionalität und Datenstruktur festgelegt sind, bietet cms-kit eine völlig offene Plattform mit der sich nahezu beliebige Datenstrukturen erstellen und nutzen lassen. Dort, wo das Rad nicht immer neu erfunden werden muss lässt sich cms-kit einfach über Extensions, Wizards und eigenen Templates erweitern.

## cms-kit ist modellierbar

Ein Kern von cms-kit ist der Editor zur Daten-Modellierung. Hier lassen sich eigene Datenbank-Entwürfe entwickeln und bearbeiten und bestehende Modell-Vorlagen importieren. Über den eingebauten Generator wird das Modell anschliessend in die Datenbank [^db_types] **und** in PHP-Klassen, die für die Datenbank-Abstaktion [^db_abstraction] zuständig sind, geschrieben. Das Default-Backend von cms-kit passt sich automatisch dem Datenmodell an so dass sofort mit der Dateneingabe begonnen werden kann.

das cms-kit Datenmodell unterstützt:

* Relationen: 1:m [^relation_1m] und m:m [^relation_mm] Verknüpfungen
* Hierarchien: einfache [^hierarchy_tree] und mehrdimensionale [^hierarchy_graph] Bäume
* mehrere Datenbanken [^multiple_dbs]
* unterschiedliche ID-Erzeugung: Auto-Increment oder Funktions-basierte IDs (wichtig für verteilte Daten-Pools[^manual_id])
* Generische Modelle

[^db_types] : Über PDO unterstützt cms-kit prinzipiell eine Vielzahl an Datenbank-Systemen (MySQL, SQLite, Postgres, Firebird, Oracle, etc.).

[^db_abstraction] : Die automatisch erzeugten Klassen kapseln die wichtigsten Datenbank-Zugriffe (CRUD+A). Damit wird der Entwicklungsprozeß eigener Applikationen erheblich beschleunigt.

[^relation_1m] : "1 to many" - Beziehungen erlauben einem "Kind" die Zuordnung maximal eines "Elternelements"

[^relation_mm] : "many to many" - Beziehungen erlauben einem "Geschwisterelement" die Zuordnung beliebig vieler "Geschwister" eines anderen Bereichs.

[^hierarchy_tree] : "einfache" Bäume bei denen ein Kind maximal einen Elternknoten besitzen darf, eignen sich z.B. für verschachtelte Seiten-Bäume und virtuelle Verzeichnisse. Sie werden in der Datenbank besonders effizient über das *Nested-Set-Modell* abgebildet. cms-kit unterstützt diesen Hierarchie-Typ nativ.

[^hierarchy_graph] : "mehrdimensionale" Bäume bei denen ein Kind(-Zweig) an mehreren Eltern-Knoten hängen kann eignen sich für z.B. Ontologien. cms-kit realisiert dieses Modell effektiv über "Closure-Tables".

[^multiple_dbs] : eine cms-kit - Instanz kann mehrere Datenbanken verwalten. So lassen sich beispielsweise Backups und User-Daten in separaten Datenbanken ablegen und damit von den "eigentlichen Inhalten" trennen. Dies ist insbesondere für verteilte Hochverfügbarkeits-Anwendungen interessant (Clustering, Cloud-Storage). Auch bei der Weitergabe von Datensätzen ist die Trennung von System- und Arbeitsdaten sinnvoll.

[^manual_id] : möchte man Datensätze parallel auf mehrere Systeme verteilen  und gemachte Änderungen später wieder zusammenführen, kann ein System mit Auto-Increment-IDs Probleme bereiten, da ggf. parallel Datensätze mit den selben IDs eingefügt wurden. Hier empfiehlt sich der Einsatz des ID-Generators von cms-kit. Beispielhafte Anwendungen wären offline Datenbanken auf den Computern von Aussendienst-Mitarbeitern oder eine Gästebuch-Anwendung in einem Server-Cluster.


## cms-kit ist modular

Die Struktur von cms-kit wurde so gewählt, dass die wichtigsten Bereiche unabhängig von einander funktionieren. So ist es beispielsweise möglich (z.B. auf einem zweiten Produktivsystem) die Web-Ausgabe einer cms-kit-Instanz komplett *ohne das Backend* zu betreiben. Auch Administrations-Bereiche, Wizards, Templates und Erweiterungen lassen sich einfach entfernen ohne dass die Funktionalität der anderen Komponenten leidet [^modularity_folders]. Mit der Reduktion von Komplexität lässt sich das System schlanker und sicherer machen.

[^modularity_folders] : die Funktionen einiger Wizards werden von anderen Komponenteten benötigt, weshalb diese nicht unbedacht gelöscht werden sollten. Hinweis auf mögliche Interdependenzen gibt eine Datei "doNotRemoveIf.txt" im jeweiligen Verzeichnis.

Eine Instanz von cms-kit ist in der Lage, beliebig viele *Projekte* zu verwalten (cms-kit ist also "mandantenfähig"). Über die Ordnerstruktur in "projects/" bleiben die Projekte sauber getrennt, lassen sich einfach auf unterschiedliche Domains mappen und können leicht umgezogen, gesichert, geklont und wieder entfernt werden.

## cms-kit ist schnell

Über statisch erzeugte Klassen werden Funktionen *redundant* für jedes Daten-Objekt erzeugt. Damit entfällt *zur Laufzeit* (also dann, wenn Geschwindigkeit gefragt ist) der zeitraubende Exekutions-Pfad, der dynamischen MVC-Mappern eigen ist.

## cms-kit ist transparent

cms-kit ist keine "Black-Box", die ihre Logik in verschachtelten Bibliotheken versteckt. Die erzeugten Datenbank-Klassen lassen sich "lesen", verstehen und selbstverständlich individuell um eigene Methoden erweitern.

## cms-kit ist erweiterbar

Funktionen, die das Backend oder die Frontend-Funktionalität erweitern, lassen sich als *Extensions* paketieren, verteilen und installieren. So ist ein System innerhalb von Minuten starklar. Anhand der Extensions ist cms-kit in nahezu jede beliebige Richtung erweiterbar.

In der Grundversion ist cms-kit nicht nur "leer" (bringt also keine vorgefertigten Datenbankeinträge mit) sondern auch ohne scheinbar zentrale Bereiche wie User-Management, Daten-Rollback, Web-Ausgabe etc.. Diese liegen als Extensions vor und sind damit optional (wozu braucht man z.B. ein User-Management, wenn das System als persönliches Datenwerkzeug benutzt wird?).

Die Eingabe von Inhalten wird zusätzlich über *Wizards* [^wizards] unterstützt. Über die verfügbaren Wizards (Kalender, Dateimanager, WYSIWYG-, WYSIWYM-, Code-Editor etc.) hinaus ist die Entwicklung & Einbindung eigener Wizards problemlos möglich.

[^wizards] : Wizards sind eigenständige Module, die zusätzliche/komfortablere Verwaltungs- und Editier-Funktionen anbieten.

Aussehen und Funktionalität des Backends lässt sich über *Templates* bestimmen und zur Laufzeit wechseln.

Über das *Hook-System* [^hooks] von cms-kit lassen sich Inhaltseingaben "unter der Haube" weiter vereinfachen und kontrollieren.

[^hooks] : Hooks sind Funktionen, die auf Aktionen im Backend "lauschen" und Daten (vor oder nach einer Aktion) manipulieren können. Zahlreiche Backend-Erweiterungen setzen auf dem Hook-System auf. Eigene Projekt-Hooks lassen sich leicht einrichten und im System registrieren.

## cms-kit ist einfach

... so einfach eben, wie man die darunter liegende Datenstruktur gestaltet. Ob für ein Blog-System eine simple Artikel-Verwaltung (+ ggf. "Tags") oder für komplexe Verwaltungsaufgaben eine Vielzahl an Bereichen zur Verfügung steht hängt einzig vom jeweiligen Projekt ab. cms-kit zeigt damit den Usern immer nur das, was für den Task wirklich notwendig ist. Ist z.B. das *Konzept von Einträgen und Verknüpfungen* wie es das Default-Template bietet einmal verstanden, ist das Backend ohne zusätzliche Schulungen leicht auch in neuen Projekten einsetzbar, da die Struktur in allen Projekten gleich "tickt". 

Über *spezielle Templates* kann aus dem Backend alternativ auch ein hochgradig angepasstes System für spezielle Aufgaben werden. Unterschiedliche Bereiche können vollkommen unterschiedliche Masken für unterschiedliche Aufgabenbereiche anbieten.

