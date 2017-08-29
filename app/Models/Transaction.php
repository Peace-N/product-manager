<?php
/**
 * Created by PhpStorm.
 * User: peaceful
 * Date: 2017/08/27
 * Time: 07:32 PM
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Transaction extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['bid_amount','bid_owner_email','ip_adress', 'description'];

    protected $table = 'products_transactions';

    public function product() {
        return $this->belongsTo(Product::class);
    }
}