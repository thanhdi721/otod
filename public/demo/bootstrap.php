<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bootstrap Components Demo</h1>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Buttons</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-secondary">Secondary</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-danger">Danger</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Alerts</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success">Success alert!</div>
                        <div class="alert alert-warning">Warning alert!</div>
                        <div class="alert alert-danger">Danger alert!</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-4">
            <a href="/" class="btn btn-outline-primary">Back to Home</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
