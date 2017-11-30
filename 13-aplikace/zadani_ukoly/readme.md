# Aplikace pro správu osob a jejich úkolů
 
Vaším úkolem je vytvořit uživatelské rozhraní pro aplikaci umožňující spravovat seznam osob (členů týmu) a k nim přiřazených úkolů.

## API endpoint a funkcionalita aplikace
Aplikace využívá RESTful API, které naleznete na adrese [http://vojir.net/ukoly/www/api](http://vojir.net/ukoly/www/api)
API umí komunikovat ve formátech JSON a XML - preferovaný formát volíte prostřednictví zasílaných http hlaviček.

V rámci aplikace je možné vytvářet a udržovat adresář osob a těmto osobám přiřazovat úkoly, přičemž mezi osobami a úkoly je vztah 1:n.

Dokumentace API je dostupná pomocí swagger rozhraní na adrese [http://vojir.net/ukoly/www/api/swagger](http://vojir.net/ukoly/www/api/swagger) 

### Upozornění
Uvedená aplikace je určena k cvičným a výukovým účelům, přičemž nevyužívá žádnou formu autentizace ani autorizace. Pokud nechcete sdílet zadaná data s ostatními studenty na cvičení, zkopírujte si aplikaci do vlastního adresáře/na vlastní hosting.


## Doporučený postup řešení
1. podívejte se na [dokumentaci API](http://eso.vse.cz/~xvojs03/ukoly/www/api/swagger)
2. zkuste si spustit nějaké operace přes swagger UI či pomocí curl
3. začněte se zobrazením seznamu osob
4. doplňte formuláře pro úpravu dat 

---

## Možnost instalace PHP aplikace na vlastní hosting
1. stáhněte si [zdrojový kód aplikace](./php_aplikace.zip) a rozbalte ho do požadované složky
2. v daném umístění povolte zápis do složek *log* a *temp*
3. naimportujte do databáze obsah souboru db.sql
4. nastavte připojení k databázi v souboru *app/config/config.local.neon*