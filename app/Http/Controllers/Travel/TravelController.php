<?php

namespace App\Http\Controllers\Travel;

use App\Http\Controllers\ApiController;
use App\Travel;
use Illuminate\Http\Request;

class TravelController extends ApiController
{

    public function index()
    {
        $travels = Travel::all();
        foreach ($travels as $travel) {
            $travel->order;
            $travel->user;
            $travel->payment;
        }

        return $this->showAll($travels);
    }

    public function store(Request $request)
    {
        $travel = Travel::create($request->all());
        return $this->showOne($travel);
    }

    public function show(Travel $travel)
    {
        $travel->order;
        $travel->user;
        $travel->payment;

        return $this->showOne($travel);
    }

    public function update(Request $request, Travel $travel)
    {
        $messages = $travel->messages;

        $travel->fill($request->all());

        if($request->has('messages')){
            $new_messages[] = $request->all()['messages'];
            if(is_array($messages)){
                if(count($messages) == count($messages, COUNT_RECURSIVE)){
                    $new_messages = array_merge($messages,array($new_messages));
                }else{
                    $new_messages = array_merge($messages,$new_messages);
                }
            }
            $travel->messages = $new_messages;
        }

        $travel->save();
        return $this->showOne($travel);
    }

    public function destroy(Travel $travel)
    {
        $travel->delete();
        return $this->showMessage('Record deleted successfully');
    }


}
