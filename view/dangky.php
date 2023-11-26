<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 50px 550px;
            
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 130px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="index.php?pg=adduser" method="post">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" >

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" >

        <label for="dienthoai">Số điện thoại:</label>
        <input type="text" id="dienthoai" name="dienthoai" >

        <label for="diachi">Địa chỉ</label>
        <input type="text" id="diachi" name="diachi" >

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" >
        
        
        <button name="dangky" type="submit">Đăng kí</button>
    </form>
</body>
</html>
