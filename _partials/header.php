<header class="header">
	<div class="container">
		<div class="content">

      <div class="logo">
          <a href="/" title="Zurück zur Startseite">
              <svg>
                  <use xlink:href="#icon-logo"></use>
              </svg>
              <br>
              <svg>
                  <use xlink:href="#icon-esel"></use>
              </svg>
          </a>
      </div>
        

			<?php renderPartial("nav-desk"); ?>
			<?php renderPartial("nav-mob"); ?>
			
		</div>
	</div>
</header>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-position="right">

            <!-- Close button -->
            <button class="close-button" aria-label="Close menu" type="button" data-close>
                <span aria-hidden="true">SLuiten</span>
            </button>

            <!-- Menu -->
            <ul class="vertical menu">
                <li><a href="#">Foundation</a></li>
                <li><a href="#">Dot</a></li>
                <li><a href="#">ZURB</a></li>
                <li><a href="#">Com</a></li>
                <li><a href="#">Slash</a></li>
                <li><a href="#">Sites</a></li>
            </ul>

        </div>