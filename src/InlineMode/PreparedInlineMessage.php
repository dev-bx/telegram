<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\InlineMode;

// Обратная совместимость: тип перенесён документацией Bot API, используйте DevBX\Telegram\Types\PreparedInlineMessage.
class_alias(\DevBX\Telegram\Types\PreparedInlineMessage::class, __NAMESPACE__ . '\\PreparedInlineMessage');
