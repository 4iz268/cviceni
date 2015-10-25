# Server eso.vse.cz
 * jedná se o vıukovı server, na kterı máte automaticky zøízen pøístup v rámci absolvence tohoto pøedmìtu
 * jedná se o linuxovı server s Apachem, PHP a MySQL
 * **uivatelské úèty jsou obvykle platné jen do konce pøíslušného zkouškového období**

## Pøipojení
 * k serveru je monı pøístup pouze prostøednictvím protokolu **SCP**
    * Secure Copy
    * protokol odvozenı od SSH (Secure Shell)
    * nejedná se ani o bìné FTP, ani o FTPS
 * vaše soubory jsou dostupné na adrese **http://eso.vse.cz/~xname/**

### Pøístupové údaje
 * protokol: **SCP**
 * port: **22**
 * server: **eso.vse.cz**
 * login: **xname**
 * heslo: **jako do školní sítì**

### Vhodnı software
 * [WinSCP](http://winscp.net/)
    * k dispozici i na školních poèítaèích
 * [SFTP plugin pro Total Commander](http://www.ghisler.com/plugins.htm)
    * po nainstalování jej naleznete v poloce "Sí"
    * je nutné dokopírovat DLL soubory

### Pøístup k MySQL
 * pro pøístup k databázi je potøebné speciální heslo, které naleznete po pøihlášení k serveru v souboru *mysql-heslo.txt*