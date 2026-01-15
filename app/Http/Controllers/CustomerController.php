<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        // search function
        $keyword = $request->get("q");
        $query->where(function ($q) use ($keyword) {
            $q->where('name', 'like', "%{$keyword}%")
                ->orWhere('phone', 'like', "%{$keyword}%")
                ->orWhere('township', 'like', "%{$keyword}%")
                ->orWhere('state_division', 'like', "%{$keyword}%")
                ->orWhere('year', 'like', "%{$keyword}%");
        });

        // filter
        $filterByStateDivision = $request->get("filter_by_state_division");
        if ($filterByStateDivision) {
            $query->where("state_division", $filterByStateDivision);
        }

        $filterByTownship = $request->get("filter_by_township");
        if ($filterByTownship) {
            $query->where("township", $filterByTownship);
        }



        // order
        $sortBy = $request->get("sort_by") ?? "id";
        $sortDirection = $request->get("sort_direction") ?? "desc";
        $query->orderBy($sortBy, $sortDirection);

        // paginate
        $customers = $query->paginate(7);

        return CustomerResource::collection($customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->validated());

        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        // Only validated fields will be updated (partial update supported)
        $customer->update($request->validated());

        return new CustomerResource($customer->fresh());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json([
            "data" => ['message' => 'Customer deleted successfully'],
        ], 200);
    }
}
