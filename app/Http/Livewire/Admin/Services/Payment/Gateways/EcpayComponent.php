<?php

namespace App\Http\Livewire\Admin\Services\Payment\Gateways;

use Config;
use Artisan;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class EcpayComponent extends Component
{
    use SEOToolsTrait, WithFileUploads, Actions;

    public $name;
    public $currency;
    public $exchange_rate;
    public $deposit_min_amount;
    public $deposit_max_amount;
    public $is_active;
    public $logo;

    // Payment gateway settings


    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        
        // Get settings
        $settings = payment_gateway('ecpay');

        // Fill form
        $this->fill([
            'name'               => $settings?->name,
            'currency'           => $settings?->currency,
            'exchange_rate'      => $settings?->exchange_rate,
            'deposit_min_amount' => $settings?->deposit_min_amount,
            'deposit_max_amount' => $settings?->deposit_max_amount,
            'is_active'          => $settings?->is_active ? 1 : 0,
        ]);

    }


    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle("Ecpay", true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.services.payment.gateways.ecpay', [
            'currencies' => config('money')
        ])->extends('livewire.admin.layout.app')->section('content');
    }
    
}
