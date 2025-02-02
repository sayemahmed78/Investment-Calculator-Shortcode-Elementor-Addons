<?php
if (!defined('ABSPATH')) {
    exit;
}

class Elementor_Investment_Calculator_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'investment_calculator';
    }

    public function get_title() {
        return __('Investment Calculator', 'investment-calculator');
    }

    public function get_icon() {
        return 'dashicons-calculator';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {
        $this->start_controls_section('content_section', [
            'label' => __('Content', 'investment-calculator'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('button_text', [
            'label' => __('Button Text', 'investment-calculator'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('Calculate Investment', 'investment-calculator'),
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="investment-calculator-container">
            <label>Initial Investment ($):</label>
            <input type="number" id="initial-investment" value="1000"><br>

            <label>Monthly Contribution ($):</label>
            <input type="number" id="monthly-contribution" value="100"><br>

            <label>Investment Duration (Years):</label>
            <input type="number" id="years" value="10"><br>

            <label>Annual Interest Rate (%):</label>
            <input type="number" id="interest-rate" value="5"><br>

            <button id="calculate-investment"><?php echo esc_html($settings['button_text']); ?></button>

            <div class="results-container">
                <h3>Results:</h3>
                <p>Total Investment: $ <span id="total-investment">0</span></p>
                <p>Interest Earned: $ <span id="interest-earned">0</span></p>
                <p>Final Balance: $ <span id="final-balance">0</span></p>
            </div>
        </div>
        <?php
    }
}
