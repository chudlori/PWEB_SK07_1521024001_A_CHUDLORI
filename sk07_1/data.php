<style>
    #dt{
        background:yellow;
        border:1px solid red;
        width: 400px;
        margin:10px auto;

    }
    h3{
        color: red;
    }
</style>
<div id="dt">
    <table>
        <h3>Data berhasil di simpan</h3>
        <tr>
            <td>Nama</td><td>:</td><td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Umur</td><td>:</td><td><?php echo $umur ?></td>
        </tr>
        <tr>
            <td>Alamat</td><td>:</td><td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td>:</td><td><?php echo $jeniskelamin ?></td>
        </tr>
    </table>
</div> 