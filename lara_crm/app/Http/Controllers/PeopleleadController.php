<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Peoplelead;

class PeopleleadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lead = new Peoplelead();
        $data = $lead::paginate(10);

        return view('people', with(["data" => $data]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lead = new Peoplelead();
        $data = $lead::all();

        return response()->json([
                'result' => $data
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lead = new Peoplelead();

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:15',
            'type' => 'required',
            'group' => 'required',
            'open_deal' => 'required|min:1|max:5',
            'close_deal' => 'required|min:1|max:5',
            'status' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required|min:11|max:11',
            'lead_address' => 'required|min:10|max:50',
        ], [
            'name.required' => 'Lead name required.',
            'name.min' => 'Lead name minimum 3 character required.',
            'name.max' => 'Lead name maximum 15 character required.',
            'type.required' => 'Type required.',
            'group.required' => 'Group required.',
            'open_deal.required' => 'Open deal required.',
            'open_deal.min' => 'Open deal minimum 1 character required.',
            'open_deal.max' => 'Open deal maximum 5 character required.',
            'close_deal.required' => 'Close deal required.',
            'close_deal.min' => 'Close deal minimum 1 character required.',
            'close_deal.max' => 'Close deal maximum 5 character required.',
            'type.required' => 'Type required.',
            'status.required' => 'Status required.',
            'email.required' => 'Email required.',
            'email.email' => 'Email must be an Email.',
            'phone_no.required' => 'Phone number required.',
            'phone_no.min' => 'Phone number must be 11 digit.',
            'phone_no.max' => 'Phone number must be 11 digit.',
            'lead_address.required' => 'Lead address required.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } else {
            $lead->name = $request->name;
            $lead->type = $request->type;
            $lead->group = $request->group;
            $lead->open_deal = $request->open_deal;
            $lead->close_deal = $request->close_deal;
            $lead->status = $request->status;
            $lead->email = $request->email;
            $lead->number = $request->phone_no;
            $lead->address = $request->lead_address;
            $lead->lead_id = uniqid() . time();

            $lead->save();

            return response()->json([
                'status' => 1,
                'success' => 'New lead added successfully'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:15',
            'type' => 'required',
            'group' => 'required',
            'open_deal' => 'required|min:1|max:5',
            'close_deal' => 'required|min:1|max:5',
            'status' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required|min:11|max:11',
            'lead_address' => 'required|min:10|max:50',
        ], [
            'name.required' => 'Lead name required.',
            'name.min' => 'Lead name minimum 3 character required.',
            'name.max' => 'Lead name maximum 15 character required.',
            'type.required' => 'Type required.',
            'group.required' => 'Group required.',
            'open_deal.required' => 'Open deal required.',
            'open_deal.min' => 'Open deal minimum 1 character required.',
            'open_deal.max' => 'Open deal maximum 5 character required.',
            'close_deal.required' => 'Close deal required.',
            'close_deal.min' => 'Close deal minimum 1 character required.',
            'close_deal.max' => 'Close deal maximum 5 character required.',
            'type.required' => 'Type required.',
            'status.required' => 'Status required.',
            'email.required' => 'Email required.',
            'email.email' => 'Email must be an Email.',
            'phone_no.required' => 'Phone number required.',
            'lead_address.required' => 'Lead address required.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } else {

            $lead = new Peoplelead();
            $data = $lead::find($request->id);

            $data->name = $request->name;
            $data->type = $request->type;
            $data->group = $request->group;
            $data->open_deal = $request->open_deal;
            $data->close_deal = $request->close_deal;
            $data->status = $request->status;
            $data->email = $request->email;
            $data->number = $request->phone_no;
            $data->address = $request->lead_address;
            $data->lead_id = $data->lead_id;

            $lead->save();

            return response()->json([
                'status' => 1,
                'success' => 'People lead updated successfully'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lead = new Peoplelead();

        $id = $request->id;
        $data = $lead::where('lead_id', $id)->get();

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
