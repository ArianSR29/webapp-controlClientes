
<?php if($this->session->flashdata('error')):?>
    <div class="error-message">
        <p><?php echo $this->session->flashdata('error') ?></p>
    </div>
<?php endif ?>
<form action=" <?php echo base_url(); ?>auth/login " method="POST"> 

<input type="text" name="login_tb_user" placeholder="Usuario">
<input type="text" name="login_tb_password" placeholder="Contaseña">
<button>Entrar</button>
</form>