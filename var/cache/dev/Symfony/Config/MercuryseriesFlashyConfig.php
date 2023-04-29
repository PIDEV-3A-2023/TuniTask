<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MercuryseriesFlashyConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $flashMessageName;
    private $sessionStore;
    private $_usedProperties = [];

    /**
     * The name to use as the flash message key in the session store
     * @default 'mercuryseries_flashy_notification'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function flashMessageName($value): static
    {
        $this->_usedProperties['flashMessageName'] = true;
        $this->flashMessageName = $value;

        return $this;
    }

    /**
     * The session store to use for storing flash messages
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sessionStore($value): static
    {
        $this->_usedProperties['sessionStore'] = true;
        $this->sessionStore = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'mercuryseries_flashy';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('flash_message_name', $value)) {
            $this->_usedProperties['flashMessageName'] = true;
            $this->flashMessageName = $value['flash_message_name'];
            unset($value['flash_message_name']);
        }

        if (array_key_exists('session_store', $value)) {
            $this->_usedProperties['sessionStore'] = true;
            $this->sessionStore = $value['session_store'];
            unset($value['session_store']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['flashMessageName'])) {
            $output['flash_message_name'] = $this->flashMessageName;
        }
        if (isset($this->_usedProperties['sessionStore'])) {
            $output['session_store'] = $this->sessionStore;
        }

        return $output;
    }

}
