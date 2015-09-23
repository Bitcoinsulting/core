#WholeCMS 

Laravel i�in haz�rlanm�� i�erik y�netim sistemi.

S�n�rs�zca geni�letebilece�iniz ba��ml�l�klar� olmadan olu�turaca��n�z mod�llerinizi dahil edip i�erik y�netim sisteminden daha fazlas�n� elde edebilirsiniz. �stedi�iniz temaya entegre ederek kolayca kullanabilece�iniz bir sistem.

Olu�turdu�unuz i�eriklerinizi s�r�kle b�rak ile teman�z�n alanlar�na ekleyerek sayfalar�n�z� in�a edebilirsiniz. 

**S�n�rlar ba��ml�l�klar yok!**

Birden fazla temay� tek bir sitede kullanma imkan� sunarak istedi�iniz sayfada istedi�iniz temay� kullanabilirsiniz.

##Kurulum

laravel kurulumu yapt�ktan sonra

`composer require whole/core`

Komutunu �al��t�rarak CMS Paketini kurabilirsiniz.

config dizini alt�nda app.php dosyas�nda providers alan�na

`Whole\Core\CoreServiceProvider::class`

Sat�r�n� Ekledikten Sonra Komut Sat�r�nda;

`php artisan whole:install`

Komutunu �al��t�rarak Kuruluma Ge�ebilirsiniz. 
(Kuruluma Ge�meden �nce veritaban� yap�land�rmas�n� yaparak .env dosyas�ndaki veri taban� ile ilgili gerekli de�i�iklikleri yapt���n�za emin olun)

**�rnek Tema i�in Example Template �ndirin**

Y�netim paneline giri� yapt�ktan sonra Eklentiler > �ablon Y�neticisinden �ablonu Y�kleyin ve Genel Yap�land�rma Ayarlar�ndan Eklemi� Oldu�unuz �ablonu Se�in.

##Yard�mlar
* **Kurulum [Video](https://youtu.be/Mr3mkBt28IQ)**
* **Y�netim Paneli Hakk�nda Aray�z ve �rnek Uygulama [Video](https://www.youtube.com/watch?v=K7knWnjwWE0)**
* **Nas�l Tema Olu�tururum? [Video](https://youtu.be/fXrqFIrBox0)**
* **Nas�l Mod�l Olu�tururum?**

##Ekran G�r�nt�leri

![Login Sayfas�](http://wholecms.furkancelik.com.tr/whole_picture/login.png)


  
![Yonetim Paneli Anasayfas�](http://wholecms.furkancelik.com.tr/whole_picture/index.png)

  

![Yeni ��erik Ekleme Sayfas�](http://wholecms.furkancelik.com.tr/whole_picture/content.png)

  

![Blok Detaylar�](http://wholecms.furkancelik.com.tr/whole_picture/blocks_details.png)

  

![Master Page Ayar�](http://wholecms.furkancelik.com.tr/whole_picture/master_page.png)
  


![Giri� Loglar� Sayfas�](http://wholecms.furkancelik.com.tr/whole_picture/login_log.png)