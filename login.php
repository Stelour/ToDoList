<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task Management</title>
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            display: none;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            display: none; /* Скрыто по умолчанию */
        }

        #theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #3777de;
            border: none;
            padding: 10px 10px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s ease;
        }
        #theme-toggle:hover {
            background-color: #5416aa;
        }

        .dark-theme {
            background-color: #121212;
            color: #ffffff;
        }
        .dark-theme .preview-container {
            background-color: #120428; 
        }
        .dark-theme .cbutton {
            background-color: rgba(34, 26, 124, 0.75);
            border: 1px solid rgba(111, 136, 247, 0.5);
            color: rgb(188, 198, 244);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Century Gothic', sans-serif;
        }
        html,
        body {
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.2s, color 0.2s;
        }
        .root-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
            margin: 0 20px;
            height: 722px;
        }
        .img-container {
            background-image: url(icons/todolist.png);
        }
        .preview-container {
            background-color: rgba(231, 227, 255, 0.75);
        }
        .preview-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .img-container,
        .preview-container {
            width: 580px;
            height: 100%;
            border-radius: 40px;
            padding: 0 130px;
            gap: 20px;
        }
        .h1 {
            font-size: 36px;
        }
        .cbutton {
            background-color: rgba(240, 238, 255, 0.75);
            font-size: 18px;
            width: 100%;
            height: 40px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(27, 53, 171, 0.5);
            color: rgb(27, 53, 171);
            font-weight: bold;
            cursor: pointer;
        }
        .cbutton:hover {
            background-color: rgba(27, 53, 171, 0.1);
            box-shadow: 0 4px 10px rgba(27, 53, 171, 0.3);
            color: #200d6b;
            transform: scale(1.02);
        }
        .input-field {
            width: 100%;
            height: 40px;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <!-- Прелоадер -->
    <div id="preloader">
        <div>Загрузка...</div>
    </div>

    <!-- Кнопка для смены темы -->
    <button id="theme-toggle">🌙</button>

    <!-- Основной контент (форма) -->
    <div class="root-container">
        <div class="img-container"></div>
        <div class="preview-container">
            <h1>Login to Task Management</h1>
            <div id="error-message" class="error-message" style="display: none;"></div>
            <form id="login-form" novalidate>
                <input type="text" class="input-field" id="email" name="email" placeholder="Email" required />
                <input type="password" class="input-field" id="password" name="password" placeholder="Password" required />
                <div id="error-message" class="error-message" style="display: none; color: red;"></div>
                <button type="submit" class="cbutton">Login</button>
            </form>
            
            <p>
                Don't have an account?
                <a href="signup.html">Sign Up</a>
            </p>
        </div>
    </div>

    <script src="login.js"></script>
    <script src="theme.js"></script>
</body>
</html>