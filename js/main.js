$(document).ready(function () {
    $('#quoteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var prestation = button.data('prestation');
        var modal = $(this);

        modal.find('.modal-body input[name=prestation]').val('Demande renseignements ' + prestation);
    });

    $('#contactForm').submit(function (event) {
        $.ajax({
            url: '/contact.php',
            data: $('#contactForm').serializeArray(),
            type: 'POST',
            dataType: 'json',
        })
            .done(function () {
                $('#quoteModalSuccess').modal('show');
            })
            .fail(function () {
                $('#quoteModalError').modal('show');
            })
            .always(function () {
                $('#quoteModal').modal('hide');
            });

        event.preventDefault();
    });
});
