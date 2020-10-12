<!DOCTYPE html>
<html lang="en">

 <?php include('include/head.php'); ?>
<style>
    td{
        text-align:center;
        
    }
     table, td, th {
     border: 1px dotted;
     padding:8px;
    
    }
    th{
        color:#218a80;
    }
    
    #table1 {
      border-collapse: separate;
    }
.pricetext {
    border: 0 none;
    color: #4AB54D;
    font: 18px/22px 'museo_slab_300', sans-serif;
    margin-top: -3px;
    width: 70px;
}

</style>
<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
   <?php include('include/header.php'); ?>
    <!-- ##### Header Area End ##### -->
         <section>
            <div class="single-hero-slide1 mt-4 bg2-img">
 
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                            <h3 class="text-dark heading pb-2">SSL Certificates</h3>
                            <p class="text-justify">Data as a Service brings the notion that data quality can happen in a centralized place, cleansing<br> and enriching data and offering it to different systems, applications or users, irrespective of<br> where they were in the organization or on the network.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Hero Area End ##### -->
    
        <!--<section>-->
        <!--    <nav aria-label="breadcrumb">-->
        <!--      <ol class="breadcrumb">-->
        <!--        <li class="breadcrumb-item"><a href="index.php">Home</a></li>-->
        <!--        <li class="breadcrumb-item active" aria-current="page"><a href="business.php">Business Solution</a></li>-->
        <!--        <li class="breadcrumb-item">SSL-->
        <!--            Certificates</li>-->
        <!--      </ol>-->
        <!--    </nav>-->
        <!--</section>-->
       <section>
        <div class="partner-area">
            <div class="container">
                <h6 style="color: #021058">SSL CERTIFICATES</h6>
                <div class="text-center table-responsive">
                             <table class="table table-borderd">
                                <thead>
                                  <tr class="text-success">
                                    <th></th>
                                    <th>Domain SSL</th>
                                    <th>Organization SSL</th>
                                    <th>Extended SSL (EV)</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                     <td class="text-info">Price (per year)
                                     <form>
                                        <label class="radio-inline">
                                          <!--<input type="radio" name="optradio" checked> Standard-->
                                          <input type="radio" id="loc1" name="license" value="Standard" onclick="document.getElementById('domain').value=6800, document.getElementById('org').value=9500, document.getElementById('extend').value=31000;" onchange="javascript: buttonshow();" checked=""> Standard
                                        </label>
                                        <label class="radio-inline">
                                          <!--<input type="radio" name="optradio"> Wildcard-->
                                          <input type="radio" id="loc2" name="license" value="Wildcard" onclick="document.getElementById('domain').value=23095, document.getElementById('org').value=26000, document.getElementById('extend').value='NA'" onchange="javascript: buttonshow();"> Wildcard
                                        </label>
                                     </form>
                                     </td>
                                     <td><ul><li><strong class="price"><span><input class="pricetext" type="text" name="sum" readonly="" value="6800" id="domain"></span></strong></li></ul></td>
                                     <td><ul><li><strong class="price"><span><input class="pricetext" type="text" name="sum" readonly="" value="9500" id="org"></span></strong></li></ul></td>
                                     <td><ul><li><strong class="price"><span><input class="pricetext" type="text" name="sum" readonly="" value="31000" id="extend"></span></strong></li></ul></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Activates Padlock and “https” protocol</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Activates Green Address Bar</td>
                                      <td></td>
                                      <td></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Validation process</td>
                                      <td>Domain Authentication and Anti Phishing Checks</td>
                                      <td>Organisation validation</td>
                                      <td>Extended Validation Organisation Authentication</td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Validity Period</td>
                                      <td>1-5 years</td>
                                      <td>1-5 years</td>
                                      <td>1-2 years</td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Issuance Speed</td>
                                      <td>About 1 business day</td>
                                      <td>About 1-3 business days</td>
                                      <td>About 5 business days</td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Site Seal</td>
                                      <td><img src="img/bg-img/ssl-certifications-1.jpg"></td>
                                      <td><img src="img/bg-img/ssl-certifications-1.jpg"></td>
                                      <td><img src="img/bg-img/ssl-certifications-1.jpg"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Maximum Security 2048 bits</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Secures both www and non-www versions of a domain</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Supports Subject Alternative Names (SANs)</td>
                                      <td></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Supports Wildcard domains</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Supports IP Address</td>
                                      <td></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Supports Intranet / Local hosts</td>
                                      <td></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Number of Server Licenses</td>
                                      <td>Unlimited</td>
                                      <td>Unlimited</td>
                                      <td>Unlimited</td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Unlimited Reissuances / Replacements</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">All Browser and mobile device Support</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Multi-year Savings</td>
                                      <td>20% discount per additional year</td>
                                      <td>20% discount per additional year</td>
                                      <td>20% discount per additional year</td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Volume Discounts</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Underwritten Warranty</td>
                                      <td>$10,000</td>
                                      <td>$1,250,000</td>
                                      <td>$1,500,000</td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Free Telephone & Email Customer Support</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Free Installation Healthcheck</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Phishing Alert Service</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info">Malware Monitoring</td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                      <td><img src="img/bg-img/ssl-certifications.gif"></td>
                                  </tr>
                                  <tr>
                                      <td class="text-info"></td>
                                      <td><button class="btn btn-success btn-sm">Buy</button></td>
                                      <td><button class="btn btn-success btn-sm">Buy</button></td>
                                      <td><button class="btn btn-success btn-sm">Buy</button></td>
                                  </tr>
                                </tbody>
                              </table>
                                </div>
                    </div>
                </div>
            
   </section>
    <!-- ##### ##### -->
    <div class="partner-area pt-5">
        <div class="container">
                 <div class="row p-3" style="border-bottom: 2px dotted #80808059;border-top: 2px dotted #80808059;">
                    <div class="col-md-9">
                        <div class="row">
                           <div class="col-12">                              
                            <h6 style="color: #021058">WHY IS AN SSL CERTIFICATE REQUIRED?</h6>
                                <ul class="text-justify">
                                    <li class="text-justify">SSL Certificates are primarily meant to protect the personal details exchanged over the sites against any kind of hacking so that the required confidentiality of such private information is maintained. This includes information such as user ID, password, credit card data, bank account details etc. These certificates employ a process of encrypting the information followed by decrypting allowed only through a secret key.</li><br>
                                </ul>
                          </div>
                          <div class="col-12">                              
                            <h6 style="color: #021058">WHY arise.in.net?</h6>
                                <div class="row">
                                    <div class="col-6">
								<ul>
									<li><img src="img/bg-img/ssl-certifications.gif"> Broad range of online security products</li><br>
									<li><img src="img/bg-img/ssl-certifications.gif"> Unbeatable lowest price SSL certificates</li><br>
									<li><img src="img/bg-img/ssl-certifications.gif"> 24x7 technical and sales support</li>
								</ul>
								</div>
								<div class="col-6">
								<ul>
									<li><img src="img/bg-img/ssl-certifications.gif"> Exceptional service on every purchase</li><br>
									<li><img src="img/bg-img/ssl-certifications.gif"> SSL installation available on request</li><br>
									<li><img src="img/bg-img/ssl-certifications.gif"> Buy – Renew SSL with peace of mind</li>
								</ul><br>
								</div>
							</div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        
                         
                         <div class="box mt-3 mb-3">
                        <div class="row">
                            <h6 style="color: #021058">Sounds good?</h6>
                            <p>FILL UP THE FORM BELOW & GET ATTRACTIVE OFFERS</p>
                        </div>
                            <div class="row">
                               
                                <div class="col-12">
                                    <form action="/action_page.php">
                                         <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="name" class="form-control" id="name">
                                      </div>
                                      <div class="form-group">
                                        <label for="email"> Your Email address</label>
                                        <input type="email" class="form-control" id="email">
                                      </div>
                                      <div class="form-group">
                                        <label for="pwd">Phone Number</label>
                                        <input type="password" class="form-control" id="pwd">
                                      </div>
                                       <div class="form-group">
                                        <label for="pwd">Comments</label>
                                        <textarea type="password" class="form-control" id="pwd"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-primary btn-sm mb-4">Submit</button>
                                    </form>
                                </div>
                                
                            </div> 

                           </div>
                        </div> 
                        </div>

                    </div>
                 </div>

            </div>

        </div>
    </div>
    <!-- #####  ##### -->
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
   
<br>
    <!-- ##### Footer Area Start ##### -->
   <?php include('include/footer.php'); ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
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