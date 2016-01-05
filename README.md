# Previsão de Tempo - CPTEC/INPE

> Dados da Previsão de Tempo e IUV

## Exemplo

```bash
git clone git@github.com:magnobiet/weather-forecast.git
cd weather-forecast
php -S localhost:8080
x-www-browser http://localhost:8080/sample.php
```

## Retorno do exemplo

```json
{
	"source": "CPTEC\/INPE",
	"city": "Porto Alegre",
	"state": "RS",
	"updated_at": "2016-01-05",
	"forecast": [{
		"day": "2016-01-05",
		"iuv": 14,
		"temperature": {
			"high": 32,
			"low": 22,
			"average": 27
		},
		"weather": {
			"abbreviation": "np",
			"description": "Nublado e Pancadas de Chuva",
			"text": "Muitas nuvens com curtos per\u00edodos de sol e pancadas de chuva com trovoadas.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/np.png"
		}
	}, {
		"day": "2016-01-06",
		"iuv": 14,
		"temperature": {
			"high": 31,
			"low": 22,
			"average": 26.5
		},
		"weather": {
			"abbreviation": "np",
			"description": "Nublado e Pancadas de Chuva",
			"text": "Muitas nuvens com curtos per\u00edodos de sol e pancadas de chuva com trovoadas.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/np.png"
		}
	}, {
		"day": "2016-01-07",
		"iuv": 13,
		"temperature": {
			"high": 31,
			"low": 22,
			"average": 26.5
		},
		"weather": {
			"abbreviation": "ci",
			"description": "Chuvas Isoladas",
			"text": "Muitas nuvens com curtos per\u00edodos de sol e chuvas em algumas \u00e1reas.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/ci.png"
		}
	}, {
		"day": "2016-01-08",
		"iuv": 13,
		"temperature": {
			"high": 31,
			"low": 22,
			"average": 26.5
		},
		"weather": {
			"abbreviation": "pn",
			"description": "Parcialmente Nublado",
			"text": "Sol entre poucas nuvens.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/pn.png"
		}
	}, {
		"day": "2016-01-09",
		"iuv": 14,
		"temperature": {
			"high": 31,
			"low": 23,
			"average": 27
		},
		"weather": {
			"abbreviation": "psc",
			"description": "Possibilidade de Chuva",
			"text": "Nebulosidade vari\u00e1vel com pequena chance (inferior a 30%) de chuva.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/psc.png"
		}
	}, {
		"day": "2016-01-10",
		"iuv": 14,
		"temperature": {
			"high": 30,
			"low": 22,
			"average": 26
		},
		"weather": {
			"abbreviation": "npp",
			"description": "Nublado com Possibilidade de Chuva",
			"text": "Muitas nuvens com curtos per\u00edodos de sol com pequena chance (inferior a 30%) de chuva a qualquer hora do dia.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/npp.png"
		}
	}, {
		"day": "2016-01-11",
		"iuv": 14,
		"temperature": {
			"high": 31,
			"low": 23,
			"average": 27
		},
		"weather": {
			"abbreviation": "pc",
			"description": "Pancadas de Chuva",
			"text": "Chuva de curta dura\u00e7\u00e3o e pode ser acompanhada de trovoadas a qualquer hora do dia.",
			"icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/pc.png"
		}
	}]
}
```

## Documentação
http://servicos.cptec.inpe.br/XML/

## Ícones e Descrições

| Ícone                                                                                                                                                        | Texto                                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| ![Encoberto com Chuvas Isoladas](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ec.png)                  | Céu totalmente encoberto com chuvas em algumas regiões, sem aberturas de sol.                                                                        |
| ![Chuvas Isoladas](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ci.png)                                | Muitas nuvens com curtos períodos de sol e chuvas em algumas áreas.                                                                                  |
| ![Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/c.png)                                           | Muitas nuvens e chuvas periódicas.                                                                                                                   |
| ![Instável](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/in.png)                                       | Nebulosidade variável com chuva a qualquer hora do dia.                                                                                              |
| ![Possibilidade de Pancadas de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pp.png)             | Nebulosidade variável com pequena chance (inferior a 30%) de pancada de chuva.                                                                       |
| ![Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cm.png)                               | Chuva pela manhã melhorando ao longo do dia.                                                                                                         |
| ![Chuva a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cn.png)                                  | Nebulosidade em aumento e chuvas durante a noite.                                                                                                    |
| ![Pancadas de Chuva a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pt.png)                      | Predomínio de sol pela manhã. À tarde chove com trovoada.                                                                                            |
| ![Pancadas de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pm.png)                   | Chuva com trovoada pela manhã. À tarde o tempo abre e não chove.                                                                                     |
| ![Nublado e Pancadas de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/np.png)                    | Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas.                                                                          |
| ![Pancadas de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pc.png)                              | Chuva de curta duração e pode ser acompanhada de trovoadas a qualquer hora do dia.                                                                   |
| ![Parcialmente Nublado](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pn.png)                           | Sol entre poucas nuvens.                                                                                                                             |
| ![Chuvisco](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cv.png)                                       | Muitas nuvens e chuva fraca composta de pequenas gotas d´ água.                                                                                      |
| ![Chuvoso](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ch.png)                                        | Nublado com chuvas contínuas ao longo do dia.                                                                                                        |
| ![Tempestade](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/t.png)                                      | Chuva forte capaz de gerar granizo e ou rajada de vento, com força destrutiva (Veloc. aprox. de 90 Km/h) e ou tornados.                              |
| ![Predomínio de Sol](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ps.png)                              | Sol na maior parte do período.                                                                                                                       |
| ![Encoberto](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/e.png)                                       | Céu totalmente encoberto, sem aberturas de sol.                                                                                                      |
| ![Nublado](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/n.png)                                         | Muitas nuvens com curtos períodos de sol.                                                                                                            |
| ![Céu Claro](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cl.png)                                      | Sol durante todo o período. Ausência de nuvens.                                                                                                      |
| ![Nevoeiro](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/nv.png)                                       | Gotículas de água em suspensão que reduzem a visibilidade.                                                                                           |
| ![Geada](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/g.png)                                           | Cobertura de cristais de gelo que se formam por sublimação direta sobre superfícies expostas cuja temperatura está abaixo do ponto de congelamento.  |
| ![Neve](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ne.png)                                           | Vapor de água congelado na nuvem, que cai em forma de cristais e flocos.                                                                             |
| ![Não Definido](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/nd.png)                                   | Não Definido.                                                                                                                                        |
| ![Pancadas de Chuva a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pnt.png)                     | Chuva de curta duração podendo ser acompanhada de trovoadas à noite.                                                                                 |
| ![Possibilidade de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/psc.png)                        | Nebulosidade variável com pequena chance (inferior a 30%) de chuva.                                                                                  |
| ![Possibilidade de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pcm.png)             | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela manhã.                                                                       |
| ![Possibilidade de Chuva a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pct.png)                | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela tarde.                                                                       |
| ![Possibilidade de Chuva a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pcn.png)                | Nebulosidade variável com pequena chance (inferior a 30%) de chuva à noite.                                                                          |
| ![Nublado com Pancadas a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npt.png)                  | Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas à tarde.                                                                  |
| ![Nublado com Pancadas a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npn.png)                  | Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas à noite.                                                                  |
| ![Nublado com Possibilidade de Chuva à Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ncn.png)    | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva à noite.                                                       |
| ![Nublado com Possibilidade de Chuva à Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/nct.png)    | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva à tarde.                                                       |
| ![Nublado com Possibilidade de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ncm.png) | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva pela manhã.                                                    |
| ![Nublado com Pancadas pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npm.png)               | Muitas nuvens com curtos períodos de sol e chuva com trovoadas pela manhã.                                                                           |
| ![Nublado com Possibilidade de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npp.png)            | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva a qualquer hora do dia.                                        |
| ![Variação de Nebulosidade](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/vn.png)                       | Períodos curtos de sol intercalados com períodos de nuvens.                                                                                          |
| ![Chuva a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ct.png)                                  | Nebulosidade em aumento e chuvas a partir da tarde.                                                                                                  |
| ![Possibilidade de Pancadas de Chuva à Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ppn.png)    | Nebulosidade variável com pequena chance (inferior a 30%) de chuva à noite.                                                                          |
| ![Possibilidade de Pancadas de Chuva à Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ppt.png)    | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela tarde.                                                                       |
| ![Possibilidade de Pancadas de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ppm.png) | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela manhã.                                                                       |

## Licença
[MIT License](http://magno.mit-license.org/2015) © Magno Biét
