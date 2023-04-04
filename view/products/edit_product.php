<?php include_once 'view/includes/headerAdmin.php' ?>

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <ol class="breadcrumb"><!-- breadcrumb Begin -->

            <li class="active"><!-- active Begin -->

                <i class="fa fa-dashboard"></i> Dashboard / Edit Products

            </li><!-- active Finish -->

        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <div class="panel panel-default"><!-- panel panel-default Begin -->

            <div class="panel-heading"><!-- panel-heading Begin -->

                <h3 class="panel-title"><!-- panel-title Begin -->

                    <i class="fa fa-money fa-fw"></i> Insert Product

                </h3><!-- panel-title Finish -->

            </div> <!-- panel-heading Finish -->

            <div class="panel-body"><!-- panel-body Begin -->

                <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Title </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_title" type="text" class="form-control" required value="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Category </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <select name="product_cat" class="form-control"><!-- form-control Begin -->

                                <option value=""> </option>



                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Category </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <select name="cat" class="form-control"><!-- form-control Begin -->

                                <option value=""> </option>



                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Image 1 </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_img1" type="file" class="form-control" required>

                            <br>

                            <img width="70" height="70" src="product_images/" alt="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Image 2 </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_img2" type="file" class="form-control">

                            <br>

                            <img width="70" height="70" src="product_images/" alt="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Image 3 </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_img3" type="file" class="form-control form-height-custom">

                            <br>

                            <img width="70" height="70" src="product_images/" alt="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Price </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_price" type="text" class="form-control" required value="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Keywords </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_keywords" type="text" class="form-control" required value="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Desc </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <textarea name="product_desc" cols="19" rows="6" class="form-control">



                          </textarea>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                </form><!-- form-horizontal Finish -->

            </div><!-- panel-body Finish -->

        </div><!-- canel panel-default Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<?php include_once 'view/includes/footerAdmin.php'; ?>