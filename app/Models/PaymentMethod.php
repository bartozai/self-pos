<?php

// app/Models/PaymentMethod.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['name', 'is_default'];

    public static function getDefault()
    {
        return self::where('is_default', true)->first();
    }

    public function setAsDefault()
    {
        self::where('is_default', true)->update(['is_default' => false]);
        $this->update(['is_default' => true]);
    }
}

