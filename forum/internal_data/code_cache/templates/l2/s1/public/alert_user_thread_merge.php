<?php
// FROM HASH: 6767197a5d9620ba9fb527702291d347
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Seu tópico ' . $__templater->escape($__vars['extra']['title']) . ' foi mesclado em ' . ((((('<a href="' . $__templater->func('base_url', array($__vars['extra']['targetLink'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->func('prefix', array('thread', $__vars['extra']['prefix_id'], ), true)) . $__templater->escape($__vars['extra']['targetTitle'])) . '</a>') . '.' . '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Motivo' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	return $__finalCompiled;
});