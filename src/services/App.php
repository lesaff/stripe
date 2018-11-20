<?php
/**
 * Stripe Payments plugin for Craft CMS 3.x
 *
 * @link      https://enupal.com/
 * @copyright Copyright (c) 2018 Enupal LLC
 */

namespace enupal\stripe\services;

use craft\base\Component;
use craft\commerce\errors\SubscriptionException;

class App extends Component
{
    /**
     * @var Settings
     */
    public $settings;

    /**
     * @var PaymentForms
     */
    public $paymentForms;

    /**
     * @var Orders
     */
    public $orders;

    /**
     * @var Subscriptions
     */
    public $subscriptions;

    /**
     * @var Plans
     */
    public $plans;

    public function init()
    {
        $this->settings = new Settings();
        $this->paymentForms = new PaymentForms();
        $this->orders = new Orders();
        $this->plans = new Plans();
        $this->subscriptions = new Subscriptions();
    }
}