# Base Wordpress Presets

A função desse plugin é prover serviços e configurações gerais que devem ser aplicados a todos os sites da fazenda multisite Base Wordpress.

## Funcionalidades

### Define email de origem do SMTP

Devido a um [bug](https://github.com/Automattic/vip-quickstart/issues/512) do wordpress, o SMTP Mailer não consegue enviar emails pois lhe falta o campo 'from'. Por meio de uma configuração global, define o email de origem para todos os sub-sites e permite o envio de emails.