# Závěrečné cvičení, vypracování ukázkové JS aplikace

## Adresář klientů

### Popis API

https://github.com/jirihradil/4iz268-api

### Klient v HTML

https://hradil.vse.cz/api/clients

### Klient z příkazového řádku

```bash
curl -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients.json?xname=xhraj18

curl -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients/1.json

curl -H "Content-Type: application/json" -X POST -d '{"first_name":"Jimmy","last_name":"Hendrix", "street":"Heaven Gate 1","town":"LA","xname":"xhraj18","zip":"10000"}' https://hradil.vse.cz/api/clienyts.json

curl -H "Content-Type: application/json" -X PUT -d '{"first_name":"Jimmy","last_name":"Page", "street":"3651 Lindell Rd. Suite D1024","town":"Las Vegas","xname":"xhraj18","zip":"89103"}' https://hradil.vse.cz/api/clients/1.json

curl -H "Content-Type: application/json" -X DELETE https://hradil.vse.cz/api/clients/1.json
```

Pozor: příkaz curl může vracet chybu:

```
curl: (60) SSL certificate problem: Invalid certificate chain
```

Chyba znamená, že SSL certifikát na serveru nebyl vytvořen certifikovanou autoritou. Pak je třeba použít 
přepínač -k, např.:

```
curl -k -H "Content-Type: application/json" -X GET https://hradil.vse.cz/api/clients.json?xname=xhraj18
```

### Klient v HTML a JS

**Pro studenty: vytvořte klientskou JS aplikaci (CRUD), komunikující přes JSON na toto API.**


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

