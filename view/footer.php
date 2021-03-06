    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

     <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>

        </div>
    </footer>

    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="./assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="./assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="./assets/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="./assets/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="./assets/js/active.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <script>

        $(document).ready(function () {
        //your code here
            $('.form').find('input, textarea').on('keyup blur focus', function (e) {
            
            var $this = $(this),
                label = $this.prev('label');

                if (e.type === 'keyup') {
                        if ($this.val() === '') {
                    label.removeClass('active highlight');
                    } else {
                    label.addClass('active highlight');
                    }
                } else if (e.type === 'blur') {
                    if( $this.val() === '' ) {
                        label.removeClass('active highlight'); 
                        } else {
                        label.removeClass('highlight');   
                        }   
                } else if (e.type === 'focus') {
                
                if( $this.val() === '' ) {
                        label.removeClass('highlight'); 
                        } 
                else if( $this.val() !== '' ) {
                        label.addClass('highlight');
                        }
                }

            });

            $('.tab a').on('click', function (e) {
            
            e.preventDefault();
            
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            
            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();
            
            $(target).fadeIn(600);
            
            });
        });
    </script>

</body>

</html>