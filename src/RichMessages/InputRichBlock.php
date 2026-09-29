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
 */
class InputRichBlock extends Base\BaseType
{
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
	public static function getFields(): array
	{
		return [

		];
	}
}