<?php
class InstallController extends Controller { protected $extensions = array('PDO', 'pdo_mysql'); protected $writableFiles = array('data' => 'dir', 'upload' => 'dir', 'php/config/app.settings.php' => 'file', 'php/config/parameters.php' => 'file', 'php/config/widget.blacklist.txt' => 'file'); protected $writableFilesForVerify = array('php/config/parameters.php' => 'file'); protected $memoryServices = array('memory', 'memory.talks_map', 'memory.watched_talks', 'memory.stats', 'memory.online', 'memory.msg_q'); public function indexAction() { return $this->render('admin/install.html'); } public function verifyAction() { return $this->render('admin/install-verify.html', array('config' => $this->get('config')->data, 'trans' => json_encode($this->getJsTranslations()))); } public function verifySubmitAction() { $spa59e13 = $this->get('request'); $sp944552 = $this->get('verify'); $spec85ab = $spa59e13->postVar('config'); $spee5166 = $spec85ab['services']['verify']['code']; $spa59a90 = $spec85ab['services']['verify']['token']; $sp742dc9 = array(); foreach ($this->writableFilesForVerify as $spcf1418 => $sp7e4049) { if (!is_writable(ROOT_DIR . '/../' . $spcf1418)) { $sp742dc9[$spcf1418] = $sp7e4049; } } if (!empty($sp742dc9)) { return $this->render('admin/install-verify.html', array('config' => $this->get('config')->data, 'notWritable' => $sp742dc9, 'trans' => json_encode($this->getJsTranslations()))); } if ($sp944552->verifyCodeToken($spee5166, $spa59a90)) { $sp944552->updateInstallation($spee5166, $spa59a90); return $this->redirect('Install:wizard'); } return $this->redirect('Install:verify'); } public function wizardAction() { ini_set('opcache.enable', 0); if (!$this->get('verify')->verifyInstallation()) { return $this->redirect('Install:verify'); } $sp0565cf = $this->get('config')->data; return $this->render('admin/install-wizard.html', array('config' => $sp0565cf)); } public function wizard2Action() { $spa59e13 = $this->get('request'); $sp435f69 = $this->get('config'); $sp0565cf = $spa59e13->postVar('config'); $spbdee22 = $this->ensureValidConfig(); if (!empty($spbdee22)) { return $spbdee22; } $sp8c613b = array(); foreach ($this->extensions as $spf1d3c3) { if (!extension_loaded($spf1d3c3)) { $sp8c613b[] = $spf1d3c3; } } if (!empty($sp8c613b)) { return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'missingExtensions' => $sp8c613b)); } $sp742dc9 = array(); foreach ($this->writableFiles as $spcf1418 => $sp7e4049) { if (!is_writable(ROOT_DIR . '/../' . $spcf1418)) { $sp742dc9[$spcf1418] = $sp7e4049; } } if (!empty($sp742dc9)) { return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'notWritable' => $sp742dc9)); } if (!$this->createMemoryFiles()) { return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'notWritable' => array('data' => 'dir'))); } $sp4ed473 = false; $spa56b4a = $sp435f69->data['dbType'] . ':host=' . $sp0565cf['dbHost'] . ';port=' . $sp0565cf['dbPort']; try { $sp435f69->data['appSettings']['installed'] = false; if (!$this->get('db')->connect($spa56b4a, $sp0565cf['dbUser'], $sp0565cf['dbPassword'])) { $sp4ed473 = true; } } catch (Exception $sp49b6ed) { $sp4ed473 = true; } if ($sp4ed473) { return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'dbError' => $sp4ed473)); } return $this->render('admin/install-wizard-2.html', array('config' => $sp0565cf)); } public function wizard3Action() { $spa59e13 = $this->get('request'); $sp435f69 = $this->get('config'); $sp0565cf = $spa59e13->postVar('config'); $spbdee22 = $this->ensureValidConfig(); if (!empty($spbdee22)) { return $spbdee22; } unset($sp0565cf['superPassRepeat']); $spa694cb = $this->get('config'); $spa694cb->updateParameters($sp0565cf); $spa694cb->updateAppSettings($sp0565cf['appSettings']); ini_set('opcache.enable', 0); $spa694cb->onRegister(); $sp04b6ba = $this->install(); if (!$sp04b6ba['success']) { $spb3bd7c = true; $spc507dc = $sp04b6ba['message']; return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'dbCreateError' => $spb3bd7c, 'message' => $spc507dc)); } $spaa85c2 = $this->get('model_validation')->validateDb(); if (count($spaa85c2) !== 0) { $spb3bd7c = true; $spc507dc = $spaa85c2['message']; return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'dbCreateError' => $spb3bd7c, 'message' => $spc507dc)); } $this->get('logger')->info('Application installed'); return $this->render('admin/install-wizard-3.html'); } public function uninstallAction() { return $this->render('admin/uninstall.html'); } public function uninstall2Action() { $spa59e13 = $this->get('request'); if (!$spa59e13->isPost()) { return $this->redirect('Install:uninstall'); } $sp04b6ba = $this->uninstall(); if (!$sp04b6ba['success']) { $sp95ca6f = true; $sp178716 = $sp04b6ba['errorMsg']; return $this->render('admin/uninstall.html', array('error' => $sp95ca6f, 'errorMsg' => $sp178716)); } $this->get('logger')->info('Application uninstalled'); return $this->render('admin/uninstall-2.html'); } protected function createMemoryFiles() { $sp04b6ba = true; foreach ($this->memoryServices as $speb04de) { if (!touch($this->get($speb04de)->getFilePath())) { $sp04b6ba = false; } } return $sp04b6ba; } protected function ensureValidConfig() { $spa59e13 = $this->get('request'); if ($spa59e13->isPost()) { $sp0565cf = $spa59e13->postVar('config'); $spfd717a = $this->get('model_validation'); $spaa85c2 = $spfd717a->validateInstallConfig($sp0565cf); if (count($spaa85c2) !== 0) { return $this->render('admin/install-wizard.html', array('config' => $sp0565cf, 'errors' => $spaa85c2)); } } else { return $this->redirect('Install:wizard'); } return null; } protected function install() { $sp2d1a7f = array('message' => ''); if ($this->get('request')->isPost()) { $sp0565cf = $this->get('config'); try { $sp5fbadb = file_get_contents(ROOT_DIR . '/../sql/install_' . $sp0565cf->data['dbType'] . '.sql'); $sp5fbadb = str_replace('%db_name%', $sp0565cf->data['dbName'], $sp5fbadb); $sp0565cf->data['appSettings']['installed'] = false; $sp2d1a7f['success'] = $this->get('db')->execute($sp5fbadb); } catch (Exception $spdf711f) { $sp2d1a7f['success'] = false; $sp2d1a7f['message'] = $spdf711f->getMessage(); } if ($sp2d1a7f['success']) { $sp0565cf->updateAppSettings(array('installed' => true)); $sp2d1a7f = $this->createAdmin($sp0565cf); if ($sp2d1a7f['success']) { $sp62fc4c = $sp2d1a7f['admin']; $this->get('auth')->setUser($sp62fc4c->id, $sp62fc4c->name, $sp62fc4c->roles); } } else { if (empty($sp2d1a7f['message'])) { $sp2d1a7f['message'] = $this->get('i18n')->trans('other.error'); } } } return $sp2d1a7f; } protected function createAdmin($sp0565cf) { $sp2d1a7f = array('message' => ''); $this->get('db')->reconnect(); $sp62fc4c = UserModel::repo()->findOneBy(array('roles' => array('Like', '%ADMIN%'))); if (!$sp62fc4c) { $sp62fc4c = new UserModel(array('roles' => array('ADMIN', 'OPERATOR'), 'info' => array('ip' => $this->get('request')->getIp()))); } $sp62fc4c->name = $sp0565cf->data['superUser']; $sp62fc4c->mail = $sp0565cf->data['superUser']; $sp62fc4c->password = $this->get('security')->encodePassword($sp0565cf->data['superPass']); if ($sp62fc4c->save()) { $sp2d1a7f['success'] = true; $sp2d1a7f['admin'] = $sp62fc4c; } else { $sp2d1a7f['success'] = false; $sp2d1a7f['message'] = $this->get('i18n')->trans('admin.update.error'); } return $sp2d1a7f; } protected function uninstall() { $sp2d1a7f = array(); if ($this->get('request')->isPost()) { $sp0565cf = $this->get('config'); try { $sp5fbadb = file_get_contents(ROOT_DIR . '/../sql/uninstall_' . $sp0565cf->data['dbType'] . '.sql'); $sp5fbadb = str_replace('%db_name%', $sp0565cf->data['dbName'], $sp5fbadb); $sp2d1a7f['success'] = $this->get('db')->execute($sp5fbadb); } catch (Exception $spdf711f) { $sp2d1a7f['success'] = false; $sp2d1a7f['errorMsg'] = $spdf711f->getMessage(); } if ($sp2d1a7f['success']) { $spe05816 = array('id' => '-1', 'name' => $sp0565cf->data['superUser'], 'roles' => array('ADMIN')); $this->get('auth')->setUser($spe05816['id'], $spe05816['name'], $spe05816['roles']); $sp0565cf = $this->get('config'); $sp0565cf->updateAppSettings(array('installed' => false)); $sp0565cf->updateParameters(array('superPass' => '')); } else { $sp2d1a7f['error'] = $sp2d1a7f['errorMsg'] = $this->get('i18n')->trans('uninstall.error'); } } return $sp2d1a7f; } protected function getJsTranslations() { $sp613317 = $this->get('i18n'); return array('connection.error' => $sp613317->trans('connection.error'), 'invalid.code.format' => $sp613317->trans('invalid.code.format'), 'invalid.purchase' => $sp613317->trans('invalid.purchase')); } }