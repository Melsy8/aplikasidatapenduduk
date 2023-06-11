<!DOCTYPE html>
<html>

<head>
    <title>halaman registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        h1 {
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        li {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        
        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>halaman registrasi</h1>

    <form action="prosesregist.php" method="post">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username" require>
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password" require>
            </li>
            <li>
                <label for="password2">konfirmasi password</label>
                <input type="password" name="password2" id="password2" require>
            </li>
            <li>
                <button type="submit" name="registrasi" >Registrasi</button>
            </li>
        </ul>
    </form>
</body>

</html>