$(document).ready(function() {
    let table = $('#mediaTable').DataTable( {
        responsive: true,
        rowReorder: {
            selector: 'td:first-child'
        },
        columnDefs: [
            { targets: 1, visible: false },
            { responsivePriority: 0, targets: -1 }
        ]
    } );

    $('.media-delete-button').on('click',function(){
        let route = $(this).data('action');
        let csrf_token = $('#csrfValue').val();
        let button = $(this);
        let id = $(this).data('id');

        function deleteRow(){
            table.row(button.parents('tr') ).remove().draw()
        }

        $.fn.ajaxCall(id, route, csrf_token, 'DELETE',deleteRow);
    })

    table.on('row-reordered', function () {
        table.one('draw', function () {
            let json = '[';
            let length = table.rows().data().length;

            table.rows().data().each(function (element, index) {
                json += element[1];
                if (index !== (length - 1)) {
                    json += ",";
                }
            });
            json += ']';

            let route = $('#orderRoute').val();
            let csrf_token = $('#csrfValue').val();
            $.fn.ajaxCall(json, route, csrf_token, 'PATCH');
        });

    });
} );


