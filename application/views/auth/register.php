<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">

            <?php echo $this->session->flashdata('succeed'); ?>
            <?php echo form_open('auth/register') ?>

            <fieldset>
                <legend class="text-center"><h1 style="font-size: 20pt;">Registration</h1></legend>

                <!-- user name -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="username" class="control-label">Username</label>
                            <input class="form-control" id="txt_empname" name="username" placeholder="Name" type="text" value="<?php echo set_value('username'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>
                    </div>
                </div>

                <!-- user address -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="password" class="control-label">Password</label>
                            <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />  
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>
                </div>

                <!-- user email -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="password2" class="control-label">Password herhalen</label>
                            <input class="form-control" id="txt_email" name="password2" placeholder="Password" value="<?php echo set_value('password2'); ?>" type="password" />  
                            <span class="text-danger"><?php echo form_error('password2'); ?></span>
                        </div>
                    </div>
                </div>
                <br>
                <!-- signup button -->
                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Register"/>
                        </div>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
             <div class="text-center">
                 <br>
                <a href="<?php echo base_url()?>Auth/login" >Already signed up, Login</a>
            </div>
        </div>
    </div>
</div>