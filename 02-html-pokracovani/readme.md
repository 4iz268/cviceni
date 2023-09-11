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

* JPG - fotky, ztrátová komprese
* GIF - jen 256 barev, jedna z barev může být průhledná
* PNG
  * 24 bitů RGB (2^24 = 16 777 216)
  * plus dalších 8 bitů průhlednost = celkem 32 bitů RGBA (Alpha), každý pixel může mít alpha kanál (transparence v hodnotě 0-255)
  * má i animovanou variantu APNG
* SVG
  * pro vektorové obrázky 
* WebP  

Více informací ve cvičeních věnovaných [multimédiím](../05-multimedia) a [SVG](../06-svg).

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

### iframe

* stránka vložená do jiné stránky
    * historicky se rámce používali pro rozdělení stránky několik zcela samostatných podstránek zobrazovaných vedle sebe
    * dnes se z rámců používá již jen iframe (má podporu i v HTML5)
* příklady z praxe: mapy, twitter, facebook, atd.
* [ukázka](02-inline-frame.html)


# Nové elementy v HTML5
 * v HTML5 je k dispozici celá řada nových elementů, kterými můžeme článku rozlišit na jednotlivé významové celky
 * pozor, ne všechny elementy jsou podporovány ve všech prohlížečích!
 * kromě nových elementů je povolena také zjednodušená syntaxe a jsou podporována nová javascriptová API
 
## Elementy pro strukturování stránky
 * **header** - hlavička stránek, záhlaví článku/sekce
 * **footer** - patička stránek, 
 * **nav** - navigace
 * **main** - hlavní obsah stránek (v podstatě jde o sekci, o které zároveň řekneme, že je hlavní; může být na stránce jen jednou)
 * **section** - sekce (stránek, článku atp.) - v zásadě určené pro rozdělení obsahů se stejnou důležitostí
 * **aside** - doplňkový obsah (typicky nějaké další informace, které můžeme vynechat a hlavní obsah pořád dává smysl; nejde o tag jen pro reklamy!)
 * **article** - článek - ucelený textový obsah (má smysl i v případě, pokud bychom ho vyjmuli ze stránky a četli samostatně)
 * **address** - zvýraznění pro 
 * **details** - doplňkové informace, které si může uživatel volitelně zobrazit (viditelný text se umisťuje do vnořené značky **summary**); nepodporováno v IE
 * **wbr** - nepárový tag, kterým prohlížeči umožníte zalomení velmi dlouhého slova, které se nevejde na jeden řádek
 * změna v úrovních nadpisů - teoreticky můžeme v každé sekci/článku začínat od úrovně **h1**, v praxi kvůli vyhledávačům začínáme od **h2**
 * sémantický význam pro elementy **b** a **i**
 * [ukázka](02-html5.html)
 
## Grafika a multimédia, formuláře
 * nové značky **figure**, **canvas**, **svg**, **audio**, **video**
 * nové typy formulářových polí, validace regulárními výrazy atd.
 * budeme probírat na [5. cvičení - multimédia](../05-multimedia) a na [10. cvičení - formuláře](../10-formulare)...
 
## Kompatibilita se staršími prohlížeči
 * pokud prohlížeč nezná značky, které chceme použít, pak neví, jak je vykreslit
 * nejde jen o vyloženě staré prohlížeče, např. *main* či *details* mají problém i v relativně nových IE/Edge
 * je možné doplnit styly pro značky, které prohlížeče plošně nepodporují
 
 ```html  
  <style>
  header, section, footer, aside, nav, main, article, figure {
      display: block;
  }
  </style>
 ```

# Kontrola stránky pomocí validátoru
* u stránky bychom měli zkontrolovat správné použití HTML značek pomocí validátoru
  * https://validator.w3.org/
* lepší editory vás na nestandardní značky upozorní rovnou, ale ne vždy je to úplně spolehlivé
* kontrolujte jen HTML, u CSS narazíte např. u některých proprietárních specifikací (ale o tom až příště)