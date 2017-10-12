<div class="page text-center">

	<main class="page-content">

		<section class="section-98 section-sm-110">

			<div class="shell">

				<h1>Conversemos</h1>

				<hr class="divider bg-mantis" style="background: #ff7e00">

				<div class="range range-sm-center offset-top-66">

					<div class="cell-sm-6">

						<img class="img-circle" 

						src="images/underline/personal/user-cesar-140-140.jpg" 

						width="140" 

						height="140" 

						alt="Conversemos">

					</div>

				</div>

				<div class="offset-top-30 text-center">

					<p>

						<q class="text-italic h3 text-bold" style="text-align: justify">

							Si una idea no te deja dormir, env&iacute;ame un correo 

							a trav&eacute;s del formulario o en forma directa, 

							adjunta tu n&uacute;mero telef&oacute;nico y te llamar&eacute; a la 

							brevedad posible.

						</q>

					</p>

				</div>		

						<h4 class="text-bold text-picton-blue"><span class="p">

							<a href="mailto:#"><h3>hola@underline.cl</h3></a></span>

						</h4>	

			</div>

		</section>

		<section class="bg-gray-darkest">

			<section class="context-dark">

				<div class="rd-parallax" data-on="false" data-md-on="true">

					<div class="rd-parallax-layer" data-speed="0.35" data-type="media" 

					data-url="images/backgrounds/background-15-1920x1172.jpg"></div>

					<div class="rd-parallax-layer" data-speed="0" data-type="html">

						<div class="shell section-98 section-sm-85 section-lg-bottom-34">

							<h1>Cont&aacute;ctame</h1>

							<hr class="divider bg-mantis" style="background: #ff7e00">

								<div id="mail-status" name='mail-status' class="">



								</div>

								

							<div class="range range-sm-center offset-top-0">

								<div class="cell-sm-8">

									<form name="contact-form" id="contact-form" class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post">

										<div class="range">

											<div class="cell-lg-6">

												<div class="form-group">

													<label class="form-label form-label-outside" for="contact-me-name">Nombre:</label>

													<input class="form-control" id="contact-me-name" type="text" name="nombre" data-constraints="@Required">

												</div>

											</div>

											<div class="cell-lg-6 offset-top-20 offset-lg-top-0">

												<div class="form-group">

													<label class="form-label form-label-outside" for="contact-me-email">E-Mail:</label>

													<input class="form-control" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email">

												</div>

											</div>

											<div class="cell-lg-12 offset-top-20">

												<div class="form-group">

													<label class="form-label form-label-outside" for="contact-me-body">Comentario:</label>

													<textarea class="form-control" id="contact-me-body" name="body" data-constraints="@Required"></textarea>

												</div>

											</div>

										</div>

										<div class="group-sm text-center text-lg-left offset-top-30">

											<button class="btn btn-primary btn-send-mail" style="background-color: #ff7e00; border-color: #ff7e00" type="button">Enviar</button>

											{{ csrf_field() }}

											<button class="btn btn-default" type="reset">Borrar</button>

										</div>

									</form>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

		</section>

	</main>

</div>

@yield('after-conversemos')