
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">accueil</a></li>
					<li class="item-link"><span>connexion</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">adresse de facturation</h3>
					<form action="#" method="get" name="frm-billing">
						<p class="row-in-form">
							<label for="fname">Prénom<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Votre Prenom">
						</p>
						<p class="row-in-form">
							<label for="lname">Nom<span>*</span></label>
							<input id="lname" type="text" name="lname" value="" placeholder="Votre Nom">
						</p>
						<p class="row-in-form">
							<label for="email">Adresse e-mail:</label>
							<input id="email" type="email" name="email" value="" placeholder="Tapez votre email">
						</p>
						<p class="row-in-form">
							<label for="phone">Numéro de téléphone<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="Format à 10 chiffres">
						</p>
						<p class="row-in-form">
							<label for="add">Adresse:</label>
							<input id="add" type="text" name="add" value="" placeholder="Rue au numéro de l'appartement">
						</p>
						<p class="row-in-form">
							<label for="country">Pays<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="Maroc">
						</p>
						<p class="row-in-form">
							<label for="zip-code">Code postal / ZIP:</label>
							<input id="zip-code" type="number" name="zip-code" value="" placeholder="Votre code postal">
						</p>
						<p class="row-in-form">
							<label for="city">Ville<span>*</span></label>
							<input id="city" type="text" name="city" value="" placeholder="Nom de Ville">
						</p>
						<p class="row-in-form fill-wife">
							<label class="checkbox-field">
								<input name="create-account" id="create-account" value="forever" type="checkbox">
								<span>Créer un compte ?</span>
							</label>
							<label class="checkbox-field">
								<input name="different-add" id="different-add" value="forever" type="checkbox">
								<span>Expédier à une adresse différente ?</span>
							</label>
						</p>
					</form>
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Mode de paiement</h4>
						<p class="summary-info"><span class="title">Chèque / Mandat</span></p>
						<p class="summary-info"><span class="title">Panier de crédit (enregistré)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
								<span>Transfert bancaire direct</span>
								<span class="payment-desc">Mais la majorité a subi une altération sous une forme ou une autre, par de l'humour injecté ou des mots aléatoires qui ne semblent même pas légèrement crédibles.</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>Visa</span>
								<span class="payment-desc">Il existe de nombreuses variantes de passages du Lorem Ipsum disponibles</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
								<span class="payment-desc">Vous pouvez payer avec votre crédit</span>
								<span class="payment-desc">carte si vous n'avez pas de compte paypal</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Montant Total</span> <span class="grand-total-price">$100.00</span></p>
						<a href="thankyou.html" class="btn btn-medium">Faites La Commande Maintenant</a>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Mode de livraison</h4>
						<p class="summary-info"><span class="title">Forfait</span></p>
						<p class="summary-info"><span class="title">Fixé $50.00</span></p>
						<h4 class="title-box">Codes de réduction</h4>
						<p class="row-in-form">
							<label for="coupon-code">Entrez votre code de coupon :</label>
							<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
						</p>
						<a href="#" class="btn btn-small">Valider.</a>
					</div>
				</div>

				<div class="wrap-show-advance-info-box style-1 box-in-site">
					<h3 class="title-box">Produits les plus consultés</h3>
					<div class="wrap-products">
						<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_04.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">Nouveau</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_17.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item sale-label">Solde</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_15.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">Nouveau</span>
										<span class="flash-item sale-label">Solde</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_01.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Bestseller</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_21.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_03.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item sale-label">Solde</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_04.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">Nouveau</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="{{ asset('assets/images/products/digital_05.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Best-seller</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">aperçu rapide</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Haut-parleur omnidirectionnel sans fil Radiant-360 R6 [Blanc]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</main>
