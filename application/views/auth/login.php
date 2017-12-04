<div class="container">
    <div class="row">
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo $this->session->flashdata('failed'); ?>
            <?php echo form_open('Auth/login'); ?>
            <fieldset>
                <legend class="text-center"><h1 class="title">Login</h1></legend>
                <!-- username -->
                <div class="form-group">
                    <div class="row colbox">     
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" class="form-control" name="username" placeholder="username" value="<?php echo set_value('username') ?>"/>  
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                    </div>
                </div>
                
                 <!-- password -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="password" class="control-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="password"/>   
                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                </div>

                <br>
                <!-- signin button -->
                <div class="form-group">
                    <div class="row colbox text-center">
                        <input type="submit" id="login" name="login" value="Login" class="btn btn-primary btn-block"/>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
            <div class="text-center">
                <br>
                <p>Don't have an account?</p><a href="<?php echo site_url('auth/register')?>">Register Here!</a>
            </div>
        </div>
    </div>
</div>