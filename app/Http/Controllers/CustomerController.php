<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CustomerController extends Controller
{

    public function __construct() {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // Gate::authorize('viewAny', Customer::class);

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


        // must filter
        $query->when(Auth::id() != 1, function ($query) {
            $query->where("user_id", Auth::id());
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

        // with
        // $query->with('user');

        // paginate
        $customers = $query->paginate(7);

        return CustomerResource::collection($customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        // Gate::authorize("create", Customer::class);

        $customer = Customer::create([...$request->validated(), "user_id" => Auth::id()]);

        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        Gate::authorize('view', $customer);

        return new CustomerResource($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {

        Gate::authorize('update', $customer);

        // Only validated fields will be updated (partial update supported)
        $customer->update($request->validated());

        return new CustomerResource($customer->fresh());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {

        Gate::authorize('delete', $customer);

        $customer->delete();

        return response()->json([
            "data" => ['message' => 'Customer deleted successfully'],
        ], 200);
    }
}
