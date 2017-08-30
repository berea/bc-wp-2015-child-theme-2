<!-- Child 2 secondary page slider -->
<?php
if(is_page(970))
{
?>
<div class="homepage-slider homepage-slider-sizing-dept homepage-slider-sizing-aspect-ratio ratio_1024x192_givingday ">
<?php
}
else
{
?>
<div class="homepage-slider homepage-slider-sizing-dept homepage-slider-sizing-aspect-ratio ratio_1024x192 ">
<?php
}
?>
    <div class="secondary-slider-background"></div>
    <div class="slider-textblock">
        <div class="slider-breadcrumbs"><?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?></div>
        <h1 style=""><?php echo get_bloginfo('name'); ?></h1>
    </div>
</div>
