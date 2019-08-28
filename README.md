# 🌤️ Previsão de Tempo

Dados da previsão de tempo e IUV fornecidos pelo CPTEC/INPE

## Exemplo

```bash
git clone git@github.com:magnobiet/weather-forecast.git

cd weather-forecast/
composer install

php -S localhost:8080
x-www-browser http://localhost:8080/demo/
```

### Retorno esperado do exemplo

```json
{
  "source": "CPTEC\/INPE",
  "updatedAt": "2019-08-28",
  "location": {
    "city": "Porto Alegre",
    "state": "RS"
  },
  "forecast": [{
    "date": "2019-08-28",
    "iuv": 5,
    "temperature": {
      "high": 28,
      "low": 13,
      "average": 20.5
    },
    "weather": {
      "abbreviation": "pn",
      "description": "Parcialmente Nublado",
      "text": "Sol entre poucas nuvens.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/pn.png"
    }
  }, {
    "date": "2019-08-29",
    "iuv": 5,
    "temperature": {
      "high": 31,
      "low": 17,
      "average": 24
    },
    "weather": {
      "abbreviation": "ppt",
      "description": "Possibilidade de Pancadas de Chuva \u00e0 Tarde",
      "text": "Nebulosidade vari\u00e1vel com pequena chance (inferior a 30%) de chuva pela tarde.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/ppt.png"
    }
  }, {
    "date": "2019-08-30",
    "iuv": 6,
    "temperature": {
      "high": 26,
      "low": 15,
      "average": 20.5
    },
    "weather": {
      "abbreviation": "pt",
      "description": "Pancadas de Chuva a Tarde",
      "text": "Predom\u00ednio de sol pela manh\u00e3. \u00c0 tarde chove com trovoada.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/pt.png"
    }
  }, {
    "date": "2019-08-31",
    "iuv": 5,
    "temperature": {
      "high": 22,
      "low": 13,
      "average": 17.5
    },
    "weather": {
      "abbreviation": "pm",
      "description": "Pancadas de Chuva pela Manh\u00e3",
      "text": "Chuva com trovoada pela manh\u00e3. \u00c0 tarde o tempo abre e n\u00e3o chove.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/pm.png"
    }
  }, {
    "date": "2019-09-01",
    "iuv": 5,
    "temperature": {
      "high": 18,
      "low": 10,
      "average": 14
    },
    "weather": {
      "abbreviation": "vn",
      "description": "Varia\u00e7\u00e3o de Nebulosidade",
      "text": "Per\u00edodos curtos de sol intercalados com per\u00edodos de nuvens.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/vn.png"
    }
  }, {
    "date": "2019-09-02",
    "iuv": 5,
    "temperature": {
      "high": 17,
      "low": 8,
      "average": 12.5
    },
    "weather": {
      "abbreviation": "ps",
      "description": "Predom\u00ednio de Sol",
      "text": "Sol na maior parte do per\u00edodo.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/ps.png"
    }
  }, {
    "date": "2019-09-03",
    "iuv": 5,
    "temperature": {
      "high": 18,
      "low": 8,
      "average": 13
    },
    "weather": {
      "abbreviation": "vn",
      "description": "Varia\u00e7\u00e3o de Nebulosidade",
      "text": "Per\u00edodos curtos de sol intercalados com per\u00edodos de nuvens.",
      "icon": "http:\/\/img0.cptec.inpe.br\/~rgrafico\/icones_principais\/tempo\/icones\/vn.png"
    }
  }]
}
```

## Documentação

A documentação do *webservice* em XML do CPTEC/INPE está disponível em http://servicos.cptec.inpe.br/XML/.

## Ícones e Descrições

| Ícone                                                                                                                                                        | Texto                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| ![Encoberto com Chuvas Isoladas](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ec.png)                  | Céu totalmente encoberto com chuvas em algumas regiões, sem aberturas de sol.                                                                       |
| ![Chuvas Isoladas](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ci.png)                                | Muitas nuvens com curtos períodos de sol e chuvas em algumas áreas.                                                                                 |
| ![Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/c.png)                                           | Muitas nuvens e chuvas periódicas.                                                                                                                  |
| ![Instável](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/in.png)                                       | Nebulosidade variável com chuva a qualquer hora do dia.                                                                                             |
| ![Possibilidade de Pancadas de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pp.png)             | Nebulosidade variável com pequena chance (inferior a 30%) de pancada de chuva.                                                                      |
| ![Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cm.png)                               | Chuva pela manhã melhorando ao longo do dia.                                                                                                        |
| ![Chuva a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cn.png)                                  | Nebulosidade em aumento e chuvas durante a noite.                                                                                                   |
| ![Pancadas de Chuva a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pt.png)                      | Predomínio de sol pela manhã. À tarde chove com trovoada.                                                                                           |
| ![Pancadas de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pm.png)                   | Chuva com trovoada pela manhã. À tarde o tempo abre e não chove.                                                                                    |
| ![Nublado e Pancadas de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/np.png)                    | Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas.                                                                         |
| ![Pancadas de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pc.png)                              | Chuva de curta duração e pode ser acompanhada de trovoadas a qualquer hora do dia.                                                                  |
| ![Parcialmente Nublado](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pn.png)                           | Sol entre poucas nuvens.                                                                                                                            |
| ![Chuvisco](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cv.png)                                       | Muitas nuvens e chuva fraca composta de pequenas gotas d´ água.                                                                                     |
| ![Chuvoso](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ch.png)                                        | Nublado com chuvas contínuas ao longo do dia.                                                                                                       |
| ![Tempestade](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/t.png)                                      | Chuva forte capaz de gerar granizo e ou rajada de vento, com força destrutiva (Veloc. aprox. de 90 Km/h) e ou tornados.                             |
| ![Predomínio de Sol](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ps.png)                              | Sol na maior parte do período.                                                                                                                      |
| ![Encoberto](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/e.png)                                       | Céu totalmente encoberto, sem aberturas de sol.                                                                                                     |
| ![Nublado](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/n.png)                                         | Muitas nuvens com curtos períodos de sol.                                                                                                           |
| ![Céu Claro](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/cl.png)                                      | Sol durante todo o período. Ausência de nuvens.                                                                                                     |
| ![Nevoeiro](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/nv.png)                                       | Gotículas de água em suspensão que reduzem a visibilidade.                                                                                          |
| ![Geada](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/g.png)                                           | Cobertura de cristais de gelo que se formam por sublimação direta sobre superfícies expostas cuja temperatura está abaixo do ponto de congelamento. |
| ![Neve](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ne.png)                                           | Vapor de água congelado na nuvem, que cai em forma de cristais e flocos.                                                                            |
| ![Não Definido](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/nd.png)                                   | Não Definido.                                                                                                                                       |
| ![Pancadas de Chuva a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pnt.png)                     | Chuva de curta duração podendo ser acompanhada de trovoadas à noite.                                                                                |
| ![Possibilidade de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/psc.png)                        | Nebulosidade variável com pequena chance (inferior a 30%) de chuva.                                                                                 |
| ![Possibilidade de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pcm.png)             | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela manhã.                                                                      |
| ![Possibilidade de Chuva a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pct.png)                | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela tarde.                                                                      |
| ![Possibilidade de Chuva a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/pcn.png)                | Nebulosidade variável com pequena chance (inferior a 30%) de chuva à noite.                                                                         |
| ![Nublado com Pancadas a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npt.png)                  | Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas à tarde.                                                                 |
| ![Nublado com Pancadas a Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npn.png)                  | Muitas nuvens com curtos períodos de sol e pancadas de chuva com trovoadas à noite.                                                                 |
| ![Nublado com Possibilidade de Chuva à Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ncn.png)    | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva à noite.                                                      |
| ![Nublado com Possibilidade de Chuva à Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/nct.png)    | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva à tarde.                                                      |
| ![Nublado com Possibilidade de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ncm.png) | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva pela manhã.                                                   |
| ![Nublado com Pancadas pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npm.png)               | Muitas nuvens com curtos períodos de sol e chuva com trovoadas pela manhã.                                                                          |
| ![Nublado com Possibilidade de Chuva](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/npp.png)            | Muitas nuvens com curtos períodos de sol com pequena chance (inferior a 30%) de chuva a qualquer hora do dia.                                       |
| ![Variação de Nebulosidade](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/vn.png)                       | Períodos curtos de sol intercalados com períodos de nuvens.                                                                                         |
| ![Chuva a Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ct.png)                                  | Nebulosidade em aumento e chuvas a partir da tarde.                                                                                                 |
| ![Possibilidade de Pancadas de Chuva à Noite](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ppn.png)    | Nebulosidade variável com pequena chance (inferior a 30%) de chuva à noite.                                                                         |
| ![Possibilidade de Pancadas de Chuva à Tarde](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ppt.png)    | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela tarde.                                                                      |
| ![Possibilidade de Pancadas de Chuva pela Manhã](https://raw.githubusercontent.com/magnobiet/weather-forecast/master/assets/images/weather-forecast/ppm.png) | Nebulosidade variável com pequena chance (inferior a 30%) de chuva pela manhã.                                                                      |

## Licença

Este projeto está licenciado sob a licença [MIT License](https://magno.mit-license.org/2015). Copyright © Magno Biét
