<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <!-- Your page content here -->

    <!-- Include jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    
    <!-- Initialize Select2 -->
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>



<div class="container">
    <form method="POST" action="{{ url('/email') }}">
        @csrf

        <button id="show" type="button">Show</button>
        <button id="hide" type="button" style="display:none">Hide</button>


        <div class="form-group" id="man" style="display:none;">
            <label for="emails">Select Email(s)</label>
            <select id="emails" name="emails[]" class="form-control select2" multiple required style="width: 50%; max-width: 400px;">
                
            </select>
        </div>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>

    </form>

</div>

<script>
    $(document).ready(function() {
        // Show button click event
        $('#show').click(function() {
            $('#man').show();
            $('#hide').show();
            $('#show').hide();


        });

        $('#hide').click(function() {
            $('#man').hide();
            $('#hide').hide();
            $('#show').show();


        });
    });
</script>

<script>
    $(document).ready(function() {
        var emails = ['example1@example.com', 'example2@example.com', 'example3@example.com'];

        // Populate the select box options
        $.each(emails, function(index, email) {
            $('#emails').append('<option value="' + email + '">' + email + '</option>');
        });

        // Initialize Select2
        $('.select2').select2();
    });
</script>
