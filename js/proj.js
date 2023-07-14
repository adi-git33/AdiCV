// $(document).ready(function() {
//     $('#exampleModal').on('show.bs.modal', function(event) {
//         var button = $(event.relatedTarget);
//         var projID = button.data('id');
        
//         // Make an AJAX request to fetch data from the server using the projID
//         $.ajax({
//             url: 'fetch.php', // Replace with the appropriate server-side script
//             type: 'POST',
//             data: {projID: projID},
//             success: function(response) {
//                 // Update the modal body with the fetched data
//                 $('#dropRes').html(response);
//             },
//             error: function() {
//                 // Handle error case
//                 $('#dropRes').html('Error occurred while fetching data.');
//             }
//         });
//     });

// });

$(document).ready(function() {
    $('#exampleModal').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget);
        let projID = button.data('id');
        let modalBody = $('#dropRes');

        // Hide the modal body initially
        modalBody.hide();

        // Make an AJAX request to fetch data from the server using the projID
        $.ajax({
            url: 'fetch.php', // Replace with the appropriate server-side script
            type: 'POST',
            data: {projID: projID},
            success: function(response) {
                // Update the modal body with the fetched data
                modalBody.html(response);

                // Show the modal body
                modalBody.show();
            },
            error: function() {
                // Handle error case
                modalBody.html('Error occurred while fetching data.');

                // Show the modal body
                modalBody.show();
            }
        });
    });
});
