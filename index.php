<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> medicare hospital website </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>MEDICARE</strong> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="img/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="img/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Medicare Hospital, is a multi-super specialty tertiary care healthcare facility, delivering world-class healthcare, at an optimum cost. Our aim is to deliver Affordable, Accessible, and Accurate healthcare to all sections of society, without bias. With prominent doctors from across the globe all under one roof, the cutting-edge infrastructure of global standards in radio-diagnosis, research, and clinical practices, and the latest revolutionary and technological advancements,</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Monthly we organise free checkups for people.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Ambulance are just a call away.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Highly efficient and experienced doctors are here.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Every type of medicines are available.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Proper bed facilities are here.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Patients are under proper.</p>
            
        </div>

    </div>

</section>

<!-- services section ends -->


<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img/doc-1.jpg" alt="">
            <h3>Dr. Anju Chhabra</h3>
            <span>IVF & Infertility</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="img/doc-2.jpg" alt="">
            <h3>Dr. Avinash Pal </h3>
            <span>Orthopaedic </span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-3.jpg" alt="">
            <h3>Dr. Deepak Chhabra</h3>
            <span>Senior Pediatrician</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-4.jpg" alt="">
            <h3>Dr. Vinod Kumar</h3>
            <span>Child specialist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-5.jpg" alt="">
            <h3>Dr. Deepali Jain</h3>
            <span>Dental</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-6.jpg" alt="">
            <h3>Dr. Jitendra Singh Bishnoi</h3>
            <span>Nephrology</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="img/doc-7.jpg" alt="">
            <h3>Dr. Rashika Chand</h3>
            <span>Consultant Pathology</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="img/doc-8.jpg" alt="">
            <h3>Dr. Sanjay Kumar</h3>
            <span>Physician</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="img/doc-9.jpg" alt="">
            <h3>Dr. Sourabh Kumar Jain</h3>
            <span>Neurosurgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="img/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
     
         <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img/picc.jpg" alt="">
            <h3>Prajakta roy</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Recently visited health check up department of Medicare Hospital for a whole body check up. The entire process from check in to the end was seamless. The staff at the health check department was courteous, helpful and very attentive. I would highly recommend this hospital to anyone looking for something similar services.</p>
        </div>

        <div class="box">
            <img src="img/picc.jpg" alt="">
            <h3>Lalta gupta</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">It's very well mannered staff good coordination with patients. They assisted very well and taken good care towards patients. Overall experience is satisfactory.</p>
        </div>

        <div class="box">
            <img src="img/picc.jpg" alt="">
            <h3>Ayush sharma</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">All the employees were professional and so very kind. I like that they listen to me and seem genuinely caring about my problems.I was treated with respect and the staff had a professional attitude. I would recommend Well-Key to anyone who is looking for an Urgent Care and already have. Everyone was great!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="img/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 august, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Dr.Varun </a>
                </div>
                <h3>Dengue Haemorrhagic Fever: Symptoms, Treatment, and Prevention</h3>
                <p>Dengue is one of the most common types of mosquito-related illnesses. There is a rise in cases, especially during and after the monsoon season. It is a viral infection transmitted by the Aedes aegypti mosquito, and some of its key features are high fever, joint stiffness, body pain, lack of appetite and low platelet count.</p>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 august, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Dr.Akash </a>
                </div>
                <h3>How to Manage Medical Emergencies at Home</h3>
                <p>Medical emergencies can occur anywhere and at any time. Timely medical aid can make a difference in patient outcomes. At times, it may not be possible to get trained medical help, but knowledge about first aid can definitely help bridge this time gap.</p>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 25 august, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Dev mukherji </a>
                </div>
                <h3>Understanding Stroke: Recognising Signs and Taking Preventive Measures</h3>
                <p>A stroke, also known as a brain attack, occurs when the blood supply to a section of the brain is restricted or when a blood vessel in the brain ruptures, which leads to temporary or permanent damage to specific areas of the brain. </p>
                
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 august, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Dr.Alka  </a>
                </div>
                <h3>How to Increase White Blood Cell Count</h3>
                <p>White blood cells (WBCs) also known as leukocytes play a vital role in defending our bodies against infections and diseases. If your white blood cell count is low, it may weaken your immune system and make you more susceptible to illnesses. </p>
                
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 august, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Dr.Megha </a>
                </div>
                <h3>The Elderly and Monsoon Challenges: Caring for Senior Citizens</h3>
                <p>As the monsoon season arrives, it brings relief from scorching heat but also poses unique challenges, especially for senior citizens. The elderly are more susceptible to certain health risks during this time due to weakened immunity and age-related health conditions.</p>
                
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 august, 2023</a>
                    <a href="#"> <i class="fas fa-user"></i> by Dr.parul sharma </a>
                </div>
                <h3>Eye Flu: Symptoms, Prevention, and At-Home Care</h3>
                <p>Eye fluid or conjunctivitis is a highly contagious eye infection affecting many. Conjunctivitis is usually viral and may have superadded bacterial or allergic eye disease.</p>
                
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> medicare@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> medihelp@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> abc,xyz</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit">| all rights reserved |</div>

</section>

<!-- footer section ends -->

<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>


