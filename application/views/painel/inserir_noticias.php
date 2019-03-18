<div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Inserir Notícia</h2>
                            

                        </div>

                        <form id="add-user-form">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Título</label>
                                    <div class="nk-int-st">
                                        <input type="text"  class="form-control input-sm" placeholder=""  name="title" id="title">
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Conteúdo da Notícia</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="" name="content" id="content" >
                                        
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Imagem</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="" name="image" id="image" >
                                    </div>
                                </div>
                            </div>
                            
                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success">Inserir Notícia</button>
                                <!--<button type="submit" class="btn btn-warning" value="Update" onclick="update_user();">Update</button>
                                -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>

<script src="<?php echo base_url('public/painel/firebase/app.js') ?>"></script>