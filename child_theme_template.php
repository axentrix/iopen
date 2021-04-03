<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

 <div id="content">
    <section class="banner home">
      <div class="container">
        <div class="row">
          <div class="left-bnr col-lg-7 col-md-12">
            <?php echo get_field('banner_section_left_content'); ?>
          </div>
          <div class="right-bnr col-lg-5 col-md-12">
            <div class="right-full2">
                <?php echo get_field('banner_section_right_content'); ?>
            </div>
          </div>
        </div>
		</div>
    </section>
    <section class="client-wrp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h2 class="black-title c-center"><?php echo get_field('our_client_section_title'); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div id="carousel" class="owl-carousel">
                <?php while( have_rows('our_clients_logos') ): the_row();
                    $client_logo = get_sub_field('client_logo');?>
                    <div class="item">
                        <img src="<?php echo $client_logo ?>">
                    </div>
                    
                <?php endwhile;?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 c-center"><a href="<?php echo get_field('our_case_studies_link'); ?>" class="link"><?php echo get_field('our_case_studies_link_title'); ?></a>
          </div>
        </div>
      </div>
    </section>
    <section class="mark-wrp screenshots" id="propositions">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 left-space">
            <?php echo get_field('main_section_content'); ?>
          </div>
        </div>
      </div>
    </section>
    <section class="work-like-wrp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 c-center">
            <h1 class="c-center"><?php echo get_field('work_with_us_section_content_title'); ?></h2>
      </div>
    </div>
    <div class="row">
        <?php echo get_field('work_with_us_section_content'); ?>
    </div>
  </div>
</section>
 <section class="discover-wrp">
  <div class="baloon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/baloon.svg"></div>
     <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <h2 class="c-center"><?php echo get_field('marketing_packages_content_title'); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
              <div id="carousel2" class="owl-carousel">
                <?php while( have_rows('marketing_packages_content') ): the_row();
                    $top_bar_color = get_sub_field('top_bar_color');
                    $title = get_sub_field('title');
                    $short_description = get_sub_field('short_description');
                    $image = get_sub_field('image');
                    $duration = get_sub_field('duration');
                    $price = get_sub_field('price');
                    $link = get_sub_field('link');
                    $duration_title = get_sub_field('duration_title');?>
                    
                    <div class="item ">
                      <a href="<?php echo $link; ?>">
                      <div class="s-img <?php echo $top_bar_color; ?>">
                        <img src="<?php echo $image; ?>">
                      </div>
                      <div class="s-cont">
                        <div class="s-title"><?php echo $title; ?></div>
                        <p><?php echo $short_description; ?></p>
                        <div class="duration">
                          <div class="dr"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/watch.svg">
                          <?php echo $duration_title; ?></div>
                          <div class="weeks"><?php echo $duration; ?></div>
                        </div>
                        <div class="price"><?php echo $price; ?></div>
                      </div>
                    </a>

                    </div>
                    
                <?php endwhile;?>

              </div>

          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 c-center">
            <a href="<?php echo get_field('all_packages_url'); ?>" class="orange-btn-gd2"><?php echo get_field('all_packages_url_title'); ?></a>
          </div>
        </div>
       
     </div>
    </section>  
<?php echo get_field('flex_team_&_media_attention_section'); ?>

    <section class="smart-wrp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <?php echo get_field('marketing_smart_section_content_left'); ?>
            
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="booking-foam">
              <div class="booking-inner">
                <?php echo get_field('marketing_smart_section_content_right'); ?>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
    <section class="discover-wrp cmos-wrp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h2 class="c-center"><?php echo get_field('podcast_section_content_title'); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div id="carousel3" class="owl-carousel">
                <?php while( have_rows('podcast_section_content') ): the_row();
                    $podcast_by = get_sub_field('podcast_by');
                    $podcast_date = get_sub_field('podcast_date');
                    $podcast_title = get_sub_field('podcast_title');
                    $podcast_image = get_sub_field('podcast_image');
                    $podcast_url = get_sub_field('podcast_url');
                    $podcast_link_text = get_sub_field('podcast_link_text');?>
                    
                    <div class="item ">
                    <a href="<?php echo $podcast_url; ?>">
                    <div class="s-img">
                      <img src="<?php echo $podcast_image; ?>">
                    </div>
                    <div class="s-cont">
                      <div class="dr"><?php echo $podcast_by; ?> <span class="line">|</span>  <span class="date"><?php echo $podcast_date; ?></span>
                      </div>
                      <p><?php echo $podcast_title; ?></p>
                      <div class="orange-txt ream-more"><?php echo $podcast_link_text; ?></div>
                    </div>
                    </a>
                  </div>
                <?php endwhile;?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 c-center"> <a href="<?php echo get_field('all_podcast_list_url'); ?>" class="trans-btn"><?php echo get_field('all_podcast_list_url_title'); ?></a>
          </div>
        </div>
      </div>
    </section>
    <section class="chat-wrp">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 c-center">
            <div class="icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/envelope.svg">
            </div>
            <h3 class="black-title"><?php echo get_field('email_section_title','options'); ?></h3>
            <p><?php echo get_field('email_section_short_description','options'); ?></p> <a href="<?php echo get_field('email_section_email_id','options'); ?>" class="blu-txt"><?php echo get_field('email_section_email_id_text','options'); ?></a>
          </div>
          <div class="col-lg-3 col-md-3 c-center">
            <div class="icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat.svg">
            </div>
            <h3 class="black-title"><?php echo get_field('chat_section_title','options'); ?></h3>
            <p><?php echo get_field('chat_section_short_description','options'); ?></p> <a href="<?php echo get_field('chat_section_url','options'); ?>" class="blu-txt"><?php echo get_field('chat_section_url_text','options'); ?></a>
          </div>
          <div class="col-lg-3 col-md-3 c-center">
            <div class="icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone.svg">
            </div>
            <h3 class="black-title"><?php echo get_field('phone_section_title','options'); ?></h3>
            <p><?php echo get_field('phone_section_short_description','options'); ?></p> <a href="Tel: <?php echo get_field('phone_section_phone_number','options'); ?>" class="blu-txt"><?php echo get_field('phone_section_phone_number_title','options'); ?> <?php echo get_field('phone_section_phone_number','options'); ?></a>
          </div>
          <div class="col-lg-3 col-md-3 c-center">
            <div class="icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/loc.svg">
            </div>
            <h3 class="black-title"><?php echo get_field('office_section_title','options'); ?></h3>
            <p><?php echo get_field('office_section_short_description','options'); ?></p> <a href="<?php echo get_field('office_section_get_direction_link','options'); ?>" class="blu-txt" target="_blank"><?php echo get_field('office_section_get_direction_link_title','options'); ?></a>
          </div>
        </div>
      </div>
    </section>
    </div>
    <!-- content end div main -->		

<?php get_footer(); ?>
