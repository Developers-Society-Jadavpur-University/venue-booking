'use strict';
$(document).ready(function () {
    $('#example-1').Tabledit({

        editButton: false,
        deleteButton: false,
        hideIdentifier: true,
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'Venue'], [2, 'Room'], [4, 'A/C Required'], [5, 'Check-In'], [6, 'Check-Out']]
        }
    });
    $('#example-2').Tabledit({

        columns: {

            identifier: [0, 'id'],

            editable: [[1, 'First Name'], [2, 'Last Name']]

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
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);

    cell1.className = 'abc';
    cell2.className = 'abc';
    cell3.className = 'abc';
    cell4.className = 'abc';
    cell5.className = 'abc';
    cell6.className = 'abc';

    $('<span class="tabledit-span" >Select Venue</span><select class="tabledit-input form-control input-sm" name="venue"  disabled="" ><option value="0">Select Venue</option><option value="0">Gandhi Bhavan</option><option value="1">K.P. Basu Memorial Hall</option></select>').appendTo(cell1);
    $('<span class="tabledit-span" >Select Room</span><select class="tabledit-input form-control input-sm" name="room"  disabled="" ><option value="0">Select Room</option><option value="0">Room 101</option><option value="1">Room 102</option></select>').appendTo(cell2);
    $('<span class="tabledit-span" >N/A</span>').appendTo(cell3);
    $('<span class="tabledit-span" >No</span><select class="tabledit-input form-control input-sm" name="ac-req"  disabled="" ><option value="0">No</option><option value="1">Yes</option></select>').appendTo(cell4);
    $('<span class="tabledit-span" >Enter Date and Time</span><input id="dropper-format" type="datetime-local" class="tabledit-input form-control input-sm" name="Check-In" disabled="">').appendTo(cell5);
    $('<span class="tabledit-span" >Enter Date and Time</span><input id="dropper-format" type="datetime-local" class="tabledit-input form-control input-sm" name="Check-Out" disabled="">').appendTo(cell6);

};
function delete_row() {
    $('#example-1 tr:last-child').remove();
};