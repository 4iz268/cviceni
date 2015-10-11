# 4. CSS - layout stránek, HTML - meta informace, další zdroje

## HTML &lt;head&gt;
### Titulek stránek
 * jasný, srozumitelný
 * pro uživatele + SEO optimalizace
 * obsahuje název konkrétní stránky i celého webu
    * není na všech stránkách stejný
    * nikde neobsahuje text "Homepage"
 * není příliš dlouhý! (pokud do něj chci vtěsnat další informace, tak na konec...)

```html
<title>Kontakty - Moje firma</title>
```

### Meta informace
 * doplňkové informace o stránce - info pro prohlížeč a vyhledávače
 * umístění v hlavičce
 * každý meta tag obsahuje atribut ```name``` nebo ```http-equiv```, vyjma určení kódování stránek v HTML 5

```html
 <meta charset="utf-8" />
 <meta name="description" content="Srozumitelný popisek stránek..." />
 <meta name="author" content="autor stránek" />
 <meta name="keywords" content="meta, klíčová slova, ..." />

 <meta http-equiv="refresh" content="120" />
```

### Doplňkové zdroje
 * element ```<link>``` neslouží jen pro připojení kaskádových stylů
 * RSS, ATOM
 * "navigace" na webu
 * určení kanonické verze URL
 * favicon - viz 5. cvičení

 ```html
 <link rel="alternate" type="application/rss+xml" title="RSS" href="/updates.rdf" />

 <link rel="canonical" href="https://mujweb.tld/moje-bezva-adresa" />

 <link rel="Start" href="/solar-system/" />
 <link rel="Prev"  href="/solar-system/venus/" />
 <link rel="Next"  href="/solar-system/mars/" />
 ```


## Vhodné rozložení a struktura stránek
 * Jaká jsou "tradiční" rozložení webových stránek?
    * prvky je vhodné umisťovat na místa, kde je budou uživatelé hledat
    * navigace, logo, přihlašování, reklamy...
 * One Page vs. klasická struktura

## Základní umístění prvků pomocí CSS

### Zobrazení objektů

 * **display**
    * umožňuje určit, jakým způsobem má být daný prvek vykreslen (inline, blokově, vůbec...)
    * *inline* | *block* | *inline-block* | *none* | *flex* (viz dále)
    * Další hodnoty: *list-item* | *table* | *table-row* | *table-cell*... (viz [w3schools](http://www.w3schools.com/cssref/pr_class_display.asp))
 * **visibility**
    * viditelnost daného elementu (i neviditelné prvky zabírají místo)
    * *visible* | *hidden* | *collapse* (pouze pro skrytí &lt;tr&gt;)
 * **width**, **height**
    * určení velikosti obsahu daného prvku, případně hodnota *auto*
    * v CSS 3 jde zahrnout do dané velikosti také padding a border pomocí uvedení: ```box-sizing: border-box;```
    * lze nastavit také minimální a maximální rozměry pomocí vlastností **min-width**, **max-width**, **min-height** a **max-height**
 * **overflow**
    * nakládání s "přetékajícím" obsahem
    * *visible* | *hidden* | *scroll* | *auto*
    * pozor na vícenásobné posuvníky na stránkách!
    * lze využít také vlastnosti **overflow-x** a **overflow-y**

### Absolutní a relativní pozicování

 * **position**
    * *static* (výchozí pozice)
    * *relative* (relativní posunutí od výchozí pozice)
    * *absolute* (absolutní umístění na souřadnice)
    * *fixed* (zafixování bez ohledu na pozici posuvníku)
    * elementy jsou pozicovány v rámcí svého "omezujícího bloku"
        * omezujícím blokem je nadřazený element s jinou pozicí, než static (případně celé okno prohlížeče)
        * např. v hlavičce chci, aby bylo přihlašování v pravém horním rohu - i v okamžiku, kdy nad celou hlavičku přidám banner...
        * nezapomeňte na určení velikosti
 * **left**, **top**, **right**, **bottom**
    * určení pozice objektu (u ```position:relative;``` jde o relativní posunutí)
    * nemá smysl určovat hodnotu dvou vlastností na stejné ose (např. zleva i zprava)
 * **z-index**
    * pokud se objekty na stránkách překrývají, je vhodné určit, který má být vyšší
    * hodnotou jsou celá čísla (čím vyšší číslo, tím vyšší vrstva)
    * prvky na stejné vrstvě se vykreslují v tom pořadí, v jakém jsou uvedeny v kódu stránek

### Plovoucí objekty (float)

 * **float**
    * jde o možnost nechat prvek obtékat prvkem jiným (např. obrázek obtékaný textem ve wordu)
    * určujeme, na které straně bude prvek plavat
    * *left* | *right* | *none*
    * prvky plovoucí na stejnou stranu se skládají vedle sebe až do zaplnění "řádku", poté dojde k zalomení...
    * obdobně jako u pozicování se "plavání" objektů vztahuje k příslušnému omezujícímu bloku
 * **clear**
    * určení, na které ze stran nemá být daný prvek obtékán jiným obsahem
    * *none* | *left* | *right* | *both*

### Flex layout
 * https://css-tricks.com/snippets/css/a-guide-to-flexbox/

### Grid layout
 * stránky se obvykle skládají z většího množství sloupců, do kterých umisťujeme obsah
 * http://www.w3schools.com/css/css_rwd_grid.asp
 * http://www.w3schools.com/bootstrap/bootstrap_grid_system.asp
 * https://css-tricks.com/snippets/css/complete-guide-grid/

## Vybrané vlastnosti CSS3
 * http://css3generator.com/
 * animace - viz 7. cvičení
 * to, že jde prvky otáčet a mohou mít stín, ještě neznamená, že ho vždycky mít musí!


