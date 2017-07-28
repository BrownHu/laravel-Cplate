<?php

namespace App\Admin\Controllers;

use App\Card;
use App\Staff;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class StaffController extends Controller
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
        return Admin::grid(Staff::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('姓名');
            $grid->column('phone.phone');
            $grid->head_img()->value(function ($images) {
                return json_decode($images, true);
            })->map(function ($path) {
                $filename=explode('/',$path)[1];
                return route('getpic',['filename'=>$filename]);
            })->image();
            $grid->card('卡数')->value(function ($card){
                $count=count($card);
                return $count;
            })->color('red');
        });

    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Staff::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name','姓名')->rules('required');
            $form->multipleImage('head_img','头像');
            $form->editor('body','正文');

//            $form->file('doc')->rules('mines:doc|required');
//            $form->map('116.966942','32.619657', 'head_img')->useTencentMap();



//            $form->display('created_at', 'Created At');
//            $form->display('updated_at', 'Updated At');
        });
    }
}
