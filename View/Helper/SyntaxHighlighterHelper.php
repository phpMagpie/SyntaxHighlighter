<?php

App::uses('AppHelper', 'View/Helper');

/**
 * SyntaxHighlighter Helper
 *
 * PHP version 5
 *
 * @category SyntaxHighlighter.Helper
 * @package  SyntaxHighlighter.View.Helper
 * @version  1.5
 * @author   Paul Gardner <phpmagpie@webbedit.co.uk>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class SyntaxHighlighterHelper extends AppHelper {

/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
	public $helpers = array(
		'Html',
		'Js',
	);

/**
 * Actions
 *
 * Format: ControllerName/action_name => settings
 *
 * @var array
 */
	public $actions = array();


/**
 * beforeRender
 *
 * @param string $viewFile
 * @return void
 */
	public function beforeRender($viewFile) {
		$this->Html->css(array('/SyntaxHighlighter/css/shCoreRDark'), null, array('inline'=>false));
		$this->Html->script(array(
		  '/SyntaxHighlighter/js/shCore',
		  '/SyntaxHighlighter/js/shBrushPhp',
		  '/SyntaxHighlighter/js/shBrushJScript',
		  '/SyntaxHighlighter/js/shBrushBash',
		), array('inline' => false));
		$this->Html->scriptBlock("$(document).ready(function() {
		  SyntaxHighlighter.all();
		});", array('inline'=>false, 'safe'=>false));
	}
}
