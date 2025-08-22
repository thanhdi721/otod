@extends('layouts.app')

@section('title', 'jQuery Demo - OTOD Web Layout UI')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">jQuery Interactions Demo</h1>
    </div>
</div>

<!-- Animations -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Animations & Effects</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div id="animationBox" class="bg-primary text-white p-3 rounded text-center" style="height: 100px; display: flex; align-items: center; justify-content: center;">
                            Animation Box
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-primary btn-sm" id="fadeIn">Fade In</button>
                            <button class="btn btn-primary btn-sm" id="fadeOut">Fade Out</button>
                            <button class="btn btn-success btn-sm" id="slideDown">Slide Down</button>
                            <button class="btn btn-success btn-sm" id="slideUp">Slide Up</button>
                            <button class="btn btn-warning btn-sm" id="slideToggle">Slide Toggle</button>
                            <button class="btn btn-info btn-sm" id="animate">Animate</button>
                            <button class="btn btn-danger btn-sm" id="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AJAX Demo -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>AJAX Demo</h5>
            </div>
            <div class="card-body">
                <button class="btn btn-primary mb-3" id="loadData">Load Data</button>
                <div id="ajaxResult" class="alert alert-info" style="display: none;">
                    <h6>Loading...</h6>
                    <div id="ajaxContent"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Form Validation</h5>
            </div>
            <div class="card-body">
                <form id="validationForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback" id="emailError"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="invalid-feedback" id="passwordError"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- DOM Manipulation -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>DOM Manipulation</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Add/Remove Elements</h6>
                        <button class="btn btn-success btn-sm mb-2" id="addItem">Add Item</button>
                        <button class="btn btn-danger btn-sm mb-2" id="removeItem">Remove Last Item</button>
                        <button class="btn btn-warning btn-sm mb-2" id="clearItems">Clear All</button>
                        <ul id="itemList" class="list-group">
                            <li class="list-group-item">Initial Item 1</li>
                            <li class="list-group-item">Initial Item 2</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Change Content</h6>
                        <button class="btn btn-primary btn-sm mb-2" id="changeText">Change Text</button>
                        <button class="btn btn-info btn-sm mb-2" id="changeColor">Change Color</button>
                        <button class="btn btn-secondary btn-sm mb-2" id="toggleClass">Toggle Class</button>
                        <div id="contentBox" class="p-3 border rounded">
                            <p>This content will be changed by jQuery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Event Handling -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Event Handling</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h6>Click Events</h6>
                        <div id="clickArea" class="p-4 border rounded text-center" style="cursor: pointer; background-color: #f8f9fa;">
                            Click me!
                        </div>
                        <small class="text-muted">Click count: <span id="clickCount">0</span></small>
                    </div>
                    <div class="col-md-4">
                        <h6>Hover Effects</h6>
                        <div id="hoverArea" class="p-4 border rounded text-center" style="background-color: #e9ecef;">
                            Hover over me!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6>Keyboard Events</h6>
                        <input type="text" class="form-control" id="keyboardInput" placeholder="Type something...">
                        <small class="text-muted">Key count: <span id="keyCount">0</span></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    let clickCount = 0;
    let keyCount = 0;
    
    // Animation Effects
    $('#fadeIn').click(function() {
        $('#animationBox').fadeIn(1000);
    });
    
    $('#fadeOut').click(function() {
        $('#animationBox').fadeOut(1000);
    });
    
    $('#slideDown').click(function() {
        $('#animationBox').slideDown(1000);
    });
    
    $('#slideUp').click(function() {
        $('#animationBox').slideUp(1000);
    });
    
    $('#slideToggle').click(function() {
        $('#animationBox').slideToggle(1000);
    });
    
    $('#animate').click(function() {
        $('#animationBox').animate({
            width: '200px',
            height: '200px',
            opacity: 0.5
        }, 1000).animate({
            width: '100%',
            height: '100px',
            opacity: 1
        }, 1000);
    });
    
    $('#reset').click(function() {
        $('#animationBox').stop().show().css({
            width: '100%',
            height: '100px',
            opacity: 1
        });
    });
    
    // AJAX Demo
    $('#loadData').click(function() {
        $('#ajaxResult').show();
        $('#ajaxContent').html('<div class="spinner-border spinner-border-sm" role="status"></div> Loading...');
        
        $.ajax({
            url: '{{ route("api.table-data") }}',
            method: 'GET',
            success: function(data) {
                let html = '<h6>Data loaded successfully!</h6><ul>';
                data.data.forEach(function(item) {
                    html += `<li><strong>${item.name}</strong> - ${item.email} (${item.status})</li>`;
                });
                html += '</ul>';
                $('#ajaxContent').html(html);
            },
            error: function() {
                $('#ajaxContent').html('<div class="alert alert-danger">Error loading data!</div>');
            }
        });
    });
    
    // Form Validation
    $('#validationForm').submit(function(e) {
        e.preventDefault();
        let isValid = true;
        
        // Email validation
        const email = $('#email').val();
        if (!email || !email.includes('@')) {
            $('#email').addClass('is-invalid');
            $('#emailError').text('Please enter a valid email address');
            isValid = false;
        } else {
            $('#email').removeClass('is-invalid');
        }
        
        // Password validation
        const password = $('#password').val();
        if (!password || password.length < 6) {
            $('#password').addClass('is-invalid');
            $('#passwordError').text('Password must be at least 6 characters');
            isValid = false;
        } else {
            $('#password').removeClass('is-invalid');
        }
        
        if (isValid) {
            alert('Form is valid! Email: ' + email);
        }
    });
    
    // DOM Manipulation
    $('#addItem').click(function() {
        const itemCount = $('#itemList li').length + 1;
        $('#itemList').append(`<li class="list-group-item">New Item ${itemCount}</li>`);
    });
    
    $('#removeItem').click(function() {
        $('#itemList li:last').remove();
    });
    
    $('#clearItems').click(function() {
        $('#itemList').empty();
    });
    
    $('#changeText').click(function() {
        $('#contentBox p').text('Text changed by jQuery at ' + new Date().toLocaleTimeString());
    });
    
    $('#changeColor').click(function() {
        const colors = ['#ffc107', '#17a2b8', '#28a745', '#dc3545', '#6f42c1'];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        $('#contentBox').css('background-color', randomColor);
    });
    
    $('#toggleClass').click(function() {
        $('#contentBox').toggleClass('border-primary border-warning');
    });
    
    // Event Handling
    $('#clickArea').click(function() {
        clickCount++;
        $('#clickCount').text(clickCount);
        $(this).css('background-color', '#007bff').css('color', 'white');
        setTimeout(() => {
            $(this).css('background-color', '#f8f9fa').css('color', 'black');
        }, 200);
    });
    
    $('#hoverArea').hover(
        function() {
            $(this).css('background-color', '#28a745').css('color', 'white');
        },
        function() {
            $(this).css('background-color', '#e9ecef').css('color', 'black');
        }
    );
    
    $('#keyboardInput').keyup(function() {
        keyCount++;
        $('#keyCount').text(keyCount);
    });
});
</script>
@endsection
