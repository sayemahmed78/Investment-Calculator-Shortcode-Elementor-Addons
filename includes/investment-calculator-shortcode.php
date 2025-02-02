
<?php
if (!defined('ABSPATH')) {
    exit;
}



function sa_investment_calculator_shortcode(){
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

add_shortcode('investment_calculator_wp', 'sa_investment_calculator_shortcode');