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
cekurte_google_api_use_objects:         true
```

Em **cekurte_google_api_use_objects** você poderá colocar um valor booleano (*true* ou *false*), sendo que, se for informado true a API converterá o retorno das requisições realizadas em objetos, do contrário, o retorno será convertido em um array associativo.

## Notas:

Estas informações podem ser encontradas em [Google Developers Console](https://code.google.com/apis/console/).

[Voltar para a Instalação](instalacao.md)