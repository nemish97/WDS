 AOS.init({
 	duration: 750,
 });

//nav
    $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
      });

//nav small screen
  function w3_close() {
          $("#myNavbar").slideToggle("ease")
      }
      function w3_open() {
          $("#myNavbar2").slideToggle("ease")
      }

//Nav bar toggle
    $(document).ready(function(){
      $("#myNavbar2").click(function(){
          $("#myNavbar").slideToggle("ease");

      });
    });


//smooth scroll

        $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
    
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1250, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    })


//form submission
                function getFormData() {
                var elements = document.getElementById("gform").elements; // all form elements
                var fields = Object.keys(elements).map(function(k) {
                  if(elements[k].name !== undefined) {
                    return elements[k].name;
                  // special case for Edge's html collection
                  }else if(elements[k].length > 0){
                    return elements[k].item(0).name;
                  }
                }).filter(function(item, pos, self) {
                  return self.indexOf(item) == pos && item;
                });
                var data = {};
                fields.forEach(function(k){
                  data[k] = elements[k].value;
                  var str = ""; // declare empty string outside of loop to allow
                                // it to be appended to for each item in the loop
                  if(elements[k].type === "checkbox"){ // special case for Edge's html collection
                    str = str + elements[k].checked + ", "; // take the string and append 
                                                // the current checked value to 
                                                // the end of it, along with 
                                                // a comma and a space
                    data[k] = str.slice(0, -2); // remove the last comma and space 
                                    // from the  string to make the output 
                                    // prettier in the spreadsheet
                  }else if(elements[k].length){
                    for(var i = 0; i < elements[k].length; i++){
                      if(elements[k].item(i).checked){
                        str = str + elements[k].item(i).value + ", "; // same as above
                       data[k] = str.slice(0, -2);
                      }
                    }
                  }
                });
                  console.log(data);
                  return data;
                }

               function handleFormSubmit(event) {  // handles form submit withtout any jquery
                event.preventDefault();           // we are submitting via xhr below
                var data = getFormData();  
                 document.getElementById('thankyou').style.display = 'none';       // get the values submitted in the form
                document.getElementById('gform').style.display = 'none';
                document.getElementById('loading').style.display = 'block';

                var url = event.target.action;  //
                  var xhr = new XMLHttpRequest();
                  xhr.open('POST', url);
                  // xhr.withCredentials = true;
                  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                 xhr.onreadystatechange = function() {
                     console.log( xhr.status, xhr.statusText )
                      console.log(xhr.responseText);
                      document.getElementById('loading').style.display = 'none';
                      document.getElementById('thankyou').style.display = 'block';               
                      document.getElementById('gform').style.display = 'none';
                      return;
                 };
                  // url encode form data for sending as post data
                  var encoded = Object.keys(data).map(function(k) {
                  return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
                }).join('&')
                 xhr.send(encoded);
                }
               function loaded() {
                  console.log('contact form submission handler loaded successfully');
                  // bind to the submit event of our form
                  var form = document.getElementById('gform');
                  form.addEventListener("submit", handleFormSubmit, false);
                };
               document.addEventListener('DOMContentLoaded', loaded, false);

 
               