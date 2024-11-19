<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #333;
            padding: 10px;
        }
        nav a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            font-size: 1.2em;
        }
        nav a:hover {
            background-color: #575757;
        }
        .dropdown {
            display: inline-block;
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <nav>
        <a href="home.php">Home</a>
        <a href="index.php">Admission</a>
        <div class="dropdown">
            <a href="#">Streams</a>
            <div class="dropdown-content">
                <a href="science.html">Science</a>
                <a href="commerce.html">Commerce</a>
                <a href="arts.html">Arts</a>
            </div>
        </div>

    </nav>
    <center><img src="diya.jpeg" alt="Diya Logo" style="width:200px;height:200px;"></center>
   <center> <h1>Welcome to Samrudhi Pre University College website</h1></center>
    <p><h3> At Samrudhi Pre-University College, we believe that education is the foundation of a prosperous future. As a premier institution, we are dedicated to providing an exceptional learning environment that nurtures young minds and shapes them into confident, capable, and compassionate individuals. Our college is committed to academic excellence, holistic development, and character building, ensuring that students are well-prepared to face the challenges of higher education and beyond.

Our experienced faculty members are passionate about teaching and are dedicated to guiding students through their academic journey, helping them achieve their full potential.<br><br> At Samrudhi, we emphasize a balanced approach to education, where both academic rigor and extracurricular activities play vital roles. We encourage our students to explore their interests, develop new skills, and cultivate a lifelong love for learning.<br><br>

With state-of-the-art facilities, modern infrastructure, and a student-friendly campus, Samrudhi Pre-University College creates an environment that fosters creativity, critical thinking, and collaboration.<br><br> Our curriculum is designed to provide a strong foundation in science, commerce, and arts, with a focus on both theoretical knowledge and practical applications. We also prioritize values such as integrity, discipline, and social responsibility, preparing our students to become not only successful professionals but also responsible citizens of tomorrow.

Join us at Samrudhi Pre-University College, where your academic journey begins and where dreams are transformed into reality. We look forward to welcoming you to our vibrant community and supporting you as you embark on this exciting chapter of your educational journey.</h3></p>
</body>
</html>
