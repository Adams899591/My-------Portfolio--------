<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
     <!-- General link --------- -->
     <link rel="stylesheet" href="Portfolio.css">
        <!-- -------------BOOSTRAP----LINK-------- -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <!--------frontsome icon--------  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ------AOS link -------- -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


    
     <!-- --------------NAVBAR-----FROM------BOOSTRAP------- -->
     <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span style="color: blue; font-size: larger; font-weight: bold;">Partfo</span>lio.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- ---------------------------------- -->
          <div class="offcanvas offcanvas-start w-auto" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h3 class="offcanvas-title" id="offcanvasNavbarLabel">    <span style="color: orangered;">W</span>eb <span style="color:blue;">Dev</span>eloper.</h3>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>


            <div class="offcanvas-body">
                <!-- ---------Contaim my image--------- -->
                <img src="Image/Usman Adams.jpg" alt="Image" id="MY-image" > <br>
                <h3>Yahaya Usman Adams</h3>
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-1">
                <li class="nav-item">
                  <a class="nav-link " href="Portfolio.html"><b> <i class="fa fa-address-book" aria-hidden="true" style="color: blue;"></i> &nbsp;&nbsp; About Me</b></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Projects.html"><b>  <i class="fa-regular fa-share-from-square" style="color: orangered;"></i> &nbsp;&nbsp; Projects</b></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Skills.html"><b> <i class="fa-solid fa-desktop" style="color: green;"></i> &nbsp;&nbsp; Skills</b></a>
                  </li>

                <li class="nav-item">
                    <a class="nav-link active"  aria-current="page" href="Contact Me.php"><b> <i class="fa-brands fa-viber" style="color: black;"></i> &nbsp;&nbsp; Contact Me</b></a>
                </li>

              </ul>
           
            </div>
          </div>
        </div>
      </nav>
  
       <!-- --------------NAVBAR-----FROM------BOOSTRAP-------END --> <br><br><br><br><br>


 <div class="container">
         <h2 class="border-start border-primary border-3 p-1"><b>Contact Me</b></h2> <br>

        <span  data-aos="fade-up"   data-aos-duration="5000"            id="paragraph">i'm open to connecting, collborating, or just having a good conversation about tech and development. <br> Feel free to reach out!</span> <br><br>

        <label data-aos="fade-up"   data-aos-duration="5000"            id="paragraph" for=""><b>Email:</b> &nbsp; &nbsp; &nbsp; [ <u>Usmanadams551@gmail.com</u> ]</label> <br>
        <label data-aos="fade-up"   data-aos-duration="5000"            id="paragraph"  for=""><b>Location:</b> &nbsp; &nbsp; &nbsp;  Kastina State, Nigeria </label><br><br>
        <label data-aos="fade-up"   data-aos-duration="5000"            id="paragraph" for=""><b>Download My CV:</b></label><br>
       <!-- ----------download my cv--------- -->
        <a href="my CV/Usman_Adams_CV.docx" download="my CV/Usman_Adams_CV.docx"><button class="btn btn-primary">Download CV</button></a><br><br>

        <label id="paragraph"  for=""><b>Social:</b></label><br> 
        <!-- -------icon under social----------- -->
         <div data-aos="fade-up"   data-aos-duration="5000">
                <i class="fa-brands fa-github"              style="font-size: 30px;"></i>
                <i class="fa-brands fa-linkedin"             style="font-size: 30px; color: blue;"></i>
                <a href="http://www.facebook.com/Usman Adams" target="_blank"><i class="fa-brands fa-facebook"  style="font-size: 30px;"></i></a>
                <i class="fa-brands fa-twitter"              style="font-size: 30px; color: green;"></i>
                <a href="tel: +2349018827571"><i class="fa-brands fa-viber"            style="font-size: 30px; color: black;"></i></a>
                <i class="fa-brands fa-square-instagram"     style="font-size: 30px; color: palevioletred;"></i>
                <a href="https://wa.me/2349018827571" target="_blank"> <i class="fa-brands fa-whatsapp"           style="font-size: 30px; color: green;"></i></a>
        </div>
        <!----------- form to get in touch----------- -->
     <br><br>
      <label id="paragraph" for=""><b>Contact Form:</b></label> <br><br>

<!-- --------the form ------------ --> 
     <form id="FormSubmit" action="portfolio view.php" method="post" data-aos="fade-up"   data-aos-duration="5000" >
        <!-- ---input---- -->
        <div class="form-floating w-75">
            <input id="Fullname" class="form-control form-control-sm"  type="text" placeholder="000000" name="FullName" >
            <label for=""><b>Full Name</b></label>
        </div><br>

        <!-- ---input---- -->
        <div class="form-floating w-75">
            <input id="Email" class="form-control form-control-sm"  type="text" placeholder="000000" name="Emali">
            <label for=""><b>Email</b></label>
        </div><br>

        <!-- ---input---- -->
        <div class="form-floating w-75">
            <textarea id="Massage" class="form-control form-control-sm"  style="width: 400px; height: 100px;" name="Message"  placeholder="000000"></textarea>
            <label for=""><b>Message</b></label>
        </div>

        <br>
        <p id="DisplayMassage"></p>

        <?php
                 if (isset($_GET["x"])) {
                  echo "<p style='color: red;'> {$_GET['x']} </p>";
                 }
                 if (isset($_GET["z"])) {
                  echo "<p style='color: red;'> {$_GET['z']} </p>";
                 }
                 if (isset($_GET["y"])) {
                 echo "<p style='color: red;'> {$_GET['y']} </p>";
                 }

              //  if (isset($_GET["n"])) {
              //   echo "<p style='color: green;'> {$_GET['n']} </p>";
              //  }
        
        ?>
        <button id="bntSubmit" class="btn btn-primary">Submit</button>
      
     </form>

       

</div>
  <br><br><br><br><br><br>
    





  <!-----------AOS ICON-------------  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>



    <!-- -------------BOOSTRAP----LINK-------- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!-- ----CSS----- -->
<style>
#DisplayMassage{
  font-size: large;
}
</style>

<!-- ---------javascript---------- -->
 <script>
    const Fullname =  document.getElementById("Fullname");
    const Email = document.getElementById("Email");
    let Massage = document.getElementById("Massage");
    document.getElementById("Massage")
     document.getElementById("bntSubmit");
    const DisplayMassage = document.getElementById("DisplayMassage");
   const form = document.getElementById("FormSubmit");

    // when th submit butten is clicked 
    document.getElementById("bntSubmit").onclick = function () {
              //  -----privent the form from refreaching the page --------
                  event.preventDefault();

                 
      if (Fullname.value == "" || Email.value == "" || Massage.value == "") {  
        DisplayMassage.style.color = "red"                              // ---------code to validate first name --------
        DisplayMassage.textContent = "This field can not be empty"
      }
      else if(!Fullname.value.includes(" ") ){
        DisplayMassage.style.color = "red" 
        DisplayMassage.textContent = "Please enter your fullname with a space between first name and last name. "
      }
      else if (!Email.value.includes("@") ) {   
        DisplayMassage.style.color = "red"                                        // // ---------code to validate Email -----
        DisplayMassage.textContent = "Email must contain `@` symbole. "
      }else{
        DisplayMassage.style.color = "green"

                   DisplayMassage.textContent = "Checking input... "
            
            setTimeout(() => {
                   DisplayMassage.textContent = "Verifying format... "
            }, 4000); 

            setTimeout(() => {
                   DisplayMassage.textContent = "Validating information... "
            }, 6000);

            setTimeout(() => {
                   DisplayMassage.textContent = "Confirming with server... "
            }, 8000);

            setTimeout(() => {
                   DisplayMassage.textContent = "Finalizing process... "
            }, 12000);

            setTimeout(() => {
              // Massage.value = ""
              // Fullname.value = " "
              // Email.value = " "
                   DisplayMassage.textContent = "All information Surcessfully accepted! " 
            }, 14000);

            setTimeout(() => {
                    //  DisplayMassage.textContent = ""
                    form.submit();
            }, 18000); 

         
           
      }                         
    
      
    }
 </script>


<?php





?>