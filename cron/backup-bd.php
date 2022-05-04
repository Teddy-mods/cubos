<?php

include __DIR__.'/../includes/includes.php';
/*$tlg = new Telegram ('5015433813:AAEyRCyD0gGWvGZ6v6Rm-taHJg4Zw7EtlDc');*/
$tlg = new Telegram ('5015433813:AAEyRCyD0gGWvGZ6v6Rm-taHJg4Zw7EtlDc');
print_r ($tlg->sendDocument ([
	'chat_id' => -1001437886425,
	'caption' => "Backup\n@MandrackBOT\n".date ('d/m/Y H:i:s'),
	'document' => curl_file_create (__DIR__.'/../recebersmsbot.db')
]));