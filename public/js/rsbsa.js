$(document).ready(function () {
    var table = $('#rsbsaTable').DataTable({
        info: false,
        paging: false,
        searching: false,
        responsive: true,
    });

    $("#btnSearch").click(function () {
        var inputVal = $('#txtInput').val().trim();
        var errorMessageDiv = $(".error-message");
        errorMessageDiv.text(""); // Clear any existing error messages

        // Check if the input value is empty
        if (inputVal === "") {
            errorMessageDiv.text("Please enter an RSBSA No.");
            return;
        }

        // Check if the RSBSA number already exists in the table
        var exists = false;
        table.rows().every(function () {
            var data = this.data();
            if (data[0] === inputVal) {
                exists = true;
                return false; // break the loop
            }
        });

        if (exists) {
            errorMessageDiv.text("Profile with RSBSA No " + inputVal + " already exists in the table.");
            return;
        }

        $.ajax({
            type: 'get',
            dataType: 'json',
            beforeSend: function (xhr) {
                xhr.setRequestHeader("Authorization",
                    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InRlc3QiLCJpYXQiOjE3MTU5MjU2NjMsImV4cCI6MTcxNTkyNTc4M30.2WgC6URWt_rgPLoG50OS3-cnCyyIbZioveinL36Oi6E"
                );
            },
            url: 'https://api-rsbsa.da.gov.ph/ffrs-api/get-rsbsa-details?rsbsa_no=' + inputVal,
            success: function (data) {
                if (data && data.length > 0) {
                    var row = [
                        data[0].rsbsa_no,
                        data[0].fname,
                        data[0].mname,
                        data[0].lname,
                        data[0].ext_name,
                        data[0].sex,
                        data[0].birthday,
                        '<button type="button" class="btn btn-danger btn-remove">Remove</button>'
                    ];
                    table.row.add(row).draw();
                } else {
                    errorMessageDiv.text("No data found for the given RSBSA No.");
                }
            },
            error: function (xhr, status, error) {
                errorMessageDiv.text("An error occurred while fetching data: " + error);
            }
        });
    });

    // Handle click event for remove buttons
    $('#rsbsaTable tbody').on('click', '.btn-remove', function () {
        table.row($(this).parents('tr')).remove().draw();
    });

    // Handle form submission
    $('#rsbsaForm').submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting via the browser

        var tableData = table.rows().data().toArray();
        var form = $(this);
        var formData = form.serializeArray();

        // Clear any previous hidden inputs
        form.find('input[name="rsbsaRecords[]"]').remove();

        // Append hidden inputs for each row in the table
        tableData.forEach(function (row, index) {
            formData.push({ name: 'rsbsaRecords[' + index + '][rsbsaNo]', value: row[0] });
            formData.push({ name: 'rsbsaRecords[' + index + '][firstName]', value: row[1] });
            formData.push({ name: 'rsbsaRecords[' + index + '][middleName]', value: row[2] });
            formData.push({ name: 'rsbsaRecords[' + index + '][lastName]', value: row[3] });
            formData.push({ name: 'rsbsaRecords[' + index + '][extName]', value: row[4] });
            formData.push({ name: 'rsbsaRecords[' + index + '][sex]', value: row[5] });
            formData.push({ name: 'rsbsaRecords[' + index + '][birthDate]', value: row[6] });
        });

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: formData,
            success: function (response) {
                if (response.success) {
                    $('#successMessage').text(response.message).show();
                    $('#errorMessage').hide();
                } else {
                    $('#errorMessage').text(response.message).show();
                    $('#successMessage').hide();
                }
            },
            error: function (xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        errorMessage += errors[key] + '<br>';
                    }
                }
                $('#errorMessage').html(errorMessage).show();
                $('#successMessage').hide();
            }
        });
    });
});
