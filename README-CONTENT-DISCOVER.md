# Content Discover Page

Trang khám phá nội dung với các tính năng tương tự như trong hình mẫu.

## Tính năng

### 1. Mini Story Section

- Hiển thị các câu chuyện ngắn dưới dạng carousel
- Mỗi card hiển thị hình ảnh và tên tác giả
- Có avatar tác giả overlay trên hình ảnh chính
- Hỗ trợ scroll ngang với nút điều hướng

### 2. Category Filters

- 4 loại filter: Bài viết nổi bật, Food Tour, Khám phá biển xanh, Hành trình tâm linh
- Filter hoạt động với AJAX để load nội dung động
- Hiệu ứng hover và active state

### 3. Featured Section

- Hiển thị nội dung nổi bật dưới dạng carousel
- Mỗi card có hình ảnh, tiêu đề và ngày tháng
- Icon calendar cho ngày tháng
- Hỗ trợ scroll ngang

## Components

### 1. Featured Card Component (`components/featured-card.blade.php`)

```blade
<x-featured-card
    image="/path/to/image.jpg"
    title="Tiêu đề bài viết"
    date="12/04/2024"
    author="['name' => 'Tên tác giả', 'avatar' => '/path/to/avatar.jpg']"
/>
```

### 2. Mini Story Card Component (`components/mini-story-card.blade.php`)

```blade
<x-mini-story-card
    image="/path/to/image.jpg"
    authorName="Tên tác giả"
    authorAvatar="/path/to/avatar.jpg"
/>
```

## Routes

- `/content-discover` - Trang chính
- `/content-discover/category/{category}` - API endpoint để lấy nội dung theo category

## Controller

`ContentDiscoverController` quản lý:

- Dữ liệu mẫu cho Mini Stories
- Dữ liệu mẫu cho Featured Content
- API endpoint để filter theo category

## Cách sử dụng

1. Truy cập `/content-discover` để xem trang
2. Click vào các filter để thay đổi nội dung
3. Sử dụng nút điều hướng để scroll carousel
4. Hover vào các card để xem hiệu ứng

## Tùy chỉnh

### Thêm nội dung mới

1. Cập nhật dữ liệu trong `ContentDiscoverController`
2. Thêm hình ảnh vào thư mục `public/assets/images/`
3. Cập nhật route nếu cần

### Thay đổi style

- CSS được viết inline trong các component
- Có thể tách ra file CSS riêng để dễ quản lý

### Thêm category mới

1. Thêm vào mảng `$categories` trong controller
2. Thêm case xử lý trong method `getContentByCategory`
3. Cập nhật view để hiển thị filter mới

## Lưu ý

- Cần có Font Awesome để hiển thị icons
- Hình ảnh placeholder cần được thay thế bằng hình ảnh thực tế
- Có thể tích hợp với database để lấy dữ liệu động
