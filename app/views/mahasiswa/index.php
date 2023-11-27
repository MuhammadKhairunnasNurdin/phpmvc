<div class="container mt-5">
    <div class="row-cols-6">
        <h3>List Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach ($data["mhs"] as $mhs) :?>
                <li class="list-group-item">
                    <?= $mhs["Nama_mhs"]?>
                    <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['No_Mhs']?>" class="badge badge-primary">detail</a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

