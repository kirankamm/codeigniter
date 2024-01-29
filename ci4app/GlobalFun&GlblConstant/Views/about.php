
<?= $this->extend('template/base')?>

<?= $this->section('title') ?>
<?= $title?>
<?= $this->endSection() ?>

    <?= $this->section('content') ?>
<table>
    <tr>
<td>
    <div class='col-md-50'>
    <?= $this->include('partials/sidebar-left')?>
        </div>
</td>
<td> 
    <div class='col-md-50'>
    <h1>This is About of <?= $name ?></h1>
        </div>
</td>
    </div>
    
</tr>
</table>
    <?= $this->endSection() ?>



















