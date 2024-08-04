<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AutomaticPaymentGatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('automatic_payment_gateways')->insert(array (
            0 => 
            array (
                'id'                 => 1,
                'uid'                => '9C1E8F9209B0988DCF8E',
                'name'               => 'Iyzico',
                'slug'               => 'iyzico',
                'logo_id'            => NULL,
                'currency'           => 'TRY',
                'exchange_rate'      => 24.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"api_key":"","secret_key":"","live_url":"","sandbox_url":"","mode":"sandbox"}',
                'is_active'          => 0,
                'country'            => 'tr',
            ),
            1 => 
            array (
                'id'                 => 2,
                'uid'                => '65952467607D7AEB3EE4',
                'name'               => 'Genie Business',
                'slug'               => 'genie-business',
                'logo_id'            => NULL,
                'currency'           => 'LKR',
                'exchange_rate'      => 297.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"api_key":"","live_url":"https:\\/\\/api.geniebiz.lk","sandbox_url":"https:\\/\\/api.uat.geniebiz.lk","mode":"sandbox"}',
                'is_active'          => 0,
                'country'            => 'lk',
            ),
            2 => 
            array (
                'id'                 => 3,
                'uid'                => '03E54C5D7B8DCE8E147D',
                'name'               => 'Asaas',
                'slug'               => 'asaas',
                'logo_id'            => NULL,
                'currency'           => 'BRL',
                'exchange_rate'      => 5.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"api_key":"","live_url":"https:\\/\\/www.asaas.com","sandbox_url":"https:\\/\\/sandbox.asaas.com","mode":"sandbox"}',
                'is_active'          => 0,
                'country'            => 'br',
            ),
            3 => 
            array (
                'id'                 => 4,
                'uid'                => '2BD5219432C5CF02E318',
                'name'               => 'Ecpay',
                'slug'               => 'ecpay',
                'logo_id'            => NULL,
                'currency'           => 'TWD',
                'exchange_rate'      => 62.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"api_key":"","live_url":"https:\\/\\/payment.ecpay.com.tw\\/Cashier\\/AioCheckOut\\/V5","sandbox_url":"https:\\/\\/payment-stage.ecpay.com.tw\\/Cashier\\/AioCheckOut\\/V5","mode":"sandbox"}',
                'is_active'          => 0,
                'country'            => 'tw',
            ),
            4 => 
            array (
                'id'                 => 5,
                'uid'                => '51BF233182120CDC61D9',
                'name'               => 'Fast Pay',
                'slug'               => 'fastpay',
                'logo_id'            => NULL,
                'currency'           => 'IQD',
                'exchange_rate'      => 1310.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"merchant_mobile_no":"","store_password":"","live_url":"https:\\/\\/secure.fast-pay.cash","sandbox_url":"https:\\/\\/dev.fast-pay.cash","mode":"sandbox"}',
                'is_active'          => 0,
                'country'            => 'iq',
            ),
            5 => 
            array (
                'id'                 => 6,
                'uid'                => '0DD92FEA338DE1C0314C',
                'name'               => 'Freekassa',
                'slug'               => 'freekassa',
                'logo_id'            => NULL,
                'currency'           => 'RUB',
                'exchange_rate'      => 83.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"shopId":"","api_key":"","request_url":"https:\\/\\/api.freekassa.ru\\/v1\\/"}',
                'is_active'          => 0,
                'country'            => 'ru',
            ),
            6 => 
            array (
                'id'                 => 7,
                'uid'                => 'DEF3FDCB8F62A38FC138',
                'name'               => 'Duitku',
                'slug'               => 'duitku',
                'logo_id'            => NULL,
                'currency'           => 'IDR',
                'exchange_rate'      => 14900.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"merchantCode":"","apiKey":"","live_url":"https:\\/\\/passport.duitku.com\\/webapi\\/api\\/merchant\\/v2\\/inquiry","sandbox_url":"https:\\/\\/sandbox.duitku.com\\/webapi\\/api\\/merchant\\/v2\\/inquiry","mode":"sandbox"}',
                'is_active'          => 0,
                'country'            => 'id',
            ),
            7 => 
            array (
                'id'                 => 8,
                'uid'                => '8C3202830DE171146794',
                'name'               => 'Paymob',
                'slug'               => 'paymob-pk',
                'logo_id'            => NULL,
                'currency'           => 'PKR',
                'exchange_rate'      => 290.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"api_key":"","request_url":"https:\\/\\/pakistan.paymob.com\\/api"}',
                'is_active'          => 0,
                'country'            => 'pk',
            ),
            8 => 
            array (
                'id'                 => 9,
                'uid'                => 'ABF607881482DBAE74DE',
                'name'               => 'cPay',
                'slug'               => 'cpay',
                'logo_id'            => NULL,
                'currency'           => 'MKD',
                'exchange_rate'      => 58.0,
                'fixed_fee'          => NULL,
                'percentage_fee'     => NULL,
                'deposit_min_amount' => 1.0,
                'deposit_max_amount' => 100.0,
                'settings'           => '{"request_url":"https:\\/\\/www.cpay.com.mk\\/client\\/Page\\/default.aspx?xml_id=\\/mk-MK\\/.loginToPay\\/.simple\\/"}',
                'is_active'          => 0,
                'country'            => 'mk',
            ),
        )); 
    }
}