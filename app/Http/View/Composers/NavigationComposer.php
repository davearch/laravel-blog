<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Page;

class NavigationComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $pages = Page::all();
        $pages_array = $pages->toArray();
        $view->with('pages', $pages_array);
    }
}