<?php

namespace App\Admin\Controllers;

use App\Touch;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class  TouchController extends Controller
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
        return Admin::grid(Touch::class, function (Grid $grid) {

//            $grid->id('ID')->sortable();
            $grid->address('地址');
            $grid->mobile('手机号码');
            $grid->fax('传真');
            $grid->email('邮箱');
            $grid->fixphone('固定电话');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Touch::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('address','地址');
            $form->mobile('mobile','手机号码');
            $form->text('fax','传真');
            $form->email('email','邮箱');
            $form->text('fixphone','固定电话');

        });
    }
}
