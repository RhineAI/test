@extends('layouts.main')

@section('container')

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <h2 class="mb-4">Data Kategori Produk</h2>

     <h4 class="mb-4">	
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
               <i class="bi bi-plus-lg"></i>
          </button>
          Tambah
     </h4>

     <div class="table-responsive col-sm-10">
          <table class="table table-bordered table-striped dataTable no-footer">
          <thead>
               <tr class="table-light">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
               </tr>
          </thead>
          <tbody>
               <tr class="table-light">
                    <th scope="row">1</th>
                    <td>Makanan</td>
                    <td>
                         <a href="" class="badge bg-success"><i class="bi bi-pencil-square"></i></a>
                         <form action="" class="d-inline">
                              @csrf
                              <button class="badge bg-danger border-0" type="button" onclick="return confirm('Afa Iyah mau dihapus banh?')"><i class="bi bi-trash3-fill"></i></button>
                         </form>
                    </td>
               </tr>
          </tbody>
          </table>
     </div>

     <!-- Modal -->
	<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="" method="post" enctype="multipart/form-data">

						<div class="row mb-3">
							<label for="kode"  class="col sm-3 col-form-label">
								Kategori
							</label>
							<div class="col sm-9">
								<input type="text" class="form-control" name="kode" id="kode"required>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
					</form>		
				</div>
			</div>
		</div>
	</div>
@endsection