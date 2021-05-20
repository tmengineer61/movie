<?php

namespace App\Logging;

use App\Logging\CustomizeFormatter;

/**
 * ログフォーマット反映クラス
 * @author takanori_miyadera
 */
class LogTap
{

    /**
     * 渡されたロガーインスタンスのカスタマイズ
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        $logFormatter = new CustomizeFormatter();

        foreach($logger->getHandlers() as $handler) {
            $handler->setFormatter($logFormatter);
        }
    }
}

?>
