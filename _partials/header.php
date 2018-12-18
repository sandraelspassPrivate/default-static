
<div class="mobile-navigation">
    <div class="hide-for-large">
        <?php renderPartial('nav-mob'); ?>
    </div>
</div>


<header class="header" data-sticky-container>
    <div class="title-bar" data-sticky data-options="marginTop:0;">
        <div class="header--background">
            <div class="row">

                <div class="column title-bar--container">
                    <div class="title-bar-left">

                        <div class="title-bar-title logo">
                            <a href="#">
                                <svg class="svg">
                                    <use xlink:href="#icon-cafe-bonnen"></use>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="title-bar-right">
                        <div class="show-for-large">
                            <?php renderPartial('nav-desk'); ?>
                        </div>

                        <div class="mobNav hide-for-large" data-toggle="offCanvas">
                            <svg class="svg">
                                <use xlink:href="#icon-esel"></use>
                            </svg>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
