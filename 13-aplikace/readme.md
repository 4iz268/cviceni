# Závěrečné cvičení, vypracování ukázkové JS aplikace

## Adresář klientů

## URL aplikace

https://hradil.vse.cz/api/clients

Aplikace má i HTML rozhraní, ve kterém lze provádět všechny popsané akce.

## Zabezpečení

**Aplikace nemá autentizaci ani autorizaci. Všichni mají přístup ke všemu a data lze sdílet mezi sebou.**

**Pro filtrování dat lze použít parametr xname.**

## Příklady

```bash
curl -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients.json?xname=xhraj18

curl -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients/1.json

curl -H "Content-Type: application/json" -X POST -d '{"first_name":"Jimmy","last_name":"Hendrix", "street":"Heaven Gate 1","town":"LA","xname":"xhraj18","zip":"10000"}' https://hradil.vse.cz/api/clients.json

curl -H "Content-Type: application/json" -X PUT -d '{"first_name":"Jimmy","last_name":"Page", "street":"3651 Lindell Rd. Suite D1024","town":"Las Vegas","xname":"xhraj18","zip":"89103"}' https://hradil.vse.cz/api/clients/1.json

curl -H "Content-Type: application/json" -X DELETE https://hradil.vse.cz/api/clients/1.json
```

## Formát JSON dat

* id - String, generuje se automaticky při uložení
* xname - String, nepovinné, identifikace studenta
* first_name - String, nepovinné, jméno klienta
* last_name - String, nepovinné, příjmení klienta
* street - String, nepovinné, ulice klienta
* zip - String, nepovinné, PSČ klienta
* town - String, nepovinné, město klienta


## GET index, výpis všech klientů

Pro filtrování záznamů pro konkrétního uživatele (studenta) lze použít parametr xname.

V příkladu jsme jako xname použili xhraj18, student použije svoje vlastní.

```bash
curl -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients.json?xname=xhraj18
```

Vrací pole:

```json
[{"first_name":"Jimmy","id":1,"last_name":"Hendrix","street":"Heaven Gate 1","town":"LA","xname":"xhraj18","zip":"10000"}]
````

## GET show, detail klienta

Vyžaduje id klienta.


```bash
curl -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients/1.json
```

Vrací 1 záznam:

```json
{"first_name":"Jimmy","id":1,"last_name":"Hendrix","street":"Heaven Gate 1","town":"LA","xname":"xhraj18","zip":"10000"}
```

## POST create, uložení nového klienta

Id klienta se generuje automaticky při uložení, neposíláme.

Jako xname použije student svoje xname, v příkladu používáme xhraj18.

```bash
curl -H "Content-Type: application/json" -X POST -d '{"first_name":"Jimmy","last_name":"Hendrix", "street":"Heaven Gate 1","town":"LA","xname":"xhraj18","zip":"10000"}' https://hradil.vse.cz/api/clients.json
```

Vrací 1 záznam včetně právě vygenerovaného id:

```json
{"first_name":"Jimmy","id":1,"last_name":"Hendrix","street":"Heaven Gate 1","town":"LA","xname":"xhraj18","zip":"10000"}
```

## PUT update, aktualizace klienta

Vyžaduje id klienta.

```
curl -H "Content-Type: application/json" -X PUT -d '{"first_name":"Jimmy","last_name":"Page", "street":"3651 Lindell Rd. Suite D1024","town":"Las Vegas","xname":"xhraj18","zip":"89103"}' https://hradil.vse.cz/api/clients/1.json
```

Nevrací nic.


## DELETE, smazání klienta

Vyžaduje id klienta.

```
curl -H "Content-Type: application/json" -X DELETE https://hradil.vse.cz/api/clients/1.json
```

Nevrací nic.

```
Úkol pro studenty: vytvořte klientskou JS aplikaci (CRUD), komunikující přes JSON na toto API.
```

### Poznámky pro vývojáře API (serverové části)

Server musí do response přidávat hlavičku:

```
Access-Control-Allow-Origin: *
```

Jinak browser vyhodí bezpečnostní chybu:

```
Cross-Origin Request Blocked: The Same Origin Policy disallows reading the remote resource at https://hradil.vse.cz/api/clients.json?xname=xhraj18. (Reason: CORS header 'Access-Control-Allow-Origin' missing).
```

V Apache se hlavička přidá do souboru **.htaccess**, v Nginx pod location v souboru **nginx.conf**, např.

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

