<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <style>
       body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5fa;
        }

        header {
            background-color: white;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 30px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #555;
        }


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
            padding: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }
        .gallery-item {
            overflow: hidden;
            border-radius: 80px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.1s ease-in-out;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }
        .gallery-item:hover img {
            filter: brightness(90%);
        }
        .gallery-item-content {
            padding: 15px;
            background-color: #fff;
            border-radius: 0 0 10px 10px;
        }
        .gallery-item-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }
        .gallery-item-description {
            font-size: 20px;
            color: #666;
        }
    </style>
</head>
<body>
<header>
<header>
        <h1>Ministry Management System</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <div class="login_icon">
            <img src="../imgs/userred.jpg" width="30" height="30">
        </div>
    </nav>
    <h1>Gallery</h1>

    <div class="gallery">
        <div class="gallery-item">
            <img src="../imgs/gallery2.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">PANAIYUR VILLAGE </h3>
                <p class="gallery-item-description">Providing spiritual support, counseling, education.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/gallery1.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">ELLAMANUR VILLAGE</h3>
                <p class="gallery-item-description">Promoting social cohesion, unity the village</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/gallery3.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">SILAIMAN VILLAGE</h3>
                <p class="gallery-item-description">community members with skills, resources, and knowledge </p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/gallery4.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">SOTATHATITTY VILLAGE</h3>
                <p class="gallery-item-description">Environmental conservation within the village.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/img8.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">PERIYUR NAGER </h3>
                <p class="gallery-item-description">community members with skills, resources, and knowledge </p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/img5.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">SUNDAY SCHOOL</h3>
                <p class="gallery-item-description">schools, literacy program and  educational opportunities.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/img6.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">SONG AND ACTION </h3>
                <p class="gallery-item-description">Promoting social cohesion, unity the village</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="../imgs/img7.jpg">
            <div class="gallery-item-content">
                <h3 class="gallery-item-title">CLASSES </h3>
                <p class="gallery-item-description">Environmental conservation within the village.</p>
            </div>
        </div>
</body>
</html>
