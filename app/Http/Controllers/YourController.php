<?php

namespace App\Http\Controllers;

use App\Models\YourModel;
use Illuminate\Http\Request;

class YourController extends Controller
{

  public function destroy($id)
    {
        $item = YourModel::findOrFail($id);
        $item->delete();

        // You can also redirect or return a response here
        return response()->json(['message' => 'Item deleted successfully']);
    }

}
