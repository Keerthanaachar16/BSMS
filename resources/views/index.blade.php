<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Black Spot Monitoring System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Verdana", sans-serif;
        }

        body {
            background: linear-gradient(135deg, #ffffffff 50%, #f3e5f5 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #333;
            overflow-x: hidden;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #9a1fca;
            font-size: 2rem;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }

        .illustration-slider {
            position: relative;
            width: 100%;
            max-width: 400px;
            height: 230px;
            overflow: hidden;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(132, 9, 189, 0.77);
        }

        .illustration-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .illustration-slider img.active {
            opacity: 1;
        }

        .wave {
            width: 100%;
            height: 80px;
            margin: 30px 0 -5px;
        }

        .wave svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .bottom-section {
            /* background-color: #9a1fca; */
            background: linear-gradient(to bottom, #9a1fca, #8815f3ff);
            color: white;
            width: 100%;
            text-align: center;
            padding: 40px 20px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }

        .bottom-section h5 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            animation: slideText 8s linear infinite;
            white-space: nowrap;
            overflow: hidden;
        }

        .bottom-section p {
            font-size: 1rem;
            margin-bottom: 25px;
            opacity: 0.9;
            animation: fadeInUp 2s ease;
        }

        .login-btn {
            /* background: #4CAF50; */
            background: linear-gradient(to bottom, #e00ac4ff, #4111c7ff);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s;
        }

        .login-btn:hover {
            background:linear-gradient(to top, #e00ac4ff, #4111c7ff);
            transform: scale(1.05);
        }

        .options {
            display: none;
            margin-top: 20px;
        }

        .option {
            display: inline-block;
            margin: 10px 15px;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 25px;
            border-radius: 20px;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s;
        }

        .option:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        /* Keyframes */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideText {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(0); }
            100% { transform: translateX(100%); }
        }

        /* 🔹 Responsive Design */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.6rem;
            }

            .illustration-slider {
                max-width: 320px;
                height: 200px;
            }

            .bottom-section h5 {
                font-size: 1.1rem;
                animation: none;
            }

            .option {
                display: block;
                width: 80%;
                margin: 8px auto;
            }

            .login-btn {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 1.3rem;
            }

            .illustration-slider {
                max-width: 280px;
                height: 180px;
            }

            .bottom-section {
                padding: 30px 15px;
            }

            .bottom-section p {
                font-size: 0.9rem;
            }

            .login-btn {
                padding: 10px 25px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <h2>Black Spot Monitoring System</h2>

    <div class="illustration-slider">
        <img src="images/index.jpg" class="slide active" alt="Clean City 1">
        <img src="images/index1.webp" class="slide" alt="Clean City 2">
        <img src="images/index2.jpg" class="slide" alt="Clean City 3">
    </div>

    <div class="wave">
        <svg viewBox="0 0 500 80" preserveAspectRatio="none">
            <path d="M0,0 C150,80 350,80 500,0 L500,80 L0,80 Z" style="stroke: none; fill: #9a1fca;"></path>
        </svg>

       
    </div>

    <div class="bottom-section">
        <h5>A Clean City Starts With Us</h5>
        <p>Blackspots fade when we all care, Keep our surroundings bright and fair.</p>

        <button class="login-btn" onclick="toggleOptions()">Login</button>
        <div id="options" class="options">
            <a href="{{ url('/login') }}" class="option">User</a>
            <a href="{{ url('/admin_login') }}" class="option">Admin</a>
            <a href="{{ url('/officials_login') }}" class="option">Officials</a>
        </div>
    </div>

    <script>
        function toggleOptions() {
            const options = document.getElementById("options");
            options.style.display = (options.style.display === "block") ? "none" : "block";
        }

        const slides = document.querySelectorAll('.illustration-slider img');
        let currentIndex = 0;

        function showNextImage() {
            slides[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('active');
        }

        setInterval(showNextImage, 2800);
    </script>
</body>
</html>