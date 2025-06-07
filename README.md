<h1 align="center">Hadirin</h1>

![Demo Aplikasi Hadirin](./public/images/hadirin6.jpg)
![Demo Aplikasi Hadirin](./public/images/hadirin5.jpg)
![Demo Aplikasi Hadirin](./public/images/hadirin4.jpg)
![Demo Aplikasi Hadirin](./public/images/hadirin3.jpg)
![Demo Aplikasi Hadirin](./public/images/hadirin2.jpg)
![Demo Aplikasi Hadirin](./public/images/hadirin1.jpg)
---

## How To Clone

- Clone project.
```bash
git clone https://github.com/anonymousxal/petra.antonio.hadirin.git
```
- Setup database pada komputer anda, lalu masukkan kredensial-kredensialnya ke file `.env`.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hadirindb
DB_USERNAME=root
DB_PASSWORD=
```
- Install dependency.
```bash
composer install
npm install
```
- Generate app key.
```bash
php artisan key:generate
```
- Migrate database.
```bash
# Tanpa seeder
php artisan migrate

# Dengan seeder (data dummy)
php artisan migrate --seed
```
- Jalankan aplikasi.
```bash
php artisan serve
```
> Buka terminal baru, lalu jalankan.
```bash
npm run dev
```
