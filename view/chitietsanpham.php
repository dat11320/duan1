<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 20px;
        }

        #content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .category {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category li {
            margin-bottom: 10px;
        }

        .product-image {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #0066cc;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <h2>Danh Mục Sản Phẩm</h2>
        <ul class="category">
            <li><a href="#">Điện Thoại Di Động</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">Máy Ảnh</a></li>
            <!-- Thêm các danh mục khác nếu cần -->
        </ul>
    </div>

    <div id="content">
        <h2>Chi Tiết Sản Phẩm</h2>

        <div class="product">
            <h3>Tên Sản Phẩm</h3>
            <p>Mô tả ngắn về sản phẩm.</p>
            <p>Giá: $999.99</p>
            <img src="https://images.dolenglish.vn/rs:auto:::0/w:1440/q:70/aHR0cHM6Ly9zdWlqbTljbG91b2JqLnZjZG4uY2xvdWQvUFVCTElDL01FRElBL2I1ODJkMmY5LWFkNTktNDNlOC1iNDU2LTE3YTI3MWM5OWFiNC5qcGc=" alt="Ảnh Sản Phẩm" class="product-image">
            <button>Mua Ngay</button>
        </div>

        <!-- Thêm thông tin chi tiết sản phẩm và các sản phẩm khác nếu cần -->
    </div>
</body>
</html>
