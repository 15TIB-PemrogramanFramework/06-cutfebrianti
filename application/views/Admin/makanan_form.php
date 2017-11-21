<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data makanan</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama makanan: </label>
				<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama makanan" 
				required value="<?php echo $nama; ?>">
			</div>
			<div class="form-group">
				<label>Jenis makanan: </label>
				<input type="text" name="jenis" class="form-control" placeholder="Inputkan jenis makanan" 
				required value="<?php echo $jenis; ?>">
			</div>
			<div class="form-group">
				<label>
				ga Makanan: </label>
				<input type="text" name="harga" class="form-control" placeholder="Inputkan harga makanan" 
				required value="<?php echo $harga; ?>">
			</div>
			
			<div class="form-group">
				<label>Deskripsi makanan: </label><br/>
				<textarea name="deskripsi" cols="150" rows="5"><?php echo $deskripsi; ?></textarea>
			</div>
			<div class="form-group">
				<label>Gambar makanan: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar makanan">
			</div>
			<input type="hidden" name="id_makanan" value="<?php echo $id_makanan; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('makanan')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>