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
 * This object represents a block in a rich formatted message. Currently, it can be any of the following types:
 *
 * - `RichBlockParagraph`
 * - `RichBlockSectionHeading`
 * - `RichBlockPreformatted`
 * - `RichBlockFooter`
 * - `RichBlockDivider`
 * - `RichBlockMathematicalExpression`
 * - `RichBlockAnchor`
 * - `RichBlockList`
 * - `RichBlockBlockQuotation`
 * - `RichBlockExpandableBlockQuotation`
 * - `RichBlockPullQuotation`
 * - `RichBlockCollage`
 * - `RichBlockSlideshow`
 * - `RichBlockTable`
 * - `RichBlockDetails`
 * - `RichBlockMap`
 * - `RichBlockButtons`
 * - `RichBlockAnimation`
 * - `RichBlockAudio`
 * - `RichBlockDocument`
 * - `RichBlockPhoto`
 * - `RichBlockVideo`
 * - `RichBlockVoiceNote`
 * - `RichBlockThinking`
 *
 * @link https://core.telegram.org/bots/api#richblock
 *
 * Объединение: create() возвращает подходящий вариант — `RichBlockParagraph`, `RichBlockSectionHeading`, `RichBlockPreformatted`, `RichBlockFooter`, `RichBlockDivider`, `RichBlockMathematicalExpression`, `RichBlockAnchor`, `RichBlockList`, `RichBlockBlockQuotation`, `RichBlockExpandableBlockQuotation`, `RichBlockPullQuotation`, `RichBlockCollage`, `RichBlockSlideshow`, `RichBlockTable`, `RichBlockDetails`, `RichBlockMap`, `RichBlockButtons`, `RichBlockAnimation`, `RichBlockAudio`, `RichBlockDocument`, `RichBlockPhoto`, `RichBlockVideo`, `RichBlockVoiceNote`, `RichBlockThinking`.
 */
class RichBlock extends Base\BaseType
{
    /**
     * @return list<class-string<RichBlockParagraph|RichBlockSectionHeading|RichBlockPreformatted|RichBlockFooter|RichBlockDivider|RichBlockMathematicalExpression|RichBlockAnchor|RichBlockList|RichBlockBlockQuotation|RichBlockExpandableBlockQuotation|RichBlockPullQuotation|RichBlockCollage|RichBlockSlideshow|RichBlockTable|RichBlockDetails|RichBlockMap|RichBlockButtons|RichBlockAnimation|RichBlockAudio|RichBlockDocument|RichBlockPhoto|RichBlockVideo|RichBlockVoiceNote|RichBlockThinking>>
     */
    public static function getRelations(): array
    {
        return [
            RichBlockParagraph::class,
            RichBlockSectionHeading::class,
            RichBlockPreformatted::class,
            RichBlockFooter::class,
            RichBlockDivider::class,
            RichBlockMathematicalExpression::class,
            RichBlockAnchor::class,
            RichBlockList::class,
            RichBlockBlockQuotation::class,
            RichBlockExpandableBlockQuotation::class,
            RichBlockPullQuotation::class,
            RichBlockCollage::class,
            RichBlockSlideshow::class,
            RichBlockTable::class,
            RichBlockDetails::class,
            RichBlockMap::class,
            RichBlockButtons::class,
            RichBlockAnimation::class,
            RichBlockAudio::class,
            RichBlockDocument::class,
            RichBlockPhoto::class,
            RichBlockVideo::class,
            RichBlockVoiceNote::class,
            RichBlockThinking::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return RichBlockParagraph|RichBlockSectionHeading|RichBlockPreformatted|RichBlockFooter|RichBlockDivider|RichBlockMathematicalExpression|RichBlockAnchor|RichBlockList|RichBlockBlockQuotation|RichBlockExpandableBlockQuotation|RichBlockPullQuotation|RichBlockCollage|RichBlockSlideshow|RichBlockTable|RichBlockDetails|RichBlockMap|RichBlockButtons|RichBlockAnimation|RichBlockAudio|RichBlockDocument|RichBlockPhoto|RichBlockVideo|RichBlockVoiceNote|RichBlockThinking|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
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
