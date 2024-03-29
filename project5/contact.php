<?php include 'include/header.php'; 
include 'config/connect.php';?>
<br>
<div class="contactus">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="title">
               <h2 class="contact">Contact Us</h2>
            </div>
         </div>
      </div>
   </div>
</div>



<div class="container">
   <!--Section: Contact v.2-->
   <section class="mb-4">

      <!--Section heading-->
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5 p-contact">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
         a matter of hours to help you.</p>

      <div class="row">

         <!--Grid column-->
         <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

               <!--Grid row-->
               <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                     <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                     </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                     <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                     </div>
                  </div>
                  <!--Grid column-->

               </div>
               <!--Grid row-->

               <!--Grid row-->
               <div class="row">
                  <div class="col-md-12">
                     <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                     </div>
                  </div>
               </div>
               <!--Grid row-->

               <!--Grid row-->
               <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                     <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                     </div>

                  </div>
               </div>
               <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
               <a class="btn btn-secondary btn-lg text-light" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
         </div>
         <!--Grid column-->

         <!--Grid column-->
         <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
               <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Aqaba, Amman , Jordan</p>
               </li>

               <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+962 772345678</p>
               </li>

               <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>luxury@mail.com</p>
               </li>
            </ul>
         </div>
         <!--Grid column-->

      </div>

   </section>
   <!--Section: Contact v.2-->
</div>




<!-- map -->
<!-- <div class="contact">
         <div class="container-fluid padddd">
           
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <form class="main_form">
                   <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Name" type="text" name="Name">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Email" type="text" name="Email">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Phone" type="text" name="Phone">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send">Send</button>
                      </div>
                   </div>
                </form>
               </div> 
            </div>
         </div>
      </div> -->
<!-- end map -->
<?php include 'include/footer.php'; ?>