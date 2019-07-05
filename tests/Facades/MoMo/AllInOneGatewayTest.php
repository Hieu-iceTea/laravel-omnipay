<?php
/**
 * @link https://github.com/phpviet/laravel-omnipay
 *
 * @copyright (c) PHP Viet
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace PHPViet\Laravel\Omnipay\Tests\Facades\MoMo;

use PHPViet\Laravel\Omnipay\Tests\FacadeGatewayTestCase;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class AllInOneGatewayTest extends FacadeGatewayTestCase
{
    protected function getGatewayName(): string
    {
        return 'MoMo AIO';
    }

    protected function getGatewayAlias(): string
    {
        return '\MoMoAIO';
    }
}

