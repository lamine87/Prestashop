<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.language.copier' shared service.

return $this->services['prestashop.adapter.language.copier'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageCopier(${($_ = isset($this->services['prestashop.adapter.data_provider.language']) ? $this->services['prestashop.adapter.data_provider.language'] : ($this->services['prestashop.adapter.data_provider.language'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.addon.theme.repository']) ? $this->services['prestashop.core.addon.theme.repository'] : $this->load('getPrestashop_Core_Addon_Theme_RepositoryService.php')) && false ?: '_'}->getListAsCollection());
