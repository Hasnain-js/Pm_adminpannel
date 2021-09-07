    <?php
        require "inc/header.html";
     ?>
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-mail"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Inbox</h2>
										<p>View no of contacts</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Inbox area Start-->
    <div class="inbox-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="inbox-text-list sm-res-mg-t-30">
                        <div class="form-group">
                            <div class="nk-int-st search-input search-overt">
                                <input type="text" class="form-control" placeholder="Search email..." />
                                <button class="btn search-ib">Search</button>
                            </div>
                        </div>
                        <div class="inbox-btn-st-ls btn-toolbar">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-refresh"></i> Refresh</button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-next"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-down-arrow"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-trash"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-checked"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-promos"></i></button>
                            </div>
                            <div class="btn-group ib-btn-gp active-hook nk-act nk-email-inbox">
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-left-arrow"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-right-arrow"></i></button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-inbox"  id="data-table-basic">
                                <tbody>
                                    <tr class="unread">
                                        <td class="">
                                            <label><input type="checkbox" checked="" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Jeremy Massey</a></td>
                                        <td><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                        </td>
                                        <td><i class="notika-icon notika-paperclip"></i></td>
                                        <td class="text-right mail-date">Tue, Nov 25</td>
                                    </tr>
                                    <tr class="active">
                                        <td class="">
                                            <label><input type="checkbox" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Marshall Horne</a></td>
                                        <td><a href="#">Praesent nec nisl sed neque ornare maximus at ac enim.</a>
                                        </td>
                                        <td></td>
                                        <td class="text-right mail-date">Wed, Jan 13</td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <label><input type="checkbox" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Grant Franco</a> <span class="label label-warning">Finance</span></td>
                                        <td><a href="#">Etiam maximus tellus a turpis tempor mollis.</a></td>
                                        <td></td>
                                        <td class="text-right mail-date">Mon, Oct 19</td>
                                    </tr>
                                    <tr class="unread active">
                                        <td class="">
                                            <label><input type="checkbox" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Ferdinand Meadows</a></td>
                                        <td><a href="#">Aenean hendrerit ligula eget augue gravida semper.</a></td>
                                        <td><i class="notika-icon notika-paperclip"></i></td>
                                        <td class="text-right mail-date">Sat, Aug 29</td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <label><input type="checkbox" checked="" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Ivor Rios</a> <span class="label label-info">Social</span>
                                        </td>
                                        <td><a href="#">Sed quis augue in nunc venenatis finibus.</a></td>
                                        <td><i class="notika-icon notika-paperclip"></i></td>
                                        <td class="text-right mail-date">Sat, Dec 12</td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <label><input type="checkbox" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Maxwell Murphy</a></td>
                                        <td><a href="#">Quisque eu tortor quis justo viverra cursus.</a></td>
                                        <td></td>
                                        <td class="text-right mail-date">Sun, May 17</td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <label><input type="checkbox" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Henry Patterson</a></td>
                                        <td><a href="#">Aliquam nec justo interdum, ornare mi non, elementum lacus.</a></td>
                                        <td><i class="notika-icon notika-paperclip"></i></td>
                                        <td class="text-right mail-date">Thu, Aug 06</td>
                                    </tr>
									<tr>
                                        <td class="">
                                            <label><input type="checkbox" class="i-checks"></label>
                                        </td>
                                        <td><a href="#">Maxwell Murphy</a></td>
                                        <td><a href="#">Quisque eu tortor quis justo viverra cursus.</a></td>
                                        <td></td>
                                        <td class="text-right mail-date">Sun, May 17</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-inbox">
                                <ul class="wizard-nav-ac">
                                    <li><a class="btn" href="#"><i class="notika-icon notika-back"></i></a></li>
                                    <li class="active"><a class="btn" href="#">1</a></li>
                                    <li><a class="btn" href="#">2</a></li>
                                    <li><a class="btn" href="#">3</a></li>
                                    <li><a class="btn" href="#"><i class="notika-icon notika-next-pro"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inbox area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>