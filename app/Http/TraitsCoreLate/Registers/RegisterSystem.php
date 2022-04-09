<?php 

namespace App\Http\TraitsCoreLate\Registers;


use Illuminate\Http\Request;
use App\Http\TraitsCoreLate\EventsLate\UpInFeed;
use App\Http\TraitsCoreLate\EventsLate\UpinUser;
use App\Http\TraitsCoreLate\Redirects\redirectifFailed;
use App\Tag;
use App\Post;
use App\Feed;
use App\User;



trait RegisterSystem{

    use redirectifFailed;

    public function registerInfo(Request $request){
        $this->validator($request->all())->validate();
        event(new UpInFeed($Model = $this->create($request->all())));
        
        return $this->registerUp($request, $Model)?: redirect($this->redirectPathLate());

    }

    
    public function showMeView(Request $request){
        event(new UpInUser($Model = $this -> all()));
        $request->input('chooseViews');
        return $this->chooseViews($request, $Model);
    }

    //Aux
    protected function registerUp(Request $request, $Model){
    }
    protected function chooseViews(Request $request, $Model){

    }
}
?>