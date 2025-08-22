# OTOD Web Layout UI - Laravel Demo

A comprehensive Laravel application showcasing various UI components and web technologies including Bootstrap, jQuery, Vue.js, Chart.js, Leaflet maps, and more.

## Features

- **Bootstrap Components**: Buttons, alerts, cards, forms, progress bars, badges
- **jQuery Interactions**: Animations, AJAX, DOM manipulation, event handling
- **Vue.js Components**: Reactive components and data binding
- **Chart.js Integration**: Line, bar, pie, doughnut, and radar charts
- **Leaflet Maps**: Interactive maps with markers and controls
- **Form Components**: Advanced form elements with validation
- **Data Tables**: Interactive tables with sorting and filtering
- **Calendar Widgets**: Date pickers and event management

## Prerequisites

- PHP 8.1 or higher
- Composer
- Web server (Apache/Nginx) or PHP built-in server

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd otod-github
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Set up environment file**
   ```bash
   cp env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Configure your web server**
   
   **Option A: Using PHP built-in server (for development)**
   ```bash
   php artisan serve
   ```
   Then visit `http://localhost:8000`

   **Option B: Using Apache/Nginx**
   - Point your web server's document root to the `public` directory
   - Ensure the `storage` and `bootstrap/cache` directories are writable

## Project Structure

```
otod-github/
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php          # Main controller for demo pages
│   └── Providers/                      # Laravel service providers
├── config/
│   └── app.php                        # Application configuration
├── public/                            # Public assets (CSS, JS, images)
│   ├── libs/                          # Third-party libraries
│   │   ├── bootstrap/                 # Bootstrap CSS/JS
│   │   ├── jquery-3.6.3.min.js       # jQuery library
│   │   ├── chart_js/                  # Chart.js library
│   │   ├── leaflet1.4.0/              # Leaflet maps
│   │   └── vue/                       # Vue.js framework
│   ├── css/                           # Custom CSS files
│   └── js/                            # Custom JavaScript files
├── resources/
│   └── views/                         # Blade templates
│       ├── layouts/
│       │   └── app.blade.php          # Main layout template
│       ├── demo/                      # Demo page templates
│       └── home.blade.php             # Homepage template
├── routes/
│   ├── web.php                        # Web routes
│   └── api.php                        # API routes
└── bootstrap/
    └── app.php                        # Application bootstrap
```

## Available Routes

### Main Pages
- `/` - Homepage with demo overview
- `/demo/bootstrap` - Bootstrap components demo
- `/demo/jquery` - jQuery interactions demo
- `/demo/vue` - Vue.js components demo
- `/demo/charts` - Chart.js visualizations demo
- `/demo/calendar` - Calendar widgets demo
- `/demo/maps` - Leaflet maps demo
- `/demo/forms` - Form components demo
- `/demo/tables` - Data tables demo

### API Endpoints
- `/api/chart-data` - Sample data for charts
- `/api/table-data` - Sample data for tables

## Demo Features

### Bootstrap Demo (`/demo/bootstrap`)
- Buttons with different styles and states
- Alert components with various types
- Card layouts and components
- Form elements and validation
- Progress bars and badges

### jQuery Demo (`/demo/jquery`)
- Animation effects (fade, slide, animate)
- AJAX data loading
- Form validation
- DOM manipulation
- Event handling (click, hover, keyboard)

### Charts Demo (`/demo/charts`)
- Line charts with multiple datasets
- Bar charts with custom colors
- Pie and doughnut charts
- Radar charts for comparisons
- AJAX-powered dynamic charts

### Maps Demo (`/demo/maps`)
- Interactive Leaflet maps
- Marker management
- Map controls and navigation
- Preset location buttons
- Real-time coordinate display

## Customization

### Adding New Demos
1. Create a new method in `HomeController.php`
2. Add a route in `routes/web.php`
3. Create a view template in `resources/views/demo/`
4. Update the navigation menu in `resources/views/layouts/app.blade.php`

### Styling
- Custom CSS can be added to `public/css/app.css`
- Bootstrap can be customized by modifying the Bootstrap variables
- Additional CSS libraries can be included in the layout template

### JavaScript
- Custom JavaScript can be added to `public/js/app.js`
- Additional libraries can be included in individual demo pages
- AJAX endpoints can be added to `routes/api.php`

## Development

### Adding New Libraries
1. Download the library files to `public/libs/`
2. Include CSS/JS files in the appropriate view templates
3. Update the documentation

### Creating New Components
1. Create a new controller method
2. Add the route
3. Create the view template
4. Include necessary CSS/JS dependencies
5. Test the functionality

## Troubleshooting

### Common Issues

1. **500 Server Error**
   - Check that the `storage` and `bootstrap/cache` directories are writable
   - Verify that the `.env` file exists and has the correct configuration

2. **Assets Not Loading**
   - Ensure the web server is pointing to the `public` directory
   - Check that asset paths are correct in the view templates

3. **Routes Not Working**
   - Clear the route cache: `php artisan route:clear`
   - Check that the web server supports URL rewriting

### Debug Mode
Enable debug mode in `.env`:
```
APP_DEBUG=true
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions, please open an issue on the GitHub repository.
