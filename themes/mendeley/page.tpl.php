<header class="header">
<?php 
if (drupal_is_front_page()) {
	print render($page['header']['views_masthead_primary-block']);
} else {
	print render($page['header']['views_masthead_secondary-block']);
}
?>
</header>
<section class="section hero hero3">
	<div class="container">
		<div class="hero--main">
			<h1 class="title">See the impact of your research on the world of science</h1>
			<p class="subheading">Mendeley Stats shows you how many views and shares your published work has had</p>
			<a href="https://www.mendeley.com/join/?trackingUrl=%2Fjoin%2Fformreg%2Fhp%2Fintro%2F" class="btn btn-large">Create a free account</a>
		</div>
	</div>
</section>
<section class="section section-tertiary user-segments">
	<div class="grid_container">
		<div class="grid">
			<div class="benefits">
				<div class="grid--row">
					<div class="grid--row--column grid--row--column-3">
						<div class="benefits--item borderless">
							<div class="item-wrapper">
								<a href="/" class="benefits--link modal-open">Manage Research</a>
								<p class="benefits--copy">Save, organise and cite all your research in one place</p>
							</div>
						</div>
					</div>
					<div class="grid--row--column grid--row--column-3">
						<div class="benefits--item">
							<div class="item-wrapper">
								<a href="/" class="benefits--link modal-open">Stay up to date</a>
								<p class="benefits--copy">Instant access to millions of papers from thousands of journals</p>
							</div>
						</div>
					</div>
					<div class="grid--row--column grid--row--column-3">
						<div class="benefits--item">
							<div class="item-wrapper">
								<a href="/" class="benefits--link modal-open">Connect</a>
								<p class="benefits--copy">Connect and collaborate with millions of scientific researchers</p>
							</div>
						</div>
					</div>
					<div class="grid--row--column grid--row--column-3">
						<div class="benefits--item">
							<div class="item-wrapper">
								<a href="/" class="benefits--link modal-open">Publish</a>
								<p class="benefits--copy">Publish your own research and see its impact</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="section--title">The reference manager you've been looking for</h2>
		<div class="user-tabs-nav">
			<button class="user-tabs-nav--item active" data-tab="undergrads">Undergrads and PhDs</button>
			<button class="user-tabs-nav--item" data-tab="postdocs">Post docs</button>
			<button class="user-tabs-nav--item" data-tab="professors">Professors</button>
			<button class="user-tabs-nav--item" data-tab="librarians">Librarians</button>
		</div>
		<div class="grid user-tabs">
			<div class="tab tab-undergrads active">
				<div class="grid--row">
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--image">
						</div>
					</div>
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--info">
							<p class="title">Undergrads and PhDs getting started in the world of research</p>
							<ul class="feature-list">
								<li class="feature feature-search"><strong>Search</strong> publications, papers and articles</li>
								<li class="feature feature-follow"><strong>Follow</strong> trends and inspirational people</li>
								<li class="feature feature-organise"><strong>Organise</strong> your own research, papers, articles and references</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tab tab-postdocs">
				<div class="grid--row">
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--image">

						</div>
					</div>
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--info">
							<p class="title">Post doctorate researchers develop your skills and network</p>
							<ul class="feature-list">
								<li class="feature feature-follow"><strong>Connect</strong> and collaborate with your peers</li>
								<li class="feature feature-mobile"><strong>Access</strong> your research wherever you are</li>
								<li class="feature feature-network"><strong>Elevate</strong> your profile and develop your network</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tab tab-professors">
				<div class="grid--row">
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--image">

						</div>
					</div>
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--info">
							<p class="title">Professors connect students to a world of resources</p>
							<ul class="feature-list">
								<li class="feature feature-organise"><strong>Improve</strong> research skills and the quality of student submissions</li>
								<li class="feature feature-groups"><strong>Connect</strong> your research wherever you are</li>
								<li class="feature feature-globe"><strong>Publish</strong> your own research and see its impact in the scientific community</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tab tab-librarians">
				<div class="grid--row">
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--image">

						</div>
					</div>
					<div class="grid--row--column grid--row--column-6">
						<div class=" tab--info">
							<p class="title">Librarians and institutional buyers improve research and collaboration</p>
							<ul class="feature-list">
								<li class="feature feature-follow"><strong>Connect</strong> your students to millions of papers and people</li>
								<li class="feature feature-organise"><strong>Support</strong> your students with dedicated resources and on boarding from Mendeley </li>
								<li class="feature feature-catalogue"><strong>Improve</strong> the quality of research conducted at your organisation</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section product">
	<div class="container">
		<div class="image-wrapper">
			<img src="<?php print $directory;?>/images/product-shot.png" width="100%" alt="product" />
		</div>
		<h2 class="section--title">Mendeley Reference Manager</h2>
		<p class="subheading">A free cross-platform application to help you manage your research</p>
		<a href="https://www.mendeley.com/download-mendeley-desktop/" class="btn btn-large">
			Download now
		</a>
	</div>
</section>

<div class="section-border"><span class="section-border--title">Explore more</span></div>

<section class="section features">
	<div class="grid_container">
		<div class="grid">
			<div class="grid--row">
				<div class="grid--row--column grid--row--column-4">
					<div class="feature feature-search">
						<div class="feature--image">
						</div>
						<div class="feature--details">
							<p class="title">Search and Create</p>
							<p class="info">Quickly search and create bibliographies so you can focus on writing</p>
						</div>
					</div>
				</div>
				<div class="grid--row--column grid--row--column-4">
					<div href="" class="feature feature-access">
						<div class="feature--image">
						</div>
						<div class="feature--details">
							<p class="title">Access anywhere</p>
							<p class="info">Compile your own cloud-stored library and take notes directly on your research papers</p>
						</div>
					</div>
				</div>
				<div class="grid--row--column grid--row--column-4">
					<div href="" class="feature feature-groups">
						<div class="feature--image">
						</div>
						<div class="feature--details">
							<p class="title">Join Groups</p>
							<p class="info">Create research groups to share, comment and edit collaborative work in real time</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="section-border">&nbsp;</div>

<section class="section brief">
	<div class="grid_container">
		<div class="grid">
			<div class="grid--row">
				<div class="blurb blurb1">
					<div class="grid--row--column grid--row--column-7">
						<div class="blurb--text">
							<p class="title">Breaking down the barriers to better collaboration</p>
							<p class="copy">Join millions of researchers working with us to build communities and break down the barriers to better, open, global collaboration. Together we're changing the way the scientific world accesses, shares and publishes research.</p>
						</div>
					</div>
					<div class="grid--row--column grid--row--column-5">
						<div class="image-wrapper">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
			<div class="grid--row">
				<div class="blurb blurb2">
					<div class="grid--row--column grid--row--column-5">
						<div class="image-wrapper">
							&nbsp;
						</div>
					</div>
					<div class="grid--row--column grid--row--column-7">
						<div class="blurb--text">
							<p class="title">All your research, in one place you can access wherever you are</p>
							<p class="copy">Find, cite and save research in a way that suits you. Import and organise PDFs, annotate as you go and save in a range of formats including Word. Then access your research on your computer, mobile or tablet, wherever you are.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="grid--row">
				<div class="blurb blurb3">
					<div class="grid--row--column grid--row--column-7">
						<div class="blurb--text">
							<p class="title">Connect and collaborate with millions of scientific researchers</p>
							<p class="copy">With over 3 million student users and many more professional researchers, Mendeley connects researchers in even the remotest of scientific communities to share research and feedback and collaborate as if they were in the same place.</p>
						</div>
					</div>
					<div class="grid--row--column grid--row--column-5">
						<div class="image-wrapper">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="section-border">&nbsp;</div>

<section class="section endorsements">
	<div class="container">
		<h2 class="section--title">What our users are saying</h2>
		<div class="carousel-nav"></div>
		<div class="carousel">
			<div class="item">
				<div class="grid">
					<div class="grid--row">
						<div class="grid--row--column grid--row--column-6">
							<div class="endorsement endorsement-dark">
								<div class="headshot-wrapper">
									<img src="<?php print $directory;?>/images/profile-thabo.png" width="100%" alt="Thabo Mavundza" />
								</div>
								<p class="endorsement--quote">"Using Mendeley, I have discovered so many experts in my field of research interest. This has helped me to clearly identify gaps within my findings and make profound recommendations to fellow researchers."</p>
								<div class="endorsement--bio">
									<p class="endorsement--name">Thabo Mavundza</p>
									<p class="endorsement--company">Lawrence Berkeley National Laboratory</p>
								</div>
							</div>
						</div>
						<div class="grid--row--column grid--row--column-6">
							<div class="endorsement">
								<div class="headshot-wrapper">
									<img src="<?php print $directory;?>/images/profile-jamie.png" width="100%" alt="Jamie Bogle" />
								</div>
								<p class="endorsement--quote">"I work with a group of researchers in my topic area online and with Mendeley we are able to share resources quickly and hold group discussions with participants from all over the world."</p>
								<div class="endorsement--bio">
									<p class="endorsement--name">Jamie Bogle</p>
									<p class="endorsement--company">Mayo Clinic</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-secondary download">
	<div class="container">
		<div class="image-wrapper">
			<img src="<?php print $directory;?>/images/download.png" width="100%" alt="download devices" />
		</div>
		<h2 class="section--title section--title-alternate">Join millions of researchers using Mendeley</h2>
		<a href="https://www.mendeley.com/download-mendeley-desktop/" class="nav--item btn btn-large">
			Download now
		</a>
		<div class="operating-systems">
			<a href="http://ad.apps.fm/5GZMO4-8ru_PzJdqOXY2VF5KLoEjTszcQMJsV6-2VnHFDLXitVHB6BlL95nuoNYfX8CxpiCxdTjfi4OpH9y6n_i2h21HIaoPKV7O1lz6CvLPO84u9Xybgq8uUST8gwFd4uZl085zDwqZmpanJ_jONw" class="os-item android">
				<img src="<?php print $directory;?>/images/android.png" width="100%" title="Andorid" alt="Android" />
			</a>
			<a href="https://itunes.apple.com/gb/app/mendeley/id380669300?mt=8" class="os-item apple">
				<img src="<?php print $directory;?>/images/apple.png" width="100%" title="Apple" alt="Apple" />
			</a>
			<a href="https://www.mendeley.com/download-mendeley-desktop/" class="os-item windows">
				<img src="<?php print $directory;?>/images/windows.png" width="100%" title="Windows" alt="Windows" />
			</a>
			<a href="https://www.mendeley.com/download-mendeley-desktop/" class="os-item linux">
				<img src="<?php print $directory;?>/images/linux.png" width="100%" title="Linux" alt="Linux" />
			</a>
		</div>
	</div>
</section>
<footer class="footer">
	<?php print render($page['footer']['views_footer-block']); ?>
	<?php print render($page['footer']['user_login']); ?>
</footer>
<div class="modal">
	We're updating the Mendeley.com website and we're excited to show you this homepage preview, but the section you're clicking isn't ready yet.
	<a href="/" class="modal-close">Close</a>
</div>