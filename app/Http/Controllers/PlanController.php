<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\PlanResource;
use App\Models\Plan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Plan::class);

        return PlanResource::collection(Plan::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Plan::class);

        $data = $request->validate([

        ]);

        return new PlanResource(Plan::create($data));
    }

    public function show(Plan $plan)
    {
        $this->authorize('view', $plan);

        return new PlanResource($plan);
    }

    public function update(Request $request, Plan $plan)
    {
        $this->authorize('update', $plan);

        $data = $request->validate([

        ]);

        $plan->update($data);

        return new PlanResource($plan);
    }

    public function destroy(Plan $plan)
    {
        $this->authorize('delete', $plan);

        $plan->delete();

        return response()->json();
    }
}
