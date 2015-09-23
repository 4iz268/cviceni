# 2. Pokračování HTML

## obrázky

###  img
* image = obrázek
* bitmapové (rastrové) vs křivky
* src, alt = alternativní text pro čtečky, nevidomé, atd., mít všude, popisuje, co na obrázku je
* title = text, který se ukazuje po najetí myši
* height, width výška, šířka, vždy uveďte, nenechávejte na css, mělo by odpovídat reálné velikosti obrázku
  * Retina disple na Macu - width a height je 1/2 nebo 1/4 skutečné velikosti obrázku
* výšku a šířku lze uvést také v CSS, doporučuji však dávat do stránky rovnou, je to přehlednější
* pozor, nevynechávejte height a width, SEO pak snižuje body, stránka se pomaleji načítá (DOM parser nemůže udělat místo na obrázek rovnou)
* nedělat resize v HTML, obrázek se stejně musí načíst celý a zmenšuje ho až browser (výjimka Retina)

### map

* image map, viz HTML soubor 02-images.html

### optimalizace obrázků

* optimalizace znamená (v tomto kontextu): používat správnou velikost a obrázek komprimovat
* zmenšení obrázku není komprese! :)
* bezeztrátová komprese - ikony, používat optimizer, transparentní barva
* image compressors: http://mashable.com/2013/10/29/image-compressors/

### formáty web obrázků

* JPG - fotky, ztrátová komprese, opět optimizery
* GIF - jen 256 barev, v minulosti, používat místo toho PNG
  * GIF už od roku 2005 nemá licenční omezení
* PNG
  * 24 bitů RGB (2^24 = 16 777 216)
  * plus dalších 8 bitů průhlednost = celkem 32 bitů RGBA (Alpha), každý pixel může mít alpha kanál (transparence v hodnotě 0-255)
* více multimédia v 5. cvičení dle http://4iz268.github.io/cviceni/index.html

## tabulky

### table, tr, td, thead, tfoot, group

### thead, tfoot, tbody

* browser je může používat při scrolování (sroluje pouze obsah tabulky, záhlaví a zápatí je statické), nebo při tisku tak, aby se třeba záhlaví tabulky objevilo při tisku tabulky na každé stránce

## td, th

* td - table cell
* th - header cell

## seznamy

* ol - ordered list
* ul - unordered list (typicky používaný)
* li - list item
* dl - description list
* dd - description of a term in a description list
* dt - identifies a term in a definition list

## rámce (frames)

* nepodporuje je HTML5
* ale je dobré o nich vědět
* nepoužívat

### frameset

* nastavení rozložení rámců na stránce
* **pozor, frameset se dává místo body!**
* nepoužívat

### iframe

* stránka vložená do jiné stránky - internal frame
* podporuje je HTML5
* lze používat
* příklady z praxe: mapy, twitter, facebook, atd.