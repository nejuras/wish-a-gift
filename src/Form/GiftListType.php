<?php

namespace App\Form;

use App\Entity\GiftList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiftListType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('FirstName', TextType::class)
            ->add('LastName', TextType::class)
            ->add('Email', EmailType::class)
            ->add('Gift', TextType::class)
            ->add('PublicList', CheckboxType::class)
            //->add('dueDate', DateType::class)
            ->add('Save', SubmitType::class, array('label' => 'Create Task'));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => GiftList::class,
        ));
    }
}
