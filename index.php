<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>Personal Portfolio Website</title>
</head>
<body>



    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><i class="fas fa-file"></i>   Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </div>
    </nav>







    <!-- Home Section Start-->
    <section class="home" id="home">
    <div class="max-width">
    <div class="home-content">
        <div class="text1">Hello, my name is</div>
        <div class="text2">Sailesh Gopalakrishnan</div>
        <div class="text3">And I'm a <span>Student at Nanyang Technological University</span></div>
        <a href="#" class = "cv-btn">Download CV</a>
        </div>
    </div>
    </section>  
    





    <section id="about">
    <div class="about-text">
            <h1>About Me</h1>
            <h2>Studying at Nanyang Technological University</h2>
            <br>
            <p>I am a student studying Electrical and Electronic Engineering in Nanyang Technological University (NTU) in Singapore. Here, we learn the concepts of electrical engineering as well as the applications of it, and as for me, I am going to be specialising in Computer Engineering starting next year, during my third year.</p>

    </div>

        <div class="about-model">
            <img src="images/ntulogo.png" alt="">
        </div>
    </section>







    <section id="skills">
        <div class="skill-text">
            <div class="skill-heading">
                <span>My Skills</span>
                <h2>My Expertise</h2>
            </div>
            <div class="s-box-container">
             <!--skill-box-->
             <div class="skill-box">
                 <!--icon-->
                 <div class="s-box-icon">
                    <i class="fab fa-html5"></i>
                 </div>
                 <div class="s-box-text">
                     <strong>Hyper Text Markup Language(HTML)</strong>
                     <p>I have a few months of experience in HTML, and this is my first major project.</p>
                 </div>
             </div>  


              <!--skill-box-->
              <div class="skill-box">
                <!--icon-->
                <div class="s-box-icon">
                   <i class="fab fa-css3-alt"></i>
                </div>
                <div class="s-box-text">
                    <strong>Cascading Style Sheets(CSS)</strong>
                    <p>Learnt together with HTML, this is the first major project I am working on for myself. </p>
                </div>
            </div>  


             <!--skill-box-->
             <div class="skill-box">
                <!--icon-->
                <div class="s-box-icon">
                   <i class="fab fa-aws"></i>
                </div>
                <div class="s-box-text">
                    <strong>Amazon Web Services(AWS)</strong>
                    <p>Have some self-taught knowledge of AWS, and am planning to take the AWS Solutions Architect Associate certification in July.</p>
                </div>
            </div>  
             
             
            </div>
        </div>

        <div class="skill-img">
                <img src="images/awslogo.jpg" alt="" id="">
                <img id="htmllogo" src="images/htcs.jpg" alt="">
            </div>
        
        </div>
    </section>






    <section class="contact">
        <div class="content">
            <h2>Contact Me</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit eum sunt eligendi quam laudantium aut voluptatibus similique sint iure delectus dicta cum, a reprehenderit, totam eius itaque voluptatum. Debitis, iste.</p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>50 Nanyang Ave, <br>639798</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-phone-volume"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+65-98507240</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="far fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>sailsg111@gmail.com</p>
                    </div>
                </div>
            </div>

            
            <div class="contactForm">
                <form id="contact-form" method="POST", action="contact-form-handler.php">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name = "" required = "required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name = "" required = "required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required = "required"></textarea> 
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                       <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    

</body>
</html>