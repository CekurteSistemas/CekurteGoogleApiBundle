# Configuração

No seu arquivo de configuração para o ambiente de desenvolvimento `app/config/parameters.yml` adicione as seguintes configurações:

```yml
# app/config/parameters.yml

# ...
# Cekurte Google API Bundle
cekurte_google_api_application_name:    [APPLICATION_NAME]
cekurte_google_api_client_id:           [CLIENT_ID]
cekurte_google_api_client_secret:       [CLIENT_SECRET]
cekurte_google_api_redirect_uri:        [REDIRECT_URI]
cekurte_google_api_developer_key:       [DEVELOPER_KEY]
cekurte_google_api_use_state:           auth
cekurte_google_api_use_access_type:     offline
cekurte_google_api_approval_prompt:     force
cekurte_google_api_use_objects:         true
```

Em **cekurte_google_api_use_objects** você poderá colocar um valor booleano (*true* ou *false*), sendo que, se for informado true a API converterá o retorno das requisições realizadas em objetos, do contrário, o retorno será convertido em um array associativo.

## Notas:

Estas informações podem ser encontradas em [Google Developers Console](https://code.google.com/apis/console/).

# Integração com HWIOAuthBundle

Você poderá utilizar este serviço em conjunto com o [HWIOAuthBundle](https://github.com/hwi/HWIOAuthBundle), para isto você deverá atualizar o token de acesso conforme o exemplo abaixo:

```php
// Controller

// ...
public function callAction()
{
    // ...

    $token = $this->get('security.context')->getToken();

    // $service = $this->get('cekurte_google_api.[SERVICE_NAME]');
    $service = $this->get('cekurte_google_api.gmail');

    if ($service->getClient()->isAccessTokenExpired()) {
        $service->getClient()->refreshToken(
            $token->getRefreshToken()
        );
    }

    // ...
}
// ...
```
## Notas:

O parametro **[SERVICE_NAME]** poderá ser substituído por qualquer serviço fornecido pela Google que tenha sido implementado na API oficial [Google APIs Client Library for PHP](https://github.com/google/google-api-php-client). Uma lista completa de serviços pode ser encontrada no arquivo [services.xml](https://github.com/CekurteSistemas/CekurteGoogleApiBundle/blob/master/Resources/config/services.xml).

[Voltar para a Instalação](instalacao.md)