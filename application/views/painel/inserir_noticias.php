<div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Basic Example</h2>
                            

                        </div>

                        <form id="add-user-form">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="nk-int-st">
                                        <input type="text"  class="form-control input-sm" placeholder=""  name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="" name="name" id="name" >
                                    </div>
                                </div>
                            </div>
                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success">Add user</button>
                                <!--<button type="submit" class="btn btn-warning" value="Update" onclick="update_user();">Update</button>
                                -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>

<script src="<?php echo base_url('public/painel/firebase/app.js') ?>"></script>