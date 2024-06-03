$(function(){

    var ul = $('#upload ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();

            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});

function confirmDelete(url) {
    if (confirm('Bạn có chắc muốn xóa ?')) {
        window.location.href = url;
    }
}
function showAlert() {
    alert("Không thể xóa vì xuất chiếu đang hoạt động");
}
// function displayFileName() {
//     var fileInput = document.getElementById('drag-n-drop');
//     var fileNameDisplay = document.getElementById('file-name-display');
//     var imgView = document.getElementById('img-view');

//     if (fileInput.files.length > 0) {
//         var file = fileInput.files[0];
//         fileNameDisplay.textContent = 'Selected file: ' + file.name;

//         // Display the selected image
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             imgView.innerHTML = '<img src="' + e.target.result + '" alt="Selected Image" style="max-width: 100%; height: auto;">';
//         };
//         reader.readAsDataURL(file);
//     } else {
//         fileNameDisplay.textContent = '';
//         imgView.innerHTML = '<span>Drag and drop or click <br>here to upload image.</span>';
//     }
// }

function displayFileName() {
    var fileInput = document.getElementById('drag-n-drop');
    var fileNameDisplay = document.getElementById('file-name-display');
    var imgView = document.getElementById('img-view');

    if (fileInput.files.length > 0) {
        var file = fileInput.files[0];
        fileNameDisplay.textContent = 'Selected file: ' + file.name;

        // Display the selected image
        var reader = new FileReader();
        reader.onload = function(e) {
            imgView.innerHTML = '<img src="' + e.target.result + '" alt="Selected Image" style="max-width: 100%; height: auto;">';
        };
        reader.readAsDataURL(file);
    } else {
        fileNameDisplay.textContent = '';
        imgView.innerHTML = '<span>Drag and drop or click <br>here to upload image.</span>';
    }
}

// Ensure that clicking on the drop area triggers the file input
document.getElementById('drop-area').addEventListener('click', function() {
    document.getElementById('drag-n-drop').click();
});




function addRoomEntry() {
    var container = document.getElementById('room-container');
    var newEntry = document.createElement('div');
    newEntry.className = 'room-entry';
    newEntry.innerHTML = `
        <div>
            <p>Name</p>
            <input type="text" name="room_name[]" placeholder="Insert room name...">
        </div>
        <div>
            <p>Seat</p>
            <input type="number" name="room_seats[]" placeholder="Insert quantity...">
        </div>
        <div>
            <p>Status</p>
            <select name="room_status[]">
                <option value="0">Hidden</option>
                <option value="1">Show</option>
            </select>
        </div>
    `;
    container.appendChild(newEntry);
}

setTimeout(function() {
    let messageAlert = document.getElementById('message-alert');
    if (messageAlert) {
        messageAlert.style.display = 'none';
    }
}, 10000); // 10000 milliseconds = 10 seconds
