<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/cover_bg_satu.jpg);">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="login">
									<div class="text-center">
										<label>Daftar</label>
									</div>
									<form action="<?=base_url()?>signup/signup_process" method="POST">
										<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="fullname">Nama Lengkap</label>
													<input name="fullname" type="text" class="form-control" id="fullname"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="username">Username</label>
													<input name="username" type="text" class="form-control" id="username"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="password">Password</label>
													<input name="password" type="password" class="form-control" id="password"/>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Sign Up">
											</div>														
											<div class="text-center">
												<label>Sudah punya akun?<a href="<?=base_url()?>login"> Login</a></label>
											</div>
										</div>
									</form>
								</div>
							</div>
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