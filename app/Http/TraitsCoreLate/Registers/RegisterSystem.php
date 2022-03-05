<?php 

namespace App\Http\TraitsCoreLate\Registers;


use Illuminate\Http\Request;
use App\Http\TraitsCoreLate\EventsLate\UpInFeed;
use App\Http\TraitsCoreLate\Redirects\redirectifFailed;
use App\Tag;
use App\Post;
use App\Feed;



trait RegisterSystem{

    use redirectifFailed;

    //Registers
    public function registerInfo(Request $request){
        $this->validator($request->all())->validate();
        event(new UpInFeed($Model = $this->create($request->all())));
        
        return $this->registerUp($request, $Model)?: redirect($this->redirectPathLate());

    }
    public function showMeView(Request $request, $Model, $names_Views){
        event(new UpInUser($Model = $this -> all()));
        $this->forms($names_Views);
        return $request->input($names_Views);
    }
    //Aux
    protected function registerUp(Request $request, $Model){
    }
}
?>