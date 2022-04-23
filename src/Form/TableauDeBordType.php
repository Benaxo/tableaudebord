<?php

namespace App\Form;

use App\Entity\Processus;
use App\Entity\Activites;
use App\Entity\Taches;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;


class TableauDeBordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', EntityType::class, [
                'class'=>'App\Entity\Activites',
                'placeholder'=>'Choisissez une activitée',
                'choice_label'=>'nom',
                'label'=>'Activités'
            ])
            ->add('taches',choiceType::class,[
                'placeholder'=>'taches(choisir une tache)',
                'mapped'=>false
            ])
        ;
       
        $formModifier= function (FormInterface $form, Activites $activites=null)
        {  
             
            //$nom = $activite->getNom();
                $nom = null === $activites ? [] : $activites->getTache();            
            
                $form->add('taches',EntityType::class, [                                                    
                    'class'=> 'App\Entity\Taches',
                    'choices'=> $nom,
                    'choice_label'=>'nom',
                    'placeholder'=>'taches(choisir une tache)',
                    'label'=>'Taches',
                    'mapped'=>false
                    ]
                );   
                                                                                             
        };
        
        $builder->get('nom')->addEventListener(
                FormEvents::POST_SUBMIT,
                function(FormEvent $event) use ($formModifier)
                {     
                    $activites = $event->getForm()->getData();                            
                    $formModifier($event->getForm()->getParent(), $activites); 

                }
        );
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Processus::class,
            'csrf_protection' => false
        ]);
    }
}
