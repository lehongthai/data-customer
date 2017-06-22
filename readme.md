## Install project data customer

### Step1:
pull source code
git clone https://github.com/lehongthai/data-customer.git

### Step 2:
Giải nén file .rar

### Step 3:
mở console ngay tại thư mục source chạy lệnh
php composer.phar install

### Step 4:
Tạo database cấu hình sau
DB_DATABASE=laravel_data_customer
DB_USERNAME=root
DB_PASSWORD=

### Step 5:
php artisan genarel:key

### Step 6:
Ở mình hình console vừa rồi, ta chạy lệnh:
php artisan migrate

### Step 7:
Truy cập vào website ở local và test


