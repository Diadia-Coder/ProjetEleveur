<?php

namespace App\Admin\Controllers;

use App\models\Lutte;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LutteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Lutte';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Lutte());

        $grid->column('id', __('Id'));
        $grid->column('ovinbelierfk', __('Ovinbelierfk'));
        $grid->column('datedebut', __('Datedebut'));
        $grid->column('datefin', __('Datefin'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Lutte::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ovinbelierfk', __('Ovinbelierfk'));
        $show->field('datedebut', __('Datedebut'));
        $show->field('datefin', __('Datefin'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Lutte());

        $form->integer('ovinbelierfk', __('Ovinbelierfk'));
        $form->date('datedebut', __('Datedebut'));
        $form->date('datefin', __('Datefin'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
