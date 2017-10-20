<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\MenusRepository;
use Menu;

class SiteController extends Controller
{
    //

    protected $p_rep; // Для хранения объекта класса портфолио репозиторий (Для хранения логики по работе с портфолио)
    protected $s_rep; // Слайдер репозиторий
    protected $a_rep; // Артиклес репозиторий
    protected $m_rep; // Менюс репозиторий


    protected $template;  // Имя шаблона для отображения информации на конкретной странице

    protected $vars = array(); // Массив передаваемых переменных в шаблон

    protected $contentRightBar = FALSE; // Для хранения инф-ции отображающейся в правом сайтбаре
    protected $contentLeftBar = FALSE;


    protected $bar = FALSE; // Есть ли сайтбар


    public function __construct(MenusRepository $m_rep) {
        $this->m_rep = $m_rep;
    }


    protected function renderOutput() {
        $menu = $this->getMenu();

        $navigation = view(env('THEME').'.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);

        return view($this->template)->with($this->vars);


    }

    protected function getMenu() {

        $menu = $this->m_rep->get();
        $mBuilder = Menu::make('MyNav', function($m) use ($menu) {

            foreach($menu as $item) {

                if($item->parent == 0) {

                    $m->add($item->title,$item->path)->id($item->id);
                }
                else {
                    if($m->find($item->parent) ) {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }

        });

        //dd($mBuilder);

        return $mBuilder;
    }


}
