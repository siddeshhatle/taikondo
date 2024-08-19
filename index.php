<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taikondo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
            height: 80px;
        }
        .navbar {
            background-color: black !important;
        }
        .navbar-brand {
            color: #ffc414 !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc414 !important;
        }
        .navbar-nav .nav-item.active .nav-link {
            color: #ffc414 !important;
        }
        .navbar-nav .nav-link i {
            font-size: 1.2rem;
        }
        .hero-image {
            position: relative;
            text-align: left;
            color: white;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
            color: black;
            width: 50%;
        }

        .hero-text h1 {
            font-size: 4em;
            font-weight: bold;
        }

        .hero-text .btn1 {
            margin-top: 20px;
            font-size: 1.2em;
            color: black;
        }

        .btn-custom1 {
            background-color: #ffc414;
            border: 4px solid black;
        }

        .btn-custom1:hover {
            background-color: black;
            color: #ffc414;
        }
        .scroll-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: white;
            border: 2px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
        }
        .scroll-button img {
            width: 20px;
            height: 20px;
        }
        .section {

        }
        .two-column-layout {
            display: flex;
            width: 80%;
            height: 450px; /* Adjust height as needed */
        }
        .left-column {
            width: 50%;
            background-image: url('assets/img/section1.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            padding: 20px;
        }
        .right-column {
            width: 50%;
            background-color: #ffc414;
            color: black;
            /* display: flex;
            align-items: center;
            justify-content: center; */
            padding: 20px;
        }
        .section1{            
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px 70px 0px 70px;
            font-size: 1em;
        }
        .section2{            
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px 190px 0px 190px;
            font-size: 1em;
        }
        .emailForm{
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1em;
        }
        .principles {
            /* padding: 20px; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .principles h1 {
            margin: 0;
            font-size: 1.5em;
        }

        .principle-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            width: 100%;
            margin-top: 20px;
        }

        .principle-list div {
            padding: 10px;
            font-size: 1.2em;
        }

        .staff-section {
            width: 100%;
            /* max-width: 1200px; */
            border-radius: 10px;
            /* overflow: hidden; */
        }

        .top-half {
            background-color: black;
            color: #fdd835;
            padding: 50px;
            /* margin: 50px 50px 200px 50px; */
            text-align: center;
        }

        .top-half h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .bottom-half {
            background-color: white;
            padding: 50px 20px;
        }

        .staff-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .staff-card {
            background-color: white;
            border: 1px solid black;
            border-radius: 10px;
            overflow: hidden;
            width: 250px;
            margin: 10px;
        }

        .staff-card img {
            width: 100%;
            height: auto;
        }

        .staff-info {
            padding: 20px;
            text-align: center;
        }

        .staff-info h2 {
            margin: 10px 0;
            color: #fdd835;
        }

        .staff-info h3 {
            margin: 10px 0;
            color: black;
            font-size: 1em;
        }

        .staff-info p {
            font-size: 0.9em;
            color: gray;
        }

        .contact-section {
            /* background-color: #FFC107; */
            /* color: white; */
            padding: 50px 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .contact-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .contact-section p {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .contact-form {
            margin-top: 30px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group textarea {
            width: 48%;
            padding: 15px;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group1 {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .form-group1 input {
            width: 100%;
            padding: 15px;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            width: 100%;
            height: 150px;
            resize: none;
        }


        .btn {
            background-color: #FFC107;
            color: black;
            border: 2px solid black;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            display: block;
            box-sizing: border-box;
        }

        .btn:hover {
            background-color: #e0a800;
        }
        .header-title {
            position: absolute;
            top: 90%;
            left: 25%;
            width: 50%;
            background-color: white;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            border-style: solid;
            border-color: black;
        }

        .header-title h1 {
            margin: 0;
            font-size: 2.5em;
            color: black;
        }
        .class-list {
            width: 80%;
            margin: 100px auto;
            padding: 0;
        }

        .class-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .class-info h3 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .class-info p {
            margin: 5px 0;
            font-size: 16px;
            color: #666;
        }

        .register-button {
            background-color: #FFC107; /* Original yellow */
            color: black;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        .register-button:hover {
            background-color: #FFEB3B; /* Light yellow on hover */
        }

        hr {
            border: 0;
            border-top: 1px solid #FFC107;
            margin: 0;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="/assets/img/Logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Taikondo
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/taikondo/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="redirectPage('1')">Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#staff-section">Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-section">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="redirectPage('2')">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="home" style="display:block">
        <div class="hero-image">
            <img src="assets/img/dashboard.jpg" alt="Karate Kids" class="img-fluid">
            <div class="hero-text">
                <h1>ROUNDHOUSE KARATE SCHOOL</h1>
                <button class="btn1 btn-custom1"><b>Try a Free Class Today</b></button>
            </div>
        </div>  
        <!-- <div class="section" style="background-color: lightblue;">
            <h1>Section 1</h1>
        </div> -->
        <div class="section1" id="about-section">
            <div class="two-column-layout">
                <div class="left-column"></div>
                <div class="right-column">
                    <h3 style="color:white;">ABOUT OUR KARATE SCHOOL</h3>
                    <br />
                    <p>
                        <b>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. 
                            Just click “Edit Text” or double click me to add your own content and make changes to the font. 
                            Feel free to drag and drop me anywhere you like on your page. 
                            I’m a great place for you to tell a story and let your users know a little more about you.
                        </b>
                    </p>
                    <p>      
                        <b>          
                            This is a great space to write long text about your company and your services. 
                            You can use this space to go into a little more detail about your company.
                        </b> 
                    </p>
                </div>
            </div>
        </div>  
        
        <div class="section2">
            <table class="table table-bordered">
                <tr>
                    <th style="text-align:center">
                        <h1>PRINCIPLES OF OUR KARATE SCHOOL</h1>
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">
                        <div class="principle-list">
                            <div>Respect</div>
                            <div>Focus</div>
                            <div>Safety</div>
                            <div>Self-Discipline</div>
                            <div>Confidence</div>
                            <div>Leadership</div>
                        </div>
                    </th>
                </tr>
            </table>

        </div>

        <div class="staff-section" id="staff-section">
            <div class="top-half">
                <h1>MEET OUR STAFF</h1>
            </div>
            <div class="bottom-half">
                <div class="staff-container">
                    <div class="staff-card">
                        <img src="https://via.placeholder.com/150" alt="Mr. Rohit Jadhav">
                        <div class="staff-info">
                            <h3>Tribute to</h3>
                            <h2>Mr. Samruddha Belose</h2>
                            <p>Mr. Samruddha Belose, our late founder, was a revered 1st  Dan Black Belt whose influence on Taekwondo spans over 25 + years . He had been an Team Coach for the past 7 years representing India . He has won  more than 32 medals all over including international state etc . Their passion for martial arts and unwavering dedication to their students laid the foundation of our Taekwondo Academy . We carry forward our founder’ s mission to instill discipline, respect, and excellence in every practitioner.</p>
                        </div>
                    </div>
                </div>
                <div class="staff-container">
                    <div class="staff-card">
                        <img src="https://via.placeholder.com/150" alt="Mr. Rohit Jadhav">
                        <div class="staff-info">
                            <h2>Mr. Rohit Jadhav</h2>
                            <h3>Coach</h3>
                            <p>Coach Mr. Rohit Jadhav is a dedicated Taekwondo instructor with a 2nd Dan Black Belt and Kukkiwon certification. With 25 years  + of experience, they specialize in sparring and self-defense, focusing on student growth and community involvement.</p>
                        </div>
                    </div>
                    <div class="staff-card">
                        <img src="https://via.placeholder.com/150" alt="Mr. Sunil Jadhav">
                        <div class="staff-info">
                            <h2>Mr. Sunil Jadhav</h2>
                            <h3>Coach</h3>
                            <p>Coach Mr. Sunil Jadhav is a dedicated Taekwondo instructor with a 1st Dan Black Belt and Kukkiwon certification. With 25 years + of experience, they specialize in sparring and self-defense, focusing on student growth and community involvement.</p>
                        </div>
                    </div>


                    <div class="staff-card">
                        <img src="https://via.placeholder.com/150" alt="Ms. Sadhana Belose Karnad">
                        <div class="staff-info">
                            <h2>Ms. Sadhana Belose Karnad</h2>
                            <h3>Coach</h3>
                            <p>Coach Ms. Sadhana Belose is a dedicated Taekwondo instructor with a 1st Dan Black Belt and Kukkiwon certification. With 20 years + of experience, they specialize in sparring and self-defense, focusing on student growth and community involvement.</p>
                        </div>
                    </div>


                    <div class="staff-card">
                        <img src="https://via.placeholder.com/150" alt="Ms. Vidya Jadhav">
                        <div class="staff-info">
                            <h2>Ms. Vidya Jadhav</h2>
                            <h3>Coach</h3>
                            <p>Coach Ms. Vidya Jadhav is a dedicated Taekwondo instructor with a 2nd Dan Black Belt and Kukkiwon certification. With 40 years + of experience, they specialize in sparring and self-defense, focusing on student growth and community involvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-section" id="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <p>123-456-7890 | info@mysite.com</p>
                <p>500 Terry Francine Street, San Francisco, CA 94158</p>

                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group1">
                        <input type="text" name="phone" placeholder="Your Phone No.">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Ask Us anything"></textarea>
                    </div>
                    <button type="submit" class="btn">Get In Touch</button>
                </form>
            </div>
        </section>
    </div>
    <div class="program" style="display:none">
        <div class="hero-image">
            <img src="assets/img/program1.jpg" alt="Karate Kids" class="img-fluid">
            <div class="header-title">
                <h1>PROGRAMS</h1>
            </div>
        </div>  
        <div class="class-list">
            <div class="class-item">
                <div class="class-info">
                    <h3>Trial Class</h3>
                    <p>1 hr 30 min</p>
                    <p>Price Free</p>
                </div>
                <button class="register-button">Register</button>
            </div>

            <div class="class-item">
                <div class="class-info">
                    <h3>Young Ninja Class (ages 3-5)</h3>
                    <p>Starts Jan 1, 2035</p>
                    <p>$375</p>
                    <p>Available spots</p>
                </div>
                <button class="register-button">Register</button>
            </div>

            <div class="class-item">
                <div class="class-info">
                    <h3>Mini Dragon Class (ages 6-7)</h3>
                    <p>Starts Jan 2, 2035</p>
                    <p>$425</p>
                    <p>Available spots</p>
                </div>
                <button class="register-button">Register</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });
        });
        // $(document).ready(function() {
        //     $('a[href^="#"]').on('click', function(event) {
        //         var target = $(this.getAttribute('href'));
        //         if (target.length) {
        //             event.preventDefault();
        //             $('html, body').stop().animate({
        //                 scrollTop: target.offset().top
        //             }, 1000);
        //         }
        //     });
        // });
        function redirectPage(val){
            if(val == 1){
                $('.program').show();
                $('.home').hide();
            }

        }
    </script>
</body>
</html>
