<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karate School Programs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .header {
        position: relative;
        text-align: center;
        color: white;
    }

    .header img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .header-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 5px;
    }

    .header-title h1 {
        margin: 0;
        font-size: 2.5em;
        color: #fdd835;
    }

    .programs-section {
        padding: 50px 20px;
    }

    .program {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 10px;
        background-color: white;
        border-radius: 5px;
    }

    .program-info h2 {
        margin: 0;
        color: #333;
    }

    .program-info p {
        margin: 5px 0 0;
        color: #666;
    }

    .program-action button {
        background-color: #fdd835;
        color: black;
        border: none;
        padding: 10px 20px;
        font-size: 1em;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .program-action button:hover {
        background-color: #ffc107;
    }

</style>
<body>
    <div class="header">
        <img src="/assets/img/program1.jpg" healt="Karate Class">
        <div class="header-title">
            <h1>PROGRAMS</h1>
        </div>
    </div>
    <div class="programs-section">
        <div class="program">
            <div class="program-info">
                <h2>Trial Class</h2>
                <p>1 hr 30 min<br>Price: Free</p>
            </div>
            <div class="program-action">
                <button>Register</button>
            </div>
        </div>
        <div class="program">
            <div class="program-info">
                <h2>Young Ninja Class (ages 3-5)</h2>
                <p>Starts: Jan 1, 2025</p>
            </div>
            <div class="program-action">
                <button>Register</button>
            </div>
        </div>
        <!-- Add more program sections as needed -->
    </div>
</body>
</html>
