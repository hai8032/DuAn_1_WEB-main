<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách quản lý</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Quản trị</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar và Nội dung chính -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
            <h4>Quản lý</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="sanpham.html"><i class="fas fa-box"></i> Quản lý sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="danhmuc.html"><i class="fas fa-list"></i> Quản lý danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="binhluan.html"><i class="fas fa-comments"></i> Quản lý bình luận</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="nguoidung.html"><i class="fas fa-users"></i> Quản lý người dùng</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="p-4" style="flex-grow: 1;">
            <div class="container mt-4">
                <h1 class="mb-4">Danh sách quản lý</h1>
                
                <!-- Thêm mới -->
                <div class="mb-3">
                    <a href="index.php?ctl=add" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</a>
                </div>
        
                <!-- Table -->
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>Tên</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($danhmuc as $dm) : ?>
                        <tr>
                            <td><?= $dm['id'] ?></td>
                            <td><?= $dm['ten_danhmuc'] ?></td>
                            <td>
                                <a href="index.php?ctl=edit&id=<?= $dm['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Sửa</a>
                                <a onclick= "return confirm('bạn có muốn xóa không')" href="index.php?ctl=delete&id=<?= $dm['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i> Xóa</a>
                            </td>
                        </tr>
                       
                        <!-- Thêm các dòng khác ở đây -->
                         <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  
