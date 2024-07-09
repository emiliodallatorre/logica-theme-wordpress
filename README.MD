# Logica Child Theme

Welcome to the Logica Child Theme for WordPress. This theme is a child of the "Davis Blocks" parent theme, tailored for the Logica / Unica insurance broker's website. Developed by [JEVE - Junior Enterprise Ca' Foscari Venezia](https://jeve.it).

## Installation

1. **Download:** Get the Logica Child Theme files.
2. **Upload:** Go to `Appearance > Themes` in WordPress, click `Add New` > `Upload Theme`, and upload the zip file.
3. **Activate:** After installation, click `Activate`.
4. **Parent Theme:** Ensure the Davis Blocks theme is installed.

## Customization

### Custom CSS

To add custom styles to the child theme, follow these steps:

- For general customizations, add your CSS to the `style.css` file located in the root of the child theme. This file is primarily used for overriding or extending the styles of the parent theme.

- For more granular control over specific components (e.g., header, footer), use the new CSS structure:
    1. Navigate to the styles folder within the child theme.
    2. Here, you'll find CSS files named after each component (e.g., `header.css`).
    3. Add your custom styles to the respective component's CSS file. If a file for your specific component does not exist, you can create a new CSS file with the - component's name (e.g., `navigation.css`).
    4. Add your component name to `$component_styles` in `functions.php` to enqueue the new CSS file.

This structure helps maintain a clean and organized approach to theming, allowing for easier updates and customizations to specific parts of your site without cluttering the main `style.css` file.

### Custom Functions

Use the `functions.php` file to add custom PHP functions and extend theme functionality.

### Template Overrides

Copy and modify template files from the parent theme in the child theme's directory for customization.

## Features

- **Integration:** Fully compatible with Davis Blocks.
- **Custom Styles:** Easily add custom CSS.
- **Extended Functionality:** Modify theme functions via `functions.php`.
- **Template Customization:** Override parent templates for unique layouts.

## Support

For support, contact [JEVE - Junior Enterprise Ca' Foscari Venezia](https://jeve.it). Refer to [WordPress documentation](https://wordpress.org/support/) for more details on child themes.

## Credits

Developed by [JEVE - Junior Enterprise Ca' Foscari Venezia](https://jeve.it).