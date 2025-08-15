<?php
$greetingMessage = "I am an Information Technology student passionate about learning how technology shapes the modern world.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: Arial, sans-serif;
      color: white;
      background: #0c2340;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
    }
    nav ul {
      display: flex;
      list-style: none;
      gap: 30px;
    }
    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: 500;
    }
    nav ul li a.active {
      border-bottom: 2px solid #ffb800;
      padding-bottom: 5px;
    }

    .hero {
      position: relative;
      min-height: 70vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      background-image: url("https://www.shutterstock.com/shutterstock/videos/1106639121/thumb/12.jpg?ip=x480");
      background-size: cover;
      background-position: center;
    }

    /* Overlay to improve text readability */
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 20px;
    }

    .hero-content h1 {
      font-size: 54px;
      color: #ffb800;
      margin-bottom: 20px;
      text-transform: uppercase;
      animation: fadeInDown 1.2s ease-in-out;
    }
    .hero-content p {
      font-size: 20px;
      line-height: 1.8;
      margin-bottom: 30px;
      animation: fadeInUp 1.2s ease-in-out 0.5s;
    }
    .hero-content span {
      color: #ffb800;
      font-weight: bold;
    }

    .hero-image {
      background-color: #ffb800;
      border-radius: 50% 20% / 10% 40%;
      padding: 10px;
      display: inline-block;
      animation: fadeIn 2s ease-in-out 1s;
      margin-top: 20px;
    }
    .hero-image img {
      width: 250px;
      height: auto;
      border-radius: 20px;
    }

  
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-50px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.8); }
      to { opacity: 1; transform: scale(1); }
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #0c2340;
      border-top: 1px solid #222;
    }

    @media(max-width: 900px) {
      .hero-content h1 { font-size: 36px; }
      .hero-image img { width: 200px; }
    }
  </style>
</head>
<body>

  <header>
    <h2>Landing Page</h2>
    <nav>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Welcome!</h1>
      <p>
        <?php echo $greetingMessage; ?>
        I enjoy exploring <span>programming, networking</span>, and
        <span>software development</span> to build practical solutions. My goal
        is to become a skilled IT professional who can create
        <span>innovative systems</span> that help people in their daily lives.
      </p>
      <div class="hero-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxrOM2F3ypfQ8Gv3Z4XGhUNK2HiXFGq0oNM5mxe0VW-Sgb3bqY6AZ9ELDESvPWk5x3ssg&usqp=CAU" alt="Person working on laptop">
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Alexander Ducay</p>
  </footer>

</body>
</html>
