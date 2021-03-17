<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\Store;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{

    public function makeTransation($storeId, $value)
    {
        $store = Store::find($storeId);
        $store->makeTransation($value);
    }

    public function rules()
    {
        return [
            'date'=>'required',
            'expense_type_id'=>'required|exists:expense_types,id',
            'value'=>'required',
            'notes'=>'nullable|string',
            'type'=>'required',
            'store_id'=>'required|exists:stores,id'
        ];
    }
}
