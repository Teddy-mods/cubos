<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram (5015433813:AAEyRCyD0gGWvGZ6v6Rm-taHJg4Zw7EtlDc);

$tlg->sendMessage ([
'chat_id' => CHAT_ID_NOTIFICACAO,
'text' => "<b>🤓 RECEBA SMS COM NÚMEROS NOVOS PARA CRIAR CONTAS</b>

- Telegram
- Whatsapp
- 99app
- Banqi
- Uber
- E muitos outros...

💬 Receba os códigos no nosso bot
@ReceberSMSBot

🌐 Canal de Referências
@ReceberSMS
📍 Nosso grupo
@ChatReceberSMS

*Preço e serviço incomparável com os existentes.
*Mais de 4 mil números disponíveis",
'parse_mode' => 'html'
]);