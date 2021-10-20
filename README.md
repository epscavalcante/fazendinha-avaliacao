![image](https://www.fazendinha.me/_next/image?url=%2Fassets%2Fimages%2Flogo.png&w=96&q=75)

# Fazendinha em Casa - Avaliação (By Coodesh)

## Sobre a aplicação
Uma REST API que utilizará os dados do projeto [Space Flight News](https://api.spaceflightnewsapi.net/v3/documentation), uma API pública com informações relacionadas a voos espaciais, tendo como objetivo criar a API permitindo assim a conexão com outras aplicações.

### Como rodar a aplicação
Tenha o docker e o preferencialmente o docker-compose instalado e configurado.

#### 1º passo: executar o comando:

```sh
docker-compose up --build
```

Pode ser passado a flag `-d` para rodar a aplicação e deixar o terminal livre
```sh
docker-compose up --build -d
```

#### O 2º passo: executar o comando abaixo para deixar o scheduler em funcionamento
```sh
docker-compose exec app php artisan schedule:work
```

### Testes
Para executar os teste execute o comando a seguir:
```sh
docker-compose exec app php artisan test
```