<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class RouterTest extends TestCase {
    public function test_router() {
        $router = new Router();
        $html = $router->route( "http://localhost/orders" );
        $pos= mb_strpos($html, "С12121212оздание заказа");
        $this->assertNotEquals(false, $pos);
    }
    public function test_router1() {
        $router = new Router();
        $html = $router->route( "http://localhost" );
        $pos= mb_strpos($html, "Приглашаем в наш");
        $this->assertNotEquals(false, $pos);
    }
    public function test_router2() {
        $router = new Router();
        $html = $router->route( "http://localhost/products" );
        $pos= mb_strpos($html, "Добавить в корзину");
        $this->assertNotEquals(false, $pos);
    }
}
