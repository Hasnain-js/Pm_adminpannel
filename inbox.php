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
    <?php
        require 'php/deletecontact.php'; 
    ?>
    <div class="inbox-area">
        <div class="container">
            <div class="row">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
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
                                <a class="btn btn-default btn-sm" href="inbox.php"><i class="notika-icon notika-refresh"></i> Refresh</a>
                                
                                <button class="btn btn-default btn-sm" type="submit" name="delete"><i class="notika-icon notika-trash"></i></button>
                                <button class="btn btn-default btn-sm"><i class="notika-icon notika-checked"></i></button>
                            </div>
                        </div>
                        <div class="table-responsive" style = "overflow-y:scroll ; height:500px;">
                            <table class="table table-hover table-inbox modals-single" id="data-table-basic">
                                <tbody class="modals-default-cl" id ="inbox">
                                    <!-- ajax uses  -->
                                    <script>
                                        var xmlhttp = new XMLHttpRequest();
                                        xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            document.getElementById("inbox").innerHTML = this.responseText;
                                        }
                                        };
                                        xmlhttp.open("GET","php/inboxview.php",true);
                                        xmlhttp.send();
                                    </script>
                                </tbody>

                            </table>
                            
                        </div>
                        <!-- modal of email -->
                        <div class = "modal" id = "modal">

                        </div>
                        <script>
                            function modal(str) {
                                if (str == 0) {
                                    document.getElementById("modal").innerHTML = "";
                                        return;
                                    } else {
                                        var xmlhttp = new XMLHttpRequest();
                                        xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            document.getElementById("modal").innerHTML = this.responseText;
                                        }
                                        }
                                        xmlhttp.open("GET", "php/inboxmodal.php?q="+str, true);
                                        xmlhttp.send();
                                    }
                                        
                                }
                         </script>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Inbox area End-->
    <!-- Start Footer area-->
    <?PHP
    require "inc/footer.html";
    ?>
    <!-- End Footer Area -->
