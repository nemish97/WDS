<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Web and Digital Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, scale=1">
    <meta name="description" content="One stop solution for all your digital needs." />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images\logo.png">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body  >


    <div id="myModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Subscribe our Newsletter</h4>
              </div>
              <div class="container">
                  <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                  
                  <div class="col-sm-6">
                      <form>
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Name">
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Email Address">
                              </div>
                              <button type="submit" class="button">Subscribe</button>
                          </form>
                  </div>
                  
              </div>
          </div>
      </div>
    </div>
    <script>

      $(document).ready(function(){
        setTimeout(function() {
        $('#myModal').modal();
      }, 1500);
      });
    </script>



    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar" id="myNavbar2" style="background:transparent; border-color: white;" >
            <span class="icon-bar" style="background-color: white;"></span>
            <span class="icon-bar" style="background-color: white;"></span>                      
            <span class="icon-bar" style="background-color: white;"></span>                      
          </button>
          <a class="navbar-brand" href="#myPage"><img src="images/newlogo.jpg" style="width:135px;height:30px ; position: absolute; top: 10px; bottom: 10px;"></a>
        </div>
        <nav class=" collapse navbar-collapse back" id="myNavbar">
          <ul class="nav navbar-nav navbar-right " >
            <li><a class="active" href="#myPage" onclick="w3_close()"> HOME</a></li>
            <li><a href="about.html" > ABOUT US</a></li>
            <li><a href="services.html" > SERVICES</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
          </ul>
        </nav>
      </div>
    </nav>



    <div class="site-blocks-cover overlay"  data-aos="fade" style="position: relative;">
        <img class="scroll" id="myPage" src="images/image.jpg" alt="Chania" style="width: 100%; height: 100%;  ">
        <div data-aos="zoom-in" data-aos-delay="0" style="position: absolute;  top: 40%; left:absolute;margin-left: 5%; ">
          <div style="width:relative;background: white; opacity: 85%; ">
            <span class="typed-words1" style="text-align: left; color: black; font-size: 5vmin;">WEB AND DIGITAL SOLUTIONS</span><br>
          </div>
          <div style="width:relative;opacity: 85%; background-color: rgba(0,0,0,0.5);  z-index: 2; font-size: 2.5vmin; ">
            <span class="typed-words" style="text-align: left; color: white;"></span>
          </div>
          <div class="container ">
            <center >
             <button class="button" data-toggle="modal" data-target="#myModal1"data-dismiss="modal">Let's Get Started</button>  
            </center>
          </div>
         </div>
    </div>  

    <script src="js/typed.js"></script>
    <script>
      var typed = new Typed('.typed-words', {
      strings: ["One stop Solution <br>to all your digital needs"],
      typeSpeed: 50,
      startDelay: 500,
      showCursor: true
      });
    </script>

    <div class="modal " id="result" >
      <div class="modal-dialog ">
        <div class="modal-content" style="background: url(images/background.jpg); color: white;">
          <!-- <div class="modal-header" style="background: -webkit-linear-gradient(left,  #0d4d61 ,#06232b );">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" >Lets Get Started</h4>
          </div> -->
          <div class="modal-body  "> thank you
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog " >
        <div class="modal-content" style="background: url(images/background.jpg); color: white;">
          <!-- <div class="modal-header" style="background: -webkit-linear-gradient(left,  #0d4d61 ,#06232b );">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" >Lets Get Started</h4>
          </div> -->
          <div class="modal-body  ">
            
            <form id="modalform" action="action_page.php" method="post" style="background: transparent; ">
              
                <!-- One "tab" for each step in the form: -->
                
                <div class="tab">
                  <p style="text-align: center; font-size: 20px; color: white; font-weight: bold;">Is Your Business Online Yet?</p>
                  <select class="form-control" name="online" style="margin-bottom: 20px;">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <!-- <input style="margin-bottom: 20px;" class="form-control"  name="NAME" placeholder="Name" type="text"  pattern="[a-z]*[A-Z]*" title="Numbers or Special Characters are not allowed" required>
                  <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
                </div>
                <div class="tab">
                  <h3>Which Services Are You Looking For?</h3>
                      <input type="checkbox" name="Service[ ]" value="Website development">&nbsp;Website development<br>
                    
                    
                      <input type="checkbox" name="Service[ ]" value="Website design">&nbsp;Website design<br>
                  
                    
                      <input type="checkbox" name="Service[ ]" value="Website maintenance">&nbsp;Website maintenance<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Website optimization">&nbsp;Website optimization<br>
                      <input type="checkbox" name="Service[ ]" value="SEO">&nbsp;SEO<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Ecommerce website">&nbsp;Ecommerce website<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Web hosting">&nbsp;Web hosting<br>
                    
                      <input type="checkbox" name="Service[ ]" value="PPC">&nbsp;PPC<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Google business listing">&nbsp;Google business listing<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Social media management">&nbsp;Social media management<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Blog">&nbsp;Blog<br>
                    
                      <input type="checkbox" name="Service[ ]" value="Graphic design">&nbsp;Graphic design<br><br>
                
                </div>
                <div class="tab">
                  <h3 >Tell Us A Little More About Your Business</h3>
                  <input style="margin-bottom: 20px;" class="form-control"  name="BusinessName" placeholder="Name of the Business" type="text" >
                  <input style="margin-bottom: 20px; " class="form-control"  name="BusinessDescription" placeholder="Short Description" type="text" >
                  <input style="margin-bottom: 20px;" class="form-control"  name="URL" placeholder="URL to existing Site (Type No if not applicable)" type="text"  >
                </div>
                <div class="tab">
                  <h3>Want Us to Know Anything Else?</h3>
                  <textarea style="margin-bottom: 20px;" class="form-control"  name="extraInfo" placeholder="Type Here If Applicable" type="text" rows="5" ></textarea>
                  
                </div>
                <div class="tab">
                  <h3>Contact Details</h3>
                  <input style="margin-bottom: 20px;" class="form-control"  name="Name" placeholder="Your Name" type="text" pattern="[a-zA-Z\s]*" title="Numbers or Special Characters are not allowed" required>
                  <input style="margin-bottom: 20px;" class="form-control"  name="Email" placeholder="Your Email ID" type="email" required>
                  <input style="margin-bottom: 20px;" class="form-control"  name="Contact" placeholder="Your Contact Number" type="text" pattern="[6-9]{1}[0-9]{9}" required  maxlength="10" >
                </div>
                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button type="button" class="button1" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="button1" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    <button type="submit" class="button1" id="submit" name="submit" value="submit"  style="display: none;">Submit</button>
                  </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
            </form>

          </div>
          
        </div>
        
      </div>
    </div>
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.transition = "all 2s";
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("submit").style.display = "block";
          document.getElementById("nextBtn").style.display = "none";
          document.getElementById("submit").style.display = "inline";
        } else {
          document.getElementById("submit").style.display = "none";
          document.getElementById("nextBtn").style.display = "block";
          document.getElementById("nextBtn").innerHTML = "Next";
          document.getElementById("nextBtn").style.display = "inline";

        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("modalform").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
    </script>


    <div class="heading title" data-aos="zoom-in" style="margin-top: 5%">
      Who Are We?
    </div>
    <div class="underline center-block" data-aos="zoom-in"></div>

    <div class="container block " data-aos="zoom-in" id="waw" >
      <p>WDS is a one stop solution for all your digital needs.We expertise in website development, website management, website optimization, Smart engine optimization (SEO), Ecommerce website, Social media handling, Graphic design. We blend the latest technologies with our experience in the market to bring out a product that is perfect for your need and sky rocket your business. With a hard working team and bunch of experienced craftsman, we deliver what is best for your business. 
      </p>
    </div>

    <div class="container "  >
      
        <div class="heading title" data-aos="zoom-in"  >
           Our Services
        </div>
        <div class="underline center-block" data-aos="zoom-in"></div>

        <div class="col-sm-4 tile " data-aos="zoom-in">
          <div id= "1" class="focused hovertest ">
            <img src="images/web development.png" alt="Shreyansh"class="home-images">
            <div class="container">
              <h2  class="heading">Website development</h2>
              <p>With latest technologies and experienced methodologies, we help you create a best in class website to ensure that your content reaches to maximum customers.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 tile "data-aos="zoom-in" >
          <div id= "2" class="focused hovertest ">
            <img src="images/seo.png" alt="Shreyansh"class="home-images">
            <div class="container">
              <h2  class="heading">SEO</h2>
              <p>Smart engine optimization is the heart of all online marketing. We provide best in class service to ensure that you reach wider audience and your content is always listed on the top</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 tile" data-aos="zoom-in">
          <div class="focused hovertest">
            <img src="images/ecommerce.png" alt="Shreyansh"class="home-images">
            <div class="container">
              <h2 class="heading">Ecommerce website</h2>
              <p >We help you to migrate your offline store to a bigger and wider online market by creating e-commerce website for you so that your product can reach anywhere in the world</p>
            </div>
          </div>
        </div>
    </div>


     <div class="container " style=" margin-bottom: 10%;" >    
        <div class="col-sm-4 tile "data-aos="fade-up" >
          <div class="focused hovertest">
            <img src="images/graphic designing.png" alt="Shreyansh"class="home-images">
            <div class="container">
              <h2 class="heading">Graphic design</h2>
              <p >Graphics are the best way to quickly interact with the audience. From Logo designing to smallest of icons on your website, from flyers to brochures, we have got it all for you.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 tile" data-aos="fade-up">
          <div class="focused hovertest">
            <img src="images/ppc.png" alt="Shreyansh" class="home-images">
            <div class="container">
              <h2 class="heading">PPC</h2>
              <p >We help you advertise your brand on Pay-per-click basis on leading marketplaces like Google, Facebook, LinkedIn, Instagram as per your business requirement.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 tile hideme" data-aos="fade-up">
          <div class="focused hovertest">
            <img class="home-images" src="images/digital marketing.png" alt="Shreyansh">
            <div class="container">
              <h2 class="heading">Social media management</h2>
              <p >We help you manage your social media accounts with genuine and unique content so that you can reach larger audience. We help you analyse various factors to make your social media handle more interactive</p>
            </div>
        </div>
    </div>


     <div class="container ">
      <center>
       <a href="services.html" ><button class="button">VIEW ALL SERVICES</button></a>   
      </center>
    </div>
  </div>

     

   
    <div class="container" style=" margin-bottom: 10%;" >
        <div class="heading title">
           We Specialize In
        </div>
         <div class="underline center-block"data-aos="zoom-in"></div>
        <div class="col-sm-4 tile " data-aos="zoom-in"  >
          <!-- <div style=" box-shadow: 0px 0px 5px 0px #000; margin-right: 10px; border-radius: 1%;"> -->
          <div class="focused hovertest">
             <img src="images/stratergic planning.png" alt="Shreyansh"class="home-images">
              <div class="container ">
                <h2  class="heading">Business Stratergy</h2>
                <p>We come up with numerous ideas and strategies so that we can make your business grow like never before</p>
              </div>
          </div>
         <div style="height:100%;width: 2px; background-color: #6ec4d1;margin-bottom: 10px"></div>
        </div>

        <div class="col-sm-4 tile"data-aos="zoom-in" >
          <div class="focused hovertest">
         <img src="images/technology.png" alt="Shreyansh"class="home-images">
          <div class="container">
            <h2 class="heading">Technology</h2>
            <p>We are not far away from the latest technologies in the market so that your business is ready to boost up the speed for success.</p>
          </div>
        </div>
        </div>


        <div class="col-sm-4 tile" data-aos="zoom-in" >
          <div class="focused hovertest">
            <img src="images\User Experience.png" alt="Shreyansh"class="home-images">
            <div class="container">
              <h2 class="heading">Designing User Experience</h2>
              <p>We have expertise in creating best in class user experience for your target audience.</p>
            </div>
          </div>
        </div>
    </div>

    <div class="heading title" style="margin-top: 5%" data-aos="zoom-in">
     GET IN TOUCH WITH US
    </div>
    <div class="underline center-block" data-aos="zoom-in"></div>
    <div class="container " >
      <div class="panel-group col-sm-7" id="faqAccordion"data-aos="zoom-in">
        <div class="heading">
          FAQs
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a >Q: What is Lorem Ipsum?</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five <a href="http://jquery2dotnet.com/" class="label label-success">http://jquery2dotnet.com/</a> centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Why do we use it?</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Where does it come from?</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Where can I get some?</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                </div>
            </div>
        </div>
      </div>
      <!--/panel-group-->


      <div class="" style="padding: 10px 10px 10px;">
         <div class="row">
            <div class="col-sm-5"data-aos="zoom-in">
              <div id="sub" class="heading ">SEND YOUR QUERRIES</div>
              <div class="sub text-center" style="display:none; font-size: 20px;color:  #f43900; " id="thankyou" data-aos="fade-up">
                <p style="margin-bottom: -10px;">Thank you for contacting us!</p><p> We will get in touch with you within 24 hours.</p>
              </div>
                <form id="gform" action="https://script.google.com/macros/s/AKfycbxTg22yGmUFRXJ0f_3DXn_fNvXGlLxukDG3k-n7/exec" method="post" >
                  <div class="row">
                     <div class="col-sm-11 form-group" style="margin-bottom: 7px;">
                        <input class="form-control"  name="NAME" placeholder="Name" type="text" pattern="[a-z]*[A-Z]*" title="Numbers or Special Characters are not allowed" required>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-11 form-group" style="margin-bottom: 7px;">
                          <input class="form-control" name="EMAIL" placeholder="Email" type="email" required >
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-11 form-group" style="margin-bottom: 7px;">
                          <input class="form-control"  name="CONTACT" placeholder="Contact no. (9876543210)"  type="text" pattern="[7-9]{1}[0-9]{9}" required  maxlength="10" >
                      </div>
                  </div>
                
                  <div class="row">
                    <div class="col-sm-11 form-group" style="margin-bottom: 5px;">
                      <textarea class="form-control" name="COMMENT" placeholder="Comments (Optional)" type="text" rows="3" ></textarea>
                    </div>
                  </div>

                  <div class="text-center" > 
                     <button type="submit" class="button" style="padding-top: 3px; padding-bottom: 4px; padding-right: 10px; padding-left: 10px;width: 150px; letter-spacing: 1px;">SUBMIT</button>
                  </div><br>
                </form>
                  <div class="sub text-center" style="display:none; font-size: 20px;color:  #f43900; margin-top: 20px; margin-bottom: 30px;" id="loading" >
                    Sending your request.......
                  </div><br>
            </div>
          </div>
      </div> 
      <script src="js/aos.js"></script>
      <script src="js/main.js"></script>
    </div>
  </body>
</html>
 <!--  
    <div class="footer" >
        <div class="col-sm-3 " style="font-family: lato;  font-size: 13px; padding-bottom: 20px;">
             <a id="sitemap1" style="font-size: 16px;text-decoration: none; "><b> D'EXCELLENCE ACADEMY</b></a></br> 
            <a id="sitemap"  href="#about" style="text-decoration: none;">ABOUT US</a></br>
            <a id="sitemap"  href="#about" style="text-decoration: none;">TEAM</a>
         
        </div>

        <div class="col-sm-3" style="font-family: lato;  font-size: 13px;padding-bottom: 20px;">
            <a id="sitemap1" style="font-size: 16px;text-decoration: none; "><b> COURSES</b></a></br>
            <a id="sitemap"  href="nata.html" style="text-decoration: none;">ARCHITECTURE</a></br>
            <a id="sitemap"  href="nid.html" style="text-decoration: none;">DESIGN</a></br>
            <a id="sitemap"  href="nift.html" style="text-decoration: none;">FASHION</a></br>
            <a id="sitemap"  href="bfa.html" style="text-decoration: none;">FINE ARTS</a></br>
            
         
        </div>
      

       <div class="col-sm-3" style="font-family: lato;  font-size: 13px;padding-bottom: 20px;">
            <a id="sitemap1" style="font-size: 16px;text-decoration: none; "><b> GALLERY</b></a></br>
            <a id="sitemap"  href="performance.html" style="text-decoration: none;">PERFORMNCE</a></br>
            <a id="sitemap"  href="classroom.html" style="text-decoration: none;">CLASSROOM CULTURE</a></br>
            <a id="sitemap"  href="outofthebox.html" style="text-decoration: none;">OUT OF THE BOX</a></br>
            <a id="sitemap"  href="achievement.html" style="text-decoration: none;">ACHIEVEMENTS</a></br>         
        </div>

        <div class="col-sm-3" style="font-family: lato;  font-size: 13px;padding-bottom: 20px;">
          <a id="sitemap1" style="font-size: 16px;text-decoration: none; "><b> CONTACT US</b></a></br>
                  GHATKOPAR (Head Office) : </br>A-24 / 25, A-wing, Satyam Shopping Centre, M.G. Road, Ghatkopar (E), Mumbai - 400 077. </br>Phone no: +919920741475</br> Email:<a href=" mailto:dexcellenceacademy@outlook.com?subject=Inquiry&body=I'd Like to get some information about NATA, NID, NIFT and BFA coaching at D'Excellence Academy." style="text-decoration: none;">dexcellenceacademy@outlook.com</a><br> 
          <div  class=""  >
         <a href="https://www.facebook.com/dexacademy.mumbai/" alt="facebook" target="_blank"><i class="fa fa-facebook-official" ></i></a>
        <a href="https://instagram.com/dexcellence_academy?igshid=e2ptjao8juk7" alt="instagram" target="_blank"><i class="links fa fa-instagram" ></i>
        <a href="whatsapp://send?text=I'd like to get some information about the courses you offer.&phone=+919819171481" alt="whatsapp"><i class="links fa fa-whatsapp"></i></a>
      
          </div>        
        </div>
      </div>
    </div>


    <footer style="background-color: #6ec4d1; color: black; height: 10%;">
       <div class="col-sm-6" style="font-family: lato; font-size: 11PX;  text-align: justify">
         © 2020, All Rights Reserved Web and Digital Solutions
        </div>
        <div class="col-sm-6" style="font-family: lato; font-size: 11PX; padding-bottom: 15px; text-align: justify ">Terms & Conditions</div>

    </footer> -->


