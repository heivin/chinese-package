# chinese-package
Common Chinese development resources in Laravel
常用中文开发资源:
省市县区
地图数据

## Province

## Example

    require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload files using Composer autoload

    use Heivin\Chinese;

    var_dump( Chinese::province() ); // Array
    echo Chinese::city('json'); // Json
    var_dump( Chinese::area() ); // Array
    var_dump(json_encode(Chinese::map('anhui')));
    var_dump(json_encode(Chinese::map('anhui','json'))); //Json

## Laravel
5.x

use Heivin\Chinese;

class IndexController extends Controller
{

    public function test(){

        return response()->json(Chinese::province()); // Response with json

        return response(Chinese::city('json'))->header('Content-Type', 'text/json'); // Response with json

    }
}

## TODO List

1. 电话区号
2. 身份证识别
3. IP段
4. 经纬度
