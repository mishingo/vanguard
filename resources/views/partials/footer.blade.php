<footer class="grey darken-4 pt-l--l pb-xl--l pb-l--s pt-m--s pa-s--s">
  <div class="container pa-m--m">
  	<div class="row">
  		<div class="row">
  			<div class="h2 tw-ultrabold white-text">Subscribe to our newsletter</div>
  		</div>
		<form method="GET" action="/">
		    <div class="row pa-f--m inline-input-group">
		        <div class="input-field col s12 l4">
		            <i class="material-icons prefix">face</i>
		            <input placeholder="Full Name" name="search"  id="icon_prefix" type="text" class="validate white">
		        </div>
		        <div class="input-field col s12 l4 mt-s--s mt-f--m">
		            <i class="material-icons prefix">mail</i>
		            <input placeholder="Email" name="zip"  id="icon_telephone"  type="tel" class="validate white" >
		        </div>
		        <div class="col s12 l4 input-field">
		            <button id="" type="submit" class="btn btn-flush waves-effect waves-light grey">
		                Sign Up
		            </button>
		        </div>
		    </div>
		</form>
  	</div>
  	<div class="row mt-l--s">
		<div class="col s6 m3 footer-links">
			<div class="h4 tw-ultrabold grey-text">Popular Hacks</div>
			<a href="" class="h5 mt-m--s">Shopping</a>
			<a href="" class="h5 mt-m--s">Credit Cards</a>
			<a href="" class="h5 mt-m--s">Insurance</a>
			<a href="" class="h5 mt-m--s">Education</a>
		</div>
		<div class="col s6 m3 footer-links">
			<div class="h4 tw-ultrabold grey-text">Popular Articles</div>
			<a href="" class="h5 mt-m--s">Shopping</a>
			<a href="" class="h5 mt-m--s">Credit Cards</a>
			<a href="" class="h5 mt-m--s">Insurance</a>
			<a href="" class="h5 mt-m--s">Education</a>
		</div>
		<div class="col m3 footer-links right">
			
		</div>
  	</div>
  	<div class="row mt-l--s">
  		<div class="col m6">
			@include('svg/logo')
		</div>
		<div class="col m6 right-align--m left-align--s bottom-footer-align">
			<div class="tos white-text"><a class="white-text" href="">Terms of Service</a> | <a class="white-text" href="">Privacy Policy</a></div>
		</div>
  	</div>
  	<div class="row mt-l--s">
  		<div class="grey-text"><small>Disclaimer: SavingHacks strives to keep its information accurate and up to date. This information may be different than what you see when you visit a financial institution, service provider or specific product’s site. All financial products, shopping products and services are presented without warranty. When evaluating offers, please review the financial institution’s Terms and Conditions. Pre-qualified offers are not binding. If you find discrepancies with your credit score or information from your credit report, please contact TransUnion® directly.</small></div>

  		<div class="mt-s--s grey-text"><small> Advertiser Disclosure: So how do we make money? We receive compensation from our partners when someone applies or gets approved for a financial product through our site. But, the results of our tools (like our credit card comparison tool) and editorial reviews are based on quantitative and qualitative assessments of product features — nothing else. Compensation may influence the products we review and write about, the order in which categories appear in “best of” articles, whether products appear on our site and where they’re placed. While we try to feature as many product offers on our site as we can maintain (1,200+ credit cards and financial products!), we recognize that our site does not feature every company or financial product available on the market.</small> </div>
  	</div>
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
