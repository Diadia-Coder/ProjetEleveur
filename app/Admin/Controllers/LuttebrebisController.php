<?php

namespace App\Admin\Controllers;

use App\models\Luttebrebis;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LuttebrebisController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'luttebrebis';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Luttebrebis());

        $grid->column('id', __('Id'));
        $grid->column('luttefk', __('Luttefk'));
        $grid->column('ovbrebisfk', __('Ovbrebisfk'));
        $grid->column('datemarquage', __('Datemarquage'));
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
        $show = new Show(Luttebrebis::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('luttefk', __('Luttefk'));
        $show->field('ovbrebisfk', __('Ovbrebisfk'));
        $show->field('datemarquage', __('Datemarquage'));
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
        $form = new Form(new Luttebrebis());

        $form->number('luttefk', __('Luttefk'));
        $form->number('ovbrebisfk', __('Ovbrebisfk'));
        $form->date('datemarquage', __('Datemarquage'))->default(date('Y-m-d'));

        return $form;
    }
}
