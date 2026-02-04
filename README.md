# Data Table Bootstrap

A dynamic data table application that automatically generates Bootstrap-styled tables from JSON data.

## Overview

This project demonstrates how to create responsive, dynamically-generated HTML tables using jQuery and Bootstrap. It evolved from a PHP/MySQL-based application to a fully static solution suitable for GitHub Pages deployment.

## Evolution of the Project

### Original Goal (PHP/MySQL Version)
The original project was designed to:
- Automatically create HTML tables based on MySQL query results
- Dynamically generate table headers from database column names
- Display data in a responsive Bootstrap-styled table
- Demonstrate server-side data processing with PHP

**Tech Stack (Original):**
- PHP for server-side processing
- MySQL database for data storage
- jQuery for AJAX requests and DOM manipulation
- Bootstrap 3 for responsive table styling

### Current Version (Static/JSON)
The project has been modernized to work as a fully static site:
- Fetches data directly from JSON file instead of MySQL database
- Removes PHP dependency for easier deployment
- Maintains all original UI/UX functionality
- Deployable on GitHub Pages (free static hosting)

**Tech Stack (Current):**
- HTML5
- JavaScript (jQuery 1.11.2)
- Bootstrap 3.3.1 CSS
- JSON for data storage

## Features

- **Dynamic Table Generation**: Automatically creates table structure based on JSON data
- **Responsive Design**: Bootstrap-styled tables that work on all devices
- **Column Auto-Detection**: Reads JSON object keys to generate table headers
- **Error Handling**: Displays user-friendly messages when data fails to load
- **Zero Configuration**: Just update the JSON file to change data

## Project Structure

```
data-table-bootstrap/
├── index.html          # Main HTML page with table generation logic
├── bakeshop.json       # Data source (bakery items)
├── jquery-1.11.2.js    # jQuery library
├── bootstrap.min.css   # Bootstrap CSS framework
└── README.md           # This file
```

## How It Works

1. **Page Load**: When `index.html` loads, jQuery's `$(document).ready()` fires
2. **Data Fetch**: AJAX GET request fetches `bakeshop.json`
3. **Table Generation**: JavaScript function `tblpagination()` dynamically:
   - Extracts column names from first JSON object
   - Creates table headers (`<thead>`)
   - Generates table rows (`<tbody>`) with data
   - Applies Bootstrap classes for styling
4. **DOM Injection**: Generated HTML is inserted into `#appenddiv`

## Data Format

The JSON file should contain an array of objects with consistent keys:

```json
[
    {
        "Code": "123",
        "Description": "Brownie",
        "Cost": "12.00",
        "Quantity": "231",
        "U/M": "pc"
    },
    {
        "Code": "321",
        "Description": "Cake",
        "Cost": "99.25",
        "Quantity": "31",
        "U/M": "pc"
    }
]
```

## Live Demo

View the live demo at: [https://jayveescript.github.io/data-table-bootstrap/](https://jayveescript.github.io/data-table-bootstrap/)

## Local Development

To run this project locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/jayveescript/data-table-bootstrap.git
   cd data-table-bootstrap
   ```

2. Start a local web server:
   ```bash
   # Python 3
   python -m http.server 8000

   # Python 2
   python -m SimpleHTTPServer 8000

   # PHP
   php -S localhost:8000

   # Node.js (with http-server installed)
   npx http-server -p 8000
   ```

3. Open your browser to `http://localhost:8000/index.html`

## Customization

### Change Data
Edit `bakeshop.json` with your own data. The table will automatically adjust to match your JSON structure.

### Styling
Modify Bootstrap classes in `index.html` (line 36) to change table appearance:
- `table` - Base table class
- `table-hover` - Hover effect on rows
- Other options: `table-striped`, `table-bordered`, `table-condensed`

### Add Features
Extend the `tblpagination()` function to add:
- Pagination
- Sorting
- Filtering
- Search functionality

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- IE 9+ (with jQuery 1.11.2 compatibility)

## Legacy Note

This project was originally part of a larger PHP/MySQL application. The current version represents a modernized, simplified approach focusing on:
- Easier deployment (no server-side requirements)
- Better maintainability (JSON over database)
- Modern hosting (GitHub Pages compatibility)

The original PHP/MySQL code has been archived in git history for reference.

## License

MIT License - Feel free to use this project for learning or production purposes.

## Contributing

Contributions are welcome! Feel free to:
- Report bugs
- Suggest new features
- Submit pull requests

## Author

**Jayvee**
- GitHub: [@jayveescript](https://github.com/jayveescript)

---

**Note:** This is a demonstration project showing the evolution from traditional server-side rendering to modern static site approaches. While the original version used PHP and MySQL, the current implementation proves that many dynamic features can be achieved with client-side JavaScript alone.
