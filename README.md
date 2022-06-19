# Site
 Kodların kurulumu için adımlar şöyledir.

1-Öncelikle randevu.sql adlı dosya harici tüm php dosyalarını C:\xampp\htdocs konumuna veya 
XAMPP' ı kendi bilgisayarınızda başka bir konuma kurduysanız XAMPP'ın kurulu olduğu dizine gidip
XAMPP içindeki htdocs klasörünün içine atınız.

2-Sahip olduğunuz XAMPP uygulamasını çalıştırıp paneldeki Apache ve Mysql modüllerinin karşısındaki
start tuşuna(ikisi için de) basınız.

3-http://localhost:8080/phpmyadmin/ konumuna gidip phpmyadmin üzerinden SQL adlı sekmeye gidip
CREATE DATABASE randevu; komutunu yazıp çalıştırın ve yeni oluşturduğunuz randevu adlı veritabanına
tıklayın.Tıkladıktan sonra yukarıdaki sekmelerden içe aktar(import) butonuna tılayın ve önünüze gelen
ekrandan dosya seç butonuna tıklayıp randevu.sql isimli dosyayı seçin ve en alttaki git tuşuna basıp
dosyayı import edin.

4-En sonunda http://localhost:8080/ adresine gidip sitenin giriş ekranına ulaşın.(Siteyi böyle kullanırken
XAMPP daima açık olmalı ve XAMPP panelindeki Apache ve Mysql modülleri starta basılarak çalışır konuma getirilmelidir.)



