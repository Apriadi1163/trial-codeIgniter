<div class="container">
    <div>
        <h1 class="text-center">Apriadi Trial Update</h1>
    </div>
    <form method="post" action="<?= base_url('home/update/'.$item->id) ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $item->nama ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nomor Hp</label>
            <input type="text" class="form-control" name="nomorHp" value="<?= $item->nomorHp ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tglLahir" value="<?= $item->tglLahir ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Posisi</label>
            <input type="text" class="form-control" name="posisi" value="<?= $item->posisi ?>">
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
</div>