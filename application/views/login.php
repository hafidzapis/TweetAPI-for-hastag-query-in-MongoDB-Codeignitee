<?php include "header-focused.php" ?>
<div class="verticalcenter">
    <a href="index.php"><img src="<?php echo base_url();?>assets/img/logo-big.png" alt="Logo" class="brand" /></a>
    <div class="panel panel-primary">
        <?php echo form_open('login' , array('class' => 'form-horizontal','style' => 'margin-bottom: 0px !important;'));?>
        <div class="panel-body">
            <h4 class="text-center" style="margin-bottom: 25px;">Log in to get started</h4>
            
            <!--<form action="#" class="form-horizontal" style="margin-bottom: 0px !important;">-->
                
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            <input type="hidden" name="login_type" value="user">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                </div>
               

                <div class="clearfix">
                    <div class="pull-right"><label><input type="checkbox" style="margin-bottom: 20px" checked=""> Remember Me</label></div>
                </div>
            
            <!--</form>-->
            <?php if ($this->session->flashdata('flash_message') != ""): ?>
                <div class="alert alert-dismissable alert-danger">
                    <strong><?php echo $this->session->flashdata('flash_message'); ?></strong> Invalid username or password
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
            <?php endif; ?>
                
        </div>
        <div class="panel-footer">
            <a href="#" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a>

            <div class="pull-right">
                <input type="reset" class="btn btn-default" value="Reset" />
                <input type="submit"  class="btn btn-primary" value="Login" />
            </div>
        </div>
         <?php echo form_close();?>
        
    </div>
</div>
<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url()?>assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script> 
 
</body>
</html>