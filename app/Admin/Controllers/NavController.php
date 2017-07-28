<?php

namespace App\Admin\Controllers;

use App\Nav;
use App\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class NavController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Nav::class, function (Grid $grid) {
//            $grid->model()->where('id','>',4);
//            $grid->model()->orderBy('sort','asc');
//            $grid->paginate(3);
//            $grid->model()->take(5);
            $grid->id('ID')->sortable();
            $grid->Cname('导航中文名');
            $grid->Ename('导航英文名');
            $grid->url('链接')->value(function ($url){
                return "<a href='$url'>$url</a>";
            });
            $grid->sort('排序')->sortable();
            $grid->show('是否展示')->value(function ($show){
                return  $show? '是':'否' ;
            });
            $grid->username('用户名')->value(function (){
                return "default";
            });
            $grid->filter(function ($filter) {
                    $filter->useModal();
            });
            $grid->rows(function ($row){
                        if ($row->id>3){
                            $row->style('color:red');

                        }
            });

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Nav::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('Cname', '中文')->rules('required');
            $form->text('Ename', '英文')->rules('required');
            $form->text('url', '链接')->rules('required');
            $form->number('sort','排序')->rules('required');
            $form->radio('show','是否展示')->values([1 => '是', 0=> '否'])->default(1);
        });
    }

}
