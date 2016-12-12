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


## Poznámky pro vývojáře API (serverová část)

Server musí do response přidávat hlavičku:

```
Access-Control-Allow-Origin: *
```

Jinak browser vyhodí bezpečnostní chybu:

```
Cross-Origin Request Blocked: The Same Origin Policy disallows reading the remote resource at https://hradil.vse.cz/api/clients.json?xname=xhraj18. (Reason: CORS header 'Access-Control-Allow-Origin' missing).
```

V Apache se hlavička přidá do souboru **.htaccess**:

```apacheconfig
<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
</IfModule>
```

v Nginx pod location v souboru **nginx.conf**, např.

```
location ~ ^/api(/.*|$) {
    alias /home/xhraj18/api/current/public$1;  # <-- be sure to point to 'public'!
    passenger_base_uri /api;
    passenger_app_root /home/xhraj18/api/current/;
    passenger_document_root /home/xhraj18/api/current/public;
    passenger_enabled on;
    add_header 'Access-Control-Allow-Origin' '*';
}
```


Ukázka správné a kompletní hlavičky:

```
curl -I -k -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients.json?xname=xhraj18
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8
Transfer-Encoding: chunked
Connection: keep-alive
Status: 200 OK
X-UA-Compatible: IE=Edge,chrome=1
ETag: "971100cf91d23a3fa9771f89ccc1a716"
Cache-Control: max-age=0, private, must-revalidate
X-Request-Id: 0131a2bb6730b9b5c472fed270334d19
X-Runtime: 0.157872
Date: Thu, 17 Dec 2015 16:07:05 GMT
X-Rack-Cache: miss
X-Powered-By: Phusion Passenger 4.0.57
Server: nginx/1.6.2 + Phusion Passenger 4.0.57
Access-Control-Allow-Origin: *
```

