<div class="container">
        <?php $this->load->view('templates/ms'); ?>
        <div class="row justify-content-md-center">
                <div class="col-md-4">   
<h1 class="text-center"><?=$title?></h1>

<?php echo validation_errors(); ?>
    <?php echo form_open('users/login'); ?>
    
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?=set_value('username')?>" required autofocus>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>    
    <input type="submit" value="Login" class="btn btn-primary btn-block">
   <br>
    <p class="mb-0 text-white-muted">Anda Belum Punya Akun? <a href="<?php echo base_url() ?>users/registersiswa">Daftar</a></p>

<?php echo form_close(); ?>
</div>
</div>
</div>
