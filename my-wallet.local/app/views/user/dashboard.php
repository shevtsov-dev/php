<h1>Welcome to your dashboard</h1>
<a href="/logout">Logout</a>

<div class="card chart-container">
    <canvas id="chart"></canvas>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById("chart").getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Last week',
                    backgroundColor: 'rgba(161, 198, 247, 1)',
                    borderColor: 'rgb(47, 128, 237)',
                    data: <?php echo json_encode($amount); ?>,
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }]
                }
            },
        });

    });
</script>
<h2>Your Purchases</h2>
<ul id="pusha">
    <?php foreach ($purchases as $purchase) { ?>
        <li><?php echo "{$purchase['amount']} of {$purchase['currency']} purchased on {$purchase['date']}"; ?></li>
    <?php } ?>
</ul>


<form method="POST" action="/currency/add" id="searchForm">
    <label for="currency">Currency:</label>
    <input type="text" name="currency" required>
    <label for="amount">Amount:</label>
    <input type="number" name="amount" required>
    <label for="date">Date:</label>
    <input type="date" name="date" required>
    <button type="submit">Add Purchase</button>
</form>

<script>
    $("#searchForm").submit(function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            currency = $form.find("input[name='currency']").val(),
            amount = $form.find("input[name='amount']").val(),
            date = $form.find("input[name='date']").val(),
            url = 'https://my-wallet.local/api/currency?access_token=ef2d127de37b942baad06145e54b0c619a1f22327b2ebbcfbec78f5564afe39d';

        // Send the data using post
        $.ajax({
            url: url,
            type: "POST",
            data: {
                'currency': currency,
                'amount': amount,
                'date': date,
            },
            success: function (data) {

                if (data.success == true)
                    $("#pusha").append('<li>' + amount + ' of ' + currency + ' purchased on ' + date + '</li>');

            }
        })
    });
</script>