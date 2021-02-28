<?php

namespace App\Http\Controllers;
use App\Models\contactt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contacttcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactuss.index',[ 

            'contactuss' => contactt::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactuss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namecont' => [ 'required', 'string' ],
            'emailcont' => [ 'required', 'string' ],
            'phonecont' => [ 'required', 'integer' ],
            'descriptioncont' => [ 'required', 'string' ],
        ]);

        // contactt::create(
        //     [
        //         'namecont' => $request->get('namecont'),
        //         'emailcont' => $request->get('emailcont'),
        //         'phonecont' => $request->get('phonecont'),
        //         'descriptioncont' => $request->get('descriptioncont'),
        //     ]
            
        // );

        $contactt = new contactt;
        $contactt ->namecont = $request ->namecont;
        $contactt ->emailcont= $request ->emailcont;
        $contactt ->phonecont= $request ->phonecont;
        $contactt ->descriptioncont= $request ->descriptioncont;
        $contactt ->save();


            Mail::send('mails/enviodecorreos',['namecont'=>$contactt],function($message) use ($contactt){

                $message->from('daniel9tibaduiza@gmail.com', 'daniel tibaduiza');

      $message->to($contactt ->emailcont);

      $message->subject('Has recibido un mensaje de ');
        }
    ); 
        return redirect('/'); 
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactt  $contactt
     * @return \Illuminate\Http\Response
     */
    public function show(contactt $contactt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactt  $contactt
     * @return \Illuminate\Http\Response
     */
    public function edit(contactt $contactt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactt  $contactt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactt $contactt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactt  $contactt
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactt $contactt)
    {
        //
    }

//     public function correo(contactt $receivers)
//     {
//         $receivers = Receiver::pluck('email');
// Mail::to($receivers)->send(new EmergencyCallReceived($call));
//     }

    

    
}
