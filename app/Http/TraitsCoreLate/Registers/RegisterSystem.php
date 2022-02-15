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

    public function registerInfo(Request $request){
        $this->validator($request->all())->validate();
        event(new UpInFeed($Model = $this->create($request->all())));
        
        return $this->registerUp($request, $Model)?: redirect($this->redirectPathLate());

    }
    protected function registerUp(Request $request, $Model){
    }
}
?>