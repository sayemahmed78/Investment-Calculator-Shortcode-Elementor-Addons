jQuery(document).ready(function ($) {
    $('#calculate-investment').click(function () {
        let initialInvestment = parseFloat($('#initial-investment').val()) || 0;
        let monthlyContribution = parseFloat($('#monthly-contribution').val()) || 0;
        let years = parseFloat($('#years').val()) || 0;
        let annualInterestRate = parseFloat($('#interest-rate').val()) || 0;

        let months = years * 12;
        let monthlyInterestRate = (annualInterestRate / 100) / 12;
        let totalInvestment = initialInvestment + (monthlyContribution * months);
        let futureValue = initialInvestment * Math.pow(1 + monthlyInterestRate, months);

        for (let i = 1; i <= months; i++) {
            futureValue += monthlyContribution * Math.pow(1 + monthlyInterestRate, months - i);
        }

        let interestEarned = futureValue - totalInvestment;

        $('#total-investment').text(totalInvestment.toFixed(2));
        $('#interest-earned').text(interestEarned.toFixed(2));
        $('#final-balance').text(futureValue.toFixed(2));
    });
});
