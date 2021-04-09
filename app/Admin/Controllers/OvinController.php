<?php

namespace App\Admin\Controllers;

use App\models\Ovin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OvinController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ovin';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ovin());

        $grid->column('id', __('Id'));
        $grid->column('numeleveur', __('Numeleveur'));
        $grid->column('numtravail', __('Numtravail'));
        $grid->column('datenaiss', __('Datenaiss'));
        $grid->column('pere', __('Pere'));
        $grid->column('mere', __('Mere'));
        $grid->column('remarque', __('Remarque'));
        $grid->column('mereadopt', __('Mereadopt'));
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
        $show = new Show(Ovin::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('numeleveur', __('Numeleveur'));
        $show->field('numtravail', __('Numtravail'));
        $show->field('datenaiss', __('Datenaiss'));
        $show->field('pere', __('Pere'));
        $show->field('mere', __('Mere'));
        $show->field('remarque', __('Remarque'));
        $show->field('mereadopt', __('Mereadopt'));
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
        $form = new Form(new Ovin());

        $form->number('numeleveur', __('Numeleveur'));
        $form->number('numtravail', __('Numtravail'));
        $form->date('datenaiss', __('Datenaiss'))->default(date('Y-m-d'));
        $form->text('pere', __('Pere'));
        $form->text('mere', __('Mere'));
        $form->text('remarque', __('Remarque'));
        $form->text('mereadopt', __('Mereadopt'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
