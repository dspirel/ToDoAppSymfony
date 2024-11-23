<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskListFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tasks', CollectionType::class, [
            'entry_type' => TaskFormType::class,
            'entry_options' => [
                'finished_checkbox' => true,
            ],
        ]);
    }
}

// <form action="{{ path('app_task_delete', {id: taskForm.id.vars.value}) }}" method="post">
// <button type="submit" class="btn btn-danger">DELETE</button>
// </form>