

function custom_design_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="custom-design">
        <h2>Welcome to Our Site</h2>
        <p>This is a custom section created with a shortcode.</p>
        <a href="#" class="cta-button">Learn More</a>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('custom_design', 'custom_design_shortcode');

// Function to add custom styles directly in the head
function custom_design_styles() {
    ?>
    <style>
    .custom-design {
        background-color: #f4f4f4;
        padding: 20px;
        text-align: center;
        border-radius: 8px;
    }
    .custom-design h2 {
        color: #333;
        font-size: 24px;
    }
    .custom-design p {
        color: #666;
        font-size: 16px;
    }
    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0073e6;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
    }
    .cta-button:hover {
        background-color: #005bb5;
    }
    </style>
    <?php
}
add_action('wp_head', 'custom_design_styles');
