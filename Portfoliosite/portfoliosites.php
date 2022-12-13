<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>
  <script src="https://kit.fontawesome.com/9c87ff8f0d.js" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      box-sizing: border-box;

    }

    html {
      scroll-behavior: smooth;
    }

    body {
      background: #080808;
      color: white;
    }

    #header {
      width: 100%;
      height: 100vh;
      background: url(images/perfectpic.png);
      background-size: cover;
      background-position: center;
    }

    .container {
      padding: 10px 10%;
    }

    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo {
      width: 140px;
    }

    nav ul li {
      display: inline-block;
      list-style-type: none;
      margin: 10px 20px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      position: relative;
    }

    nav ul li a::after {
      content: " ";
      width: 0;
      height: 3px;
      background: #ff004f;
      position: absolute;
      left: 0;
      bottom: -6px;
      transition: 0.5s;
    }

    nav ul li a:hover::after {
      width: 100%;
    }

    .header-text {
      margin-top: 20%;
      font-size: 30px;
    }

    .header-text h1 {
      font-size: 60px;
      margin-top: 20px;
    }

    .header-text h1 span {
      color: rgb(231, 20, 157);
    }

    /* -------------- about section---------------- */
    #about {
      padding: 80px 0;
      color: #ababab;
    }

    .row {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .about-col-1 {
      flex-basis: 35%;
    }

    .about-col-1 img {
      width: 100%;
      border-radius: 15px;
    }

    .about-col-2 {
      flex-basis: 60%;
    }

    .sub-title {
      font-size: 60px;
      font-weight: 600;
      color: white;
    }

    .tab-titles {
      display: flex;
      margin: 20px 0 40px;

    }

    .tab-links {
      margin-right: 50px;
      font-size: 18px;
      font-weight: 500;
      cursor: pointer;
      position: relative;
    }

    .tab-links::after {
      content: '';
      width: 0;
      height: 3px;
      background: #ff004f;
      position: absolute;
      left: 0;
      bottom: -8px;
      transition: 0.5s;
    }

    .tab-links.active-links::after {
      width: 50%;
    }

    .tab-content ul li {
      list-style-type: none;
      margin: 10px 0;
    }

    .tab-content ul li span {
      color: aqua;
      font-size: 14px;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active-tab {
      display: block;
    }

    #services {
      padding: 30px 0;
    }

    .services-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 40px;
      margin-top: 50px;
    }

    .services-list div {
      background: #262626;
      padding: 40px;
      font-size: 13px;
      font-weight: 300;
      border-radius: 10px;
      transition: bcakground, 0.5s, transform, 0.5s;
    }

    .services-list div i {
      font-size: 50px;
      margin-bottom: 30px;
    }

    .services-list div H2 {
      font-size: 30px;
      font-weight: 15px;
      margin-bottom: 30px;

    }

    .services-list div a {
      text-decoration: none;
      color: #fff;
      font-size: 12px;
      margin-top: 20px;
      display: inline-block;
    }

    .services-list div:hover {
      background: #ff004f;
      transform: translateY(-10px);
    }

    .portfolio {
      padding: 50px 0;
    }

    .work-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 40px;
      margin-top: 50px;
    }

    .work {
      border-radius: 10px;
      position: relative;
      overflow: hidden;
    }

    .work img {
      width: 100%;
      border-radius: 10px;
      display: block;
      transition: transform 0.5s;
    }

    .layer {
      width: 100%;
      height: 0;
      background: linear-gradient(rgba(0, 0, 0, 0.6), #ff004f);
      border-radius: 10px;
      position: absolute;
      left: 0;
      bottom: 0;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 40px;
      text-align: center;
      font-size: 14px;
      transition: height, 0.5s;
    }

    .layer h3 {
      font-weight: 500;
      margin-bottom: 20px;

    }

    .layer a {
      margin-top: 20px;
      color: #ff004f;
      text-decoration: none;
      font-size: 18px;
      line-height: 60px;
      background: #fff;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      text-align: center;
    }

    .work:hover {
      transform: scale(1.1);
    }

    .work:hover .layer {
      height: 100%;
    }

    .btn {
      display: block;
      margin: 50px auto;
      width: fit-content;
      border: 1px solid #ff004f;
      padding: 14px 50px;
      border-radius: 6px;
      text-decoration: none;
      color: #fff;
      transition: background-color 0.5s;

    }

    .btn:hover {
      background-color: #ff004f;
    }

    .contact-left {
      flex-basis: 35%;

    }

    .contact-right {
      flex-basis: 60%;

    }

    .contact-left p {
      margin-top: 30px;
    }

    .contact-left p i {
      color: #ff004f;
      margin-right: 15px;
      font-size: 25px;
    }

    .social-icons {
      margin-top: 30px;
    }

    .social-icons a {
      text-decoration: none;
      font-size: 30px;
      margin-right: 15px;
      color: #ababab;
      display: inline-block;
      transition: transform 0.5s;
    }

    .social-icons a:hover {
      color: #ff004f;
      transform: translateY(-5px);
    }

    .btn.btn2 {
      display: inline-block;
      background: #ff004f;
    }

    .contact-right form {
      width: 100%;

    }

    form input,
    form textarea {
      width: 100%;
      border: 0;
      outline: none;
      background: #262626;
      padding: 15px;
      margin: 15px 15px;
      color: #fff;
      font-size: 18px;
      border-radius: 6px;

    }

    form input .btn2 {
      padding: 14px 60px;
      font-size: 18px;
      margin-top: 20px;
      cursor: pointer;
    }

    .copyright {
      width: 100%;
      text-align: center;
      padding: 25px 0;
      background: #262626;
      font-weight: 300;
      margin-top: 20px;
    }

    nav .fa-sharp {
      display: none;
    }

    .error {
      color: #FF0000;
    }

    /* css for small screens */
    @media only screen and (max-width:600px) {
      #header {
        background-image: url(images/perfectpic1.png);
      }

      .header-text {
        margin-top: 100%;
        font-size: 16px;
      }

      .header-text h1 {
        font-size: 30px;
      }

      nav .fa-sharp {
        display: block;
        font-size: 25px;
      }

      nav ul {
        background: #ff004f;
        position: fixed;
        top: 0;
        right: -250px;
        width: 200px;
        height: 100vh;
        padding-top: 50px;
        z-index: 2;
        transition: right 0.5s;
      }

      nav ul li {
        display: block;
        margin: 25px;
      }

      nav ul .fa-sharp {
        position: absolute;
        top: 25px;
        left: 25px;
        cursor: pointer;
      }

      .sub-title {
        font-size: 40px;
      }

      .about-col-1,
      .about-col-2 {
        flex-basis: 100%;
      }

      .about-col-1 {
        margin-bottom: 30px;
      }

      .about-col-2 {
        font-size: 14px;
      }

      .tab-links {
        font-size: 16px;
        margin-right: 20px;
      }

      .contact-left,
      .contact-right {
        flex-basis: 100%;

      }

      .copyright {
        font-size: 14px;
      }

    }
  </style>
</head>

<body>
  <?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>
  <div id="header">
    <div class="container">
      <nav>
        <img src="images/My project.png" class="logo" alt="" />
        <ul id="sidemenu">
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
          <i class="fa-sharp fa-solid fa-square-xmark" onclick="closemenu()"></i>
        </ul>
        <i class="fa-sharp fa-solid fa-bars" onclick="openmenu()"></i>
      </nav>
      <div class="header-text">
        <p>Web and App Developer</p>
        <h1>
          Hi, I' m <span>Ashutosh</span> <br />
          From INDIA
        </h1>
      </div>
    </div>
  </div>
  <!-- --------------- about section--------------- -->

  <div id="about">
    <div class="container">
      <div class="row">
        <div class="about-col-1">
          <img src="images/img4.png" alt="" />
        </div>
        <div class="about-col-2">
          <h1 class="sub-title">About Me</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Recusandae ab, laudantium iste nisi qui voluptatem sequi nobis
            quasi corporis ipsum unde ex aperiam facilis maxime iusto.
            Reprehenderit ullam delectus quo, est doloremque inventore
            asperiores!lorem12 Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Quis beatae numquam neque sit facere, soluta
            autem. Doloribus, commodi est. Necessitatibus dolorem asperiores
            eveniet magnam voluptate eius commodi autem voluptatum
            dignissimos!
          </p>
          <div class="tab-titles">
            <p class="tab-links active-links" onclick="opentab('skills')">
              Skills
            </p>
            <p class="tab-links" onclick="opentab('experience')">
              Experience
            </p>
            <p class="tab-links" onclick="opentab('education')">Education</p>
          </div>
          <div class="tab-content active-tab" id="skills">
            <ul>
              <li><span>UI/UX</span><br />Designer Web app Interfaces</li>
              <li><span>Web Development</span><br />Web App Development</li>
              <li>
                <span>App development</span><br />Building Androids/ios apps
              </li>
            </ul>
          </div>
          <div class="tab-content" id="experience">
            <ul>
              <li><span>2 YEARS</span><br />Designer Website Interfaces</li>
              <li><span>Intership</span><br />Musixvrse startup company</li>
              <li>
                <span>learning Android</span><br />Building Androids/ios apps
              </li>
            </ul>
          </div>
          <div class="tab-content" id="education">
            <ul>
              <li><span>Intermediate</span><br />Assisi Convent School <br> 95% in PCM</li>
              <li><span>Undergratuation</span><br />University of Delhi</li>
              <li>
                <span>Planning MCA</span><br />National Institution of technologies
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -----------------services--------------------------- -->
  <div id="services">
    <div class="container">
      <h1 class="sub-title">MY Services</h1>
      <div class="services-list">
        <div>
          <i class="fa-solid fa-code"></i>
          <H2>Web Design</H2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam iste laborum velit, quis saepe facere
            voluptate incidunt corrupti nobis laudantium perspiciatis architecto. Dolores.</p>
          <a href="#">learn more</a>
        </div>
        <div>
          <i class="fa-sharp fa-solid fa-crop-simple"></i>
          <H2>UI/UX</H2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam iste laborum velit, quis saepe facere
            voluptate incidunt corrupti nobis laudantium perspiciatis architecto. Dolores.</p>
          <a href="#">learn more</a>
        </div>
        <div>
          <i class="fa-brands fa-app-store-ios"></i>
          <H2>App design</H2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam iste laborum velit, quis saepe facere
            voluptate incidunt corrupti nobis laudantium perspiciatis architecto. Dolores.</p>
          <a href="#">learn more</a>
        </div>
      </div>
    </div>
  </div>
  <!-- -----------------------PORTFOLIO---------------------- -->
  <div id="portfolio">
    <div class="container">
      <h1 class="sub-title">MY Work</h1>
      <div class="work-list">
        <div class="work">
          <img src="images/work-1.png" alt="">
          <div class="layer">
            <h3>Social Media App</h3>
            <p>The app connects you to the talent people around the world
              Download it from play store
            </p>
            <a href="#"><i class="fa-solid fa-link"></i></a>
          </div>
        </div>
        <div class="work">
          <img src="images/work-2.png" alt="">
          <div class="layer">
            <h3>Social Media App</h3>
            <p>The app connects you to the talent people around the world
              Download it from play store
            </p>
            <a href="#"><i class="fa-solid fa-link"></i></a>
          </div>
        </div>
        <div class="work">
          <img src="images/work-3.png" alt="">
          <div class="layer">
            <h3>Social Media App</h3>
            <p>The app connects you to the talent people around the world
              Download it from play store
            </p>
            <a href="#"><i class="fa-solid fa-link"></i></a>
          </div>
        </div>
      </div>
      <a href="#" class="btn">See more</a>
    </div>
  </div>
  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="contact-left">
          <h1 class="sub-title">Contact me</h1>
          <p><i class="fa-sharp fa-solid fa-paper-plane"></i>contact@gmail.com</p>
          <p> <i class="fa-sharp fa-solid fa-phone"></i>0123456789</p>
          <div class="social-icons">
            <a href="http://www.instagram.com/irrational_.me"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="http//:www.facebook.com"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="http//:www.twitter.com"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-github"></i></a>
          </div>
          <a href="images/Ashutosh's Resume.pdf" download class="btn btn2">Download CV</a>
        </div>
        <div class="contact-right">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <!-- form action="page.php" -->
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">*
              <?php echo $nameErr; ?>
            </span>
          <br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">*
              <?php echo $emailErr; ?>
            </span>
            <textarea name="Message" rows="6" placeholder="Enter your message"></textarea>
            <input type="submit" value="submit" name="submit" class="btn btn2">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>copyright &#169; Ashutosh</p>
  </div>

  <script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-content");
    function opentab(tabname) {
      for (tablink of tablinks) {
        tablink.classList.remove("active-links");
      }
      for (tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
      }
      event.currentTarget.classList.add("active-links");
      document.getElementById(tabname).classList.add("active-tab");
    }
  </script>
  <script>
    var sidemeu = document.getElementById("sidemenu");
    function openmenu() {
      sidemeu.style.right = "0";
    }
    function closemenu() {
      sidemeu.style.right = "-250px";
    }
  </script>

</body>

</html>