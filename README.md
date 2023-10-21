# laravel-wallet
This package for using wallet with user

# => Add Provider For Laravel-wallet
    \Himasami\LaravelWallet\Support\WalletServiceProvider::class,

# => Run Migration

# => Run Vendor Publish For Publish Wallet Table
    php artisan vendor:publish --tag=laravel-wallet-table 

# => Example Using Wallet 
    auth()->user()
    ->walletType(WalletTypeEnum::MONEY, WalletTransactionTypeEnum::DEPOSIT)
    ->walletSteps(10)
    ->walletTransactionReason(WalletTransactionReasonEnum::DEPOSIT_ORDER_AMOUNT)
    ->walletCreate();
