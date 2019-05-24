<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url('<?=base_url()?>assets/images/cover_bg_satu.jpg');">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							
							<?php if ( isset($_GET['alert']) ): ?>
								<?php if ( $_GET['alert'] == 'success' ): ?>
									<div class="alert alert-success">
										<p>Pendaftaran Berhasil</p>
									</div>
									<?php elseif ( $_GET['alert'] == 'failed' ): ?>
										<div class="alert alert-failed">
											<p>Username dan password tidak cocok</p>
										</div>
									<?php endif; ?>
								<?php endif; ?>	


								<!-- Tab panes -->
								<form action="<?=base_url()?>login/signin_process" method="POST">
									<input type="hidden" name="url_before" value='<?php 
									if(isset($_GET['url'])){
										echo $_GET['url'];
									}
									else{
										echo '';
									}
									?>'>

									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="login">
											<div class="text-center">
												<label>LOGIN</label>
											</div>
											<div class="row">
												<div class="col-xxs-12 col-xs-12 mt">
													<div class="input-field">
														<label for="username">Username</label>
														<input type="text" class="form-control" id="username" name="username" required />
													</div>
												</div>
												<div class="col-xxs-12 col-xs-12 mt">
													<div class="input-field">
														<label for="password">Password</label>
														<input type="password" class="form-control" id="password" name="password" required />
													</div>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Login">
												</div>											
												<div class="text-center">
													<label>Belum punya akun?<a href="<?=base_url()?>signup"> Daftar sekarang</a></label>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="desc2 animate-box">
							<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">

								<h2>Let's travel the world!</h2>
								<h3>Hey kamu, iya kamu, mau ke mana?</h3>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>