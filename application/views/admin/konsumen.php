<!DOCTYPE html>
<html lang="en">





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <!-- Content Row -->
    <div class="row">
        <div class="col-8">
            <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#myModal">Tambah data cabang</a>

        </div>
        <div class="col-4">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success ml-2" type="submit">Search</button>
            </form>
        </div>
    </div>



    <div class="card shadow">
        <table class="table table-hover card-shadow">
            <tr class="bg-secondary text-white rounded">
                <td>No</td>
                <td>Nama</td>
                <td>Usia</td>
                <td>Pekerjaan</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Diki setiawan</td>
                <td>23 tahun</td>
                <td>Mahasiswa</td>
                <td>Kp. segaran</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Diki setiawan</td>
                <td>23 tahun</td>
                <td>Mahasiswa</td>
                <td>Kp. segaran</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Diki setiawan</td>
                <td>23 tahun</td>
                <td>Mahasiswa</td>
                <td>Kp. segaran</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Diki setiawan</td>
                <td>23 tahun</td>
                <td>Mahasiswa</td>
                <td>Kp. segaran</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>


    </div>
    <nav aria-label="Page navigation example fixed-bottom">
        <ul class="pagination justify-content-end p-4">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>


    <div class="container">


        <!-- Modal -->
        <div id="myModal" class="modal fade " role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">

                        <h4 class="modal-title">Form Tambah Suppier</h4>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="kodeBarang" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="kd_brg" name="kd_brg" placeholder="Input kode barang">

                            </div>
                            <div class="mb-3">
                                <label for="jenisBarang" class="form-label">Jenis barang</label>
                                <input type="text" class="form-control" id="jenis_brg" name="name_brg" placeholder="Input jenis barang">

                            </div>
                            <div class="mb-3">
                                <label for="kodeBarang" class="form-label">Jumlah</label>
                                <input type="text" class="form-control" id="kd_brg" name="kd_brg" placeholder="Input jumlah barang">

                            </div>
                            <div class="mb-3">
                                <label for="kodeBarang" class="form-label">Supplier</label>
                                <input type="text" class="form-control" id="kd_brg" name="kd_brg" placeholder="Input name supplier">

                            </div>
                            <div class="mb-3">
                                <label for="kodeBarang" class="form-label">Harga Barang</label>
                                <input type="text" class="form-control" id="kd_brg" name="kd_brg" placeholder="Input harga barang">

                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>

                        </form>
                    </div>
                    <!-- footer modal -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->