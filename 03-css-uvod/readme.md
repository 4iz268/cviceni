# 3. CSS - úvod

## Proč CSS?
 * oddělení vzhledu stránky od obsahu - přizpůsobení prezentace pro rozdílná zařízení (displej vs. tisk, velikost zobrazovací plochy...)
 * postupná specifikace jednotlivých vlastností, kaskádovost specifikací

## Připojení stylů ke stránce
 * **atribut style**
    * styly definované přímo u konkrétních elementů
    * nejjednodušší, ale postrádáme oddělení stylů od obsahu (se všemi důsledky)
    ```html

    <span style="color:red;">červený text</span>

    ```
 * **element style**
    * začlenění stylů přímo do obsahu stránky (na "jednom" místě)
    * možnost využití direktivy *@import*
    ```html
    <style type="text/css"> @import url("adresa");</style>
    ```
 * **element link**
    * připojení externích zdrojů ke stránce (nejen styly, ale také favicon, RSS atd.)
    * možnost definice atributu *media*
    ```html

    <link rel="stylesheet" type="text/css" href="/URL adresa" media="screen,print" />

    ```

## Základní zápis stylů
```css

selektor {
 vlastnost1:hodnota1;
 vlastnost2:hodnota2;
}

```
 * selektorů lze uvádět více najednou (oddělují se čárkou)
 * stejný selektor lze uvést na více místech

## Selektory

| Druh výběru         | Příklad                  | Komentář                                                                                                       |
|---------------------|--------------------------|----------------------------------------------------------------------------------------------------------------|
| na základě značky   | p                        | vybere všechny elementy <p></p>                                                                                |
| na základě třídy    | .trida                   | vybere všechny elementy, které mají v atributu class hodotu trida                                              |
| dle ID              | #prvni                   | "vybere pouze prvek, který má id=""prvni"""                                                                    |
| selektor následníka | p img                    | vybere všechny elementy , které jsou zároveň v elementu  (či v některém z elementů, které jsou do něj vnořené) |
| pseudotřída         | :hover                   | výběr na základě pseudotřídy umožňuje ovlivnit CSS dle aktivity či pozice na stránce                           |
| všechny elementy    | *                        |                                                                                                                |
| selektor dítěte     | p>a                      | vybere všechny elementy, které jsou přímo vnořené do daného elementu                                           |
| selektor sourozence | A + B                    | vybere všechny elementy B, které mají stejného rodiče jako A a zároveň po něm přímo následují                  |
| výběr dle atributu  | A[attr=hodnota], A[attr] | vybere elementy, které odpovídají nastavení daného atributu                                                    |

 * atributy **class** a **id**
 * preferovány vlastnosti "přesnějších" selektorů (výjimku tvoří použití direktivy **!important**)
 * pseudotřídy: **:hover**, **:link**, **:active**, **:visited**, **:first-child**, **:nth-child(n)**, **:not(selector)**
 * pseudoelementy: **::first-letter**, **::first-line**, **::before**, **::after**, **::selection**
 * viz <http://www.w3schools.com/css/css_pseudo_elements.asp>

## Formátování textu
### Barva textu
 * vlastnost **color**
 * způsoby určení barvy v rámci stylů:
    * **pojmenované barvy** - např. *black*, *red*, *blue*, *white*...
    * zápis **hexa kódem** - např. *#000000*, *#0000ff*
        * při opakování stejných hodnot lze použít zkrácený zápis: *#00ff11* = *#0f1*
    * **rgb** zápisem - např. *rgb(0,0,0)*, *rgb(0,0,255)*
    * **rgba** zápisem - např. *rgba(0,0,0,0.8)*, *rgba(0,0,255,0.2)*
 ```css

 p { color: red; }

 ```

### Řez písma (font)
 * **font-family**
    * typ písma, více hodnot oddělujeme čárkou, použije se první nalezené písmo
    * lze použít také písmo načtené z webu
    * písma vhodná pro použití na webu... (patková vs. bezpatková, rozšířené typy písem), [web safe fonts](http://www.w3schools.com/cssref/css_websafe_fonts.asp)

    ```css

    p{font-family:"Times New Roman", Times, serif;}

    ```
 * **font-size**
    * absolutní (*px*, *pt*) či relativní jednotky (*em*, *%*)
    * při stejné velikosti nejsou všechny typy písem stejně velké! (např. Verdana vs. Calibri)
    ```css

    p{font-size:14px;}

    ```
 * **font-style**
    * sklon písma
    * *normal* | *italic* | *oblique*
 * **font-weight**
    * tučnost písma
    * *normal* | *bold* | (*bolder* | *lighter* | číslo z množiny {100, 200, 300, 400 ... 900})
 * **font-variant**
    * *normal* | *small-caps*
    * Co jsou to kapitálky?

### Formátování textu
 * **text-align**
    * zarovnání textu
    * *left* | *center* | *right* | *justify*
    * Jak zarovnávat text na webu?
 * **text-decoration**
    * "dekorace" textu
    * *none* | *underline* | *overline* | *line-through*
    * Jde zařídit, aby byl text najednou podtržený i přeškrtnutý?
 * **text-transform**
    * transformace velikosti písmen (vhodnější, než např. psát nadpisy rovnou velkými písmeny)
    * *none* | *uppercase* | *lowercase* | *capitalize*
 * **text-indent**
    * odsazení prvního řádku textu
 * **text-shadow**
   ```css

   text-shadow: h-shadow v-shadow blur-radius color|none|initial|inherit;

   ```
 * **letter-spacing**
    * "prostrkávání" textu (mezery mezi písmeny)
    * dříve používané u psacích strojů, nelze psát do obsahu stránek přímo mezery!
 * **line-height**
    * výška řádků

Ačkoliv dílčí vlastnosti začínají na "text-", nelze použít souhrnnou vlastnost "text".

## Pozadí
Pozadí určujeme pomocí CSS vlastnosti **background**, instrukce lze zapsat buď hromadně, či v rámci jednotlivých dílčích vlastností.
 * **background-color**
    * barva pozadí (všechny podporované formy zápisu)
 * **background-image**
    ```css

    body{ background-image:url('paper.gif'); }

    ```
 * **background-repeat**
    * opakování obrázku na pozadí
    * *no-repeat* | *repeat* | *repeat-x* | *repeat-y*
 * **background-position**
    * umístění obrázku na pozadí
    * pozice určena pomocí klíčových slov (top,bottom,left,right,center), či pomocí "souřadnic"
    * lze určit pouze jednu, či obě dvě souřadnice (např. "top center")
 * **background-attachment**
    * fixace obrázku na pozadí (bez posouvání při rolování daného elementu)
    * *scroll* | *fixed*
 * CSS3 podporuje pozadí v podobě barevného přechodu - [Gradient generator](http://www.colorzilla.com/gradient-editor/)
 * jednoduché barevné pozadí neřešíme obrázkem!
 * dle specifikace lze zapsat více pozadí najednou (specifikace oddělujeme čárkami) - pozor na podporu v prohlížečích

## Rámečky a okraje
 * každý blokový element na webu má 3 rámečky: padding, border a margin
 * **border**
    * viditelný rámeček (použitelný u blokových i inline elementů)
    * **border-style**
        * *none* | *solid* | *dotted* | *dashed* | *double* | *groove* | *ridge* | *inset* | *outset*
    * **border-width**
    * **border-color**
    ```css

    h1{ border: 1px solid red; }

    ```
    * viditelný rámeček a jeho dílčí vlastnosti lze určovat také jen pro některé strany
        * **border-top**, **border-right**, **border-bottom**, **border-left**
        * **border-left-color**,...
        * možnost určení vlastností pro dílčí strany vícenásobným zápisem (ale nepříliš přehledně) - např.:
          ```css

          p{ border-style: dotted solid double dashed;}

          ```

 * **padding**
    * volný prostor mezi viditelným rámečkem a obsahem
    * lze určovat pro všechny strany najednou, či pro jednotlivé strany zvlášť (vícenásobným zápisem či dílčími vlastnostmi)
    ```
    padding: 10px;
    padding: 20px 10px 20px 10px;
    padding: 20px 10px;
    padding-top: 20px;
    ```

 * **margin**
    * volný prostor mezi viditelným rámečkem a vykreslením dalších elementů
    * zápis stejným způsobem, jako padding
    * při nastavení marginu zleva i zprava na *auto* dojde k vycentrování obsahu
    ```css
    div {
        margin: 0 auto;
    }
    ```

## Media
 * Měla by stránka vypadat při všech způsobech zobrazení stejně? Jak by měla vypadat stránka při tisku?
 * pomocí stylů lze jednoduše zařídit, že se budou používat jiné instrukce v rámci zobrazení na počítači, jiné na mobilu a jiné při tisku
 * v rámci CSS3 lze používat také dotazy na velikost
 * volba pomocí atributu **media** při připojení stylů pomocí elementu **link**
   ```html

    <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css" />

   ```
 * volba pomocí media query přímo v rámci CSS zápisu
   ```css

   @media not|only mediatype and (expressions) {
       CSS-Code;
   }

   ```
 * typ média: *all* | *screen* | *print* | *speech*

```css

@media screen and (min-width: 480px) {
    body {
        background-color: lightgreen;
    }
}

```
