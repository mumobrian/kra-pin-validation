<!DOCTYPE html>
<html>
<head>
    <title>KRA PIN Validation</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 30px;
            width: 380px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background: #ff0606ff;
            color: white;
            padding: 14px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #f60505ff;
        }

        .footer {
            text-align: center;
            margin-top: 12px;
            font-size: 14px;
            color: #666;
        }

    </style>

</head>
<body>

<div class="container">
    <h2>KRA Registration Form</h2>

    <form action="process.php" method="POST">

        <label>Full Name:</label><br>
        <input type="text" name="name" placeholder="Enter your full name" required>

        <label>Email Address:</label><br>
        <input type="email" name="email" placeholder="Enter your email" required>

        <label>KRA PIN:</label><br>
        <input type="text" name="kra_pin" placeholder="A123456789B" required>

        <button type="submit">Submit</button>

        <p class="footer">Your info is secure.</p>

    </form>
</div>

</body>
</html>
