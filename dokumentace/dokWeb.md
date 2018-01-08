# Semistrální práce z WEB 2017 Stranka konference
### Mukanova Zhanel | A16B0087P | mukanova@students.zcu.cz


## Popis použitých technologií
Vytvořila jsem webovou stránku konference. Web dodržuje MVC architekturu.
Použila jsem pro práci s databázi PDO. A místy jsem použivala JavaScript.
Web obsahuje responzivní design (pomocí nástroje Bootstrap) a ošetření proti 
základním typům útoku (htmlspecialchars(), neobsahuje $_GET..).

## Popis adresářové struktury aplikace
### components

#### Autoload.php
Funkce pro vytvoření "include_once". Hledá v souborech:
**/models/**,**/components/**,**/controllers/** potřebné třídy.

#### Db.php
Třida pro připojení k Databázi.

#### Router.php
Router. Přečte všechny cesty, ktere jsem ukazala v routes.php
a na základě toho vyvolá potřebny Controller a Acton (metoda).

### config

#### db_params.php
Všechné potřebné parametry pro připojení k databázi.
* host name
* název DB
* Username
* heslo

#### routes.php
Všechné existujicí cesty v mém webu.

### controllers

Řidicí třidy webu.

#### AdminController.php

Třída, která řidi funkcemi, ke kterým má přśtup  pouze Administrator</p>

* actionIndex()
* actionDownload($idPost)
* actionBan($id)


#### AdminSeznamController.php

Třída, která řidi funkcemi (osobně vypisem tabulek), ke kterým má přśtup  pouze Administrator

* actionSeznamPrispevku()
* actionUsersban()
* actionPosouzeni($id)
* actionPosouzeniSeznam()

####SeznamController.php

Třída, která řidi funkcemi (osobně vypisem tabulek), ke kterým má přśtup jakýkoliv uživatel

* actionIndex()
* actionDelete($id)
* actionUpdate($id)
* actionAdd()
* actionSeznamPosouzeni()
* actionVote($id)


#### SiteController.php

Třída, která vyvolá stránky pro návštěvniky

* actionLogin()
* actionHome()
* actionKonf()
* actionMisto()
* actionSponsori()
* actionTemata()



#### UserController.php
Třída, která řidi funkcemi zaregistrovaného uživatele

* actionRegister()
* actionLogin()
* actionLogout()
* actionEditprofile()
* actionSponsori()
* actionTemata()




### models

Models  všechné funkce, které jsem použivala ve svém webu.
 
#### Admin.php
Funkce, které může vyvolat jen Admin

* checkAdmin()
* banUser($id)

#### Articles.php
Funkce pro práci s záznamy

* checkName ($name)
* checkAutori ($name)
* addAbstract($options)
* getArtList()
* getArtUserList($id)
* deletePostById($id)
* updatePostById($id, $options)
* getPostById($id)

#### Files.php
Funkce pro práci se souborami

* file_force_download($file) (Oficiální dokumentace php + změna)

#### User.php
Funkce pro práci s uživatelem. Registrace, autorizace...

* register($name, $email, $password)
* checkName ($name) 
* checkPassword ($password)
* checkEmailExists ($email)       
* checkUserData($email, $password)
* auth($userId)
* isGuest()
* checkLogged()
* getUserById($id)
* getUsersList()
* updateUserById($id, $options)
* getUserBanById($id)
* checkBan()


### template


css
---

#### fonts.css

Různá písma.

#### main.css

Hlávní design.

#### media.css

Responzivní design.

fonts
----

Písma.

images
------

Obrázky z webu.

js
--
JavaScript

#### common.js

* Slider
* Ajax odesilani email

#### jquery-1.6.2.js

JQuery

libs
----

Všechné potřebné knihovny.

### upload


files
-----

Soubory uživatelů.

### views

Přehledy všech stránek.
Ve složce **layouts** jsou headers and footers.
V ostatních složkach jsou pouze hlávní obsáhy stránek.

admin
-----

#### index.php

Hlávní stránka pro admina.

#### seznamadmin.php

Tabulka všech přispěvku uživatelů.

#### users.php

Tabulka všech uživatelů.

blog
----
Stránky pro navštěvniky

#### login.php

Stránka s autorizaci

#### misto.php

Stránka s místem konání

#### o_konf.php

Stránka s informaci o konferenci

#### registrace.php

Stránka s registrace

#### sponsori.php

Stránka s informaci o sponsoři

#### temata.php

Stránka s tématy konferenci

layouts
-------

Májí v sobě připojení k js, css..

#### admin-footer.php

Footer pro admina.

#### admin-header.php

Header pro admina.

#### footer.php

Footer pro všech uživatelů.

#### header.php

Header pro všech uživatelů.

site
----

#### index.php

Hlávní stranka pro navštěvniky

user
----

#### delete.php

Stránka pro podtvrzení smázaní příspěvku.

#### editprofile.php

Stránka pro editace příspěvku.

#### home.php

Hlávní stránka uživatele.

#### novy_pr.php

Form pro vytvoreni noveho prispevku.

#### seznam_k_pos.php

Seznam příspěvků k posouzení.

#### update.php

Uprava přispěvku.

#### seznam_pr.php

Seznam příspěvku uživatele.



##### .htaccess

Sys soubor pro nastaveni WEB serveru

##### index.php

Hlávní soubor WEBu

##### README.md

Dokumentace (md)
