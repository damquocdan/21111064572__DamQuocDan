<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Add some basic styling to the dashboard */
        .dashboard {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard h1 {
            color: #333;
            text-align: center;
        }

        .dashboard p {
            font-size: 16px;
            line-height: 1.5;
        }

        .dashboard a {
            color: #007bff;
            text-decoration: none;
        }

        .dashboard a:hover {
            text-decoration: underline;
        }

        .dashboard .links {
            margin-top: 20px;
        }

        .dashboard .links a {
            display: block;
            margin: 10px 0;
            font-size: 18px;
        }

        /* Style cho toàn bộ trang dashboard */
        .dashboard {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style cho tiêu đề */
        .dashboard h1 {
            color: #333;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Style cho đoạn văn bản */
        .dashboard p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        /* Style cho liên kết */
        .dashboard a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Hiệu ứng hover cho liên kết */
        .dashboard a:hover {
            text-decoration: underline;
        }

        /* Style cho phần liên kết */
        .dashboard .links {
            margin-top: 20px;
        }

        /* Style cho mỗi liên kết trong phần liên kết */
        .dashboard .links a {
            display: block;
            margin: 10px 0;
            font-size: 18px;
            padding: 10px;
            border-radius: 4px;
            background-color: #e9ecef;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Hiệu ứng hover cho mỗi liên kết trong phần liên kết */
        .dashboard .links a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <h1>Welcome to Your Dashboard</h1>
        <p>Xin Chào, {{ Auth::user()->name }}!</p>

        <!-- Add links to category and product management -->
        <div class="links">
            <a href="{{ route('categories.index') }}">Quản lý nhà sản xuất</a>
            <a href="{{ route('products.index') }}">Quản lý sản phẩm</a>
        </div>

        <p><a href="{{ route('logout') }}">Đăng xuất</a></p>
    </div>
</body>

</html>