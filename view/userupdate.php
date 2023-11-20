<div class="container-userupdate">
    <form method="post">   
        
        <label for="lastName">Tên đăng nhập:</label>   
        <input type="text" id="username" name="username" value="<?$_SESSION['username']?>">  
        <label for="email">Mật khẩu:</label> 
        <input type="email" id="password" name="password" value="<?$_SESSION['password']?>" >
        <label for="phone">Số Điện Thoại:</label>
        <input type="tel" id="phone" name="phone" >  
        <label for="address">Địa Chỉ:</label>
        <input type="text" id="address" name="address" >
        <label for="birthdate">Ngày Sinh:</label>
        <input type="date" id="birthdate" name="birthdate" >
        <button type="submit">Gửi</button>
    </form>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-userupdate {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
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
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
</body>
</html>