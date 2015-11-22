# 10. Formuláře

- velmi rozšířený způsob získávání informací od uživatele (rozšířenější je pouze přímé klikání na odkazy)
- získaná data lze zpracovávat buď na straně serveru (v PHP, .NETu, Javě atd.), nebo na straně klienta (v javascriptu)
- celý formulář je definován ve značce ```form```, obsahující atributy definující následné zpracování formuláře
  - **method** = *GET* | *POST*
    - jde o způsob odeslání dat na server
    - data posílaná v *GET* jsou "naskládána" do URL adresy, lze s nimi danou stránku uložit do záložek, poslat mailem atp.; vhodné např. pro vyhledávání
    - metodou *POST* posíláme velká data (mail, příspěvek do diskuse atp.), nebo data, která nikdy nesmíme dát do URL (např. přihlašovací údaje); po přijetí dat metodou POST je nutné na serveru zajistit redirect!
  - **action** = adresa skriptu, kterému chceme poslat příslušná data
  - **enctype** - typ kódování, obvykle ručně uvádíme jen s hodnotou *multipart/form-data*
  - pro zpracování v JavaScriptu nejsou uvedené atributy nutné

```html
<form method="get" action="akce">
  všechny prvky tohoto formuláře...
</form>
```

## Formulářové prvky
- ukázkové příklady:
  - [Základní formulářové prvky](./10-form-prvky.html)
  - [Nové formulářové prvky v HTML 5](./10-form-nove-prvky-html5.html)
  - [Vhodné využití atributu tabindex](./10-form-tabindex.html)
- další zdroje:
  - [HTML Form Elements](http://www.w3schools.com/html/html_form_elements.asp)
  - [HTML Input Types](http://www.w3schools.com/html/html_form_input_types.asp)

### Formulářové prvky v xHTML / HTML 5
- **input**
  - velmi univerzální prvek, konkrétní podobu vybíráme pomocí atributu **type**
    - v závislosti na zvoleném typu má smysl zadávat další atributy
    - **text** - jednoduché textové pole
      - maximální délku textu lze omezit pomocí atributu *maxlength*
      - hodnota je v atributu *value*
    - **password** - textové pole s hvězdičkami (výchozí hodnota je v HTML v prostém textu!)
    - **hidden** - skryté vstupní pole, slouží pro uchování hodnoty, ale uživatel k němu nemá přístup
      - definujeme *name* a *value*
    - **checkbox** - "zatržítko", slouží k možnosti výběru konkrétní hodnoty
      - hodnota se zadává do atributu *value* (na server se posílá jen v případě, že je toto pole vybráno)
      - aktivace daného pole je zadavatelná pomocí atributu *checked*
    - **radio** - vybírací "puntík", sloužící k výběru z jedné z množiny možných hodnot
      - na webu definujeme větší množství položek se stejným atributem *name*, ale různými hodnotami definovanými v atributu *value*
      - aktivace daného pole je zadavatelná pomocí atributu *checked*
    - **submit** - tlačítko pro odeslání formuláře
      - reaguje na použití klávesy Enter i v jiných formulářových polích
    - **reset** - tlačítko pro obnovení výchozícho hodnot formuláře (těch, které tam byly při načtení stránky)
    - **file** - pole pro nahrávání souborů na server
      - lze povolit nahrání více souborů najednou pomocí atributu *multiple*
    - **button** - tlačítko, bez výchozí funkce
    - **image** - obrázek, na který lze kliknout (v praxi jsem vlastně nikdy nepoužil)
  - v HTML 5 přibyla celá řada dalších typů prvku input
    - nelze se na použití těchto prvků spolehnout!
    - v mobilních prohlížečích mají tyto prvky často lepší podporu, než v klasických desktopových (speciální klávesnice atd.)
    - **number** - vstupní pole pro zadání čísla
      - limitní hodnoty lze zadat pomocí atributů *min* a *max*, pomocí atributu *step* lze definovat velikost kroku
    - **date** - vstupní pole pro zadání datumu
      - nové prohlížeče zobrazují kalendář
      - limitní hodnoty lze zadat pomocí atributů *min* a *max*
    - **color** - pole pro výběr barvy
    - **range** - výběr hodnoty z uvedeného rozsahu, prohlížeče obvykle zobrazují slider
      - krajní hodnoty zadávány pomocí atributů *min* a *max*
    - **month** - pole pro zadání měsíce a roku
    - **week** - pole pro zadání týdne a roku
    - **time** - pole pro zadání času
    - **datetime-local** - pole pro zadání data a času (zatím příliš nepodporováno)
    - **email** - pole pro zadání e-mailu (s validací)
    - **url** - pole pro zadání URL adresy (s validací)
    - **tel** - pole pro zadání telefonu (podporuje vlastně jen mobilní Safari)
    - **search** - pole pro zadání vyhledávání (ale jinak se chová normálně jako typ *text*)
  ```html
    <input
      type="text"
      name="jmeno" id="jmeno"
      value=""
      placeholder="Jméno Příjmení"
      maxlength="50" />
    ```
- **textarea**
  - víceřádkové vstupní pole
  - je vhodné zadat atributy *cols* a *rows*
  - pole je v desktopových prohlížečích roztažitelné, je vhodné definovat minimální a maximální rozměry
  - jedná se o párovou značku, výchozí hodnota se zadává do těla značky
  ```html
  <textarea name="message" rows="10" cols="30">
    The cat was playing in the garden.
  </textarea>
  ```
- **select**
  - rozbalovací roleta či seznam s více položkami
  - pomocí atributu *size* lze zobrazit větší počet řádků
  - pomocí atributu *multiple* lze povolit vybrání víze položek najednou (při size>1)
  - jednotlivé možnosti zadáváme pomocí elementu **option**
    - konkrétní položku lze předvybrat pomocí atributu *selected*
  - položky lze seskupit pomocí elementu **optgroup** - jde jen o znázornění rozdělení, nelze vybrat celou skupinu
  ```html
  <select name="barva">
    <option value="red">Červená</option>
    <option value="modra">Modrá</option>
  </select>

  <select>
    <optgroup label="Swedish Cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
    </optgroup>
    <optgroup label="German Cars">
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </optgroup>
   </select>
  ```
- **label**
  - popisek konkrétního formulářového prvku
  - při kliknutí na label dojde k aktivaci daného prvku (výhodné u checkboxů a selectů)
  - provázání s konkrétním prvkem pomocí atributu *for*, do kterého zadáváme ID svázaného prvku
- **fieldset**
  - možnost visuálního seskupení položek
  - popisek definujeme pomocí elementu **legend**
  ```html
    <fieldset>
       <legend>Personalia:</legend>
       <label for="name">Name:</label>
       <input type="text" id="name" />
       ...
     </fieldset>
  ```
- **button**
  - element pro zápis tlačítka
  - může mít i jiný obsah, než jen text
  - atribut type = *button*|*submit*|*reset*
  ```html
  <button type="button">Moje tlačítko</button>
  ```
- **datalist**
  - "něco jako select", ale jde do něj psát
  ```html
  <input list="browsers">
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  ```
- další atributy vhodné pro formulářové prvky
  - **title**
  - **placeholder** - textová nápověda zobrazovaná v daném prvku, pokud není zadaná žádná hodnota
  - **tabindex** - definování posloupnosti prvků při použití klávesy Tab
    - vhodné například u objednávkového formuláře zobrazeném ve dvou sloupcích
  - **autocomplete** - atribut obvykle využívaný k vypnutí automatického doplňování v prohlížeči; zápis: ``` autocomplete="off" ```
  - **autofocus** - pokud uvedete u zvoleného prvku tento atribut, bude daný prvek aktivní (bude v něm kurzor) již při načtení stránky
  - **required** - atribut vynucující vyplnění daného pole
  - **readonly** - formulářový prvek je jen pro čtení, nejde upravovat, ale bude odeslán na server
  - **disabled** - formulářový prvek je neaktivní, nebude odeslán na server
  - **tabindex** - atribut obsahující celá čísla, dle jeho hodnot dochází k přepínání mezi jednotlivými poli (při využití klávesy tab či tlačítka další v mobilních prohlížečích)

- rozdíly xHTML vs. HTML 5:
  - nové značky... (ale prohlížeče je zobrazují, i když máte doctype xHTML)
  - v xHTML nelze používat bezhodnotové atributy, zapisujeme je stylem *atribut="atribut"*, tj. například ```selected="selected"```

### Formulářové prvky, které HTML nepodporuje
- jsou vygenerovány javascriptem
- kalendář pro výběr data v prohlížečích, které neznají input type="date"
  - jQuery Datepicker (https://jqueryui.com/datepicker/)
    - [ukázka](../09-dom-jquery/09-datepicker-cz.html)
- WYSIWYG editory
  - TinyMCE (http://www.tinymce.com/)
    - [ukázka](../09-dom-jquery/09-tinymce.html)
  - CKEditor (http://ckeditor.com/)

## Zpracování formulářů
### Na serveru
- na server jsou odesílány prvky patřící do konkrétního formuláře, které
  - mají definovaný atribut **name**
  - **nejsou disabled**
- u formuláře je vhodné zadat atributy *action* a *method*
  - pokud není definována metoda odeslání, použije se automaticky metoda GET
  - pokud není zadána action, pošle stránka data "sama době" (tj. dojde k jejich odeslání na aktuální URL)
- zkuste si na server nahrát soubor [10-vypis-formulare.php](./10-vypis-formulare.php)
  - skript vypíše data, která získal metodou GET i POST
  - aktuálně běží i na adrese: http://eso.vse.cz/~xvojs03/4iz268/10-vypis-formulare.php

### Zpracování formulářů v JavaScriptu
- jednotlivé formulářové prvky jsou normálně součástí DOM stromu, tj. lze s nimi pracovat jak čistým javascriptem, tak pomocí jQuery
- v jQuery máme k dispozici funkci **val**, kterou lze přistupovat k hodnotám formulářových prvků

```javascript
  var hodnota1 = $('#input1').val();
  var hodnota2 = $('#input2').val();
  $('#inputVysledek').val(hodnota1+hodnota2);
```
- další zdroje:
  - http://www.w3schools.com/jsref/dom_obj_form.asp
  - http://www.w3schools.com/jsref/coll_form_elements.asp
TODO

## Validace formulářů
- je nutné kontrolovat každý vstup získaný od uživatele!
  - pokud je daný vstup volitelný, stejně ho musíme zkontrolovat (uživatel má možnost nechat dané pole prázdné, nebo jej vyplnit správně)
- je vhodná kontrola na straně klienta (pomocí HTML 5 či JavaScriptu)
- pokud jsou data odesílána na serveru, je nutné provádět kontrolu dat i na serveru (anketní dotaz: *Proč? Když budu data kontrolovat v JavaScriptu...*)
- Jak by mělo vypadat hlášení chyb?
  - upozorňujeme na konkrétní chyby, rozhodně ne "univerzální" hláška *"Ve formuláři je chyba."* ani hláška *Nejsou vyplněna všechna povinná pole.*
  - umístění chyb buď u konkrétních formulářových prvků, nebo souhrnné hlášení za celý formulář (obvykle na začátku formuláře)
  - pozor na využití funkce ```alert('hláška');``` - při jejím opakovaném využití nabízejí prohlížeče možnost zakázání všech skriptů!
  - uživateli vždy řekneme, v jakém tvaru data požadujeme!

### Validace v HTML 5
- ukázkové příklady:
  - [form-validace-html5.html](./form-validace-html5.html)
- další zdroje:
  - [HTML &lt;input&gt; pattern Attribute](http://www.w3schools.com/tags/att_input_pattern.asp)
  - [JavaScript regular expressions](http://www.w3schools.com/js/js_regexp.asp)
- prohlížeč provádí jen ty kontroly, které zná! (například starší IE nezná žádné...)
- základní typy kontrol:
  - **povinně vyplněné pole** - atribut *required*
    - vyžadovaná pole by měla být na první pohled odlišitelná od polí volitelných
    ```html
    <input type="text" name="text" required />
    ```
  - **omezení maximální délky textu**
    - omezení atributem *maxlength*
    - nejde o kontrolu, uživatel toho prostě nemůže víc napsat
  - **kontrola maximální a minimální hodnoty**
    - podporováno u číselných hodnot a například též u datumů
    - lze kontrolovat i jen jednu hranici
    ```html
    <input type="number" name="cislo" min="1000" max="2000" />
    ```
  - **kontrola regulárním výrazem**
    - v atributu *title* je vhodné napovědět, jak má daný vstup vypadat (např. Chrome či FF zobrazuje danou nápovědu při chybě)
    ```html
    <input
      type="text" name="country_code"
      pattern="[A-Za-z]{3}" />
    ```
- možnost odeslání bez validace:
  - k formuláři (do značky form) lze doplnit atribut *novalidate*
    - umožňuje vypnout validace
    - hodnoty *on* | *off* (pokud je uveden bez hodnoty, je předpokládána hodnota on)
  - ke zvolenému submitu lze doplnit atribut *formnovalidate*
    - umožní odeslat formulář daným tlačítkem bez validací
    - vhodné například pro tlačítko "storno"

### Validace a přístup k datům pomocí JavaScriptu
- ukázkové příklady:
  - [javascript - přístup k formulářovým prvkům](./10-js-form-fields.html)
  - [javascript - validace zadání hesla](./10-js-form-password.html)
  - [jquery - formuláře - události](./10-jquery-form-events.html)
  - [jquery - validace formuláře](./10-jquery-validace.html)
  - [jquery - volitelné zobrazení části formuláře](./10-jquery-form-display.html)
  - [jquery - dynamické přidávání prvků](./10-jquery-dynamicke-prvky.html)
  - [jquery - wizard](./10-jquery-wizard.html)

#### JS objekt String
- [přehled metod](http://www.w3schools.com/jsref/jsref_obj_string.asp)


TODO

---

## Získávání vstupů od uživatele pomocí JavaScriptu
- v některých situacích je vhodnější nevkládat do stránek klasický formulář, ale požadovat od uživatele pouze jednu konkrétní hodnotu či např. souhlas
- ukázkové příklady:
  - [prompt, confirm](./10-js-prompt.html)

```js
  var hodnotaVstupu = prompt('Nadpis okna', 'default hodnota');
  var hodnotaPotvrzeni = confirm('Dotaz');

  //ukázka použití u linku
  <a href='...' onclick="return confirm('Opravdu smazat?');">smazat</a>
```

---
## Úkol na procvičení
- pro procvičení si základních javascriptových konstrukcí a reakcí na události v jquery zkuste dopracovat příklad: [10-ukol-kalkulacka.html](./10-ukol-kalkulacka.html)