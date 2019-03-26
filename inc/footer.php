 <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4>About Us</h4>
                       <address>
                        <strong>Information & Communication Engineering</strong><br>
                    </address>
                    <p>The Department of Information & Communication Engineering(ICE) is a new department at the Noakhali Science and Technology University. The department provides an outstanding opportunity to students to get quality education in Information and Communication Technology. It started its academic activities from 2012. Since then, it has been widely recognized for its excellent research and teaching capabilities. </p>
                    <a href="about.php" style="color:#4FB51E">Read More ></a>
                   
                </div><!--/.col-md-3-->

                <div class="col-md-4 col-sm-6">
                    <h4>Contact Details</h4>
                    <address>
                        Department of Information & Communication Engineering(ICE)<br>
Noakhali Science & Technology University<br>
Sonapur-3814, Noakhali, Bangladesh<br>
                        
                        <a href="map.php" style="color:#4FB51E">Click Here for a Map to Find Us ></a><br><br>
                        Tel: +609 549 2133<br>
Fax: +609 549 2144<br>
Email: head@icenstu.edu.bd<br>
Dept. web site: <a target="_blank" href="http://www.icenstu.edu.bd" style="color:#4FB51E">www.icenstu.edu.bd</a><br>
                    </address>
                </div><!--/.col-md-3-->

               

                <div class="col-md-4 col-sm-6">
                    <h4>NEWSLETTER</h4>
                    <address>
                        Thanks for visiting our site. Is it helpfull for your institution?
Please let us know if you have any COMMENTS...... 
                    </address>
                    
                    <form role="form" action="" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Name" style="    width: 324px;" required><br>
                            <input type="text" class="form-control" name="email" autocomplete="off" placeholder="E-mail"  style="margin-top:3px;    width: 324px;"  required><br>
                            

                                <input type="submit"  style="margin-top:3px;background:#4FB51E">
                            
                        </div>
                    </form>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   Copyright &copy; 2018 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ICE-NSTU-</a>All Rights Reserved.
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    Designed & Developed by Selim Ahemmed
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
	<script type="text/javascript">
var $document = $(document);
(function () { 
  var clock = function () {
      clearTimeout(timer);
    
      date = new Date();    
      hours = date.getHours();
      minutes = date.getMinutes();
      seconds = date.getSeconds();
      dd = (hours >= 12) ? 'PM' : 'AM';
      
    hours = (hours > 12) ? (hours - 12) : hours
      
      var timer = setTimeout(clock, 1000);
    
    $('.hours').html(Math.floor(hours));
    $('.minutes').html(Math.floor(minutes));
    $('.seconds').html(Math.floor(seconds));
      $('.twelvehr').html(dd);
  };
  clock();
})();

(function () {
  $document.bind('contextmenu', function (e) {
    e.preventDefault();
  });  
})();
    </script>
</body>
</html>