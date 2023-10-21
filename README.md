# laravel-wallet
This package for using wallet with user

# Create Wallet Model
    Columns : ['type', 'transaction_reasons',
                    'transaction_type','current', 'steps',
                    'balance', 'data']

    ------------------------------------------

    Relation : 
        public function wallettable(): MorphTo
        {
            return $this->morphTo();
        }

