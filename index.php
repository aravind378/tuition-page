<?php
$servername = "localhost";
$username = "root";      
$password = "";          
$dbname = "update_nskc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST['name'];
    $class = $_POST['class'];
    $mobile = $_POST['mobile'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $tuition = $_POST['tuition'];

    $sql = "INSERT INTO tuition (name, class, mobile, mail, address, tuition)
            VALUES ('$name', '$class', '$mobile', '$mail', '$address', '$tuition')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "<script>alert('Enquiry submitted successfully!'); window.location.href='index.php';</script>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONLINE COURSE</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
  <script src="https://kit.fontawesome.com/c2d4787fcc.js" crossorigin="anonymous"></script>
</head>
<body>



<header>

    <div class="header-container">
      <div class="logo">
        <a href="./index.php">
          <img src="./images/logo.jpg" alt="Nskc Logo" style="width:230px;object-fit: cover;">
        </a>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="What do you want to learn?">
        <button><i class="fas fa-search"></i></button>
      </div>
      <nav class="navigation">
        <ul>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Skill Course
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./abacus/index.php">Abacus</a></li>
                <li><a class="dropdown-item" href="./vedic-maths/index.php">Vedic Maths</a></li>
                <li><a class="dropdown-item" href="./bharathanatyam/index.php">Bharathanatyam</a></li>
                <li><a class="dropdown-item" href="./spoken english/index.php">Spoken English</a></li>
                <li><a class="dropdown-item" href="./spokenhindi/index.php">Spoken Hindi</a></li>
                <li><a class="dropdown-item" href="./karate/index.php">Karate</a></li>
                <li><a class="dropdown-item" href="./hindi/index.php">Hindi</a></li>
                <li><a class="dropdown-item" href="./yoga/index.php">Yoga</a></li>
                <li><a class="dropdown-item" href="./chess/index.php">Chess</a></li>
                <li><a class="dropdown-item" href="./computercourse/index.php">Computer Class</a></li>
                <li><a class="dropdown-item" href="./drawing/index.php">Drawing</a></li>
                <li><a class="dropdown-item" href="./reading practice/index.php">Reading Practice</a></li>
                <li><a class="dropdown-item" href="./hand writting/index.php">Hand Writing</a></li>
                <li><a class="dropdown-item" href="./vocals&carnatic/index.php">Vocal / Carnatic</a></li>
                <li><a class="dropdown-item" href="./sloga practice/index.php">Sloga Practice</a></li>

                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="./student-signup/index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Enquiry Now
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Computer Course
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./crash course/AI  & ML Kickstart (Python Based)/index.php">Artificial Intelligence</a></li>
                <li><a class="dropdown-item" href="./crash course/Canva for Creators/index.php">Canva for Creators</a></li>
                <li><a class="dropdown-item" href="./crash course/Computer Fundamentals Crash Course/index.php">Comptuter Fundamentals</a></li>
                <li><a class="dropdown-item" href="./crash course/Digital Marketing Fundamentals/index.php">Digital Marketing Fundamentals</a></li>
                <li><a class="dropdown-item" href="./crash course/Excel Pro Mastery/index.php">Excel Pro Mastery</a></li>
                <li><a class="dropdown-item" href="./crash course/Full Stack Fusion (MERN)/index.php">Full Stack Fusion(MERN) </a></li>
                <li><a class="dropdown-item" href="./crash course/Javascript Mastery/index.php">Javascript Mastery</a></li>
                <li><a class="dropdown-item" href="./crash course/AI  & ML Kickstart (Python Based)/index.php">Machine Learning</a></li>
                <li><a class="dropdown-item" href="./crash course/NO-CODE Website Builders/index.php">No-Code Websites</a></li>
                <li><a class="dropdown-item" href="./crash course/PHP Quick Sprint/">PHP Quick Sprint</a></li>
                <li><a class="dropdown-item" href="./crash course/Python Power-Up/">Python Power-Up</a></li>
                <li><a class="dropdown-item" href="./crash course/React Rapid Run/index.php">React Rapid Run</a></li>
                <li><a class="dropdown-item" href="./crash course/Scratch Programming for Kids/index.php">Scratch Programming for Kids</a></li>
                <li><a class="dropdown-item" href="./crash course/UI & UX Design Crash Course/index.php">UI/UX Design</a></li>
                <li><a class="dropdown-item" href="./crash course/Web Development/index.php">Web Development</a></li>

                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="./student-signup/index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Enquiry Now
                  </a>
                </li>
              </ul>
          </li>

          <li><a href="./tution/index.php">Tution</a></li>

        </ul>
      </nav>
      <div class="header-buttons">
        <a href="./tutor/index.php" class="free-lms">Become a Tutor</a>
        <a href="./franchaise/index.php" class="franchaise">Franchise</a>
        <a href="./student-login/index.php" class="login-btn"> Student Log In</a>
        <a href="./student-signup/index.php" class="signup-btn">Student Sign Up</a>
      </div>

    </div>
  </header>

  <!-- Mobile Navigation Bar -->
  <div class="mobile-nav">
    <div class="mob-section">
        

      <img src="./images/logo.jpg" alt="nskc-academy" width="120px" style="object-fit: cover;">
      
      <!-- Second Toggle Button -->
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
        aria-controls="offcanvasWithBothOptions"><img src="./images/menu-bar.png" width="36px"></button>

    </div>



    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
      aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><img src="./images/logo.jpg"
            width="50px">&nbsp;&nbsp;NSKC ACADEMY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <div class="header-mob-link">
          <a href="./course/index.php">&nbsp;<i class="fa-solid fa-ranking-star"></i>&nbsp;&nbsp;Skill Course</a>
          <a href="./crash course/index.php">&nbsp;<i class="fa-solid fa-book"></i>&nbsp;&nbsp;Computer Course</a>
          <a href="./tution/index.php"><i class="fa-solid fa-chalkboard-user"></i>&nbsp;Tution Center</a>
          <a href="./care+/index.html">&nbsp;<i class="fa-solid fa-baby"></i>&nbsp;&nbsp;Day Care</a>
        </div>
        <div class="header-mob-buttons">
          <a href="./tutor/index.php" class="free-lms">Become a Tutor</a>
          <a href="./franchaise/index.php" class="franchaise">Franchise</a>
          <a href="./student-login/index.php" class="login-btn">Student Log In</a>
          <a href="./student-signup/index.php" class="signup-btn">Student Sign Up</a>
        </div><br>
        <p><i class="fa-solid fa-location-dot"></i> &nbsp;Head Office : Kovilpatti, Thoothukudi.</p>
        <p><i class="fa-solid fa-phone"></i> &nbsp; 94866 59676 </p>
        <br>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.063268870648!2d77.70126937483448!3d9.148758790917416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06a59ba7dc7205%3A0x4c0343ced252ab91!2sNethrashree%20kids%20%26%20cultural%20academy!5e0!3m2!1sen!2sin!4v1733131377344!5m2!1sen!2sin"
          width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

  </div>






<div class="parent">

    <div class="child1">
        <div class="left-child1">
            <p class="learn">Online Academic Tuition for <span class="advance">LKG</span> to <span class="career">12th Standard</span></p>
            <p class="sub-learn">Take your career to the next level! Join our online tuition program and learn from experienced mentors who’ll help you strengthen your skills and perform better at work.</p>
            <button class="start-btn" onclick="join_now()">Get Start Now</button>
        </div>

        <div class="right-child1">
            <img src="./images/Progress.png" alt="">
        </div>
    </div>

    <div class="child3">
        <p class="access">Access your Class From <span class="anywhere">Anywhere</span></p>

        <div class="sub-child3">
            <div class="left-child3">
                <p class="child3-head">A Group Session Happening Now</p>
                <img src="./images/left-child3.PNG" alt="">
                <p class="child3-sub-head">Exciting group session happening now! Connect with expert mentors and fellow learners in our online tuition program to strengthen your skills and achieve academic success together.</p>
            </div>
            <div class="right-child3">
                <p class="child3-head">An Ongoing Private Class</p>
                <img src="./images/right-child3.PNG" alt="">
                <p class="child3-sub-head">Join our ongoing private online classes! Get personalized attention, flexible timing, and expert guidance to boost your skills and achieve success in your learning journey.</p>
            </div>
        </div>
    </div>

    <div class="child4">
        <p class="access">Hear Directly From Our<span class="learners">Learners</span></p>

        <div class="main-car">
                <div class="carousel" mask>
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Aravind</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>

                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>         
                    
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>
                    
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>
                    
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>
                    
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>                    
                    
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>      
                    
                      <article class="testimonial">
                          <img src="https://img.icons8.com/?size=100&id=38968&format=png&color=000000" alt="" class="quote">
                          <p>I was struggling to transition from print to digital design, and I often felt overwhelmed by all the new tools and concepts. But Olcus Academy’s courses guided me step by step and helped me refine my UI/UX skills with clear explanations.</p>
                          <div class="author">
                          <img src="https://img.icons8.com/?size=100&id=23241&format=png&color=000000" alt="User photo">
                          <div class="author-info">
                              <h4>Daniel Knight</h4>
                              <p>CEO Alpha Production</p>
                          </div>
                          </div>
                      </article>      
                </div>
        </div>
    </div>

    <div class="child5">
        <p class="access">Browse Our Popular<span class="course">Class</span></p>
        <p class="education">Education is the Process of  Acquiring Knowledge, Developing the Power of Judgement, and Prepare to live  a Standard Life</p>

        <div class="sub-child5">
            <div class="six-btn">
                <button>All Course</button>
                <button>PYQ</button>
                <button>Test Series</button>
                <button>Private</button>
            </div>

            <div class="eight-cards">
                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="image-container">
                        <img src="./images/multilingual.jpg" alt="Course Image">
                        <p class="recommended">Recommended</p>
                        <p class="bookmark">🔖</p>
                    </div>

                    <div class="course-content">
                        <h3>Code Like a Pro: Programming from</h3>
                        <p>At Vestibulum Pharetra Leo Nullam Quis Nibh Pellentesque.</p>
                        <p class="author">By&nbsp;:&nbsp;<span> Davinsen Alferado</span></p>
                        <p class="level">Level&nbsp;:&nbsp;<span>Beginner</span></p>
                        <div class="price">
                            <span class="old">$80.92</span>
                            <span class="new">$00.00</span>
                        </div>
                        <div class="tags">
                            <button>Events</button>
                            <button>Beginners</button>
                            <button>Free</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="child6">
        <p class="access">One Class.</p>
        <p class="access">Infinite<span class="anywhere">Possibilities.</span></p>

        <div class="sub-child6" onclick="join_now()">
            <img src="./images/PRIVATE.jpg" alt="">
        </div>

    </div>



    <div class="full-form">

      <!--first form start -->
      <div class="form-1" id="form-sheet-1">

          <button id="cancel-1" onclick="cancel_1()">X</button>
          
          <form class="row g-3" action="" method="POST">
                <h5 style="text-align: center;">ENQUIRY NOW</h5>

                <div class="col-md-6">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name">
                </div>

                <div class="col-md-6">
                    <label for="inputClass" class="form-label">Class</label>
                    <input type="text" class="form-control" id="inputClass" name="class">
                </div>

                <div class="col-md-12">
                    <label for="inputPhone" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" id="inputPhone" name="mobile">
                </div>

                <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="mail">
                </div>

                <div class="col-md-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address">
                </div>

                <div class="col-md-12">
                    <label for="inputState" class="form-label">Select Your Tuition Type</label>
                    <select id="inputState" class="form-select" name="tuition">
                      <option selected>Choose...</option>
                      <option value="Group Tuition">Group Tuition</option>
                      <option value="Private Tuition">Private Tuition</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="submit-1">Submit</button>
                </div>
          </form>

      </div>
      <!--first form end -->

    </div> 

  </div>
  <!-- parent end -->
    
    
    <footer>
      <div class="footer-container">
        <div class="footer-section">
          <h4>Explore More</h4>
          <ul>
            <li><a href="./care+/index.html">Day Care</a></li>
            <li><a href="./course/index.php">Skill Development</a></li>
            <li><a href="./tution/index.php">Tution</a></li>
            <li><a href="./crash course/index.php">Crash Course</a></li>
            <li><a href="./quiz/index.php">Online Mock Test</a></li>
            <li><a href="./free/index.php">Free Classes</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>NSKC'S</h4>
          <ul>
            <li><a href="./about/index.php">About Us</a></li>
            <li><a href="./franchaise/index.php">Franchise</a></li>
            <li><a href="./tutor/index.php">Become a Tutor</a></li>
            <li><a href="./tutor-profile/index.php">Our Creators</a></li>
            <li><a href="./internship/index.php">Internship</a></li>
            <li><a href="./store/index.php">Store</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Others</h4>
          <ul>
            <li><a href="./terms/index.php">Terms & Conditions</a></li>
            <li><a href="./privacy/index.php">Privacy & Policy</a></li>
            <li><a href="./testimonial/index.php">Testimonials</a></li>
            <li><a href="./faq/index.php">FAQ</a></li>
            <li><a href="./customer/index.php">Customer Support</a></li>
            <li><a href="./blog/index.php">Blog</a></li>
            <li><a href="./site map/index.php">Sitemap</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Contact Us</h4>
          <ul>
            <li><a href="tel:94866 59676"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;94866 59676</a></li>
            <li><a href="mailto:nskcacademy@gmail.com"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;nskcacademy@gmail.com</a></li>
            <li><a href="#"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;<b>Head Office</b><br>85/1/R, South Bazzar, Kovilpatti.</a></li>
            <li><a href="#"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;<b>Branch Office</b><br>Kalugumalai, Thiruvengadam.</a></li>
            
            
          </ul>
        </div>


        <div class="footer-bottom">
          <p>© NSKC 2024</p>
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100077476391143"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/nethrashree_academy/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/@nskcacademy/"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </footer>

</body>



<script>
        var x = 1;
        function join_now()
        {
            var a = document.getElementById("form-sheet-1");
          
            if(x%2 == 0)
            {
              a.style.display = "none";
            } 
            else 
            {
              a.style.display = "flex";
            }
            x = x + 1;
        }

        function cancel_1()
        {
            var b = document.getElementById("form-sheet-1");
            b.style.display = "none";
            console.log(x);
            x = x + 1;
        }
</script>


<script>
        all_btn = document.getElementById('alls');
        math_btn = document.getElementById('math');
        language_btn = document.getElementById('language');
        physical_btn = document.getElementById('physical');

        function hideAllCourses() {
          document.querySelectorAll(".course-card").forEach(c => c.classList.add("hidden"));
        }

        function show_all() {
          document.querySelectorAll(".course-card").forEach(c => c.classList.remove("hidden"));

          all_btn.style.backgroundColor = "#f39c12";//changing btn
          all_btn.style.color = "white";//changing btn
          all_btn.style.border = "none";//changing btn

          math_btn.style.backgroundColor = "transparent";
          math_btn.style.color = "black";
          math_btn.style.border = "1px solid black";

          language_btn.style.backgroundColor = "transparent";
          language_btn.style.color = "black";
          language_btn.style.border = "1px solid black";

          physical_btn.style.backgroundColor = "transparent";
          physical_btn.style.color = "black";
          physical_btn.style.border = "1px solid black";
        }

        function show_maths() {
          hideAllCourses();
          document.querySelectorAll('[data-category="maths"]').forEach(c => c.classList.remove("hidden"));

          all_btn.style.backgroundColor = "transparent";
          all_btn.style.color = "black";
          all_btn.style.border = "1px solid black";
          
          math_btn.style.backgroundColor = "#f39c12";//changing btn
          math_btn.style.color = "white";//changing btn
          math_btn.style.border = "none";//changing btn

          language_btn.style.backgroundColor = "transparent";
          language_btn.style.color = "black";
          language_btn.style.border = "1px solid black";

          physical_btn.style.backgroundColor = "transparent";
          physical_btn.style.color = "black";
          physical_btn.style.border = "1px solid black";
        }

        function show_language() {
          hideAllCourses();
          document.querySelectorAll('[data-category="language"]').forEach(c => c.classList.remove("hidden"));

          all_btn.style.backgroundColor = "transparent";
          all_btn.style.color = "black";
          all_btn.style.border = "1px solid black";

          math_btn.style.backgroundColor = "transparent";
          math_btn.style.color = "black";
          math_btn.style.border = "1px solid black";

          language_btn.style.backgroundColor = "#f39c12";//changing btn
          language_btn.style.color = "white";//changing btn
          language_btn.style.border = "none";//changing btn

          physical_btn.style.backgroundColor = "transparent";
          physical_btn.style.color = "black";
          physical_btn.style.border = "1px solid black";
        }

        function show_physical() {
          hideAllCourses();
          document.querySelectorAll('[data-category="physical"]').forEach(c => c.classList.remove("hidden"));
          
          all_btn.style.backgroundColor = "transparent";
          all_btn.style.color = "black";
          all_btn.style.border = "1px solid black";

          math_btn.style.backgroundColor = "transparent";
          math_btn.style.color = "black";
          math_btn.style.border = "1px solid black";

          language_btn.style.backgroundColor = "transparent";
          language_btn.style.color = "black";
          language_btn.style.border = "1px solid black";
          
          physical_btn.style.backgroundColor = "#f39c12";//changing btn
          physical_btn.style.border = "none";//changing btn
          physical_btn.style.color = "white";//changing btn

        }

        // window.onload = show_all;
</script>



</html>