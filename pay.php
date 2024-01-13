<?php include'./header.php'?>
<div class="pay-hero-section">
    <h1>Online Payments</h1>
</div>

<div class="pay-form-section">
    <div class="container">
        <div class="row">
            <div class="section-head col-sm-12">
                <h4><span>BuchansForTowbars </span> - ONLINE PAYMENTS</h4>
                <p>If you wish to make a payment to BuchansForTowbars Ltd then please fill out the information below and
                    pay via worldpay.
                    To ensure that your account is updated correctly, please enter the Hire Agreement Reference Number
                    and the Amount as it appears on your documentation in the fields below.
                </p>
            </div>
            <form id="paymentForm">
                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">Hire Agreement Ref/ Or Your Name: </label>
                    <div class="fcf-input-group">
                        <input type="text" id="name" name="Name" style="color:black;"
                            class="fcf-form-control form-control" required>
                    </div>
                </div>
                <div class="fcf-form-group">
                    <label for="amount" class="fcf-label">Enter The Amount (£ GBP): </label>
                    <div class="fcf-input-group">
                        <input type="number" id="amount" name="amount" style="color:black;"
                            class="fcf-form-control form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group mt-3">
                <button type="submit" id="payment_submit_btn" style="color:red;"
                        class="fcf-btn fcf-btn-primary snd-msg-btn fcf-btn-lg fcf-btn-block site-btn">Proceed to
                        Payment</button>
                </div>
            </form>

            <div class="conditions-section">
                <h5>Terms & Conditions:</h5>
                <p>*NON REFUNDABLE PREPAID DEPOSIT OF £200.00 PER VEHICLE WILL BE REQUIRED TO CONFIRM BOOKINGS</p>

                <h5>
                    Cancellation Policy :
                </h5>
                <p> ALL CANCELLATIONS MUST BE IN MADE WRITING *WRITTEN CANCELLATION OF BOOKINGS WITHIN 7 DAYS OF
                    COMMENCEMENT
                    OF HIRE WILL INCUR A 25% CANCELLATION FEE OR LOSE THE PREPAID DEPOSIT (WHICHEVER IS GREATER)
                    BOOKINGS
                    CANCELLED WITHIN 72 HOURS OF DATE AND TIME OF HIRE WILL INCUR A 50% CHARGE. BOOKINGS CANCELLED
                    WITHIN 48
                    HOURS OF DATE AND TIME OF HIRE WILL INCUR A 100% CHARGE. REFUNDS: NO REFUNDS WILL BE GIVEN FOR EARLY
                    TERMINATIONS OF HIRE, LATE COLLECTIONS, NO SHOWS OR CANCELLATIONS MADE AFTER RENTAL START DATE.
                    *THESE
                    POLICIES APPLY TO INDIVIDUAL OR GROUPS OF LESS THAN 4 VEHICLES AND TO ALL SERVICES. *BOOKINGS
                    CANCELLED
                    AND ACKNOWLEDGED IN WRITING WITHIN 7 DAYS OF DATE OF COMMENCEMENT OF HIRE WILL INCUR A CANCELLATION
                    FEE
                    of 25% OF THE TOTAL HIRE PRICE
                    ALL CANCELLATIONS MUST BE MADE IN WRITING </p>

                <h5>Refunds:</h5>
                <p>*NO REFUNDS WILL BE GIVEN FOR EARLY TERMINATION OF RENTALS, LATE COLLECTION OF VEHICLES, NO SHOWS OR
                    CANCELLATIONS MADE AFTER RENTAL START DATE</p>
            </div>

        </div>
    </div>
</div>
<!-- Loader -->
<div id="loader" class="loader-overlay" style="display: none;">
    <div class="loader-spinner"></div>
</div>

<script>

document.getElementById('paymentForm').addEventListener('submit', async (event) => {
    event.preventDefault();
    
    // Show the loader
    document.getElementById('loader').style.display = 'flex';

    const name = document.getElementById('name').value;
    const amount = document.getElementById('amount').value;
    console.log('amount', amount);
    try {
        const response = await fetch('./process-payment.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                transactionReference: name,
                amount: amount
            })
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();
        console.log('response::::', data);
        window.location.href = data?.url;
    } catch (error) {
        console.error('Error:', error);
    } finally {
        // Hide the loader
        document.getElementById('loader').style.display = 'none';
    }
});

</script>

<?php include'./footer.php'?>