# chinese-package
Common Chinese development resources in Laravel

## Example

    require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload files using Composer autoload

    use Heivin\Chinese;

    echo Chinese::province(); // return province json data
    echo Chinese::city(); // return city json data
    echo Chinese::area(); // return area json data
    echo Chinese::map('anhui'); // return anhui's map json data
