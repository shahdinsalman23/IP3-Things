<footer class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <h4>About Us</h4>
                        <p>Now more than ever, connecting people and businesses to THINGS enables them to efficiently
                            accumulate and process important data insights</p>
                        <ul>
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">IoT Data</a></li>
                            <li><a href="#">IoT Security</a></li>
                            <li><a href="#">IoT Platform</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Regfund Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="#"><i class='bx bx-map'></i>2801 Foxcroft Rd. # 5</a></li>
                            <li><a href="#"><i class='bx bx-envelope'></i>kevin@ip3labs.com</a></li>
                            <li><a href="#"><i class='bx bx-phone-call'></i>501-983-5227</a></li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright">
                        <p>Copyright © 2023 ip3labs - All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    </body>
    <?php include 'include/js.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const tooltipContainers = document.querySelectorAll(".tooltip-container");

    tooltipContainers.forEach(function (container) {
        const tooltipContent = container.querySelector(".tooltip-content");
        const closeButton = tooltipContent.querySelector(".tippy-close");

        tippy(container, {
            content: tooltipContent,
            interactive: true,
            trigger: "click",
            placement: "bottom",
            arrow:false,
            onShow(instance) {
                closeButton.addEventListener("click", () => {
                    instance.hide();
                });
            }

        });



    });
});
    </script>

    </html>