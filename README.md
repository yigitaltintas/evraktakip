# Evrak Takip Sistemi
Evraklarınızı sisteme yükleyip kategorize etmenize yardımcı olan web projesi.

## Kurulum
`.env.example` dosyasının adını `.env` olarak değiştirin.

Değiştirdikten sonra aşağıdaki düzenlemeleri çalışacağınız sisteme göre yapın.

```php
DB_CONNECTION=mysql // Kullanmak istediğiniz veri tabanı sağlayıcısı
DB_HOST=127.0.0.1  // Bağlantı noktası
DB_PORT=3306 // Bağlantı Portu
DB_DATABASE=evrak // Oluşturduğunuz veritabanı adı
DB_USERNAME=kullanici // Veritabanı için yetkili kullanıcı adı
DB_PASSWORD=parola // Veritabanı yetkili kullanıcı parolası
```
Terminal üzerinde proje klasörünün içine girdikten sonra

Veritabanını yüklemek için :
```bash
php artisan migrate
```

Veritabanına gerekli verileri yüklemek için:
```bash
php artisan db:seed
```

## Çalıştırma

Projeyi çalıştırmak için :
```bash
php artisan serve
```

Local olarak projeyi çalıştırdığınızda projeye erişmek için `` http://localhost:8000 ``
adresine gidiniz.

Varsayılan kullanıcı adı :  `` admin@bi.com ``

Varsayılan parola : `` admin ``


## API

| Method        | Adres           |  Açıklama |
| ------------- |:---------------|  :--------|
| GET           | api/evraklar/      | Tüm evrakları listeler. |
| GET           | api/evraklar/{id}  | Belirtilen id ye ait evrak bilgisini listeler. |
| GET           | api/evraklar/{text}| Belirtilen kelimeyi içeren evrak bilgilerini listeler. |




