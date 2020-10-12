<!DOCTYPE html>
<html lang="en">

 <?php include('include/head.php'); ?>
 <head>
  <style>
.collapsible {
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
    background-color:#021058;
}

.active, .collapsible:hover {
  /*background-color: whitesmoke;*/
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
 
}

</style>


 </head>


<body>
    <!-- ##### Preloader ##### -->
    <!-- <div id="preloader">
        <i class="circle-preloader"></i>
    </div>
 -->
    <!-- ##### Header Area Start ##### -->
   <?php include('include/header.php'); ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
   
    <section>
            <div class="single-hero-slide1 mt-4 bg2-img">
 
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                            <h3 class="text-dark heading pb-2">Mirroring and failover service for traffic</h3>
                            <p class="text-justify"> Load Management for high performance applications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    <!-- ##### Hero Area End ##### -->
<!-- ##### ##### -->
    <!--<section>-->
    <!--    <nav aria-label="breadcrumb">-->
    <!--      <ol class="breadcrumb">-->
    <!--        <li class="breadcrumb-item"><a href="index.php">Home</a></li>-->
    <!--        <li class="breadcrumb-item active" aria-current="page"><a href="colocation.php">Cloud Server</a></li>-->
    <!--        <li class="breadcrumb-item">Cloud with Load Balancer & Clustering</li>-->
    <!--      </ol>-->
    <!--    </nav>-->
    <!--</section>-->
   

    <!-- ##### ##### -->
      <section>
        <div class="container">
          <h5 style="color: #021058;margin: 57px 0 2px;" class="text-center">CLOUD WITH LOAD BALANCER & CLUSTERING</h5>
            <p class="text-center">Achieve high availability and build your own web cluster without burning your entire hosting budget</p>
            <div class="row">
              <div class="col-md-12">
                <h5>Load Balancing & Clustering Server</h5>
                <p>Simply add load balancing to your current multiple server configuration in order to achieve high availability and build your own web cluster without burning your entire hosting budget. Load balancing can be implemented quickly and easily as an add-on to your current server solution to share the load between your web servers, using a simple script to replicate the data on the servers.</p>
                <p>Our load balancers use adaptive algorithms to optimize and delegate resources between Cloud Servers. We will constantly measure concurrent users/connections and processor utilization to make the best use of your resources. For example, when "Cloud Server A" gets overloaded or becomes unavailable for any reason, the load balancer automatically directs users to "Cloud Server B". This process helps ensure redundancy and failover, which can make load balancing an important asset in business continuity plans.</p>
                <p>Load balancing is recommended (and sometimes necessary) for small or medium-sized businesses that:</p>
                <ul>
                  <li>Provide Software as a Service (SaaS)</li>
                  <li>Provide mission-critical systems such as medical applications, document management systems, intranets and portals, and social communities</li>
                 <li> Experience significant, unpredictable traffic spikes due to marketing, seasonality, or regular daily activity</li>
                  <li>Provides up to 200 Mbps throughput scalable up to 4Gbps</li>
                 <li> Provides SSL acceleration, compression, and caching</li>
              </ul>
              </div>
            </div>
        </div>
      </section>
     
    <!-- //#####  ##### -->
    <!-- ########## -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <!--<div class="col-md-6">-->
          <!--  <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
          <!--                              <h5 style="color: #021058">VPS CUSTOMER SPOTLIGHT</h5>-->
                                <!-- Carousel indicators -->
                                 
                                <!-- Wrapper for carousel items -->
          <!--                      <div class="carousel-inner">  -->
                                   
          <!--                          <div class="item carousel-item active">-->
                                       
          <!--                              <p class="testimonial">Aries maintains good relationships and follows up regularly about the service, to ensure that everything goes smoothly.</p>-->
          <!--                              <h6>Mr.Manoj Patel</h6>-->
          <!--                                   <p>Relay Express</p>-->
          <!--                          </div>-->


          <!--                          <div class="item carousel-item">-->
                                       
          <!--                              <p class="testimonial">Migration to Cloud was made so easy by CtrlS.Server was installed and set up without any problems, most importantly, zero downtime.-->
          <!--                             </p>-->
          <!--                             <h6>Mr.NVV Krishnam Raju</h6>-->
          <!--                                   <p>Seventeen Networks</p>-->
                                       
          <!--                          </div>-->
                                       
          <!--                                                          </div>-->
                                        <!-- Carousel controls -->
          <!--                              <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">-->
          <!--                                  <i class="fa fa-angle-left"></i>-->
          <!--                              </a>-->
          <!--                              <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">-->
          <!--                                  <i class="fa fa-angle-right"></i>-->
          <!--                              </a>-->
          <!--                          </div>-->
          <!--                        </div>-->
                               <div class="col-md-6">
                                  <h5 style="color: #021058">TRY OUR OTHER OFFERINGS</h5>
                                  <button class="collapsible" style="outline: none;">Enterprise Cloud</button>
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <img src="img/cloud/cloud_aries.png">
                                      </div>
                                      <div class="col-md-9">
                                        <p><b>Controlled Network, Firewall and easy to use</b><br> Ideal for Enterprise Grade Customers.</p>
                                        <a href="enterprise_cloud" class="btn btn-primary">Know More</a>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="collapsible" style="outline: none;">Cloud SAAS & APPS</button>
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <img src="img/cloud/cloud_aries.png">
                                      </div>
                                      <div class="col-md-9">
                                        <p><b>Choose from a whole range of Applications</b><br> Ideal for App Developer.</p>
                                        <a href="cloud_saas_apps" class="btn btn-primary">Know More</a>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="collapsible" style="outline: none;">Cloud with Load Balancer, Dedicated Firewall & Clustering</button>
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <img src="img/cloud/cloud_aries.png">
                                      </div>
                                      <div class="col-md-9">
                                        <p><b>Achieve high availability and build your own web cluster</b><br> Ideal for Private Enterprises and Large Companies.</p>
                                        <a href="cloud_with_load_balancer" class="btn btn-primary">Know More</a>
                                      </div>
                                    </div>
                                  </div>  
                                  <button class="collapsible" style="outline: none;">Cloud CDN</button>
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <img src="img/cloud/cloud_aries.png">
                                      </div>
                                      <div class="col-md-9">
                                        <p><b>Serve content to end-users with high availability and high performance</b><br> Ideal for App Developer.</p>
                                        <a href="cloud_cdn" class="btn btn-primary">Know More</a>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="collapsible" style="outline: none;">White Labelled Cloud</button>
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <img src="img/cloud/cloud_aries.png">
                                      </div>
                                      <div class="col-md-9">
                                        <p><b>A white label cloud service.</b><br>Ideal for Hosters.</p>
                                        <a href="white_labelled_cloud" class="btn btn-primary">Know More</a>
                                      </div>
                                    </div>
                                  </div>  
                      </div>
                    </div>
                </div>
              </section>
    <!-- ######## -->
    <!-- !-- ##### -->
     <section class="partner-area p-5">
       <div class="container">
           <div class="col-md-12 text-center mb-5">
               <h3 style="color: #021058">CONNECT WITH US</h3>
               <p>HERE ARE SOME QUICK WAYS TO REACH US</p>
           </div>
            <div class="col-md-12 col-sm-6">
               <div class="row">
                
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                              <img src="img/png/phone (1).png">
                            </div>
                            <div class="col-md-9">
                              <h5>000-0000-000</h5>
                              <p>For any sales-related queries</p>
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="row">
                            <div class="col-md-3">
                              <img src="img/png/question (1).png">
                            </div>
                            <div class="col-md-9">
                              <h5>FAQs</h5>
                              <p>Answers to common questions you may have</p>
                            </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="row">
                        <div class="col-md-3">
                              <img src="img/png/email (1).png">
                            </div>
                            <div class="col-md-9">
                              <h5>Instant Response</h5>
                              <p>Drop us an email at mycloud@aries.com</p>
                            </div>
                      </div>
                  </div>
              
                </div>
            </div>
        </div>
   </section>
   <!-- //###### -->
  <!-- ##### Partner Area Start ##### -->
    <!--<div class="partner-area pt-5 pb-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <h5 style="color: #021058">A FEW OF OUR MORE RECOGNIZABLE CLIENTS</h5>-->
    <!--                <div class="partners-logo d-flex align-items-center justify-content-between  mt-5">-->
    <!--                    <a href="#"><img src="img/clients-img/partner-1.png" alt=""></a>-->
    <!--                    <a href="#"><img src="img/clients-img/partner-2.png" alt=""></a>-->
    <!--                    <a href="#"><img src="img/clients-img/partner-3.png" alt=""></a>-->
    <!--                    <a href="#"><img src="img/clients-img/partner-4.png" alt=""></a>-->
    <!--                    <a href="#"><img src="img/clients-img/partner-5.png" alt=""></a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- ##### Partner Area End ##### -->
   

    <!-- ##### Footer Area Start ##### -->
   <?php include('include/footer.php'); ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- collapsible -->
    <script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }
</script>
<!-- //collapsible -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>