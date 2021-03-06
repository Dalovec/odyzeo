<?php

namespace App\Http\Controllers;

use App\Custom\Ticket;
use App\Mail\TicketFiled;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;

class TicketFormController extends Controller
{
    public function create(){
        return view('tickets.create')->with([
            'cssUrl' => 'css/app.css',
            'title'  => 'Vytvorenie ticketu',
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'meno'    => 'required|string|max:200',
            'mail'    => 'required|email:rfc|max:100',
            'správa' => 'max:2000',
            'file'    => 'max:2000|image',
        ]);

        $hash = null;

        $file = $request->file('file');
        if(!(null == $file)){
            $file->store('images', 'public');
            $hash = $file->hashName();
        }

        $input = $request->collect();

        $ticket = new Ticket($input->get('meno'),$input->get('mail'),$input->get('správa'),$hash);
        $ticket->save();

        Mail::to('kolembus.business@gmail.com')->send(new TicketFiled($ticket));

        $request->session()->put('sucess','1');

        return back();
    }

    public function view(Request $request){
        $tickets = DB::table('tickets')->get();
        return view('tickets.view')->with([
            'tickets' => $tickets,
            'title'   => 'Všetky tickety',
            'request' => $request,
        ]);
    }

    public function viewIndividual(Request $request){
        $ticketId = $request->get('id');
        $tickets = DB::table('tickets')->where('id', $ticketId)->get();
        return view('tickets.view')->with([
            'tickets' => $tickets,
            'title'   => 'Ticket č. '.$ticketId,
            'request' => $request,
        ]);
    }

    public function closeTicket(Request $request){
        $ticketId = $request->get('id');
        $ticket = DB::table('tickets')->where('id', $ticketId)->update([
            'isOpen' => 0,
        ]);
        return back();
    }
}
