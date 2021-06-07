<?php

namespace App\Http\View\Composers;


use App\Models\MenuGroup;
use Illuminate\View\View as View;

class MenuComposer {

    public function compose(View $view)
    {
        $view->with('menus', MenuGroup::with('menus')->get());
    }

}
