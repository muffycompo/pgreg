<?php namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model {

	protected $table = 'pins';
    public $timestamps = false;
    protected $fillable = ['username','pincode','status'];

    public function updatePinUsage($data)
    {
        $pin = $this->where('pincode',$data['pin'])->update([
            'username' => Str::lower($data['username']),
            'status' => 1,
        ]);

        return $pin ? $pin : false;
    }
}
