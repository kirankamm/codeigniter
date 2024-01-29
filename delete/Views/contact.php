<?= $this->extend('template/base')?>

<?= $this->section('title') ?>
<?= $title?>
<?= $this->endSection() ?>

    <?= $this->section('content') ?>

    <table><tr>
    <td>
<div>
    <div class="col-md-33">  
<?= $this->include('partials/sidebar-left')?>
</div>
</td>

<td>
    <div class="col-md-33">  
    <h1>This is contact  <?= $email ?></h1>
</div>
</td>

<td>
<div class="col-md-34"> 
    <?= $this->include('partials/sidebar-left')?> 
</div>
</td>

</tr>
</table>
</div>
    <?= $this->endSection() ?>

     
