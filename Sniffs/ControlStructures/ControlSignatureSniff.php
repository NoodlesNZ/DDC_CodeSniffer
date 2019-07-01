<?php
/**
 * Verifies that control statements conform to their coding standards.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\DDC\Sniffs\ControlStructures;

use PHP_CodeSniffer\Sniffs\AbstractPatternSniff;

class ControlSignatureSniff extends AbstractPatternSniff
{
	/**
	 * If true, comments will be ignored if they are found in the code.
	 *
	 * @var boolean
	 */
	public $ignoreComments = true;

	/**
	 * Returns the patterns that this test wishes to verify.
	 *
	 * @return string[]
	 */
	protected function getPatterns()
	{
		return [
			'do {EOL...} while (...);EOL',
			'while (...) {EOL',
			'switch (...) {EOL',
			'for (...) {EOL',
			'if (...) {EOL',
			'foreach (...) {EOL',
			// The EOL preceding the else/elseif keywords is not detected
			// correctly, so we have
			// DDC_Sniffs_ControlStructures_ElseNewlineSniff to
			// cover that.
			'else if (...) {EOL',
			'elseif (...) {EOL',
			'else {EOL',
			'do {EOL',
		];

	}


}