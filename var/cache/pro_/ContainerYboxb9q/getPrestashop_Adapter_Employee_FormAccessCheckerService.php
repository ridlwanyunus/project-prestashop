<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.employee.form_access_checker' shared service.

return $this->services['prestashop.adapter.employee.form_access_checker'] = new \PrestaShop\PrestaShop\Adapter\Employee\EmployeeFormAccessChecker(${($_ = isset($this->services['prestashop.adapter.data_provider.employee']) ? $this->services['prestashop.adapter.data_provider.employee'] : $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.employee.data_provider']) ? $this->services['prestashop.adapter.employee.data_provider'] : ($this->services['prestashop.adapter.employee.data_provider'] = new \PrestaShop\PrestaShop\Adapter\Employee\EmployeeDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.tab.repository']) ? $this->services['prestashop.core.admin.tab.repository'] : $this->load('getPrestashop_Core_Admin_Tab_RepositoryService.php')) && false ?: '_'});
