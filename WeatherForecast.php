<?php

/*!
 * Previsão de Tempo - CPTEC/INPE
 *
 * @documentation: http://servicos.cptec.inpe.br/XML/
 * @icons:         http://tempo.cptec.inpe.br/~rtempo/legenda.shtml
 */

class WeatherForecast {
	private $_source = 'CPTEC/INPE';
	private $_api    = 'http://servicos.cptec.inpe.br/XML/';
	private $_city   = null;
	private $_labels = array(
		'ec'  => array(
			'description' => 'Encoberto com Chuvas Isoladas',
			'text'        => 'Céu totalmente encoberto com chuvas em algumas regiões, sem aberturas de sol.',
		),
		'ci'  => array(
			'description' => 'Chuvas Isoladas',
			'text'        => 'Muitas nuvens com curtos períodos de sol e chuvas em algumas áreas.',
		),
		'c'   => array(
			'description' => 'Chuva',
			'text'        => 'Muitas nuvens e chuvas periódicas.',
		),
		'in'  => array(
			'description' => 'Instável',
			'text'        => 'Nebulosidade variável com chuva a qualquer hora do dia.',
		),
		'pp'  => array(
			'description' => 'Possibilidade de Pancadas de Chuva',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de pancada de chuva.',
		),
		'cm'  => array(
			'description' => 'Chuva pela Manhã',
			'text'        => 'Chuva pela manhã melhorando ao longo do dia.',
		),
		'cn'  => array(
			'description' => 'Chuva a Noite',
			'text'        => 'Nebulosidade em aumento e chuvas durante a noite.',
		),
		'pt'  => array(
			'description' => 'Pancadas de Chuva a Tarde',
			'text'        => 'Predomínio de sol pela manhã. À tarde chove com trovoada.',
		),
		'pm'  => array(
			'description' => 'Pancadas de Chuva pela Manhã',
			'text'        => 'Chuva com trovoada pela manhã. À tarde o tempo abre e não chove.',
		),
		'np'  => array(
			'description' => 'Nublado e Pancadas de Chuva',
			'text'        => 'Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas.',
		),
		'pc'  => array(
			'description' => 'Pancadas de Chuva',
			'text'        => 'Chuva de curta duração e pode ser acompanhada de trovoadas a qualquer hora do dia.',
		),
		'pn'  => array(
			'description' => 'Parcialmente Nublado',
			'text'        => 'Sol entre poucas nuvens.',
		),
		'cv'  => array(
			'description' => 'Chuvisco',
			'text'        => 'Muitas nuvens e chuva fraca composta de pequenas gotas d´ água.',
		),
		'ch'  => array(
			'description' => 'Chuvoso',
			'text'        => 'Nublado com chuvas contínuas ao longo do dia.',
		),
		't'   => array(
			'description' => 'Tempestade',
			'text'        => 'Chuva forte capaz de gerar granizo e ou rajada de vento, com força destrutiva (Veloc. aprox. de 90 Km/h) e ou tornados.',
		),
		'ps'  => array(
			'description' => 'Predomínio de Sol',
			'text'        => 'Sol na maior parte do período.',
		),
		'e'   => array(
			'description' => 'Encoberto',
			'text'        => 'Céu totalmente encoberto, sem aberturas de sol.',
		),
		'n'   => array(
			'description' => 'Nublado',
			'text'        => 'Muitas nuvens com curtos períodos de sol.',
		),
		'cl'  => array(
			'description' => 'Céu Claro',
			'text'        => 'Sol durante todo o período. Ausência de nuvens.',
		),
		'nv'  => array(
			'description' => 'Nevoeiro',
			'text'        => 'Gotículas de água em suspensão que reduzem a visibilidade.',
		),
		'g'   => array(
			'description' => 'Geada',
			'text'        => 'Cobertura de cristais de gelo que se formam por sublimação direta sobre superfícies expostas cuja temperatura está abaixo do ponto de congelamento.',
		),
		'ne'  => array(
			'description' => 'Neve',
			'text'        => 'Vapor de água congelado na nuvem, que cai em forma de cristais e flocos.',
		),
		'nd'  => array(
			'description' => 'Não Definido',
			'text'        => 'Não Definido.',
		),
		'pnt' => array(
			'description' => 'Pancadas de Chuva a Noite',
			'text'        => 'Chuva de curta duração podendo ser acompanhada de trovoadas à noite.',
		),
		'psc' => array(
			'description' => 'Possibilidade de Chuva',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva.',
		),
		'pcm' => array(
			'description' => 'Possibilidade de Chuva pela Manhã',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela manhã.',
		),
		'pct' => array(
			'description' => 'Possibilidade de Chuva a Tarde',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela tarde.',
		),
		'pcn' => array(
			'description' => 'Possibilidade de Chuva a Noite',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva à noite.',
		),
		'npt' => array(
			'description' => 'Nublado com Pancadas a Tarde',
			'text'        => 'Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas à tarde.',
		),
		'npn' => array(
			'description' => 'Nublado com Pancadas a Noite',
			'text'        => 'Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas à noite.',
		),
		'ncn' => array(
			'description' => 'Nublado com Possibilidade de Chuva à Noite',
			'text'        => 'Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva à noite.',
		),
		'nct' => array(
			'description' => 'Nublado com Possibilidade de Chuva à Tarde',
			'text'        => 'Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva à tarde.',
		),
		'ncm' => array(
			'description' => 'Nublado com Possibilidade de Chuva pela Manhã',
			'text'        => 'Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva pela manhã.',
		),
		'npm' => array(
			'description' => 'Nublado com Pancadas pela Manhã',
			'text'        => 'Muitas nuvens com curtos períodos de sol e chuva com trovoadas pela manhã.',
		),
		'npp' => array(
			'description' => 'Nublado com Possibilidade de Chuva',
			'text'        => 'Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva a qualquer hora do dia.',
		),
		'vn'  => array(
			'description' => 'Variação de Nebulosidade',
			'text'        => 'Períodos curtos de sol intercalados com períodos de nuvens.',
		),
		'ct'  => array(
			'description' => 'Chuva a Tarde',
			'text'        => 'Nebulosidade em aumento e chuvas a partir da tarde.',
		),
		'ppn' => array(
			'description' => 'Possibilidade de Pancadas de Chuva à Noite',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva à noite.',
		),
		'ppt' => array(
			'description' => 'Possibilidade de Pancadas de Chuva à Tarde',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela tarde.',
		),
		'ppm' => array(
			'description' => 'Possibilidade de Pancadas de Chuva pela Manhã',
			'text'        => 'Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela manhã.',
		),
	);

	public function __construct($city) {
		$this->byID = json_decode(file_get_contents('byID.json'),true);
		$this->byName = json_decode(file_get_contents('byName.json'),true);
		if (isset($this->byName[$city])){
			$city = $this->byName[$city];
		}elseif(!isset($this->byID[$city])){
			$city = $this->byName['São Paulo/SP'];
		}
		$this->_city = $city;
	}

	private function _getApiData() {
		return simplexml_load_file($this->_api . 'cidade/7dias/' . $this->_city . '/previsao.xml');
	}

	public function get() {

		$api = $this->_getApiData();

		$data = new stdClass();

		$data->source     = $this->_source;
		$data->city       = (string) $api->nome;
		$data->state      = (string) $api->uf;
		$data->updated_at = (string) $api->atualizacao;
		$data->forecast   = array();

		for ($i = 0; $i < count($api->previsao); $i++) {

			$forecast = $api->previsao[$i];

			$data->forecast[$i]->day = (string) $forecast->dia;
			$data->forecast[$i]->iuv = (float) $forecast->iuv;

			$data->forecast[$i]->temperature          = new stdClass();
			$data->forecast[$i]->temperature->high    = (float) $forecast->maxima;
			$data->forecast[$i]->temperature->low     = (float) $forecast->minima;
			$data->forecast[$i]->temperature->average = ($data->forecast[$i]->temperature->low + $data->forecast[$i]->temperature->high) / 2;

			$data->forecast[$i]->weather               = new stdClass();
			$data->forecast[$i]->weather->abbreviation = (string) $forecast->tempo;
			$data->forecast[$i]->weather->description  = $this->_labels[(string) $forecast[$i]->tempo]['description'];
			$data->forecast[$i]->weather->text         = $this->_labels[(string) $forecast[$i]->tempo]['text'];
			$data->forecast[$i]->weather->icon         = 'http://img0.cptec.inpe.br/~rgrafico/icones_principais/tempo/icones/' . (string) $forecast->tempo . '.png';

		}

		return $data;

	}

}
