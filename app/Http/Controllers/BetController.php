<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBetRequest;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Bet;
use App\Models\Player;
use Form;

class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['players'=>[],'agents'=>[]];

        $data['players']    = Player::getAllPlayerNames();
        $data['agents']     = Agent::getAllAgentNames();
        
        return view('bet/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBetRequest $request)
    {
        $validated = $request->validated();
        $validated['date'] = date('Y-m-d');
        Bet::create($validated);
        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        die('sd');
        $bet = Bet::findOrFail($id);
        return view('bet/single',['bet'=>$bet]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = Bet::destroy($id);
        $response = $query ? ['status'=>'1', 'msg'=>'success'] : ['status'=>'0', 'msg'=>'fail'];

        return response()->json($response);
    }
}
