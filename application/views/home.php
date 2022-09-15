<div class="container">
    <div>
    <h1 class="text-center">Apriadi trial codeigniter</h1>
    </div>
    <a href="<?= base_url('home/create') ?>" class="btn btn-primary mb-5 mt-3">Tambah</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">no</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor Hp</th>
            <th scope="col">Tgl Lahir</th>
            <th scope="col">Posisi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach ($karyawan as $item) { ?>
            <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $item->nama ?></td>
            <td><?= $item->nomorHp ?></td>
            <td><?= date('d-m-Y', strtotime($item->tglLahir)) ?></td>
            <td><?= $item->posisi ?></td>
            <td>
                <a href="<?= base_url('home/update/'.$item->id) ?>" class="btn btn-primary">Edit</a>
                <a href="<?= base_url('home/delete/'.$item->id) ?>" class="btn btn-danger">Delete</a>
            </td>
            </tr>
         <?php   } ?>
        </tbody>
    </table>
</div>