<?php

namespace App\Http\Controllers;

use App\Events\HigherBidder;
use App\Models\Metadata;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Product $product)
    {
        $products = $product->with('transactions')->get();
        return view('shop.index', ['products' => $products]);
    }


    public function show(Request $request, $id)
    {
        $metadata = new Metadata();
        $metadata->product_id = $id;
        $metadata->ip_address = $request->getClientIp();
        $metadata->save();
        $product = Product::find($id);
        return view('shop.show', ['product' => $product]);
    }

    public function bid($id)
    {
        $product = Product::find($id);
        $latest_transaction = $product->transactions()->orderBy('created_at', 'desc')->first();
        return view('shop.bid', ['product' => $product, 'transaction' =>$latest_transaction]);
    }

    /** Record Viewing Transactions
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function placebid(Request $request, $id)
    {

        $transaction = new Transaction();
        $transaction->product_id = $id;
        $transaction->bid_amount = $request->get('amount');
        $transaction->bid_owner_email = $request->get('email');
        $transaction->description = 'New Product Bid !';
        $transaction->save();

        if(Transaction::where('bid_amount', '>', $request->get('amount'))) {
            event(new HigherBidder($request));
        }

        $product = Product::find($id);
        return view('shop.show', ['product' => $product]);
    }
}
