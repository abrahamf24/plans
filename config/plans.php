<?php

return [

    /*
     * The model which handles the plans tables.
     */

    'models' => [

        'plan' => \Abrahamf24\Plans\Models\PlanModel::class,
        'subscription' => \Abrahamf24\Plans\Models\PlanSubscriptionModel::class,
        'feature' => \Abrahamf24\Plans\Models\PlanFeatureModel::class,
        'usage' => \Abrahamf24\Plans\Models\PlanSubscriptionUsageModel::class,

        'stripeCustomer' => \Abrahamf24\Plans\Models\StripeCustomerModel::class,

    ],

];
