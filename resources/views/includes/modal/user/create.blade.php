<form id="createForm">
    <div class="modal fade" id="tambah" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namecreate">Nama</label>
                        <input type="text" name="name" class="form-control" id="namecreate" placeholder="Isi nama">
                    </div>
                    <div class="form-group">
                        <label for="emailcreate">Email</label>
                        <input type="email" name="email" class="form-control" id="emailcreate" placeholder="Isi email">
                    </div>
                    <div class="form-group">
                        <label for="passwordcreate">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordcreate" placeholder="Isi Password">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" id="store" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>