$(function () {
    "use strict";

    //Make the dashboard widgets sortable Using jquery UI
    $(".connectedSortable").sortable({
        placeholder: "sort-highlight",
        connectWith: ".connectedSortable",
        handle: ".box-header, .nav-tabs",
        forcePlaceholderSize: true,
        zIndex: 999999
    }).disableSelection();
    $(".connectedSortable .box-header, .connectedSortable .nav-tabs-custom").css("cursor", "move");
});
function romoveRow(table, row) {
    $('#' + table + ' ' + '#row-' + row).remove();
}
function addInstallment() {
    var type = $('#installment_type').val();
    var type_name = $('#hidden').val();
    var installment_beds = $('#installment_beds').val();
    var installment_size = $('#installment_size').val();
    var installment_price = $('#installment_price').val();
    var installment_down_payment = $('#installment_down_payment').val();
    var installment_36month = $('#installment_36month').val();
    var installment_quarterly = $('#installment_quarterly').val();
    var i = $('#schedule-table tbody tr').length;
    var row = "<tr id='row-" + i + "'>";
    console.log(i);
    if (type) {
       
        row += "<td>" + "<select class='border' name='Schedule["+i+"][type]'><option value="+type+">"+type_name+"</option></select>" + "</td>";
    } else {
        return;
    }
    if (installment_beds) {
        row += "<td>" + "<input type='text' class='short-input border' value='" + installment_beds + "' name='Schedule["+i+"][installment_beds]' />" + "</td>";
    } else {
        return;
    }
    if (installment_size) {
        row += "<td>" + "<input type='text' class='short-input border' value='" + installment_size + "' name='Schedule["+i+"][installment_size]' />" + "</td>";
    } else {
        return;
    }
    if (installment_price) {
        row += "<td>" + "<input type='text' class='border' value='" + installment_price + "' name='Schedule["+i+"][installment_price]' />" + "</td>";
    } else {
        return;
    }
    if (installment_down_payment) {
        row += "<td>" + "<input type='text' class='border'  value='" + installment_down_payment + "' name='Schedule["+i+"][installment_down_payment]' />" + "</td>";
    } else {
        return;
    }
    if (installment_36month) {
        row += "<td>" + "<input type='text' class='border'  value='" + installment_36month + "' name='Schedule["+i+"][installment_36month]' />" + "</td>";
    } else {
        return;
    }
    if (installment_quarterly) {
        row += "<td>" + "<input type='text' class='border'  value='" + installment_quarterly + "' name='Schedule["+i+"][installment_quarterly]' />" + "</td>";
    } else {
        return;
    }
    row += "<td><button type='button' onclick=romoveRow('schedule-table'," + i + ")>Remove</button></td>"
    row += "</tr>";
    $('#schedule-table tbody').append(row);
}
 
function printscdule(){
    var divContents = $("#print-sc").html();
            var Window = window.open();
            Window.document.write('<title>DIV Contents</title>');
            Window.document.write('<body >');
            Window.document.write(divContents);
            Window.document.write('</body>');
            Window.document.close();
            Window.print();
}
