<?php

namespace Module\Users\Models;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Database\Traits\Uuids;
use Module\Users\Models\User;
use Module\Users\Models\Customer;
use Module\Users\Models\OrderDetail;


class Order extends Model
{
  use Uuids;

    protected $table = 'orders';

    protected $guarded = [];

    protected $keyType = 'string';

    protected $location;

    protected $appends = ['location'];
    

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function customer()
    {
      return $this->belongsTo(Customer::class);
    }

    public function order_details()
    {
      return $this->hasMany(OrderDetail::class);
    }

    public function setLocationAttribute($value)
    {
      $this->location = $value;
    }

    public function getLocationAttribute()
    {
      return 'abc';
      dd(1);
      if($this->type == 0){
        dd($this->customer);
        // province_id
        // district_id
        // commune_id
      }

    }

    


    

}