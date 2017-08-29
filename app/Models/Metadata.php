<?php
/**
 * Created by PhpStorm.
 * User: peaceful
 * Date: 2017/08/27
 * Time: 07:38 PM
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'products_metadata';

    public function product() {
        return $this->belongsTo(Product::class);
    }
}