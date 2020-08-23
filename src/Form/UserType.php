<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Form;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * Description of UserType
 *
 * @author saliou
 */
class UserType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        //parent::buildForm($builder, $options);
        $builder
                ->add('name', TextType::class)
                ->add('firstname', TextType::class)
                ->add('mail', EmailType::class)
                ->add('password', RepeatedType::class,array('type' => PasswordType::class,'first_options' => array('label' => 'Password'),'second_options' => array('label' => 'Repeat Password')));
    }
    public function configureOptions(OptionsResolver $resolver) {
        //parent::configureOptions($resolver);
        $resolver -> setDefault('',array('data_class' => User::class));
    }
}
