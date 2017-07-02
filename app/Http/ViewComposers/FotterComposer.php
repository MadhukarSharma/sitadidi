<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\MenuItem;
class FotterComposer
{
    /**
     * Create a movie composer.
     *
     * @return void
     */
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menuitems=MenuItem::all();
        $view->with('menuitems', $menuitems);
    }

}