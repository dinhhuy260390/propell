<?php
/*
Template Name: Page About
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
?>
<?php  while ( have_posts() ) : the_post() ?>
    <main id="main" class="main">
        <div class="kv">
            <div class="container">
                <div class="breadcrumds">
                    <ul>
                        <li><a href="./">HOME</a></li>
                        <li>ABOUT US</li>
                    </ul>
                </div>
                <div class="kv__text">
                    <div class="kv__ttl">
                        <h2>Coming Together Is A Beginning</h2>
                    </div>
                    <div class="kv__submenu">
                        <li><a href="#company" class="js-anchor-detail">OUR COMPANY</a></li>
                        <li><a href="#achievements" class="js-anchor-detail">OUR ACHIEVEMENTS</a></li>
                        <li><a href="#statements" class="js-anchor-detail">OUR STATEMENTS</a></li>
                        <li><a href="#structions" class="js-anchor-detail">OUR GROUP STRUCTIONS</a></li>
                        <li><a href="#registrations" class="js-anchor-detail">OUR REGISTRATIONS</a></li>
                        <li><a href="#registrations" class="js-anchor-detail">OUR TEAM</a></li>
                    </div>
                </div>
            </div>
            <div class="kv__img">
                <picture>
                    <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/about/kv_img_sp.jpg">
                    <img src="<?php echo $assets ?>/img/about/kv_img.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="section__accordion">
            <?php $block_company = get_field('block_company'); ?>
            <?php if($block_company) : ?>
                <div class="c-toggle" id="company">
                    <div class="container">
                        <div class="c-toggle__head js-toggle__head">
                            <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_company['position'].'/' ?></span><?php echo $block_company['title'] ?></h2>
                            <span class="c-ico"></span>
                        </div>
                        <div class="c-toggle__main">
                            <?php echo $block_company['content'] ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php $block_statement = get_field('block_statement'); ?>
            <?php if($block_statement) : ?>
                <?php
                $template = get_page_template();
                ?>
            <div class="c-toggle" id="statements">
                <div class="container">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_statement['position'].'/' ?></span><?php echo $block_statement['title'] ?></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <?php echo $block_statement['content'] ?>
<!--                        <div class="statements">-->
<!--                            <div class="statements__content">-->
<!--                                <div class="statements__text">-->
<!--                                    <div class="c-media">-->
<!--                                        <h4 class="c-media__ttl">OUR MISSION</h4>-->
<!--                                        <div class="c-media__txt">To Win Business, Meet Client's Needs And Exceed Their Expectations Through Propell's Solution,Modern Management, Productivity, Quality, Planning, Efficiency, Technical Expertise And Team Commitment</div>-->
<!--                                    </div>-->
<!--                                    <div class="c-media">-->
<!--                                        <h4 class="c-media__ttl">OUR VISION</h4>-->
<!--                                        <div class="c-media__txt">To Excel As A Leading Integrated Specialist As Core Business By Providing Innovative Management & Quality Services. To Venture & Diversify Into Other Market Development Or Opportunity.</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="statements__photo">-->
<!--                                    <img src="--><?php //echo $assets ?><!--/img/about/statements_img.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php $block_registration = get_field('block_registration'); ?>
            <?php if($block_registration) : ?>
            <div class="c-toggle" id="registration">
                <div class="container">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_registration['position'].'/'?></span><?php echo $block_registration['title'] ?></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <?php echo $block_registration['content'] ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php $block_award = get_field('block_award'); ?>
            <?php if($block_award) : ?>
            <div class="c-toggle" id="awards">
                <div class="container">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_award['position'].'/'?></span><?php echo $block_award['title'] ?></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
<!--                        <div class="awards">-->
<!--                            <div class="awards__photo">-->
<!--                                <img src="--><?php //echo $assets ?><!--/img/about/awards_img.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="awards__txt">-->
<!--                                Propell Singapore is proud to be recognized for our dedication to excellence and innovation. We have received numerous accolades, including the Singapore Business Excellence Award, the Singapore Service Excellence Award, and the Green Innovation Award. These honors underscore our commitment to quality, customer satisfaction, and sustainable business practices.-->
<!--                            </div>-->
<!--                            <div class="awards__btn">-->
<!--                                <a href="" class="btn c-btn"><span>VIEW ALL  OUR AWARDS AND ACHIEVEMENTS</span></a>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php $block_structure = get_field('block_structure'); ?>
            <?php if($block_structure) : ?>
            <div class="c-toggle" id="structure">
                <div class="container">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_structure['position'].'/'?></span><?php echo $block_structure['title'] ?></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <?php echo $block_structure['content'] ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php $block_team = get_field('block_team'); ?>
            <?php if($block_team) : ?>
            <div class="c-toggle" id="team">
                <div class="container">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_team['position'].'/'?></span><?php echo $block_team['title'] ?></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <?php echo $block_team['content'] ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </main>
<?php endwhile ; ?>
<?php
get_sidebar();
get_footer();
