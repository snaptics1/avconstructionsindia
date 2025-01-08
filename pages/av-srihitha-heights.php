<section>
    <div class="page-section-barr-project" style="background-image:url(assets/img/projects/first/vinoothna.svg)">
       <div class="container">
            <div class="pagesection-title">
                    <h1 style="color:white;">Av Srihitha Heights</h1>
                    <p style="color:white;">Start the conversation to established good
                    relationship and business.</p>
                    
        <a class="download-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-download"></i> DOWNLOAD BROCHURE</a>

            </div>
       </div>
    </div>
</section>


<div class="container">
    

<section class="default-pdg projectab-data">
<div class="sectionprojectab-container">
 <div class="row">
    <div class="col-xl-4 col-lg-4">

    <h1>Overview</h1> <br>
  

    <div class="amenities">
      <!--<div class="amenity">-->
      <!--  <div>-->
      <!--      <span class="icon"><i class="fa-solid fa-hospital"></i></span>-->
      <!--      <span>HOSPITAL</span>-->
      <!--  </div>-->
      <!--  <span class="time">10 Mins</span>-->
      <!--</div>-->
      <!--<div class="amenity">-->
      <!--  <div>-->
      <!--      <span class="icon"><i class="fa-solid fa-school"></i></span>-->
      <!--      <span>SCHOOL</span>-->
      <!--  </div>-->
      <!--  <span class="time">14 Mins</span>-->
      <!--</div>-->
      <!--<div class="amenity">-->
      <!--  <div>-->
      <!--      <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>-->
      <!--      <span>SHOOPING MALL</span>-->
      <!--  </div>-->
      <!--  <span class="time">12 Mins</span>-->
      <!--</div>-->
      <!--<div class="amenity">-->
      <!--  <div>-->
      <!--      <span class="icon"><i class="fa-solid fa-train"></i></span>-->
      <!--      <span>METRO STATION</span>-->
      <!--  </div>-->
      <!--  <span class="time">15 Mins</span>-->
      <!--</div>-->
      
      
      
      
       <div class="amenity">
        <div>
            <!--<span class="icon"><i class="fa-solid fa-hospital"></i></span>-->
            <span>Status</span>
        </div>
        <span class="time">Completed Project</span>
      </div>

      <div class="amenity">
        <div>
            <!--<span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>-->
            <span>Location</span>
        </div>
        <span class="time"> Hyderabad</span>
      </div>
      <div class="amenity">
        <div>
            <!--<span class="icon"><i class="fa-solid fa-train"></i></span>-->
            <span>Type</span>
        </div>
        <span class="time">Apartment</span>
      </div>
       
      </div>
    

  
    </div>


<div class="col-xl-8 col-lg-8" style="padding:0px; position:relative;">
    <div class="image-container">
        <img src="assets/img/projects/first/ab.svg" alt="Property Image" style="width:100%; display:block;" />
        
       
       
    </div>
</div>
 </div>

  
</div>

</section>
<h2 class="text-center">This Project is completed.</h2>







</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">We Won't Spam You</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form class="form">
    <div class="flex-column">
      <label>Name </label></div>
      <div class="inputForm">
       
        <input placeholder="Enter Your Name" class="input" type="text" required>
      </div>
        <div class="flex-column">
      <label>Phone Number </label></div>
      <div class="inputForm">
       
        <input placeholder="Enter Your Number" class="input" type="Number" required>
      </div>
          <div class="flex-column">
      <label>Email </label></div>
      <div class="inputForm">
       
        <input placeholder="Enter Your Email" class="input" type="text" required>
      </div>


    <button class="button-submit" name="submit">Submit</button>


   </form>
      </div>
     
    </div>
  </div>
</div>


<script>
  

const tabButtons = document.querySelectorAll('.tab-button');
const tabContents = document.querySelectorAll('.tab-content');

tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class from all buttons
    tabButtons.forEach(btn => btn.classList.remove('active'));
    // Add active class to the clicked button
    button.classList.add('active');

    // Hide all tab contents
    tabContents.forEach(content => content.classList.remove('active'));
    // Show the corresponding tab content
    const tabId = button.getAttribute('data-tab');
    document.getElementById(tabId).classList.add('active');
  });
});
</script>