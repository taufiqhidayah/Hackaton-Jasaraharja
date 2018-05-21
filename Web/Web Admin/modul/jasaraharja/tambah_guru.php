<?php
if(isset($_POST['tambah'])){
$id_guru=$_REQUEST['id_guru'];
$nama=$_REQUEST['nama'];
$gender=$_REQUEST['gender'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$alamat=$_REQUEST['alamat'];
$query1=mysql_query("insert into guru values('$id_guru','$nama','$alamat','$gender','$username','$password')");
	if($query1){
		echo"<script>alert('Input Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
}else{
}
?>
<h4 class="lighter">
									<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
									<a href="#modal-wizard" data-toggle="modal" class="pink"> Wizard Inside a Modal Box </a>
</h4>

								

								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">New Item Wizard</h4>

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
														<h3 class="lighter block green">Masukkan Data Guru</h3>
														<form class="form-horizontal" METHOD="POST">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">ID Guru:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="id_guru"  class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Nama Guru:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nama"  class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>
															
															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="password" name="password"  class="col-xs-12 col-sm-4" />
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Username:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="username"  class="col-xs-12 col-sm-4" />
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
																		<textarea class="input-xlarge" name="alamat" id="comment"></textarea>
																	</div>
																</div>
															</div>

															<div class="space-8"></div>

															<div class="form-group">
																<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																	<label>
																		<input name="agree" id="agree" type="checkbox" class="ace" />
																		<span class="lbl"> I accept the policy</span>
																	</label>
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
