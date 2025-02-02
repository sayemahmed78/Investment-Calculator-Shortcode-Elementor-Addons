<?php
if (!defined('ABSPATH')) {
    exit;
}

function sa_investment_calculator_admin_page(){
    add_menu_page(
        'ROI Investment Calculator',
        'Investment Calculator',
        'manage_options',
        'sa-investment-plugin-option',
        'sa_create_admin_page',
        'dashicons-yes-alt',
        101

    );
}
add_action('admin_menu', 'sa_investment_calculator_admin_page');


// Create the content for the admin page
function sa_create_admin_page(){
    ?>
    <div class="sa-admin-container">
        <div class="sa-setting-part">
        <div class="shortcode-display">
                <p>Use the shortcode below to display the Investment Calculator on your site:</p>
                <code>[investment_calculator_wp]</code>
                <p>You can also use this plugin as an Elementor addons where you will get a Invesment Calculator Wedget to use.</p>
            </div>
        </div>
   
    <!-- About Author Section -->
        <div class="sa-author-info">

            <h3 id="title"><?php echo esc_html('👩‍💻 About Author'); ?></h3>
            <p><img class="author-img"
            src="<?php echo esc_url(plugins_url('img/author.png', dirname(__FILE__))); ?>" 
            alt="Author Image"></p>
            <p>I'm <strong><a href="https://mdsayemahmed.com/" target="_blank" rel="noopener noreferrer">Sayem Ahmed</a></strong>, a dedicated Full-stack Web Developer, thriving on crafting error-free websites with a focus on delivering 100% client satisfaction. Passionate about continuous learning, I actively share my knowledge with others, embracing every opportunity to contribute. Solving real-world problems is not just my job, it's what I love to do.</p>
        </div>
    </div>
    
    <?php
}