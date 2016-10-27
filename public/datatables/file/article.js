

function editForm(id)
{
    window.location = 'article/'+id+'/edit';
}

function deleteForm(id)
{
    /*bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {*/
            window.location = 'article/delete/'+id;
      /*  }
    }*/
//);
}
/* Table initialisation */
$(document).ready(function() {

    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": 'article/getAll',
        "bJQueryUI": true,
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "id" },
            { "mData": "title" },
            { "mData": "description" },
            { "mData": "date_created" },
            { "mData": "type" },
            { "mData": "status" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editForm(' + full['id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteForm(' + full['id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
                }
            }
        ]
    });

} );