# Server eso.vse.cz
 * jedn� se o v�ukov� server, na kter� m�te automaticky z��zen p��stup v r�mci absolvence tohoto p�edm�tu
 * jedn� se o linuxov� server s Apachem, PHP a MySQL
 * **u�ivatelsk� ��ty jsou obvykle platn� jen do konce p��slu�n�ho zkou�kov�ho obdob�**

## P�ipojen�
 * k serveru je mo�n� p��stup pouze prost�ednictv�m protokolu **SCP**
    * Secure Copy
    * protokol odvozen� od SSH (Secure Shell)
    * nejedn� se ani o b�n� FTP, ani o FTPS
 * va�e soubory jsou dostupn� na adrese **http://eso.vse.cz/~xname/**

### P��stupov� �daje
 * protokol: **SCP**
 * port: **22**
 * server: **eso.vse.cz**
 * login: **xname**
 * heslo: **jako do �koln� s�t�**

### Vhodn� software
 * [WinSCP](http://winscp.net/)
    * k dispozici i na �koln�ch po��ta��ch
 * [SFTP plugin pro Total Commander](http://www.ghisler.com/plugins.htm)
    * po nainstalov�n� jej naleznete v polo�ce "S�"
    * je nutn� dokop�rovat DLL soubory

### P��stup k MySQL
 * pro p��stup k datab�zi je pot�ebn� speci�ln� heslo, kter� naleznete po p�ihl�en� k serveru v souboru *mysql-heslo.txt*