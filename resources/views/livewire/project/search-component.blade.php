<div class="page-title-area py-lg-6 py-5 bg-image-pattern">
    <div class="container">
    <div class="page-title-wrapper text-center">
       <h1 class="text-white mb-2">Hatim Sorgula</h1>
      <nav class="page-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
      </nav>
    </div>
    </div>
  </div>
   <!--  ====================== About Area =============================  -->
   <div class="about-area py-lg-10 py-8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-5 offset-lg-1 order-md-1">
          <div class="donation-details mb-4 mb-md-0">
            <div class="donation-wrapper">
             <h3 class="text-primary pb-2">Event Information</h3>
              <ul class="donation-list list-inline">
                <li><span class="me-2 text-primary"><i class="fas fa-user"></i></span> Mr. Jhon Doe
                </li>
                <li><span class="me-2 text-primary"><i class="fas fa-calendar-plus"></i></span> 22 April 2021
                </li>
                <li><span class="me-2 text-primary"><i class="fas fa-clock"></i></span> Start At 08.00 AM
                </li>
                <li><span class="me-2 text-primary"><i class="fas fa-thumbtack"></i></span>212 St. Town Road, USA</li>
                 

                <li><span class="me-2 text-primary"><i class="fab fa-instagram"></i></span> Price : $100 USD
                </li>
              </ul>
             
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-0">
       <h3 class="text-primary mb-3">Hatimlerinizi E-mail adresinizi girerek sorgulayın</h3>
       <form class="call-to-action-form m-auto" action="{{ route('add.person') }}" enctype="multipart/form-data"
       method="POST">
       @csrf


       <div class="input-group">
           
           <input type="text" class="form-control" name="email" placeholder="E-Mail Adresiniz" required>
           <button class="btn btn-success" type="submit">Sorgula</button>


       </div>

       </div>
        </div>
      </div>
    </div>
  </div>
  
     
  <!--  ====================== Team Area =============================  -->