## what is cms-kit?

cms-kit is a flexible and modular content management framework. While traditional content management systems have been developed for a specific purpose, and are, determined according to functionality and data structure, cms-kit provides a completely open platform to manage almost any data structure and can use. To not reinvent the wheel cms-kit can be simply extended with extension-packages, wizards and own templates.


### cms-kit can be modeled

A core of cms-kit is the editor for data modeling. Here you can develop and edit your own data-designs and import existing model templates. 

About the built-in generator, the model is then written to the database and to PHP classes managing the database abstraction. The default backend of cms-kit automatically adapts to the data model so that you can start entering data immediately.


### cms-kit is modular

The structure of cms-kit was chosen so that the most important areas run independently of each other. For example, it is possible (eg on a production system) to operate the Web output of a cms-kit-instance completely without the backend. Also, administration areas, wizards, templates and extensions can be easily removed without the functionality of the other components suffers. The reduction of complexity makes the system more streamlined and secure.

An instance of cms-kit is able to manage any number of projects (cms-kit is so "multitenant"). Within the folder structure in "projects/" the projects are cleanly separated, can be easily mapped to different domains, easily be moved, backed up, cloned, and removed.

### cms-kit is fast

Functions are generated redundant as static classes for each data object. This eliminates at runtime (ie when speed is needed) the time-consuming Execution path, dynamic MVC mappers have to walk through.

### cms-kit is transparent

cms-kit is not a "black box" that hides its logic in nested libraries. The generated database classes can be 'read', understand and of course overloaded by own methods.

### cms-kit is expandable

Functions that extend the backend or the frontend functionality, can be packetized as Extensions, distributed and installed. Such a system is started within minutes. With extensions cms-kit is expandable in almost any direction.

In the basic version cms-kit is not only "empty" (ie, does not bring any pre-made database entries) but also without seemingly important areas such as user management, data rollback, web output, etc.. These functionalities are available as extensions and are therefore optional (why do you need a "user management" when the system is only used as a personal data tool?).

The backend has additionally a wizard-system to support data-management. In addition to available Wizards (calendar, file manager, WYSIWYG, WYSIWYM, code editor, etc.), the development & integration of custom wizards is easy.

Appearance and functionality of the backend can be totally customized with templates and changed at runtime.

with the hook system of cms-kit it is possible to contro and support "under the hood" to further simplify and control.
cms-kit is easy

... so easy just how to make the data underlying structure. Whether for a blog system, a simple article management (plus any "tags") or is a variety of areas for complex management tasks depends solely on the individual project. cms-kit shows so that the users always only what is truly necessary for the task. For example, if the concept of entries and links as it provides even understood the default template, the backend without additional training is easy to use in new projects, as the structure in all projects is "ticking".

Using special templates can be from the backend alternatively, a highly customized system for specific tasks. Different areas can offer completely different masks for different tasks.

    About PDO supported in principle cms-kit a variety of database systems (MySQL, SQLite, Postgres, Firebird, Oracle, etc.). ↩

    The classes generated automatically encapsulate the main database access (CRUD + A). Thus, the process of development of your own applications can be accelerated considerably. ↩

    "One to many" - relationships allow a "child" assigning a maximum of one "parent element" ↩

    "Many to many" - relationships allow a "sibling" the assignment of any number of "sibling" of another region. ↩

    "Simple" trees in which a child is allowed to have at most one parent node, for example, are suitable for nested pages Trees and virtual directories. They are mapped into the database very efficiently using the nested set model. cms-kit supports this hierarchy type natively. ↩

    "Multidimensional" trees in which a child (branch) can depend on several parent nodes are suitable for eg ontologies. cms-kit realized this model effectively about "Closure Tables". ↩

    a cms-kit - instance can manage multiple databases. Thus, for example, backups, and user data store in separate databases and thus separate from the "real content". This is particularly important for distributed high-availability applications interesting (clustering, cloud storage). Even with the disclosure of records, the separation of system and work data is useful. ↩

    would be distributed datasets in parallel on multiple systems and made changes later merge again, a system with auto-increment IDs cause problems, as necessary, parallel data sets with the same IDs were inserted. Here the use of the ID generator cms kit is recommended. Typical applications would be offline databases on the computers of field staff or a guestbook application in a server cluster. ↩

    the functions of some Wizards are needed by other Komponenteten why this should not be deleted carelessly. Note there may be interactions is a file "doNotRemoveIf.txt" in the directory. ↩

    Wizards are independent modules that offer additional / more convenient management and editing functions. ↩

    Hooks are functions on actions in the backend "listen" and can manipulate data (before or after an action). Numerous backend extensions are built on the hook system. Own project-Hooks can be set up easily and register in the system. ↩ 
