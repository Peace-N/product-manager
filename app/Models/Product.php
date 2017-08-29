<?php
/**
 * Created by PhpStorm.
 * User: peaceful
 * Date: 2017/08/27
 * Time: 07:26 PM
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'products';

    protected $fillable = ['name', 'sku', 'price','description'];

    protected function user() {
        return $this->belongsTo(\App\User::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function metadata() {
        return $this->hasMany(Metadata::class);
    }
}