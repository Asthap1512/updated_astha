$(document).ready(function() {
    $('.edit-btn').click(function() {
        const row = $(this).closest('tr');
        const roomId = row.data('room-id');
        const roomNumber = row.find('td:eq(0)').text();
        const roomType = row.find('td:eq(1)').text();
        const roomPrice = row.find('td:eq(2)').text();
        
        $('#room-number').val(roomNumber);
        $('#room-type').val(roomType);
        $('#room-price').val(roomPrice);
        $('#edit-form').data('room-id', roomId).show();
    });

    $('#confirm-edit').click(function() {
        const roomId = $('#edit-form').data('room-id');
        const updatedRoomData = {
            number: $('#room-number').val(),
            type: $('#room-type').val(),
            price: $('#room-price').val()
        };

        // Make an AJAX call to update room data
        $.ajax({
            url: 'update.php?id=' + roomId,
            method: 'POST',
            data: updatedRoomData,
            success: function(response) {
                // Update row in the table
                const row = $('#room-table tr[data-room-id="' + roomId + '"]');
                row.find('td:eq(0)').text(updatedRoomData.number);
                row.find('td:eq(1)').text(updatedRoomData.type);
                row.find('td:eq(2)').text(updatedRoomData.price);
                $('#edit-form').hide();
            },
            error: function(err) {
                alert('Error updating room');
            }
        });
    });

    $('#cancel-edit').click(function() {
        $('#edit-form').hide();
    });

    $('#booking-type').change(function() {
        $('.booking-option').hide();
        const selectedType = $(this).val();
        $('#' + selectedType + '-options').show();
    });
});
