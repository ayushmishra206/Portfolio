<?php 
if(isset($_POST['submit'])){
    $to = "ayushmishra206@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    
    $message = $name . " " ."wrote the following:" . "\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "
        <script>
            alert('Thank you! Your message has been sent.');
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ayush's Portfolio</title>
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">  
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/default.css" />
    <link id="theme-style" rel="stylesheet" type="text/css" href=" " />
  </head>
  <body>
    <section class="s1">
      <div class="main-container">
        <div class="greeting-wrapper">
          <h1>Hey, I'm Ayush Mishra</h1>
        </div>

        <div class="intro-wrapper">
          <div class="nav-wrapper">
            <a href="index.php">
              <div class="dots-wrapper">
                <div id="dot-1" class="browser-dot"></div>
                <div id="dot-2" class="browser-dot"></div>
                <div id="dot-3" class="browser-dot"></div>
              </div>
            </a>
            <ul id="navigation">
              <li><a href="index.php#contact">Contact</a></li>
            </ul>
          </div>

          <div class="left-column">
            <img id="profile_pic" src="images/ayush.jpg" />
            <h5 style="text-align: center; line-height: 0;">
              Personalize Theme
            </h5>

            <div id="theme-options-wrapper">
              <div data-mode="light" id="light-mode" class="theme-dot"></div>
              <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
              <div data-mode="green" id="green-mode" class="theme-dot"></div>
              <div data-mode="purple" id="purple-mode" class="theme-dot"></div>
            </div>

            <p id="settings-note">
              *Theme settings will be saved for<br />your next vist
            </p>
          </div>

          <div class="right-column">
            <div id="preview-shadow">
              <div id="preview">
                <div id="corner-tl" class="corner"></div>
                <div id="corner-tr" class="corner"></div>
                <h3>What I Do</h3>
                <p>
                  I am a Software Engineer currently working at OpenSense Labs.
                  I love to code and drink coffee.
                </p>
                <div id="corner-br" class="corner"></div>
                <div id="corner-bl" class="corner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s2">
      <div class="main-container">
        <div class="about-wrapper">
          <div class="about-me">
            <h4>More about me</h4>

            <p>
              I love to build new projects and most of them either come from me
              trying to learn a new tech stack or a real-life problem.
            </p>

            <p>
              While i stay busy working on these projects and my job, i also
              like to take some time out for photography. For which you can head
              over and check out my instagram.
            </p>

            <hr />

            <h4>My Skills</h4>

            <p>
              Software Engineer with primary focus on Web Development:
              <a target="_blank" href="Resume.pdf">Download Resume</a>
            </p>

            <div id="skills">
              <ul>
                <li>C++</li>
                <li>Python</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MYSQL</li>
              </ul>

              <ul>
                <li>Drupal</li>
                <li>Unix</li>
                <li>Git</li>
                <li>AWS (RDS/S3)</li>
                <li>HTML/CSS</li>
              </ul>
            </div>
          </div>

          <div class="social-links">
            <img id="social_img" src="images/instass.JPG" />
            <h3>Find me on Instagram</h3>

            <a target="_blank" href="https://www.instagram.com/ayushmishra.206/"
              >Instagram: @ayushmishra.206</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="s1">
      <div class="main-container">
        <h3 style="text-align: center;">Upcoming projects</h3>

        <div class="post-wrapper">
          <div>
            <div class="post">
              <img class="thumbnail" src="images/netflix.jpg" />
              <div class="post-preview">
                <h6 class="post-title">Netflix Clone</h6>
                <p class="post-intro">
                  This is going to be a really interesting project where i clone
                  the Netflix Homepage using React, Firebase and a few API's.
                </p>
                <a href="">Awaiting Deployment...</a>
              </div>
            </div>
          </div>

          <div>
            <div class="post">
              <img class="thumbnail" src="images/instagram.jpg" />
              <div class="post-preview">
                <h6 class="post-title">Instagram Clone</h6>
                <p class="post-intro">
                  This is another project where i clone the Instagram Homepage
                  again using React, Firebase and a few API's.
                </p>
                <a href="">Awaiting Deployment...</a>
              </div>
            </div>
          </div>

          <div>
            <div class="post">
              <img class="thumbnail" src="images/amazon.jpg" />
              <div class="post-preview">
                <h6 class="post-title">Amazon Price Tracker</h6>
                <p class="post-intro">
                  This will be a price tracker which will keep a lookout on
                  prices of your amazon wish lists by scraping data directly
                  from amazon.
                </p>
                <a href="">Awaiting Deployment...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s2">
      <div class="main-container">
        <a href=""></a>
        <h3 style="text-align: center;">Get In Touch</h3>

        <form id="contact-form" method="POST" action="index.php">
          <a name="contact"></a>

          <label>Name</label>
          <input class="input-field" type="text" name="name" required />

          <label>Email</label>
          <input class="input-field" type="email" name="email" required />

          <label>Subject</label>
          <input class="input-field" type="text" name="subject" required/>

          <label>Message</label>
          <textarea class="input-field" name="message" required></textarea>

          <input id="submit-btn" name="submit" type="submit" value="Send" />
        </form>
      </div>
    </section>

    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
