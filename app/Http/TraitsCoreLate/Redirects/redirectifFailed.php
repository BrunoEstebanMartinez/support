<?php 

namespace App\Http\TraitsCoreLate\Redirects;


trait redirectifFailed{

    public function redirectPathLate(){

        if(method_exists($this, 'redirectTo')){
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }


}


?>