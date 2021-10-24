<?php
require "inc/header.html"
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
                                    <i class="notika-icon notika-form"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Latest Project</h2>
                                    <p>Welcome to Pakistan Marketing House <span class="bread-ntd">Admin Template</span></p>
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

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-example-area">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Add Latest Project</h2>
                            <p>Please fill all the input fields</p>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-map"></i>
                            </div>
                            <div class="nk-int-st">
                                <textarea class="form-control" rows="2" placeholder="Tittle"></textarea>
                            </div>
                        </div>
                        <div class="dropdone-nk">
                            <div id="dropzone1" class="multi-uploader-cs">
                            <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                                <div class="dz-message needsclick download-custom">
                                    <i class="notika-icon notika-picture"></i>
                                    <h2>Drop Pictures here or click to upload.</h2>
                                    <p><span class="note needsclick">(Only JPG files are allow other Selected files are <strong>not</strong> actually uploaded.)</span>
                                    </p>
                                </div>
                        </div>
                        <div class="form-group ic-cmp-int" style = "margin-top:20px;">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-calendar"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="date" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        
                    </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Submit</button>
                        </div>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="normal-table-list ">
        <div class="basic-tb-hd">
            <h2>Latest Projects Lists</h2>
            <p>Remove project.</p>
        </div>
        <div class="bsc-tbl-st" style="overflow-y: scroll; height: 400px ;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Id</th>
                        <th>Project Name</th>
                        <th>Project Tittle</th>
                        <th>Delete <span><i class="notika-icon notika-trash"></i></span> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>0</td>
                        <td>Ducky</td>
                        <td>Tittle</td>
                        <td><button class="btn btn-danger" type="button">Delete</button></td>

                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<?php
require "inc/footer.html"
?>