<?php

namespace ContainerEBCg59S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OW_DyDVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OW.dyDV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OW.dyDV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'answersRepository' => ['privates', 'App\\Repository\\AnswersRepository', 'getAnswersRepositoryService', true],
            'questionsRepository' => ['privates', 'App\\Repository\\QuestionsRepository', 'getQuestionsRepositoryService', true],
            'quizsRepository' => ['privates', 'App\\Repository\\QuizsRepository', 'getQuizsRepositoryService', true],
        ], [
            'answersRepository' => 'App\\Repository\\AnswersRepository',
            'questionsRepository' => 'App\\Repository\\QuestionsRepository',
            'quizsRepository' => 'App\\Repository\\QuizsRepository',
        ]);
    }
}