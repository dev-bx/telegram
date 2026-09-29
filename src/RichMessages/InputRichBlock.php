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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;

/**
 * This object represents a block in a rich formatted message to be sent. Currently, it can be any of the following types:
 *
 * - `InputRichBlockParagraph`
 * - `InputRichBlockSectionHeading`
 * - `InputRichBlockPreformatted`
 * - `InputRichBlockFooter`
 * - `InputRichBlockDivider`
 * - `InputRichBlockMathematicalExpression`
 * - `InputRichBlockAnchor`
 * - `InputRichBlockList`
 * - `InputRichBlockBlockQuotation`
 * - `InputRichBlockExpandableBlockQuotation`
 * - `InputRichBlockPullQuotation`
 * - `InputRichBlockCollage`
 * - `InputRichBlockSlideshow`
 * - `InputRichBlockTable`
 * - `InputRichBlockDetails`
 * - `InputRichBlockMap`
 * - `InputRichBlockButtons`
 * - `InputRichBlockAnimation`
 * - `InputRichBlockAudio`
 * - `InputRichBlockDocument`
 * - `InputRichBlockPhoto`
 * - `InputRichBlockVideo`
 * - `InputRichBlockVoiceNote`
 * - `InputRichBlockThinking`
 *
 * @link https://core.telegram.org/bots/api#inputrichblock
 *
 * Объединение: create() возвращает подходящий вариант — `InputRichBlockParagraph`, `InputRichBlockSectionHeading`, `InputRichBlockPreformatted`, `InputRichBlockFooter`, `InputRichBlockDivider`, `InputRichBlockMathematicalExpression`, `InputRichBlockAnchor`, `InputRichBlockList`, `InputRichBlockBlockQuotation`, `InputRichBlockExpandableBlockQuotation`, `InputRichBlockPullQuotation`, `InputRichBlockCollage`, `InputRichBlockSlideshow`, `InputRichBlockTable`, `InputRichBlockDetails`, `InputRichBlockMap`, `InputRichBlockButtons`, `InputRichBlockAnimation`, `InputRichBlockAudio`, `InputRichBlockDocument`, `InputRichBlockPhoto`, `InputRichBlockVideo`, `InputRichBlockVoiceNote`, `InputRichBlockThinking`.
 */
class InputRichBlock extends Base\BaseType
{
    /**
     * @return list<class-string<InputRichBlockParagraph|InputRichBlockSectionHeading|InputRichBlockPreformatted|InputRichBlockFooter|InputRichBlockDivider|InputRichBlockMathematicalExpression|InputRichBlockAnchor|InputRichBlockList|InputRichBlockBlockQuotation|InputRichBlockExpandableBlockQuotation|InputRichBlockPullQuotation|InputRichBlockCollage|InputRichBlockSlideshow|InputRichBlockTable|InputRichBlockDetails|InputRichBlockMap|InputRichBlockButtons|InputRichBlockAnimation|InputRichBlockAudio|InputRichBlockDocument|InputRichBlockPhoto|InputRichBlockVideo|InputRichBlockVoiceNote|InputRichBlockThinking>>
     */
    public static function getRelations(): array
    {
        return [
            InputRichBlockParagraph::class,
            InputRichBlockSectionHeading::class,
            InputRichBlockPreformatted::class,
            InputRichBlockFooter::class,
            InputRichBlockDivider::class,
            InputRichBlockMathematicalExpression::class,
            InputRichBlockAnchor::class,
            InputRichBlockList::class,
            InputRichBlockBlockQuotation::class,
            InputRichBlockExpandableBlockQuotation::class,
            InputRichBlockPullQuotation::class,
            InputRichBlockCollage::class,
            InputRichBlockSlideshow::class,
            InputRichBlockTable::class,
            InputRichBlockDetails::class,
            InputRichBlockMap::class,
            InputRichBlockButtons::class,
            InputRichBlockAnimation::class,
            InputRichBlockAudio::class,
            InputRichBlockDocument::class,
            InputRichBlockPhoto::class,
            InputRichBlockVideo::class,
            InputRichBlockVoiceNote::class,
            InputRichBlockThinking::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return InputRichBlockParagraph|InputRichBlockSectionHeading|InputRichBlockPreformatted|InputRichBlockFooter|InputRichBlockDivider|InputRichBlockMathematicalExpression|InputRichBlockAnchor|InputRichBlockList|InputRichBlockBlockQuotation|InputRichBlockExpandableBlockQuotation|InputRichBlockPullQuotation|InputRichBlockCollage|InputRichBlockSlideshow|InputRichBlockTable|InputRichBlockDetails|InputRichBlockMap|InputRichBlockButtons|InputRichBlockAnimation|InputRichBlockAudio|InputRichBlockDocument|InputRichBlockPhoto|InputRichBlockVideo|InputRichBlockVoiceNote|InputRichBlockThinking|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
