<?php /** @var boolean $success */?>
<form action="<?= base_url('doctrine-tools')?>" method="post">
    <button name="update" type="submit">Atualizar Database</button>
</form>
<?php if(isset($success) && $success == true):?>
    <p> SchemaToll successfully updated</p>
<?php endif;?>
