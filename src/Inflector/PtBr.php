<?php 
namespace Armenio\Inflector;

use Aircode\Inflector;

/**
 * PtBr
 * Helper for formatting pt_BR Strings.
 *
 * [^a-z0-9 \'\/\$\s\(\)\[\]\^\|\,\=\>\\\;\*\@\.]
 *
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 */
class PtBr extends Inflector 
{
	/**
	 * Plural inflector rules
	 *
	 * @var array
	 */
	protected static $_plural = array(
		'/(s)$/i'										   => '$1',
		'/^(paí)s$/i'									   => '$1ses',
		'/^(pai)s$/i'									   => '$1ses', //
		'/^(japon|escoc|ingl|dinamarqu|fregu|portugu)ês$/i' => '$1eses',
		'/^(japon|escoc|ingl|dinamarqu|fregu|portugu)es$/i' => '$1eses', //
		'/^(|g)ás$/i'									   => '$1ases',
		'/^(|g)as$/i'									   => '$1ases',//
		'/^(irm|m)ão$/i'									=> '$1ãos',
		'/^(irm|m)ao$/i'									=> '\1aos',//
		'/^(alem|c|p)ão$/i'								 => '$1ães',
		'/^(alem|c|p)ao$/i'								 => '\1aes',//
		'/(z|r)$/i'										 => '$1es',
		'/al$/i'											=> 'ais',
		'/el$/i'											=> 'eis',
		'/ol$/i'											=> 'ois',
		'/ul$/i'											=> 'uis',
		'/([^aeou])il$/i'								   => '$1is',
		'/m$/i'											 => 'ns',
		'/ão$/i'											=> 'ões',
		'/ao$/i'											=> 'oes',//
		'/ao$/i'											=> 'oes',
		//'/^(irm|m)ao$/i'									=> '\1aos',
		//'/^(alem|c|p)ao$/i'								 => '\1aes',
		'/$/'											   => 's',
	);

	/**
	 * Singular inflector rules
	 *
	 * @var array
	 */
	protected static $_singular = array(
		'/^(á|gá|paí)s$/i'								   => '$1s',
		'/^(a|ga|pai)s$/i'								   => '$1s',//
		'/^(.*[^s]s)es$/i'								   => '$1',
		'/^(g|)ases$/i'									  => '$1ás',
		'/(r|z)es$/i'										=> '$1',
		'/([^p])ais$/i'									  => '$1al',
		'/eis$/i'											=> 'el',
		'/ois$/i'											=> 'ol',
		'/uis$/i'											=> 'ul',
		'/(r|t|f|v)is$/i'									=> '$1il',
		'/ns$/i'											 => 'm',
		'/sses$/i'										   => 'sse',
		'/ães$/i'											=> 'ão',
		'/aes$/i'											=> 'ao',
		'/ãos$/i'											=> 'ão',
		'/aos$/i'											=> 'ao',
		'/ões$/i'											=> 'ão',
		'/oes$/i'											=> 'ao',
		'/(japon|escoc|ingl|dinamarqu|fregu|portugu)eses$/i' => '$1ês',
		'/([^ê])s$/i'										=> '$1',
		'/([^e])s$/i'										=> '$1',
	);

	/**
	 * Declare irregular words
	 *
	 * @var array
	 **/
	 protected static $_irregular = array(
		'abdomen' => 'abdomens',
		'alcool' => 'alcoois',
		'armazem' => 'armazens',
		'artesa' => 'artesas',
		'artesao' => 'artesaos',
		'arvore' => 'arvores',
		'avo' => 'avos',
		'avó' => 'avós',
		'avô' => 'avôs',
		'azul' => 'azuis',
		'barril' => 'barris',
		'bencao' => 'bencaos',
		'cadaver' => 'cadaveres',
		'campi' => 'campus',
		'cantil' => 'cantis',
		'capelao' => 'capelaes',
		'capita' => 'capitas',
		'capitao' => 'capitaes',
		'carro' => 'carros',
		'casa' => 'casas',
		'chao' => 'chaos',
		'charlata' => 'charlatonas',
		'charlatao' => 'charlataes',
		'cidada' => 'cidadoas',
		'cidadao' => 'cidadaos',
		'classe' => 'classes',
		'colon' => 'colons',
		'cone' => 'cones',
		'consul' => 'consules',
		'cotonete' => 'cotonetes',
		'crista' => 'cristas',
		'cristao' => 'cristaos',
		'dificil' => 'dificeis',
		'e' => 'sao',
		'e-mail' => 'e-mails',
		'eden' => 'edens',
		'eletron' => 'eletrons',
		'email' => 'emails',
		'escriva' => 'escrivas',
		'escrivao' => 'escrivaes',
		'farol' => 'farois',
		'flor' => 'flores',
		'fossil' => 'fosseis',
		'germen' => 'germens',
		'gluten' => 'glutens',
		'grao' => 'graos',
		'hifen' => 'hifens',
		'himen' => 'himens',
		'hospital' => 'hospitais',
		'irma' => 'irmas',
		'junior' => 'juniores',
		'limao' => 'limoes',
		'liquen' => 'liquens',
		'localizacao' => 'localizacoes',
		'luz' => 'luzes',
		'mal' => 'males',
		'movel' => 'moveis',
		'neutron' => 'neutrons',
		'orfao' => 'orfaos',
		'pai' => 'pais',
		'papel' => 'papeis',
		'pe' => 'pes',
		'pneu' => 'pneus',
		'polen' => 'polens',
		'portao' => 'portoes ',
		'projetil' => 'projeteis',
		'proton' => 'protons',
		'qualquer' => 'quaisquer',
		'raiz' => 'raizes',
		'refrao' => 'refraos',
		'reptil' => 'repteis',
		'saci' => 'sacis',
		'sacrista' => 'sacristas',
		'sacristao' => 'sacristaes',
		'semen' => 'semens',
		'senior' => 'seniores',
		'sessao' => 'sessoes',
		'sotao' => 'sotaos',
		'tabeliao' => 'tabeliaes',
		'tunel' => 'tuneis',
	);

	/**
	 * Words that should not be inflected
	 *
	 * @var array
	 */
	protected static $_uninflected = array(
		'atlas' => 'atlas',
		'dezesseis' => 'dezesseis',
		'dois' => 'dois',
		'duzentos' => 'duzentos',
		'fenix' => 'fenix',
		'lapis' => 'lapis',
		'mais' => 'mais',
		'menos' => 'menos',
		'novecentos' => 'novecentos',
		'oasis' => 'oasis',
		'oitocentos' => 'oitocentos',
		'onibus' => 'onibus',
		'onix' => 'onix',
		'ourives' => 'ourives',
		'pires' => 'pires',
		'quatrocentos' => 'quatrocentos',
		'quinhentos' => 'quinhentos',
		'seis' => 'seis',
		'seiscentos' => 'seiscentos',
		'setecentos' => 'setecentos',
		'status' => 'status',
		'tenis' => 'tenis',
		'torax' => 'torax',
		'tres' => 'tres',
		'trezentos' => 'trezentos',
		'virus' => 'virus',
		'xerox' => 'xerox',
	);

	/**
	 * Declare formatted words
	 *
	 * @var array
	 **/
	protected static $_formatted = array(
		'abdomen' => 'abdômen',
		'alcoois' => 'alcoóis',
		'alcool' => 'álcool',
		'armazem' => 'armazém',
		'armazens' => 'armazéns',
		'artesa' => 'artesã',
		'artesao' => 'artesã',
		'artesaos' => 'artesãs',
		'artesas' => 'artesãs',
		'arvore' => 'árvore',
		'arvores' => 'árvores',
		'bencao' => 'benção',
		'bencaos' => 'bençãos',
		'cadaver' => 'cadáver',
		'cadaveres' => 'cadáveres',
		'capelaes' => 'capelães',
		'capelao' => 'capelão',
		'capita' => 'capitã',
		'capitaes' => 'capitães',
		'capitao' => 'capitão',
		'capitas' => 'capitãs',
		'chao' => 'chão',
		'chaos' => 'chãos',
		'charlata' => 'charlatã',
		'charlataes' => 'charlatães',
		'charlatao' => 'charlatão',
		'cidada' => 'cidadã',
		'cidadao' => 'cidadão',
		'cidadaos' => 'cidadãos',
		'colon' => 'cólon',
		'colons' => 'cólons',
		'consul' => 'cônsul',
		'consules' => 'cônsules',
		'crista' => 'cristã',
		'cristao' => 'cristão',
		'cristaos' => 'cristãos',
		'cristas' => 'cristãs',
		'dificeis' => 'difíceis',
		'dificil' => 'difícil',
		'e' => 'é',
		'eletron' => 'elétron',
		'eletrons' => 'elétrons',
		'escriva' => 'escrivã',
		'escrivaes' => 'escrivães',
		'escrivao' => 'escrivão',
		'escrivas' => 'escrivãs',
		'farois' => 'faróis',
		'fenix' => 'fênix',
		'fossil' => 'fóssil',
		'germen' => 'gérmen',
		'gluten' => 'glúten',
		'grao' => 'grão',
		'graos' => 'grãos',
		'hifen' => 'hífen',
		'hifens' => 'hífens',
		'himen' => 'hímen',
		'himens' => 'hímens',
		'irma' => 'irmã',
		'irmas' => 'irmãs',
		'junior' => 'júnior',
		'lapis' => 'lápis',
		'limao' => 'limão',
		'limoes' => 'limões',
		'liquen' => 'líquen',
		'liquens' => 'líquens',
		'localizacao' => 'localização',
		'localizacoes' => 'localizações',
		'moveis' => 'móveis',
		'movel' => 'móvel',
		'neutron' => 'nêutron',
		'neutrons' => 'nêutrons',
		'oasis' => 'oásis',
		'onibus' => 'ônibus',
		'onix' => 'ônix',
		'orfao' => 'órfão',
		'orfaos' => 'órfãos',
		'papeis' => 'papéis',
		'pe' => 'pé',
		'pes' => 'pés',
		'polen' => 'pólen',
		'polens' => 'pólens',
		'portao' => 'portão',
		'portoes ' => 'portões',
		'projeteis' => 'projéteis',
		'projetil' => 'projétil',
		'proton' => 'próton',
		'protons' => 'prótons',
		'raizes' => 'raízes',
		'refrao' => 'refrão',
		'refraos' => 'refrãos',
		'repteis' => 'répteis',
		'reptil' => 'réptil',
		'sacrista' => 'sacristã',
		'sacristaes' => 'sacristães',
		'sacristao' => 'sacristão',
		'sacristas' => 'sacristãs',
		'sao' => 'são',
		'semen' => 'sêmen',
		'senior' => 'sênior',
		'sessao' => 'sessão',
		'sessoes' => 'sessões',
		'sotao' => 'sótão',
		'sotaos' => 'sótãos',
		'tabeliaes' => 'tabeliães',
		'tabeliao' => 'tabelião',
		'tenis' => 'tênis',
		'torax' => 'tórax',
		'tres' => 'três',
		'tuneis' => 'túneis',
		'tunel' => 'túnel',
		'virus' => 'vírus',
	);
	
	/**
	 * Return $word in plural form.
	 *
	 * @param word
	 * @return word
	 **/
	public static function pluralize($word)
	{
		$formatted = '';

		$transliterated = mb_strtolower(self::transliterate($word));

		if ( ! empty(self::$_uninflected[$transliterated]) ) {
			$formatted = $word;
		}

		if( $formatted == '' ){
			if ( ! empty(self::$_irregular[$word]) ) {
				$formatted = self::$_irregular[$word];
			}
		}

		if( $formatted == '' ){
			if ( ! empty(self::$_irregular[$transliterated]) ) {
				$formatted = self::$_irregular[$transliterated];
			}
		}

		if( $formatted == '' ){
			foreach (self::$_plural as $pattern => $result) {
				if (preg_match($pattern, $word)) {
					$formatted = preg_replace($pattern, $result, $word);
					break;
				}

				if (preg_match($pattern, $transliterated)) {
					$formatted = preg_replace($pattern, $result, $transliterated);
					break;
				}
			}
		}

		if( $formatted == '' ){
			$formatted = $word;
		}

		if( ! empty(self::$_formatted[$formatted]) ){
			$formatted = self::$_formatted[$formatted];
		}

		return $formatted;
	}

	/**
	 * Return $word in singular form.
	 *
	 * @param word
	 * @return word
	 **/
	public static function singularize($word)
	{
		$formatted = '';

		$transliterated = mb_strtolower(self::transliterate($word));

		if ( ! empty(self::$_uninflected[$transliterated]) ) {
			$formatted = $word;
		}

		if( $formatted == '' ){
			if ( in_array($word, self::$_irregular) ) {
				$formatted = array_search($word, self::$_irregular);
			}
		}

		if( $formatted == '' ){
			if ( in_array($transliterated, self::$_irregular) ) {
				$formatted = array_search($transliterated, self::$_irregular);
			}
		}

		if( $formatted == '' ){
			foreach (self::$_singular as $pattern => $result) {
				if (preg_match($pattern, $word)) {
					$formatted = preg_replace($pattern, $result, $word);
					break;
				}

				if (preg_match($pattern, $transliterated)) {
					$formatted = preg_replace($pattern, $result, $transliterated);
					break;
				}
			}
		}

		if( $formatted == '' ){
			$formatted = $word;
		}

		if( ! empty(self::$_formatted[$formatted]) ){
			$formatted = self::$_formatted[$formatted];
		}

		return $formatted;
	}
}