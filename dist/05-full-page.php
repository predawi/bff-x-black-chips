<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

<div id="fullpage">
	<div class="section" id="section0">
		<div class="intro">
			<h1>Enable Your Scroll Bar!</h1>
			<p>The perfect combination!</p>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="intro">
			<h1>This is the second section</h1>
			<p>The perfect combination!</p>
            <button data-target="2" class="section__cta">Action</button>
		</div>
	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Great User Experience!</h1>
            <p>The perfect combination!</p>
		</div>
	</div>
    <div class="section fp-auto-height">
        <footer class="footer" id="footer" role="contentinfo">
            <div class="container">
                <p>Follow us:</p>
                <a class="button button--circle" href="https://www.facebook.com/beapi.agency/?ref=bookmarks">
                    <span class="visuallyhidden">On Facebook</span>
                    <svg class="icon icon-facebook" aria-hidden="true" role="img">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use>
                    </svg>
                </a>
                <a class="button button--circle" href="https://twitter.com/be_api">
                    <span class="visuallyhidden">On Twitter</span>
                    <svg class="icon icon-twitter" aria-hidden="true" role="img">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
                    </svg>
                </a>
                <a class="button button--circle" href="https://www.instagram.com/agencebeapi/">
                    <span class="visuallyhidden">On Instagram</span>
                    <svg class="icon icon-instagram" aria-hidden="true" role="img">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use>
                    </svg>
                </a>
            </div>
        </footer>
    </div>
</div>

<div class="section-modal" data-level="2">
    <div class="section-modal__inner">
        <div class="intro">
            <h1>This is a section modal</h1>
            <button data-target="3" class="section__cta">Action</button>
        </div>
    </div>
</div>

<div class="section-modal" data-level="3">
    <div class="section-modal__inner">
        <div class="intro">
            <h1>This is a section modal</h1>
            <p>Level 2 💩</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>