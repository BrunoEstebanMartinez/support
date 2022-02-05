<?php 

namespace App\Http\TraitsCoreLate\EventsLate;

use Illuminate\Queue\SerializesModels;

class UpInFeed{

    use SerializesModels;

    public $Post;

    public function __construct($Post){
        $this->Post = $Post;
    }
}

?>