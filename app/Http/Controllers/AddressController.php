<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AddressService;

class AddressController extends Controller
{
    protected $addressService;

    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $addresses = $this->addressService->searchAddresses($search);
        if ($request->exists('search')) {
            return response()->json($addresses);
        }

        return view('addresses.index', $addresses);
    }
}
