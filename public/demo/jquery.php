<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>jQuery Interactions Demo</h1>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Click Events</h5>
                    </div>
                    <div class="card-body">
                        <button id="clickBtn" class="btn btn-primary">Click Me!</button>
                        <p id="clickResult" class="mt-2"></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>AJAX Demo</h5>
                    </div>
                    <div class="card-body">
                        <button id="ajaxBtn" class="btn btn-success">Load Data</button>
                        <div id="ajaxResult" class="mt-2"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-4">
            <a href="/" class="btn btn-outline-primary">Back to Home</a>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Click event
            $('#clickBtn').click(function() {
                $('#clickResult').text('Button clicked at: ' + new Date().toLocaleTimeString());
            });
            
            // AJAX demo
            $('#ajaxBtn').click(function() {
                $('#ajaxResult').html('<div class="spinner-border spinner-border-sm" role="status"></div> Loading...');
                
                // Simulate AJAX call
                setTimeout(function() {
                    $('#ajaxResult').html('<div class="alert alert-success">Data loaded successfully!</div>');
                }, 1000);
            });
        });
    </script>
</body>
</html>
