<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\TransactionDetailModel;
use App\Models\TransactionModel;

class Home extends BaseController
{
    protected $product;
    protected $transactionModel;
    protected $transaction;
    protected $transactionDetail;


    function __construct()
    {
        helper('number');
        helper('form');
        $this->product = new ProductModel();
        $this->transaction = new TransactionModel();
        $this->transactionDetail = new TransactionDetailModel();

    }

    public function index()
    {
    $product = $this->product->findAll();
    $data['product'] = $product;
    return view('v_home', $data);
    }

    public function faq()
    {
    return view('v_faq'); // Adjust according to your view file
    }

    public function history()
    {
        $username = session()->get('username');
        $data['username'] = $username;

        $buy = $this->transaction->where('username', $username)->findAll();
        $data['buy'] = $buy;

        $product = [];

        if (!empty($buy)) {
            foreach ($buy as $item) {
                $detail = $this->transactionDetail->select('transaction_detail.*, product.nama, product.harga, product.foto')->join('product', 'transaction_detail.product_id=product.id')->where('transaction_id', $item['id'])->findAll();

            if (!empty($detail)) {

                if (!empty($detail)) {
                    $product[$item['id']] = $detail;
                }
            }
        }

        $data['product'] = $product;
        return view('v_history', $data);
    }
}
}
