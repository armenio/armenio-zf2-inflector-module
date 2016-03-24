<?php
// All credits go to http://book.cakephp.org/2.0/en/core-utility-libraries/inflector.html
namespace Armenio\Inflector;

/**
 * Inflector
 * 
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 * @version 1.0
 */
class Inflector 
{
	/**
	 * Default map of accented and special characters to ASCII characters
	 *
	 * @var array
	 */
	protected static $_transliteration = array(
		'/ä|æ|ǽ/' => 'ae',
		'/ö|œ/' => 'oe',
		'/ü/' => 'ue',
		'/Ä/' => 'Ae',
		'/Ü/' => 'Ue',
		'/Ö/' => 'Oe',
		'/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ/' => 'A',
		'/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/' => 'a',
		'/Ç|Ć|Ĉ|Ċ|Č/' => 'C',
		'/ç|ć|ĉ|ċ|č/' => 'c',
		'/Ð|Ď|Đ/' => 'D',
		'/ð|ď|đ/' => 'd',
		'/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/' => 'E',
		'/è|é|ê|ë|ē|ĕ|ė|ę|ě/' => 'e',
		'/Ĝ|Ğ|Ġ|Ģ/' => 'G',
		'/ĝ|ğ|ġ|ģ/' => 'g',
		'/Ĥ|Ħ/' => 'H',
		'/ĥ|ħ/' => 'h',
		'/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ/' => 'I',
		'/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/' => 'i',
		'/Ĵ/' => 'J',
		'/ĵ/' => 'j',
		'/Ķ/' => 'K',
		'/ķ/' => 'k',
		'/Ĺ|Ļ|Ľ|Ŀ|Ł/' => 'L',
		'/ĺ|ļ|ľ|ŀ|ł/' => 'l',
		'/Ñ|Ń|Ņ|Ň/' => 'N',
		'/ñ|ń|ņ|ň|ŉ/' => 'n',
		'/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/' => 'O',
		'/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/' => 'o',
		'/Ŕ|Ŗ|Ř/' => 'R',
		'/ŕ|ŗ|ř/' => 'r',
		'/Ś|Ŝ|Ş|Š/' => 'S',
		'/ś|ŝ|ş|š|ſ/' => 's',
		'/Ţ|Ť|Ŧ/' => 'T',
		'/ţ|ť|ŧ/' => 't',
		'/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/' => 'U',
		'/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/' => 'u',
		'/Ý|Ÿ|Ŷ/' => 'Y',
		'/ý|ÿ|ŷ/' => 'y',
		'/Ŵ/' => 'W',
		'/ŵ/' => 'w',
		'/Ź|Ż|Ž/' => 'Z',
		'/ź|ż|ž/' => 'z',
		'/Æ|Ǽ/' => 'AE',
		'/ß/'=> 'ss',
		'/Ĳ/' => 'IJ',
		'/ĳ/' => 'ij',
		'/Œ/' => 'OE',
		'/ƒ/' => 'f'
	);

	/**
	 * Returns a Transliterated word
	 *
	 * @param string
	 * @return string
	 **/
	public static function transliterate($str)
	{
		$str = strtr( $str, self::$_transliteration );

		return $str;
	}

	/**
	 * Returns the given lower_case_and_underscored_word as a CamelCased word.
	 *
	 * @param string $lower_case_and_underscored_word Word to camelize
	 * @return string Camelized word. LikeThis.
	 * @access public
	 */
	public static function camelize($lowerCaseAndUnderscoredWord) 
	{
		$result = str_replace(' ', '', ucwords(str_replace(array('-', '_'), ' ', $lowerCaseAndUnderscoredWord)));

		return $result;
	}

	/**
	 * Returns the given camelCasedWord as an underscored_word.
	 *
	 * @param string $camelCasedWord Camel-cased word to be "underscorized"
	 * @return string Underscore-syntaxed version of the $camelCasedWord
	 * @access public
	 */
	public static function underscore($camelCasedWord) 
	{
		$result = mb_strtolower(preg_replace('/(?<=\\w)([A-Z])/', '_\\1', $camelCasedWord));
			
		return $result;
	}

	/**
	 * Returns a string with all spaces converted to underscores (by default), accented
	 * characters converted to non-accented characters, and non word characters removed.
	 *
	 * @param string $string the string you want to slug
	 * @param string $replacement will replace keys in map
	 * @param array $map extra elements to map to the replacement
	 * @param array $keep elements to keep in the replaced string
	 * @deprecated $map param will be removed in future versions. Use Helper_Inflector::rules() instead
	 * @return string
	 * @access public
	 */
	public static function slug($string, $replacement = '-', $case = 'lower', $map = array(), $keep = array()) 
	{
		if ( is_array($replacement) ) {
			$map = $replacement;
			$replacement = '-';
		}
		
		$quotedReplacement = preg_quote($replacement, '/');

		$merge = array(
			sprintf('/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}%s]/mu', preg_quote(implode('', $keep), '/')) => ' ',
			'/\\s+/' => $replacement,
			sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
		);

		$map = $map + self::$_transliteration + $merge;
		$slug = preg_replace(array_keys($map), array_values($map), $string);
		
		if( $case == 'lower' ){
			$slug = mb_strtolower($slug);
		}elseif( $case == 'upper' ){
			$slug = mb_strtoupper($slug);
		}
		
		return $slug;
	}
}