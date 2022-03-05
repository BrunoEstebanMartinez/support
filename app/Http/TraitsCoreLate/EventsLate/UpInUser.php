<?php 
namespace App\Http\TraitsCoreLate\EventsLate;

use Illuminate\Queue\SerializesModels;

class UpInUser{

    use SerializesModels;

    public $User; 

    public function __contruct($User){
        $this -> User = $User;
    }
}
?>