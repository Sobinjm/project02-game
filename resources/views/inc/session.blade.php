<?php
  use App\Ulogin;

 $select=Ulogin::select("*")-> where('id','=',session()->get('id'))->first(); ?>