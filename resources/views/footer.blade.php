<!-- footer 
					================================================== -->
                    <footer class="container-fluid footer">
                        <div class="inner-footer">
                            <div class="container">
                                <div class="contentFooter row">
                                    <div class="leftItem col-md-6 f-about">
                                        <h3>Sobre nosotros</h3>
                                        <p>Es una empresa con mas de 16 años de experiencia en el mercado.Ofrece el servicio de planificación y gestión de infraestructura en el sector de las TICS.</p>
                                    </div>
                                    <div class="rightItem col-md-6 f-contact">
                                        <h3>Contacto</h3>
                                        <p><i class="fa fa-map-marker"></i>Bogotá, Colombia <br> Carrera 24 # 39b - 25 Oficina 203</p>
                                        <p><i class="fa fa-phone"></i> +571 281 0714</p>
                                        <a href="#"><i class="fa fa-envelope"></i>soporte@cenix.com.co</a>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        <!-- end contanir & inner-footer -->
                    </footer>
                    <!-- End footer -->
                    
                    
                    </div>
                    <!-- End Container -->
                    
                    <script type="text/javascript" src="js/jquery.min.js"></script>
                    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
                    <script type="text/javascript" src="js/bootstrap.js"></script>
                    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
                    <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
                    <script type="text/javascript" src="js/jquery.appear.js"></script>
                    <script type="text/javascript" src="js/waypoint.min.js"></script>
                    <script type="text/javascript" src="js/jquery.countTo.js"></script>
                    <script type="text/javascript" src="js/jquery.migrate.js"></script>
                    
                    <!-- jQuery KenBurn Slider  -->
                    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
                    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
                    <script type="text/javascript" src="js/jquery.countTo.js"></script>
                    <script type="text/javascript" src="js/script.js"></script>
                    
                    <script type="text/javascript">
                        /******************************************
                                            -	PREPARE PLACEHOLDER FOR SLIDER	-
                                        ******************************************/
                    
                    
                        var setREVStartSize = function() {
                            var tpopt = new Object();
                            tpopt.startwidth = 1170;
                            tpopt.startheight = 600;
                            tpopt.container = jQuery('#rev_slider_1_1');
                            tpopt.fullScreen = "off";
                            tpopt.forceFullWidth = "off";
                    
                            tpopt.container.closest(".rev_slider_wrapper").css({
                                height: tpopt.container.height()
                            });
                            tpopt.width = parseInt(tpopt.container.width(), 0);
                            tpopt.height = parseInt(tpopt.container.height(), 0);
                            tpopt.bw = tpopt.width / tpopt.startwidth;
                            tpopt.bh = tpopt.height / tpopt.startheight;
                            if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
                            if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
                            if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
                            if (tpopt.bh > 1) {
                                tpopt.bw = 1;
                                tpopt.bh = 1
                            }
                            if (tpopt.bw > 1) {
                                tpopt.bw = 1;
                                tpopt.bh = 1
                            }
                            tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                            if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
                            if (tpopt.fullScreen == "on") {
                                tpopt.height = tpopt.bw * tpopt.startheight;
                                var cow = tpopt.container.parent().width();
                                var coh = jQuery(window).height();
                                if (tpopt.fullScreenOffsetContainer != undefined) {
                                    try {
                                        var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                                        jQuery.each(offcontainers, function(e, t) {
                                            coh = coh - jQuery(t).outerHeight(true);
                                            if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                                        })
                                    } catch (e) {}
                                }
                                tpopt.container.parent().height(coh);
                                tpopt.container.height(coh);
                                tpopt.container.closest(".rev_slider_wrapper").height(coh);
                                tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                                tpopt.container.css({
                                    height: "100%"
                                });
                                tpopt.height = coh;
                            } else {
                                tpopt.container.height(tpopt.height);
                                tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                                tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                            }
                        };
                    
                        /* CALL PLACEHOLDER */
                        setREVStartSize();
                    
                    
                        var tpj = jQuery;
                        tpj.noConflict();
                        var revapi1;
                    
                        tpj(document).ready(function() {
                    
                            if (tpj('#rev_slider_1_1').revolution == undefined)
                                revslider_showDoubleJqueryError('#rev_slider_1_1');
                            else
                                revapi1 = tpj('#rev_slider_1_1').show().revolution({
                                    dottedOverlay: "none",
                                    delay: 9000,
                                    startwidth: 1170,
                                    startheight: 600,
                                    hideThumbs: 200,
                    
                                    thumbWidth: 100,
                                    thumbHeight: 50,
                                    thumbAmount: 3,
                    
                                    navigationType: "bullet",
                                    navigationArrows: "solo",
                                    navigationStyle: "round",
                    
                                    touchenabled: "on",
                                    onHoverStop: "on",
                    
                                    swipe_velocity: 0.7,
                                    swipe_min_touches: 1,
                                    swipe_max_touches: 1,
                                    drag_block_vertical: false,
                    
                                    parallax: "mouse",
                                    parallaxBgFreeze: "off",
                                    parallaxLevels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                    
                                    keyboardNavigation: "off",
                    
                                    navigationHAlign: "center",
                                    navigationVAlign: "bottom",
                                    navigationHOffset: 0,
                                    navigationVOffset: 20,
                    
                                    soloArrowLeftHalign: "left",
                                    soloArrowLeftValign: "center",
                                    soloArrowLeftHOffset: 30,
                                    soloArrowLeftVOffset: 0,
                    
                                    soloArrowRightHalign: "right",
                                    soloArrowRightValign: "center",
                                    soloArrowRightHOffset: 30,
                                    soloArrowRightVOffset: 0,
                    
                                    shadow: 0,
                                    fullWidth: "on",
                                    fullScreen: "off",
                    
                                    spinner: "spinner0",
                    
                                    stopLoop: "off",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                    
                                    shuffle: "off",
                    
                                    autoHeight: "off",
                                    forceFullWidth: "off",
                    
                    
                                    hideTimerBar: "on",
                                    hideThumbsOnMobile: "off",
                                    hideNavDelayOnMobile: 1500,
                                    hideBulletsOnMobile: "off",
                                    hideArrowsOnMobile: "off",
                                    hideThumbsUnderResolution: 0,
                    
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    startWithSlide: 0
                                });
                    
                    
                    
                    
                        }); /*ready*/
                    </script>
                    
                    
                    <!-- include jQuery + carouFredSel plugin -->
                    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>
                    
                    <!-- optionally include helper plugins -->
                    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
                    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
                    
                    <!-- Bootstrap 5 Js -->
                    
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
                    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
                    
                    <!-- Custom Js1-->
                    <script type="text/javascript" src="js/customerJs1.js"></script>
                    
                    
                    
                    </body>
                    
                    </html>