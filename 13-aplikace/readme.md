# Závěrečné cvičení, vypracování ukázkové JS aplikace

**Úkol pro studenty: vytvořte klientskou JS aplikaci (CRUD), komunikující pomocí formátu JSON s RESTful API endpointem.**


## Užitečné zdroje :)

* curl pro Windows: http://curl.haxx.se/dlwiz/?type=bin
* **[10. cvičení - Formuláře](../10-formulare)**
* **[11. cvičení - Ajax](../11-ajax)**
* **[12. cvičení - API](../12-api)**
* http://api.jquery.com/jquery.ajax/


## Zadání

*...úkol je řešen na cvičeních, příslušné zadání je upřesněno v rámci výuky*

[REST API pro správu osob a k nim přiřazených úkolů](./zadani_ukoly/)


## Poznámky pro vývojáře API (serverová část)

Server musí do response přidávat hlavičku:

```
Access-Control-Allow-Origin *
Access-Control-Allow-Methods "PUT, GET, POST, DELETE"
Access-Control-Allow-Headers "*"
```

Jinak browser vyhodí bezpečnostní chybu:

```
Cross-Origin Request Blocked: The Same Origin Policy disallows reading the remote resource at https://hradil.vse.cz/api/clients.json?xname=xhraj18. (Reason: CORS header 'Access-Control-Allow-Origin' missing).
```

V Apache se hlavička přidá do souboru **.htaccess**:

```apacheconfig
<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
    Header set Access-Control-Allow-Methods "PUT, GET, POST, DELETE"
    Header set Access-Control-Allow-Headers "*"
</IfModule>
```
