<div class="row">
    <div class="col">
        <div class="row mb-2">
            <div class="col">
            <a href="<?php echo base_url("users/add/")?>"> 
                <button class="btn btn-primary">Tambah</button>
            </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $d){?>
                    <tr>
                        <td><?php echo $d->username?></td>
                        <td><?php echo $d->role?></td>
                        <td>
                            <a href="<?php echo base_url("users/edit/".$d->id)?>">    
                                <i class="fas fa-fw fa-pencil-alt cursor-pointer" aria-hidden="true"></i>
                            </a> &nbsp;
                            <a href="<?php echo base_url("users/delete/".$d->id)?>" onclick="return confirm('Yakin untuk menghapus ?')">
                                <i class="fas fa-fw fa-trash cursor-pointer" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
