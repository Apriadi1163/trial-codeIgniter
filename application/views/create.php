<div class="container">
    <div>
        <h1 class="text-center">Apriadi Trial Form</h1>
    </div>
    <form method="post" action="<?= base_url('home/create') ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nomor Hp</label>
            <input type="text" class="form-control" name="nomorHp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tglLahir">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Posisi</label>
            <input type="text" class="form-control" name="posisi">
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
</div>