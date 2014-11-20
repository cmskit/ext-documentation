# Das Default-Backend


Das Backend von cms-kit unterscheidet sich ein wenig von dem klassischer Content-Management-Systeme, da cms-kit keine Vorgaben bei der Datenstruktur macht. Daher wird eine Darstellung benötigt, die generalisiert genug ist alle Modelle abzubilden. Für bestimmte Aufgaben und Modelle angepasste Interfaces erstellt und geladen werden.

Im Folgenden wird das *Default-Template* beschrieben:

Im Prinzip arbeitet das Default-Template über die Darstellung/Verwaltung von Inhalts-Bereichen und die Verknüpfung mit anderen Bereichen.

Dafür gliedert sich das Backend in einen Kopf- und einen dreispaltigen Arbeitsbereich.


Im Kopfbereich finden sich Dropdown-Listen für die Bereiche und optional Bereichs-Filter, Wizards und der Logout-Button.

----------


## Liste

In der linken Spalte werden die Einträge in dem gewählten Bereich als Liste *oder* Baum dargestellt. Der Klick auf einen Eintrag öffnet den Inhalt in der mittleren Spalte.

Werden mehrere Einträge per Strg+Klick oder "Überziehen mit der Maus" (Lassofunktion wie bei Malprogrammen) gewählt werden Funktionen zur Bearbeitung der gewählten Gruppe angeboten.

Weitere Funktionen finden sich im Kopfbereich der Liste:

* Suche: Über die Autosuggest-Suchbox auf der linken Seite lassen sich Einträge finden und direkt anspringen
* Filter-Presets (falls verfügbar) erlauben die schnelle Filterung und Listenanzeige der Einträge nach den Bedingungen, die in dem gewählten Filter-Preset hinterlegt wurden (z.B. "zeige in der Liste nur die aktiven Beiträge absteigend sortiert nach Neuigkeit")
* neuer Eintrag: (falls verfügbar) mit dem Button lässt sich ein neuer Eintrag anlegen
* Blättern: sind viele Einträge in dem Bereich verfügbar werden Blätter-Buttons eingeblendet, mit denen die Liste geblättert werden kann.
* Sortieren: Über den Button lassen sich Listen und Bäume sortieren und die Anzeige verändern. 
  * Listen: 
  * einfache Bäume: 
  * Graphen: 
  * Der Bereich **Labels** erlaubt zudem die Einstellung, welche Inhalte in der Liste angezeigt werden sollen
* Anordnen (bei Hierarchien): hier kann die anordnung einer Hierarchie festgelegt werden

## Inhalte

### Eingabefelder & Wizards

Je nach Datentyp werden Eingaben unterschiedlich dargestellt. Die Eingabe von Inhalten kann auch über so genannte Wizards unterstützt werden. Dann findet sich neben bzw. unter einem Eingabefeld ein Button, der den entsprechenden Wizard in einem Overlay-Bereich öffnet. Mehr Informationen zu Wizards sind [hier](Wizards.txt) zu finden.

Weitere Funktionen:

* lässt sich der Eintrag mit anderen Elementen verknüpfen wird am Kopf des Inhalt-Bereiches ein Dropdown-Feld zur Auswahl des Verknüpfungs-Modus angezeigt in dem neue Verknüpfungen angelegt und bestehende bearbeitet werden können.
* ggf. lässt sich der Inhalt mit einer Vorschau-Ansicht verknüpfen. Dann wird ein Vorschau-Button eingeblendet.

## Relationen


Lässt sich das gewählte Element mit Elementen anderer Bereiche verknüpfen, werden in der rechten Spalte alle mit dem Eintrag assoziierten Elemente angezeigt.

Im Verknüpfungs-Modus erlaubt ein "Anfasser-Pfeil" das Anlegen & Lösen von Verknüpfungen und das Sortieren der verknüpften Elemente per Drag & Drop. Zu verknüpfende Elemente werden in den Bereich "verknüpft" gezogen, sollen Verknüpfungen aufgelöst werden, zieht man den entsprechenden Eintrag einfach nach unten in den Bereich "verfügbar".

Sollen die verknüpften Elemente neu sortiert werden verschiebt man sie einfach entsprechend innerhalb des Bereichs "verknüpft".

Weitere Funktionen:

* Suche: Über die Autosuggest-Suchbox auf der rechten Seite lassen sich der zu verknüfende Bereich durchsuchen und die Treffer in die Verknüpfung übernehmen.
<!--* neuer Eintrag **(als Verknüpfung)**: Über den Button lässt sich ein neues Element in dem Bereich anlegen, dass automatisch mit dem bestehenden Eintrag verknüft wird.-->
* Blättern: sind viele Elemente in dem zu verknüpfenden Bereich verfügbar werden Blätter-Buttons eingeblendet, mit denen die Liste der verfügbaren Elemente geblättert werden kann.


## Tipps

* Der "Anfasser" zwischen den Spalten erlaubt die Anpassung der einzelnen Spaltenbreiten per Drag&Drop.
* Wird ein Eintrag geöffnet, wird die URL entsprechend angepasst. So lassen sich einzelne Einträge, die häufiger bearbeitet werden auch per Bookmark/Lesezeichen speichern/aufrufen. 
* "Frontend-Editing" (also die Möglichkeit von einer Webansicht aus direkt in den "Bearbeitungsmodus" zu springen) ist so natürlich auch einfach zu implementieren! Einfach im Frontend einen entsprechenden Link auf den Eintrag im Backend legen.

