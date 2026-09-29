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
 */
class RichBlock extends Base\BaseType
{
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
	public static function getFields(): array
	{
		return [

		];
	}
}