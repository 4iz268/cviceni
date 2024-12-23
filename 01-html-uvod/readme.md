# 1. Základy HTML

## Editory

* [WebStorm](https://www.jetbrains.com/webstorm/)
* [PhpStorm](https://www.jetbrains.com/phpstorm/)
* [Visual Studio Code (VS Code)](https://code.visualstudio.com/)
* Notepad++ (na učebnách ho najdete v síťových instalacích)
* PSPad
* Textmate (OSX)
* Sublime Text
* nebo jakýkoli jiný, který máte rádi

## Prohlížeče

Stačí, když vaše stránky budou podporovat tyto hlavní prohlížeče:

* Mozilla Firefox
* Google Chrome
* Microsoft Edge 

Ostatní (minoritní, nebudeme kontrolovat funkčnost):

* Safari
  * na Macu
* Opera, Brave Browser, ... 

Internet Explorer už se fakt nepoužívá :)  


## Základy syntaxe

## HTML

Zdroj: http://www.w3.org/WhatIs.html

<cite>
What is HyperText

Hypertext is text which is not constrained to be linear.

Hypertext is text which contains links to other texts. The term was coined by Ted Nelson around 1965 (see History ).

HyperMedia is a term used for hypertext which is not constrained to be text: it can include graphics, video and sound , for example. Apparently Ted Nelson was the first to use this term too.

Hypertext and HyperMedia are concepts, not products.

See also:

* A list of terms used in hypertext litterature.
* Conferences
* Commercial (and academic) products
* A newsgroup on hypertext, "alt.hypertext" .
* WorldWideWeb is a project which uses hypertext concepts.
</cite>

## DOCTYPE

* určuje typ dokumentu, instrukce prohlížeči, jak a co má zobrazit
* nejedná se o HTML tag
* musí být jako první v dokumentu
* dnes již nemá smysl psát do nových stránek cokoliv jiného než HTML5:
    ```html
    <!DOCTYPE html>
    ```
* při úpravě starších stránek se můžete potkat ještě s DOCTYPE xHTML nebo HTML 4 ([ukázky zde](01-doctypes.html))

### Rozdíly XHTML vs. HTM 5

* v xHTML tagy jsou ukončené, i jednoduché tagy musí být napsány např. jako &lt;br/&gt;, všechny atributy musí mít svoji hodnotu (tyto zásady je možné používat i v HTML5)
* v HTML5 je spousta nových sémantických značek, postupný rozvoj nových funkcí
* kniha [Dive Into HTML5](http://kniha.html5.cz)

## Základní struktura dokumentu

* DOCTYPE (na cvičení používáme HTML 5, pokud odevzdáte na cvičení XHTML, je to jedno, vyvarovat se HTML 4)
* html
* head
* body

## Značky

* párové
* jednoduché (nepárové)

## Blokové elementy

### h1, h2, h3, h4, h5, h6

* header, hlavička 
* nadpisy
* měly by jít po úrovních, každá stránka by měla mít jen 1 h1 a postupně jít dolů
* podle toho indexují roboti
* v HTML5 už nemusí být 1 pro celou stránku, ale i pro část stránky (tag article, atd., viz kniha)

### div

* division = sekce, blok
* kontejner, seskupuje elementy
* obdélník, obaluje elementy
* hlavně kvůli formátování pomocí CSS
* default se za ním zalomí řádek

### p

* paragraph = odstavec
* základ formátování pro text

### blockquote

* bloková citace / citace z jiného zdroje
* do parametru cite se uvádí URL adresa zdroj
* browser provede default odsazení

### pre

* preformatted text = předformátovaný text
* zachovává všechny mezery a zalamování řádků
* typicky ukázka zdrojového kódu nebo kus textu odjinud, ve kterém nechceme ztratit formátování

### hr

* horizontal rule = horizontální oddělovač
* nepárová značka
* vykreslí na stránce horizontální čáru

### br

* break = ruční zalomení řádky
* neměli bychom jich používat víc za sebou, špatně se s tím pak pracuje a je to nepřehledné
* Používat místo toho div, p a mezery řešit v CSS

### table

* tabulka, budeme brát 2. cvičení za týden

### ul, ol, li, dl, dt, dd

* seznamy, budeme brát 2. cvičení za týden

### form a jeho elementy, label, input, textarea

* formuláře
* budeme brát na 10. cvičení

## Inline elementy

### a

* anchor [ˈæŋkə]
* párová značka
* uvnitř může být text, obrázek
* hypertextový odkaz
* href = odkaz kam, pokud je na začátku #, pak je to odkaz na místo v tom samém dokumentu
* target _blank, _top, _parent, _self (default)
* v HTML 4 také name pro quote v documentu, ale v HTML 5 je používáno už jen id
* default je odkaz podtržený a barevný (modrý), rozlišuje se barva navštíveného a nenavštíveného odkazu, lze změnit pomocí CSS

```html
<a href="http://google.com" target="_blank">Google</a>
```

### img

* image, obrázek
* budeme brát na 2. cvičení za týden

### span

* = rozpětí
* jen inline kontejner, seskupuje prvky, nereprezentuje nic konkrétního
* jako div, ale řádkový
* zejména kvůli formátování

### cite

* krátká citace, kterou chceme uvést v textu
* “title of work” 
* název knihy, skladby, díla
* v HTML 4 je to citace, v HTML 5 title of work
* browsery obyčejně zobrazují kurzívou

### q

* quote = řádková citace
* inline citace, krátká
* browser neprovede zalomení řádku

### sub, sup

* dolní a horní index
* sub-index, super-index
* moc se nepoužívá, indexy však nejde zapsat jinak

### strong

* strong importance = vysoká důležitost
* zvýraznění
* dříve b (bold), teď používat tohle, protože to má i sémantický význam
* zvýraznění nemusí být tučné, je to default zobrazení browseru
* lze změnit pomocí CSS
* logický stav
* hlavně kvůli spiderům
* silná sémantická váha

### b

* bold
* chápu, proč se může zdát b lepší = je to kratší
* b se dle HTML5 může používat jako last resort, pokud prostě nevyhovuje h1, h2..h6, ani em, ani strong
* není to výslovně zakázáno, jen to postrádá sémantický význam

#### strong vs b

* Google inženýr: je to úplně stejný
* https://www.seroundtable.com/google-strong-bold-tag-17552.html 

### em

* emphasize = zdůraznění
* browsery to default zobrazují kurzívou

### i

* italic
* alternate voice or mood
* technický termín, cizí jazyk
* prostě se to nějak liší od okolního textu
* podobné jako b, mělo by to být last resort, pokud nejde použít strong, em, atd.
* zdůraznění části textu 
* vykreslováno zpravidla kurzívou.

### abbr
 * zápis zkratek, vhodné pro možnost jejich doplňkového vysvětlení
 * význam zkratky se zapisuje do atributu title


### Komentáře

*  &lt;!-- text komentáře --&gt;
* nevýhoda komentářů: je to vidět ve zdrojácích. V praxi jsem viděl, jak programátoři cpali do zdrojáků citlivé nebo hanlivé texty.
* pozor na to
* Ukázat: zobrazení zdrojáku v browseru.
* Jak schovat komentáře: udělat třeba jako PHP komentář, PHP generuje HTML a PHP komentáře do výsledeného dokumentu vynechává.
* HTML cesta, jak utajit? Obfuskátory. Zkuste si sami najit, koho to zajímá. Často je to ale jenom komplikace, pokud máte HTML kod, který se musí schovat, tak je něco špatně.

### Zápis matematických vzorců

#### Math ML

* [ukázka](https://www.tutorialspoint.com/html5/html5_mathml.htm)
* http://caniuse.com/#feat=mathml

#### MathJax

* http://www.mathjax.org/ 
* etalon, umí toho nejvíc
* dost pomalý
* bere to TeX i MathML
* majoritní browsery s ním nemají problém

#### KaTex

* https://khan.github.io/KaTeX/
* umí jen Texovou syntaxi
* mnohem menší a rychlejší než MathJax

