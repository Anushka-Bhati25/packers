 <!-- Start Footer bottom Area -->
 <footer>
            <div class="footer-area footer-area-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="#"><img src="img/logo/logo.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business.Are you looking for professional advice for your new business.Are you looking for professional advice for your new business.
                                    </p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <div class="footer-services-link">
                                    	<ul class="footer-list">
                                        <li><a href="#">Home Relocation</a></li>
                                        <li><a href="#">Door to Door Moving </a></li>
                                        <li><a href="#">Office Shifting</a></li>
                                        
                                    </ul>
                                    <ul class="footer-list hidden-sm">
                                        <li><a href="#">Transportation Services</a></li>
                                        <li><a href="#">Parcel Services</a></li>
                                        <li><a href="#">Car Loading</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Subscribe</h4>
                                    <p>
                                        Are you looking for professional advice for your new business.Are you looking for professional advice for your new business
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <!-- End footer area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                   <a target="_blank" href="https://www.webralecon.com">Webralecon India Pvt Ltd</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
		<!-- all js here -->

        <script>
            // Function to change text with different colors and images at a fixed interval
            function changeTextWithColorAndImage(textList, colorList, colorList1, imageList, interval) {
                var index = 0;
                var textElement = document.getElementById("text");
                var imageElement = document.getElementById("image");
                var circles = document.querySelectorAll(".circle");
    
                // Change text, color, and image every interval milliseconds
                setInterval(function () {
                    textElement.textContent = textList[index];
                    textElement.style.color = colorList1[index];
                    imageElement.src = imageList[index];
                    circles.forEach(function (circle, i) {
                        circle.style.backgroundColor = colorList[(index + i) % colorList.length] + '1)'; // Change circle color without affecting transparency of text
                    });
                    index = (index + 1) % textList.length;
                }, interval);
            }
    
            // Example usage
            var texts = ["Home Shifting", "Shop Shifting", "Office Shifting", "Warehouse Shifting"];
            var colors1 = ["red", "blue", "green", "orange"];
            var colors = ["rgba(255, 0, 0, 0.1)", "rgba(0, 0, 255, 0.1)", "rgba(0, 128, 0, 0.1)", "rgba(255, 165, 0, 0.1)"]; // Define alpha values separately
            var images = ["packer3.jpg", "packer3.jpg", "packer3.jpg", "packer3.jpg"];
            changeTextWithColorAndImage(texts, colors, colors1, images, 1000); // Change text every 1000 milliseconds (1 second)
        </script>

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
	</body>

</html>