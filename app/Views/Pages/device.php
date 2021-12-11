<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Merk</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Status</th>
            <th scope="col">Switch</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($device as $d) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $d['device_name']; ?></td>
                <td><?= $d['device_brand']; ?></td>
                <td><?= $d['device_quantity']; ?></td>
                <td><?= $d['device_status']; ?></td>
                <td><button type="button" onclick="">ON/OFF</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>