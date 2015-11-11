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

- rozdíly xHTML vs. HTML 5:
  - nové značky... (ale prohlížeče je zobrazují, i když máte doctype xHTML)
  - v xHTML nelze používat bezhodnotové atributy, zapisujeme je stylem *atribut="atribut"*, tj. například ```selected="selected"```

### Formulářové prvky, které HTML nepodporuje


## Zpracování formulářů
### Na serveru
- na server jsou odesílány prvky patřící do konkrétního formuláře, které
  - mají definovaný atribut **name**
  - **nejsou disabled**
- u formuláře je vhodné zadat atributy *action* a *method*
  - pokud není definována metoda odeslání, použije se automaticky metoda GET
  - pokud není zadána action, pošle stránka data "sama době" (tj. dojde k jejich odeslání na aktuální URL)

### Zpracování formulářů v JavaScriptu
- jednotlivé formulářové prvky jsou normálně součástí DOM stromu, tj. lze s nimi pracovat jak čistým javascriptem, tak pomocí jQuery
- v jQuery máme k dispozici funkci **val**, kterou lze přistupovat k hodnotám formulářových prvků

```javascript
  var hodnota1 = $('#input1').val();
  var hodnota2 = $('#input2').val();
  $('#inputVysledek).val(hodnota1+hodnota2);
```

## Validace formulářů
- je nutné kontrolovat každý vstup získaný od uživatele!
- je vhodná kontrola na straně klienta (pomocí HTML 5 či JavaScriptu)
- pokud jsou data odesílána na serveru, je nutné provádět kontrolu dat i na serveru (anketní dotaz: *Proč?*)

### Validace v HTML 5



### Validace pomocí JavaScriptu


---

## TODO:
- čtení a zápis dat do formulářových polí
- validace hodnot ve formuláři (pomoci JS i HTML 5)
- odeslání formuláře hotovému skriptu
