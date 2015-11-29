# 12. HTML 5 API

TODO:
- práce s lokálním úložištěm
- detekce offline/online stavu
- offline aplikace (appcache, service worker)
- geolokace
- další HTML5 API


### Offline aplikace (appcache, service worker)

  * cachování = uchování a použití lokální kopie dat, abychom nemuseli načít soubor "zdaleka"
  * HTML 5 application cache - uložení stránek na disk, abychom se na ně mohli podívat, i když nejsme připojení k Internetu
  * funguje dobře u statických stránek či zdrojů (CSS, JS, obrázky)
  * z podstaty věci nemůže fungovat v případě server-side jazyků (PHP, Rails, Java), protože tam logiku provádí jazyk na serveru
  * cache začnem používat přidáním odkazu na manifest soubor do HTML elementu:

```html
<html manifest="demo.appcache">
```
  Struktura manifest souboru:

```
CACHE MANIFEST
# tohle se cachuje
bootstrap.min.css
jquery-1.11.3.min.js

FALLBACK:
# tyhle soubory pouzij, pokud neni sit
img/hd.jpg img/kolo.jpg

NETWORK:
# tady muzeme dat, co se nikdy nema cachovat
```

  * stránky, které mají odkaz na manifest, jsou cachovány automaticky, není třeba je vypisovat do manifestu
  * Pozor na:
    * Pokud definujeme appcache, browser ji používá, i když jsme online, zkracuje se tím doba načtení stránky
    * Pokud změníme jakékoli stránky, které používají appcache, pak **musíme změnit také obsah manifest cache souboru, jinak neuvidíme změny!**
    * **Nikdy necachujte manifest, protože pak se i změněný manifest tahá z cache a změny se nikdy neprojeví**
    * Pokud cachujeme stránku, která používá další zdroje (třeba CSS, JS soubory) a tyto zdroje nebudou explicitně uvedeny v manifestu, nebudou cachovány.

  * http://www.w3.org/TR/2011/WD-html5-20110525/offline.html
  * https://developer.mozilla.org/en-US/docs/Web/HTML/Using_the_application_cache
  * http://alistapart.com/article/application-cache-is-a-douchebag




## Geolokace
- http://www.w3schools.com/html/html5_geolocation.asp

## Drag & Drop
- http://www.w3schools.com/html/html5_draganddrop.asp

## Práce se soubory
- http://blog.teamtreehouse.com/reading-files-using-the-html5-filereader-api

## Local Storage, Application Cache, Service Worker
- http://www.w3schools.com/html/html5_webstorage.asp
- http://www.w3schools.com/html/html5_app_cache.asp
- http://www.w3schools.com/html/html5_webworkers.asp
