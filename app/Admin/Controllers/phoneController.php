<?php

namespace App\Admin\Controllers;

use App\Staff;
use App\Phone;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class phoneController extends Controller
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
        return Admin::grid(Phone::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->phone('手机号码');
            $grid->staff_id();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Phone::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->select('staff_id','使用者')->options(function ($id) {
                $user = Staff::find($id);

                if ($user) {
                    return [$user->id => $user->name];
                }
            })->ajax('/api/users');
            $form->text('bank','开卡银行')->rules('required');

        });
    }
}
