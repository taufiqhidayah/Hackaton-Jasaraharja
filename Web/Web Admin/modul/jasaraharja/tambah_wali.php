<?php
error_reporting(0);
if(isset($_POST['tambah'])){
$id_wali=$_REQUEST['id_wali'];
$nama_l=$_REQUEST['nama_l'];
$nama=$_REQUEST['nama'];
$gender=$_REQUEST['gender'];
$tgl_lahir=$_REQUEST['tgl'];
$password=$_REQUEST['password'];
$alamat=$_REQUEST['alamat'];
$folder=$_REQUEST['folder'];
$temp_name = $_FILES['foto']['tmp_name'];
		$name_file = $_FILES['foto']['name'];
		$type_file = $_FILES['foto']['type'];
		$size = $_FILES['foto']['size'];
		$file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
      		$expensions= array("jpeg","jpg","png");
		$maxsize = 1024 * 3000;
		$tampil=mysql_query("select * from wali_kelas where nama='$nama'");
		$sama=mysql_num_rows($tampil);
		if($size >=$maxsize){
			echo"<script>alert('Maks 3 mb');</script>";
	echo"<meta http-equiv='refresh' content='0;'>";
		}else if($sama>=1){
			echo"<script>alert('Username Sama Silahkan Ganti');</script>";
				echo"<meta http-equiv='refresh' content='0;'>";
		}else{
move_uploaded_file($temp_name, '../../foto/'.$name_file.'');
$nm_foto = $name_file;
$query1=mysql_query("insert into wali_kelas values('$id_wali','$nama_l','$nama','$tgl_lahir','$gender','$alamat','$password','$folder','$nm_foto')");
	if($query1){
		echo"<script>alert('Input Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
}}else{
}
?>
<h4 class="lighter">
</h4>

								

								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Data Wali Kelas</h4>

										<div class="widget-toolbar">
											<label>
												<small class="green">
													<b>Validation</b>
												</small>

											</label>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
													<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Masukkan Data Wali Kelas</h3>
														<form class="form-horizontal" enctype='multipart/form-data' METHOD="POST">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">ID Wali Kelas:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="id_wali" value="<?php echo date("dymhis");?>" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Nama Wali Kelas:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nama_l"  class="col-xs-12 col-sm-6" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">username:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nama"  class="col-xs-12 col-sm-6" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
																	</div>
																</div>
															</div>
															
															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Tanggal Lahir:</label>
																<div class="col-xs-12 col-sm-9">
																		<input type="text" name="tgl" id="datepicker" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"/>
																</div>
															</div>
															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="password" name="password"  class="col-xs-12 col-sm-4" />
																		<input type="hidden" name="folder" value="guru"  class="col-xs-12 col-sm-4" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
																	</div>
																</div>
															</div>

															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Jenis Kelamin</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="L" type="radio" class="ace" />
																			<span class="lbl"> Laki-laki</span>
																		</label>
																	</div>

																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="P" type="radio" class="ace" />
																			<span class="lbl"> Perempuan</span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Alamat</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<textarea class="input-xlarge" name="alamat" id="comment" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
																	</div>
																</div>
															</div>

															<div class="space-8"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Foto</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="file" name="foto"  class="col-xs-12 col-sm-4" />
																	</div>
																</div>
															</div>
															
															<div class="form-group">
															<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																		<button class="btn btn-sm btn-prev">
																			<i class="ace-icon fa fa-arrow-left"></i>
																			Hapus
																		</button>

																		<button name="tambah" type="submit" class="btn btn-success btn-sm btn-next" data-last="Finish">
																			Simpan
																			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																		</button>
															</div>
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="2">
														<div>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Well done!
																</strong>

																You successfully read this important alert message.
																<br />
															</div>

															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-times"></i>
																	Oh snap!
																</strong>

																Change a few things up and try submitting again.
																<br />
															</div>

															<div class="alert alert-warning">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Warning!</strong>

																Best check yo self, you're not looking too good.
																<br />
															</div>

															<div class="alert alert-info">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Heads up!</strong>

																This alert needs your attention, but it's not super important.
																<br />
															</div>
														</div>
													</div>

													<div class="step-pane" data-step="3">
														<div class="center">
															<h3 class="blue lighter">This is step 3</h3>
														</div>
													</div>

													<div class="step-pane" data-step="4">
														<div class="center">
															<h3 class="green">Congrats!</h3>
															Your product is ready to ship! Click finish to continue!
														</div>
													</div>
												</div>
											</div>
											
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>

								<div id="modal-wizard" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container">
												<div class="modal-header">
													
												</div>

											</div>

											<div class="modal-footer wizard-actions">
												<button class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-sm btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
											</div>
										</div>
									</div>
