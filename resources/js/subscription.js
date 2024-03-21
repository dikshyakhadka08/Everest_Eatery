$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/subscribe', // Check if the URL matches the route in Laravel
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Display a pop-up message for successful subscription
                    showSubscriptionMessage('Thank you for subscribing!');
                } else if (response.error) {
                    // Display a pop-up message for subscription error
                    showSubscriptionMessage('Subscription failed. Please try again.');
                }
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    });

    // Function to show a pop-up message
    function showSubscriptionMessage(message) {
        // Create a div element for the message
        var popup = $('<div class="subscription-popup">' + message + '</div>');

        // Append the div to the body
        $('body').append(popup);

        // Fade in the message and then fade it out after a delay
        popup.fadeIn(500).delay(2000).fadeOut(500, function() {
            // Remove the message after fading out
            $(this).remove();
        });
    }
});
