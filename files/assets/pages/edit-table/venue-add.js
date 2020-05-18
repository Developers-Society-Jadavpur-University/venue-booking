'use strict';
$(document).ready(function () {
    $('#example-1').Tabledit({

        editButton: false,
        deleteButton: false,
        hideIdentifier: true,
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'Room'], [2, 'Capacity'], [3, 'A/C Installed']]
        }
    });
});
function add_row() {
    var table = document.getElementById("example-1");
    var t1 = (table.rows.length);
    var row = table.insertRow(t1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

    cell1.className = 'abc';
    cell2.className = 'abc';
    cell3.className = 'abc';
    cell4.className = 'abc';

    $('<span class="tabledit-span" >Enter Room Name</span><input class="tabledit-input form-control input-sm" type="text" name="Room">').appendTo(cell1);
    $('<span class="tabledit-span" >Enter Capacity of Room</span><input class="tabledit-input form-control input-sm" type="number" name="Capacity">').appendTo(cell2);
    $('<span class="tabledit-span" >No</span><select class="tabledit-input form-control input-sm" name="ac-ins"  disabled="" ><option value="0">No</option><option value="1">Yes</option></select>').appendTo(cell3);
};
function delete_row() {
    $('#example-1 tr:last-child').remove();
};
function getRooms() {
    $('#room-add-card').css('display', 'block');
    $('#getrooms').html('Confirm Room Addition')
};