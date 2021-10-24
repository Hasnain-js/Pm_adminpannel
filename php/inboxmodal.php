<?php
    require "conn.php" ;
    $q = $_REQUEST["q"];
                                        $query = "SELECT * FROM contact where id = $q " ;
                                        $result = $conection->query($query);
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                    ?>
                                <!-- view email modal  -->
                            <div class="modal fade" id="modal<?php echo $row["id"] ; ?>" role="dialog">
                                <div class="modal-dialog modal-large">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Email Section -->
                                        <div class="modal-body">
                                            <div class="view-mail-list sm-res-mg-t-30">
                                                <div class="view-mail-hd">
                                                    <div class="view-mail-hrd">
                                                        <h2>Email View</h2>
                                                    </div>
                                                    <div class="view-ml-rl">
                                                        <p><?php $time= new DateTime($row['date']) ; echo $time->format('h:ia'); ?></p>
                                                    </div>
                                                </div>
                                                <div class="mail-ads mail-vw-ph">
                                                    <p class="first-ph"><b>Subject: </b><?php echo $row["subject"] ; ?></p>
                                                    <p><b>Email:</b> <a href="#"><?php echo $row["email"] ; ?></a></p>
                                                    <p class="last-ph"><b>Date: </b><?php $date= new DateTime($row['date']) ; echo $date->format('Y-m-d'); ?></p>
                                                </div>
                                                <div class="view-mail-atn">
                                                    <h2>Hello Pakistan Marketing House!</h2>
                                                    <p><?php echo $row["message"] ; ?></p>
                                                    <span class="vw-tr">Thanks and Regards</span>
                                                    <span><?php echo $row["name"] ; ?></span>
                                                </div>
                                                <div class="vw-ml-action-ls text-right mg-t-20">
                                                    <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                                        <button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-print"></i> Print</button>
                                                        <button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-trash"></i> Remove</button>
                                                        <button class="btn btn-default btn-sm waves-effect" data-dismiss="modal" ><i class="notika-icon notika-close"></i> Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <?php 
                                }
                                }
                                else {
                                    echo "0 results";
                                  }?>