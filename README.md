# Ứng dụng To-Do List
Ứng dụng web **To-Do List** giúp quản lý công việc (xem, thêm, xóa) sau khi đăng nhập. Dùng **Laravel 11**, giao diện đẹp với **Tailwind CSS**, menu thả xuống tương tác nhờ Alpine.js.

## Tính năng

- Đăng ký, đăng nhập, đăng xuất.
- Xem danh sách công việc của người dùng.
- Thêm công việc mới (tiêu đề bắt buộc, tối đa 255 ký tự).
- Xóa công việc.
- Giao diện responsive, hỗ trợ máy tính và điện thoại.
- Bảo mật: Chỉ người đăng nhập truy cập /tasks.
- Thông báo lỗi khi nhập sai dữ liệu.

## Hướng dẫn cài đặt
### Clone kho mã nguồn
```bash
git clone https://github.com/ten-ban/to-do-list.git
cd to-do-list
```

### Cài đặt thư viện PHP
```bash
composer install
```

### Cài đặt thư viện JavaScript/CSS
```bash
npm install
npm run build
```

Lưu ý: Chạy `npm run dev` khi chỉnh sửa giao diện.

### Cấu hình môi trường
Sao chép và chỉnh sửa `.env`:
```bash
cp .env.example .env
```

Cấu hình cơ sở dữ liệu (MySQL):
```plain
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=to_do_list
DB_USERNAME=ten_nguoi_dung
DB_PASSWORD=mat_khau
```

Tạo khóa ứng dụng
```bash
php artisan key:generate
```

### Chạy Migration
Tạo bảng cơ sở dữ liệu:
```bash
php artisan migrate
```

Khởi động server
```bash
php artisan serve
```

Ứng dụng chạy tại http://localhost:8000.


## Hướng dẫn sử dụng
### Đăng ký hoặc đăng nhập
- Vào http://localhost:8000/register để tạo tài khoản.
- Đăng nhập tại http://localhost:8000/login.

### Truy cập công việc
- Nhấp "Tasks" trong menu hoặc vào http://localhost:8000/tasks.
- Người chưa đăng nhập sẽ được chuyển đến /login.

### Quản lý công việc
- Thêm công việc: Nhập tiêu đề (ví dụ: "Học Laravel") và nhấp "Thêm công việc". Thông báo xanh hiện ra.
- Xóa công việc: Nhấp "Xóa" bên cạnh công việc.
- Lỗi nhập liệu: Nếu để trống tiêu đề, thông báo đỏ xuất hiện.
### Đăng xuất
- Nhấp tên người dùng ở góc trên bên phải, chọn "Log Out".


Chúc bạn quản lý công việc hiệu quả! 🚀
