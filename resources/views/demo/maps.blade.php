@extends('layouts.app')

@section('title', 'Maps Demo - OTOD Web Layout UI')

@section('styles')
<link rel="stylesheet" href="{{ asset('libs/leaflet1.4.0/leaflet.css') }}" />
<style>
    #map {
        height: 400px;
        width: 100%;
        border-radius: 8px;
    }
    .map-container {
        margin-bottom: 2rem;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Interactive Maps Demo</h1>
    </div>
</div>

<!-- Basic Map -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Basic Map with Markers</h5>
            </div>
            <div class="card-body">
                <div class="map-container">
                    <div id="map"></div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary btn-sm" id="addMarker">Add Random Marker</button>
                    <button class="btn btn-secondary btn-sm" id="clearMarkers">Clear All Markers</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Controls -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Map Controls</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="number" class="form-control" id="latitude" value="21.0285" step="0.0001">
                </div>
                <div class="mb-3">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="number" class="form-control" id="longitude" value="105.8542" step="0.0001">
                </div>
                <div class="mb-3">
                    <label for="zoom" class="form-label">Zoom Level</label>
                    <input type="range" class="form-range" id="zoom" min="1" max="18" value="13">
                    <small class="text-muted">Current zoom: <span id="zoomValue">13</span></small>
                </div>
                <button class="btn btn-primary" id="goToLocation">Go to Location</button>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Preset Locations</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-lat="21.0285" data-lng="105.8542" data-zoom="13">
                        <i class="fa fa-map-marker"></i> Hanoi, Vietnam
                    </button>
                    <button class="btn btn-outline-primary" data-lat="10.8231" data-lng="106.6297" data-zoom="13">
                        <i class="fa fa-map-marker"></i> Ho Chi Minh City, Vietnam
                    </button>
                    <button class="btn btn-outline-primary" data-lat="16.0544" data-lng="108.2022" data-zoom="13">
                        <i class="fa fa-map-marker"></i> Da Nang, Vietnam
                    </button>
                    <button class="btn btn-outline-primary" data-lat="40.7128" data-lng="-74.0060" data-zoom="13">
                        <i class="fa fa-map-marker"></i> New York, USA
                    </button>
                    <button class="btn btn-outline-primary" data-lat="51.5074" data-lng="-0.1278" data-zoom="13">
                        <i class="fa fa-map-marker"></i> London, UK
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Information -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Map Information</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <strong>Current Position:</strong>
                        <div id="currentPosition">Click on map to see coordinates</div>
                    </div>
                    <div class="col-md-3">
                        <strong>Zoom Level:</strong>
                        <div id="currentZoom">13</div>
                    </div>
                    <div class="col-md-3">
                        <strong>Markers Count:</strong>
                        <div id="markersCount">0</div>
                    </div>
                    <div class="col-md-3">
                        <strong>Map Type:</strong>
                        <div>OpenStreetMap</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('libs/leaflet1.4.0/leaflet.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize map
    const map = L.map('map').setView([21.0285, 105.8542], 13);
    
    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    // Store markers
    let markers = [];
    let markerCount = 0;
    
    // Update markers count
    function updateMarkersCount() {
        document.getElementById('markersCount').textContent = markers.length;
    }
    
    // Add marker function
    function addMarker(lat, lng, title = 'Marker') {
        const marker = L.marker([lat, lng]).addTo(map);
        marker.bindPopup(`<b>${title}</b><br>Lat: ${lat}<br>Lng: ${lng}`);
        markers.push(marker);
        updateMarkersCount();
        return marker;
    }
    
    // Clear all markers
    function clearMarkers() {
        markers.forEach(marker => map.removeLayer(marker));
        markers = [];
        updateMarkersCount();
    }
    
    // Add some initial markers
    addMarker(21.0285, 105.8542, 'Hanoi, Vietnam');
    addMarker(21.0245, 105.8412, 'Hoan Kiem Lake');
    addMarker(21.0368, 105.8342, 'Temple of Literature');
    
    // Click on map to add marker
    map.on('click', function(e) {
        const lat = e.latlng.lat;
        const lng = e.latlng.lng;
        addMarker(lat, lng, `Marker ${++markerCount}`);
        
        // Update current position display
        document.getElementById('currentPosition').textContent = 
            `Lat: ${lat.toFixed(4)}, Lng: ${lng.toFixed(4)}`;
    });
    
    // Map zoom event
    map.on('zoomend', function() {
        const zoom = map.getZoom();
        document.getElementById('currentZoom').textContent = zoom;
        document.getElementById('zoomValue').textContent = zoom;
        document.getElementById('zoom').value = zoom;
    });
    
    // Add random marker button
    document.getElementById('addMarker').addEventListener('click', function() {
        const lat = 21.0285 + (Math.random() - 0.5) * 0.1;
        const lng = 105.8542 + (Math.random() - 0.5) * 0.1;
        addMarker(lat, lng, `Random Marker ${++markerCount}`);
    });
    
    // Clear markers button
    document.getElementById('clearMarkers').addEventListener('click', clearMarkers);
    
    // Go to location button
    document.getElementById('goToLocation').addEventListener('click', function() {
        const lat = parseFloat(document.getElementById('latitude').value);
        const lng = parseFloat(document.getElementById('longitude').value);
        const zoom = parseInt(document.getElementById('zoom').value);
        
        if (!isNaN(lat) && !isNaN(lng)) {
            map.setView([lat, lng], zoom);
        }
    });
    
    // Preset location buttons
    document.querySelectorAll('[data-lat]').forEach(button => {
        button.addEventListener('click', function() {
            const lat = parseFloat(this.dataset.lat);
            const lng = parseFloat(this.dataset.lng);
            const zoom = parseInt(this.dataset.zoom);
            
            map.setView([lat, lng], zoom);
        });
    });
    
    // Initialize display
    updateMarkersCount();
});
</script>
@endsection
