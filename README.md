# BayanMo2025.ph - Philippine Elections Website

A PHP-based website focused on the 2025 Philippine elections and West Philippine Sea issues. The website aims to educate voters, provide information about candidates, and facilitate community discussions on key political issues.

## Features

- **Homepage**: Introduction to the website and key election issues
- **Issues Pages**: Detailed information on crucial issues including the West Philippine Sea dispute
- **Candidate Profiles**: Information about candidates and their positions on key issues
- **Voter Education**: Resources to help citizens understand the voting process
- **Community Forum**: Platform for users to engage in discussions about election-related topics

## Technologies Used

- PHP
- Tailwind CSS (via CDN)
- HTML5
- SVG Icons
- Responsive Design

## Setup Instructions

### Requirements

- PHP 7.4 or higher
- Web server (e.g., Apache, Nginx)
- XAMPP/WAMP/MAMP or similar local development environment

### Installation

1. Clone or download this repository to your web server's document root or htdocs folder:
   ```
   git clone https://github.com/yourusername/bayanmo2025.git
   ```

2. If using XAMPP, place the files in the `htdocs` directory
   - Example path: `C:\xampp\htdocs\EnvScie` (Windows) or `/Applications/XAMPP/htdocs/EnvScie` (Mac)

3. Start your Apache server through XAMPP or your preferred method

4. Access the website through your browser:
   ```
   http://localhost/EnvScie/
   ```

### Folder Structure

```
EnvScie/
│
├── images/               # Image assets
│   └── west-ph-sea-map.jpg   # Map image for West Philippine Sea content
│
├── includes/             # Reusable PHP components
│   ├── header.php        # Site navigation
│   └── footer.php        # Site footer
│
├── index.php             # Homepage
├── issues.php            # Issues overview page
├── wps.php               # West Philippine Sea detailed page
├── candidates.php        # Candidate listings
├── education.php         # Voter education resources
├── community.php         # Community forum
└── README.md             # This documentation
```

## Adding Content

### Images

Add images to the `images` directory. For proper display, use the following sizes:
- Hero banners: 1920x600px
- Candidate photos: 400x400px (square)
- Issue thumbnails: 600x400px

### Adding Pages

To create a new page:
1. Create a new PHP file in the root directory
2. Include the header and footer:
   ```php
   <?php include 'includes/header.php'; ?>
   <!-- Your content here -->
   <?php include 'includes/footer.php'; ?>
   ```

## Customization

### Colors

The website uses Tailwind CSS for styling. The main color scheme includes:
- Blue: Primary color (#2563eb)
- Red: Accent color (#dc2626)
- Yellow: Highlight color (#f59e0b)

### Typography

The website uses the Montserrat font family, loaded from Google Fonts.

## License

This project is for educational purposes only.

## Contact

For any inquiries or contributions, please contact [your-email@example.com](mailto:your-email@example.com). 