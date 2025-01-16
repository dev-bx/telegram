<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;
use DevBX\Telegram\Passport;
use DevBX\Telegram\Payments;
use DevBX\Telegram\InlineMode;
use DevBX\Telegram\Stickers;

class Api extends Base\Api {
    /**
     *Use this method to receive incoming updates using long polling ([wiki](https://en.wikipedia.org/wiki/Push_technology#Long_polling)). Returns an Array of @see Types\Update objects.
     *
     * @param array    $params    [
     * @var int      $offset          Optional. Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as [getUpdates](#getupdates) is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will be forgotten.
     * @var int      $limit           Optional. Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @var int      $timeout         Optional. Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     * @var string[] $allowed_updates Optional. A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See [Update](#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member*, *message\_reaction*, and *message\_reaction\_count* (default). If not specified, the previous setting will be used.  
  
Please note that this parameter doesn't affect updates created before the call to getUpdates, so unwanted updates may be received for a short period of time.
     * ]
     *
     * @return Types\Update[]|Base\BaseType
    */

    public function getUpdates(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'offset' => [
                    'type' => ['int'],
                ],
                'limit' => [
                    'type' => ['int'],
                ],
                'timeout' => [
                    'type' => ['int'],
                ],
                'allowed_updates' => [
                    'type' => ['string'],
                    'isArray' => true,
                ],
                '@return' => [
                    'type' => Types\Update::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter *secret\_token*. If specified, the request will contain a header “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.
     *
     * @param array    $params    [
     * @var string          $url                  Required. HTTPS URL to send updates to. Use an empty string to remove webhook integration
     * @var Types\InputFile $certificate          Optional. Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](/bots/self-signed) for details.
     * @var string          $ip_address           Optional. The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     * @var int             $max_connections      Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     * @var string[]        $allowed_updates      Optional. A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See [Update](#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member*, *message\_reaction*, and *message\_reaction\_count* (default). If not specified, the previous setting will be used.  
Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     * @var bool            $drop_pending_updates Optional. Pass *True* to drop all pending updates
     * @var string          $secret_token         Optional. A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     * ]
     *
     * @return Base\BaseType
    */

    public function setWebhook(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'url' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'certificate' => [
                    'type' => [Types\InputFile::class],
                ],
                'ip_address' => [
                    'type' => ['string'],
                ],
                'max_connections' => [
                    'type' => ['int'],
                ],
                'allowed_updates' => [
                    'type' => ['string'],
                    'isArray' => true,
                ],
                'drop_pending_updates' => [
                    'type' => ['bool'],
                ],
                'secret_token' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to remove webhook integration if you decide to switch back to [getUpdates](#getupdates). Returns *True* on success.
     *
     * @param array    $params    [
     * @var bool $drop_pending_updates Optional. Pass *True* to drop all pending updates
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteWebhook(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'drop_pending_updates' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get current webhook status. Requires no parameters. On success, returns a @see Types\WebhookInfo object. If the bot is using [getUpdates](#getupdates), will return an object with the *url* field empty.
     *
     *
     * @return Types\WebhookInfo
    */

    public function getWebhookInfo(): Types\WebhookInfo
    {
        return $this->query(
            __FUNCTION__,
            [],
            [
                '@return' => [
                    'type' => Types\WebhookInfo::class,
                ],
            ]
            
        );
    }

    /**
     *A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a @see Types\User object.
     *
     *
     * @return Types\User
    */

    public function getMe(): Types\User
    {
        return $this->query(
            __FUNCTION__,
            [],
            [
                '@return' => [
                    'type' => Types\User::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to log out from the cloud Bot API server before launching the bot locally. You **must** log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns *True* on success. Requires no parameters.
     *
     *
     * @return Base\BaseType
    */

    public function logOut(): Base\BaseType
    {
        return $this->query(__FUNCTION__);
    }

    /**
     *Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns *True* on success. Requires no parameters.
     *
     *
     * @return Base\BaseType
    */

    public function close(): Base\BaseType
    {
        return $this->query(__FUNCTION__);
    }

    /**
     *Use this method to send text messages. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string                                                                                          $text                   Required. Text of the message to be sent, 1-4096 characters after entities parsing
     * @var string                                                                                          $parse_mode             Optional. Mode for parsing entities in the message text. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $entities               Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
     * @var Types\LinkPreviewOptions                                                                        $link_preview_options   Optional. Link preview generation options for the message
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendMessage(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'text' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'link_preview_options' => [
                    'type' => [Types\LinkPreviewOptions::class],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_thread_id    Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|string $from_chat_id         Required. Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     * @var bool       $disable_notification Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool       $protect_content      Optional. Protects the contents of the forwarded message from forwarding and saving
     * @var int        $message_id           Required. Message identifier in the chat specified in *from\_chat\_id*
     * ]
     *
     * @return Types\Message
    */

    public function forwardMessage(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'from_chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'message_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an array of @see Types\MessageId of the sent messages is returned.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_thread_id    Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|string $from_chat_id         Required. Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)
     * @var int[]      $message_ids          Required. A JSON-serialized list of 1-100 identifiers of messages in the chat *from\_chat\_id* to forward. The identifiers must be specified in a strictly increasing order.
     * @var bool       $disable_notification Optional. Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool       $protect_content      Optional. Protects the contents of the forwarded messages from forwarding and saving
     * ]
     *
     * @return Types\MessageId[]|Base\BaseType
    */

    public function forwardMessages(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'from_chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_ids' => [
                    'type' => ['int'],
                    'isArray' => true,
                    'required' => true,
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                '@return' => [
                    'type' => Types\MessageId::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz [poll](#poll) can be copied only if the value of the field *correct\_option\_id* is known to the bot. The method is analogous to the method [forwardMessage](#forwardmessage), but the copied message doesn't have a link to the original message. Returns the @see Types\MessageId of the sent message on success.
     *
     * @param array    $params    [
     * @var int|string                                                                                      $chat_id                  Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id        Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|string                                                                                      $from_chat_id             Required. Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     * @var int                                                                                             $message_id               Required. Message identifier in the chat specified in *from\_chat\_id*
     * @var string                                                                                          $caption                  Optional. New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
     * @var string                                                                                          $parse_mode               Optional. Mode for parsing entities in the new caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities         Optional. A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of *parse\_mode*
     * @var bool                                                                                            $show_caption_above_media Optional. Pass *True*, if the caption must be shown above the message media. Ignored if a new caption isn't specified.
     * @var bool                                                                                            $disable_notification     Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content          Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast     Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var Types\ReplyParameters                                                                           $reply_parameters         Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup             Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\MessageId
    */

    public function copyMessage(array $params = []): Types\MessageId
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'from_chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'show_caption_above_media' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\MessageId::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz [poll](#poll) can be copied only if the value of the field *correct\_option\_id* is known to the bot. The method is analogous to the method [forwardMessages](#forwardmessages), but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of @see Types\MessageId of the sent messages is returned.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_thread_id    Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|string $from_chat_id         Required. Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)
     * @var int[]      $message_ids          Required. A JSON-serialized list of 1-100 identifiers of messages in the chat *from\_chat\_id* to copy. The identifiers must be specified in a strictly increasing order.
     * @var bool       $disable_notification Optional. Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool       $protect_content      Optional. Protects the contents of the sent messages from forwarding and saving
     * @var bool       $remove_caption       Optional. Pass *True* to copy the messages without their captions
     * ]
     *
     * @return Types\MessageId[]|Base\BaseType
    */

    public function copyMessages(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'from_chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_ids' => [
                    'type' => ['int'],
                    'isArray' => true,
                    'required' => true,
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'remove_caption' => [
                    'type' => ['bool'],
                ],
                '@return' => [
                    'type' => Types\MessageId::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send photos. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id   Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                  Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id        Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $photo                    Required. Photo to send. Pass a file\_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20. [More information on Sending Files »](#sending-files)
     * @var string                                                                                          $caption                  Optional. Photo caption (may also be used when resending photos by *file\_id*), 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode               Optional. Mode for parsing entities in the photo caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities         Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool                                                                                            $show_caption_above_media Optional. Pass *True*, if the caption must be shown above the message media
     * @var bool                                                                                            $has_spoiler              Optional. Pass *True* if the photo needs to be covered with a spoiler animation
     * @var bool                                                                                            $disable_notification     Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content          Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast     Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id        Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters         Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup             Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendPhoto(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'photo' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'show_caption_above_media' => [
                    'type' => ['bool'],
                ],
                'has_spoiler' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *For sending voice messages, use the [sendVoice](#sendvoice) method instead.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $audio                  Required. Audio file to send. Pass a file\_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](#sending-files)
     * @var string                                                                                          $caption                Optional. Audio caption, 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode             Optional. Mode for parsing entities in the audio caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities       Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var int                                                                                             $duration               Optional. Duration of the audio in seconds
     * @var string                                                                                          $performer              Optional. Performer
     * @var string                                                                                          $title                  Optional. Track name
     * @var Types\InputFile|string                                                                          $thumbnail              Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Base\BaseType
    */

    public function sendAudio(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'audio' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'duration' => [
                    'type' => ['int'],
                ],
                'performer' => [
                    'type' => ['string'],
                ],
                'title' => [
                    'type' => ['string'],
                ],
                'thumbnail' => [
                    'type' => [Types\InputFile::class, 'string'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
            ]
            
        );
    }

    /**
     *Use this method to send general files. On success, the sent @see Types\Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id         Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                        Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id              Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $document                       Required. File to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](#sending-files)
     * @var Types\InputFile|string                                                                          $thumbnail                      Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
     * @var string                                                                                          $caption                        Optional. Document caption (may also be used when resending documents by *file\_id*), 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode                     Optional. Mode for parsing entities in the document caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities               Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool                                                                                            $disable_content_type_detection Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @var bool                                                                                            $disable_notification           Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content                Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast           Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id              Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters               Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup                   Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendDocument(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'document' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'thumbnail' => [
                    'type' => [Types\InputFile::class, 'string'],
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'disable_content_type_detection' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as @see Types\Document). On success, the sent @see Types\Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id   Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                  Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id        Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $video                    Required. Video to send. Pass a file\_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More information on Sending Files »](#sending-files)
     * @var int                                                                                             $duration                 Optional. Duration of sent video in seconds
     * @var int                                                                                             $width                    Optional. Video width
     * @var int                                                                                             $height                   Optional. Video height
     * @var Types\InputFile|string                                                                          $thumbnail                Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
     * @var string                                                                                          $caption                  Optional. Video caption (may also be used when resending videos by *file\_id*), 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode               Optional. Mode for parsing entities in the video caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities         Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool                                                                                            $show_caption_above_media Optional. Pass *True*, if the caption must be shown above the message media
     * @var bool                                                                                            $has_spoiler              Optional. Pass *True* if the video needs to be covered with a spoiler animation
     * @var bool                                                                                            $supports_streaming       Optional. Pass *True* if the uploaded video is suitable for streaming
     * @var bool                                                                                            $disable_notification     Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content          Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast     Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id        Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters         Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup             Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendVideo(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'video' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'duration' => [
                    'type' => ['int'],
                ],
                'width' => [
                    'type' => ['int'],
                ],
                'height' => [
                    'type' => ['int'],
                ],
                'thumbnail' => [
                    'type' => [Types\InputFile::class, 'string'],
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'show_caption_above_media' => [
                    'type' => ['bool'],
                ],
                'has_spoiler' => [
                    'type' => ['bool'],
                ],
                'supports_streaming' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent @see Types\Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id   Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                  Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id        Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $animation                Required. Animation to send. Pass a file\_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. [More information on Sending Files »](#sending-files)
     * @var int                                                                                             $duration                 Optional. Duration of sent animation in seconds
     * @var int                                                                                             $width                    Optional. Animation width
     * @var int                                                                                             $height                   Optional. Animation height
     * @var Types\InputFile|string                                                                          $thumbnail                Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
     * @var string                                                                                          $caption                  Optional. Animation caption (may also be used when resending animation by *file\_id*), 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode               Optional. Mode for parsing entities in the animation caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities         Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool                                                                                            $show_caption_above_media Optional. Pass *True*, if the caption must be shown above the message media
     * @var bool                                                                                            $has_spoiler              Optional. Pass *True* if the animation needs to be covered with a spoiler animation
     * @var bool                                                                                            $disable_notification     Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content          Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast     Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id        Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters         Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup             Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendAnimation(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'animation' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'duration' => [
                    'type' => ['int'],
                ],
                'width' => [
                    'type' => ['int'],
                ],
                'height' => [
                    'type' => ['int'],
                ],
                'thumbnail' => [
                    'type' => [Types\InputFile::class, 'string'],
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'show_caption_above_media' => [
                    'type' => ['bool'],
                ],
                'has_spoiler' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats may be sent as @see Types\Audio or @see Types\Document). On success, the sent @see Types\Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $voice                  Required. Audio file to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](#sending-files)
     * @var string                                                                                          $caption                Optional. Voice message caption, 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode             Optional. Mode for parsing entities in the voice message caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities       Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var int                                                                                             $duration               Optional. Duration of the voice message in seconds
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendVoice(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'voice' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'duration' => [
                    'type' => ['int'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *As of [v.4.0](https://telegram.org/blog/video-messages-and-telescope), Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $video_note             Required. Video note to send. Pass a file\_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More information on Sending Files »](#sending-files). Sending video notes by a URL is currently unsupported
     * @var int                                                                                             $duration               Optional. Duration of sent video in seconds
     * @var int                                                                                             $length                 Optional. Video width and height, i.e. diameter of the video message
     * @var Types\InputFile|string                                                                          $thumbnail              Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendVideoNote(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'video_note' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'duration' => [
                    'type' => ['int'],
                ],
                'length' => [
                    'type' => ['int'],
                ],
                'thumbnail' => [
                    'type' => [Types\InputFile::class, 'string'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send paid media. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id   Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                  Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`). If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
     * @var int                                                                                             $star_count               Required. The number of Telegram Stars that must be paid to buy access to the media; 1-2500
     * @var Types\InputPaidMedia[]                                                                          $media                    Required. A JSON-serialized array describing the media to be sent; up to 10 items
     * @var string                                                                                          $payload                  Optional. Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @var string                                                                                          $caption                  Optional. Media caption, 0-1024 characters after entities parsing
     * @var string                                                                                          $parse_mode               Optional. Mode for parsing entities in the media caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $caption_entities         Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool                                                                                            $show_caption_above_media Optional. Pass *True*, if the caption must be shown above the message media
     * @var bool                                                                                            $disable_notification     Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content          Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast     Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var Types\ReplyParameters                                                                           $reply_parameters         Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup             Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendPaidMedia(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'star_count' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'media' => [
                    'type' => [Types\InputPaidMedia::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'payload' => [
                    'type' => ['string'],
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'show_caption_above_media' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of [Messages](#message) that were sent is returned.
     *
     * @param array    $params    [
     * @var string                                                                                       $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                   $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                          $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputMediaAudio[]|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo $media                  Required. A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @var bool                                                                                         $disable_notification   Optional. Sends messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                         $protect_content        Optional. Protects the contents of the sent messages from forwarding and saving
     * @var bool                                                                                         $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                       $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                        $reply_parameters       Optional. Description of the message to reply to
     * ]
     *
     * @return Base\BaseType
    */

    public function sendMediaGroup(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'media' => [
                    'type' => [Types\InputMediaAudio::class, Types\InputMediaDocument::class, Types\InputMediaPhoto::class, Types\InputMediaVideo::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
            ]
            
        );
    }

    /**
     *Use this method to send point on the map. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var float                                                                                           $latitude               Required. Latitude of the location
     * @var float                                                                                           $longitude              Required. Longitude of the location
     * @var float                                                                                           $horizontal_accuracy    Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @var int                                                                                             $live_period            Optional. Period in seconds during which the location will be updated (see [Live Locations](https://telegram.org/blog/live-locations), should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @var int                                                                                             $heading                Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var int                                                                                             $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendLocation(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'latitude' => [
                    'type' => ['float'],
                    'required' => true,
                ],
                'longitude' => [
                    'type' => ['float'],
                    'required' => true,
                ],
                'horizontal_accuracy' => [
                    'type' => ['float'],
                ],
                'live_period' => [
                    'type' => ['int'],
                ],
                'heading' => [
                    'type' => ['int'],
                ],
                'proximity_alert_radius' => [
                    'type' => ['int'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send information about a venue. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var float                                                                                           $latitude               Required. Latitude of the venue
     * @var float                                                                                           $longitude              Required. Longitude of the venue
     * @var string                                                                                          $title                  Required. Name of the venue
     * @var string                                                                                          $address                Required. Address of the venue
     * @var string                                                                                          $foursquare_id          Optional. Foursquare identifier of the venue
     * @var string                                                                                          $foursquare_type        Optional. Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
     * @var string                                                                                          $google_place_id        Optional. Google Places identifier of the venue
     * @var string                                                                                          $google_place_type      Optional. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendVenue(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'latitude' => [
                    'type' => ['float'],
                    'required' => true,
                ],
                'longitude' => [
                    'type' => ['float'],
                    'required' => true,
                ],
                'title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'address' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'foursquare_id' => [
                    'type' => ['string'],
                ],
                'foursquare_type' => [
                    'type' => ['string'],
                ],
                'google_place_id' => [
                    'type' => ['string'],
                ],
                'google_place_type' => [
                    'type' => ['string'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send phone contacts. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string                                                                                          $phone_number           Required. Contact's phone number
     * @var string                                                                                          $first_name             Required. Contact's first name
     * @var string                                                                                          $last_name              Optional. Contact's last name
     * @var string                                                                                          $vcard                  Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendContact(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'phone_number' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'first_name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'last_name' => [
                    'type' => ['string'],
                ],
                'vcard' => [
                    'type' => ['string'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send a native poll. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id  Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                 Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id       Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string                                                                                          $question                Required. Poll question, 1-300 characters
     * @var string                                                                                          $question_parse_mode     Optional. Mode for parsing entities in the question. See [formatting options](#formatting-options) for more details. Currently, only custom emoji entities are allowed
     * @var Types\MessageEntity[]                                                                           $question_entities       Optional. A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question\_parse\_mode*
     * @var Types\InputPollOption[]                                                                         $options                 Required. A JSON-serialized list of 2-10 answer options
     * @var bool                                                                                            $is_anonymous            Optional. *True*, if the poll needs to be anonymous, defaults to *True*
     * @var string                                                                                          $type                    Optional. Poll type, “quiz” or “regular”, defaults to “regular”
     * @var bool                                                                                            $allows_multiple_answers Optional. *True*, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
     * @var int                                                                                             $correct_option_id       Optional. 0-based identifier of the correct answer option, required for polls in quiz mode
     * @var string                                                                                          $explanation             Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     * @var string                                                                                          $explanation_parse_mode  Optional. Mode for parsing entities in the explanation. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]                                                                           $explanation_entities    Optional. A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation\_parse\_mode*
     * @var int                                                                                             $open_period             Optional. Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
     * @var int                                                                                             $close_date              Optional. Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
     * @var bool                                                                                            $is_closed               Optional. Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
     * @var bool                                                                                            $disable_notification    Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content         Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast    Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id       Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters        Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup            Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendPoll(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'question' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'question_parse_mode' => [
                    'type' => ['string'],
                ],
                'question_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'options' => [
                    'type' => [Types\InputPollOption::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'is_anonymous' => [
                    'type' => ['bool'],
                ],
                'type' => [
                    'type' => ['string'],
                ],
                'allows_multiple_answers' => [
                    'type' => ['bool'],
                ],
                'correct_option_id' => [
                    'type' => ['int'],
                ],
                'explanation' => [
                    'type' => ['string'],
                ],
                'explanation_parse_mode' => [
                    'type' => ['string'],
                ],
                'explanation_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'open_period' => [
                    'type' => ['int'],
                ],
                'close_date' => [
                    'type' => ['int'],
                ],
                'is_closed' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send an animated emoji that will display a random value. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string                                                                                          $emoji                  Optional. Emoji on which the dice throw animation is based. Currently, must be one of “![🎲](//telegram.org/img/emoji/40/F09F8EB2.png)”, “![🎯](//telegram.org/img/emoji/40/F09F8EAF.png)”, “![🏀](//telegram.org/img/emoji/40/F09F8F80.png)”, “![⚽](//telegram.org/img/emoji/40/E29ABD.png)”, “![🎳](//telegram.org/img/emoji/40/F09F8EB3.png)”, or “![🎰](//telegram.org/img/emoji/40/F09F8EB0.png)”. Dice can have values 1-6 for “![🎲](//telegram.org/img/emoji/40/F09F8EB2.png)”, “![🎯](//telegram.org/img/emoji/40/F09F8EAF.png)” and “![🎳](//telegram.org/img/emoji/40/F09F8EB3.png)”, values 1-5 for “![🏀](//telegram.org/img/emoji/40/F09F8F80.png)” and “![⚽](//telegram.org/img/emoji/40/E29ABD.png)”, and values 1-64 for “![🎰](//telegram.org/img/emoji/40/F09F8EB0.png)”. Defaults to “![🎲](//telegram.org/img/emoji/40/F09F8EB2.png)”
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendDice(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'emoji' => [
                    'type' => ['string'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *We only recommend using this method when a response from the bot will take a **noticeable** amount of time to arrive.
     *
     * @param array    $params    [
     * @var string     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the action will be sent
     * @var int|string $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_thread_id      Optional. Unique identifier for the target message thread; for supergroups only
     * @var string     $action                 Required. Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for [text messages](#sendmessage), *upload\_photo* for [photos](#sendphoto), *record\_video* or *upload\_video* for [videos](#sendvideo), *record\_voice* or *upload\_voice* for [voice notes](#sendvoice), *upload\_document* for [general files](#senddocument), *choose\_sticker* for [stickers](#sendsticker), *find\_location* for [location data](#sendlocation), *record\_video\_note* or *upload\_video\_note* for [video notes](#sendvideonote).
     * ]
     *
     * @return Base\BaseType
    */

    public function sendChatAction(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'action' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the chosen reactions on a message. Service messages can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string           $chat_id    Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                  $message_id Required. Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
     * @var Types\ReactionType[] $reaction   Optional. A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
     * @var bool                 $is_big     Optional. Pass *True* to set the reaction with a big animation
     * ]
     *
     * @return Base\BaseType
    */

    public function setMessageReaction(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'reaction' => [
                    'type' => [Types\ReactionType::class],
                    'isArray' => true,
                ],
                'is_big' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get a list of profile pictures for a user. Returns a @see Types\UserProfilePhotos object.
     *
     * @param array    $params    [
     * @var int $user_id Required. Unique identifier of the target user
     * @var int $offset  Optional. Sequential number of the first photo to be returned. By default, all photos are returned.
     * @var int $limit   Optional. Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * ]
     *
     * @return Types\UserProfilePhotos
    */

    public function getUserProfilePhotos(array $params = []): Types\UserProfilePhotos
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'offset' => [
                    'type' => ['int'],
                ],
                'limit' => [
                    'type' => ['int'],
                ],
                '@return' => [
                    'type' => Types\UserProfilePhotos::class,
                ],
            ]
            
        );
    }

    /**
     *Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method [requestEmojiStatusAccess](/bots/webapps#initializing-mini-apps). Returns *True* on success.
     *
     * @param array    $params    [
     * @var int    $user_id                      Required. Unique identifier of the target user
     * @var string $emoji_status_custom_emoji_id Optional. Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
     * @var int    $emoji_status_expiration_date Optional. Expiration date of the emoji status, if any
     * ]
     *
     * @return Base\BaseType
    */

    public function setUserEmojiStatus(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'emoji_status_custom_emoji_id' => [
                    'type' => ['string'],
                ],
                'emoji_status_expiration_date' => [
                    'type' => ['int'],
                ],
            ]
            
        );
    }

    /**
     ***Note:** This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
     *
     * @param array    $params    [
     * @var string $file_id Required. File identifier to get information about
     * ]
     *
     * @return Base\BaseType
    */

    public function getFile(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'file_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless [unbanned](#unbanchatmember) first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id         Required. Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
     * @var int        $user_id         Required. Unique identifier of the target user
     * @var int        $until_date      Optional. Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     * @var bool       $revoke_messages Optional. Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
     * ]
     *
     * @return Base\BaseType
    */

    public function banChatMember(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'until_date' => [
                    'type' => ['int'],
                ],
                'revoke_messages' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to unban a previously banned user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only\_if\_banned*. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id        Required. Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
     * @var int        $user_id        Required. Unique identifier of the target user
     * @var bool       $only_if_banned Optional. Do nothing if the user is not banned
     * ]
     *
     * @return Base\BaseType
    */

    public function unbanChatMember(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'only_if_banned' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string            $chat_id                          Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int                   $user_id                          Required. Unique identifier of the target user
     * @var Types\ChatPermissions $permissions                      Required. A JSON-serialized object for new user permissions
     * @var bool                  $use_independent_chat_permissions Optional. Pass *True* if chat permissions are set independently. Otherwise, the *can\_send\_other\_messages* and *can\_add\_web\_page\_previews* permissions will imply the *can\_send\_messages*, *can\_send\_audios*, *can\_send\_documents*, *can\_send\_photos*, *can\_send\_videos*, *can\_send\_video\_notes*, and *can\_send\_voice\_notes* permissions; the *can\_send\_polls* permission will imply the *can\_send\_messages* permission.
     * @var int                   $until_date                       Optional. Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     * ]
     *
     * @return Base\BaseType
    */

    public function restrictChatMember(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'permissions' => [
                    'type' => [Types\ChatPermissions::class],
                    'required' => true,
                ],
                'use_independent_chat_permissions' => [
                    'type' => ['bool'],
                ],
                'until_date' => [
                    'type' => ['int'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $user_id                Required. Unique identifier of the target user
     * @var bool       $is_anonymous           Optional. Pass *True* if the administrator's presence in the chat is hidden
     * @var bool       $can_manage_chat        Optional. Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
     * @var bool       $can_delete_messages    Optional. Pass *True* if the administrator can delete messages of other users
     * @var bool       $can_manage_video_chats Optional. Pass *True* if the administrator can manage video chats
     * @var bool       $can_restrict_members   Optional. Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     * @var bool       $can_promote_members    Optional. Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
     * @var bool       $can_change_info        Optional. Pass *True* if the administrator can change chat title, photo and other settings
     * @var bool       $can_invite_users       Optional. Pass *True* if the administrator can invite new users to the chat
     * @var bool       $can_post_stories       Optional. Pass *True* if the administrator can post stories to the chat
     * @var bool       $can_edit_stories       Optional. Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     * @var bool       $can_delete_stories     Optional. Pass *True* if the administrator can delete stories posted by other users
     * @var bool       $can_post_messages      Optional. Pass *True* if the administrator can post messages in the channel, or access channel statistics; for channels only
     * @var bool       $can_edit_messages      Optional. Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only
     * @var bool       $can_pin_messages       Optional. Pass *True* if the administrator can pin messages; for supergroups only
     * @var bool       $can_manage_topics      Optional. Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     * ]
     *
     * @return Base\BaseType
    */

    public function promoteChatMember(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'is_anonymous' => [
                    'type' => ['bool'],
                ],
                'can_manage_chat' => [
                    'type' => ['bool'],
                ],
                'can_delete_messages' => [
                    'type' => ['bool'],
                ],
                'can_manage_video_chats' => [
                    'type' => ['bool'],
                ],
                'can_restrict_members' => [
                    'type' => ['bool'],
                ],
                'can_promote_members' => [
                    'type' => ['bool'],
                ],
                'can_change_info' => [
                    'type' => ['bool'],
                ],
                'can_invite_users' => [
                    'type' => ['bool'],
                ],
                'can_post_stories' => [
                    'type' => ['bool'],
                ],
                'can_edit_stories' => [
                    'type' => ['bool'],
                ],
                'can_delete_stories' => [
                    'type' => ['bool'],
                ],
                'can_post_messages' => [
                    'type' => ['bool'],
                ],
                'can_edit_messages' => [
                    'type' => ['bool'],
                ],
                'can_pin_messages' => [
                    'type' => ['bool'],
                ],
                'can_manage_topics' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id      Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int        $user_id      Required. Unique identifier of the target user
     * @var string     $custom_title Required. New custom title for the administrator; 0-16 characters, emoji are not allowed
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatAdministratorCustomTitle(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'custom_title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to ban a channel chat in a supergroup or a channel. Until the chat is [unbanned](#unbanchatsenderchat), the owner of the banned chat won't be able to send messages on behalf of **any of their channels**. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id        Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $sender_chat_id Required. Unique identifier of the target sender chat
     * ]
     *
     * @return Base\BaseType
    */

    public function banChatSenderChat(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'sender_chat_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id        Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $sender_chat_id Required. Unique identifier of the target sender chat
     * ]
     *
     * @return Base\BaseType
    */

    public function unbanChatSenderChat(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'sender_chat_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the *can\_restrict\_members* administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string            $chat_id                          Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var Types\ChatPermissions $permissions                      Required. A JSON-serialized object for new default chat permissions
     * @var bool                  $use_independent_chat_permissions Optional. Pass *True* if chat permissions are set independently. Otherwise, the *can\_send\_other\_messages* and *can\_add\_web\_page\_previews* permissions will imply the *can\_send\_messages*, *can\_send\_audios*, *can\_send\_documents*, *can\_send\_photos*, *can\_send\_videos*, *can\_send\_video\_notes*, and *can\_send\_voice\_notes* permissions; the *can\_send\_polls* permission will imply the *can\_send\_messages* permission.
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatPermissions(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'permissions' => [
                    'type' => [Types\ChatPermissions::class],
                    'required' => true,
                ],
                'use_independent_chat_permissions' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as *String* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function exportChatInviteLink(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method [revokeChatInviteLink](#revokechatinvitelink). Returns the new invite link as @see Types\ChatInviteLink object.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $name                 Optional. Invite link name; 0-32 characters
     * @var int        $expire_date          Optional. Point in time (Unix timestamp) when the link will expire
     * @var int        $member_limit         Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @var bool       $creates_join_request Optional. *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     * ]
     *
     * @return Types\ChatInviteLink
    */

    public function createChatInviteLink(array $params = []): Types\ChatInviteLink
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                ],
                'expire_date' => [
                    'type' => ['int'],
                ],
                'member_limit' => [
                    'type' => ['int'],
                ],
                'creates_join_request' => [
                    'type' => ['bool'],
                ],
                '@return' => [
                    'type' => Types\ChatInviteLink::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a @see Types\ChatInviteLink object.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $invite_link          Required. The invite link to edit
     * @var string     $name                 Optional. Invite link name; 0-32 characters
     * @var int        $expire_date          Optional. Point in time (Unix timestamp) when the link will expire
     * @var int        $member_limit         Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @var bool       $creates_join_request Optional. *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     * ]
     *
     * @return Types\ChatInviteLink
    */

    public function editChatInviteLink(array $params = []): Types\ChatInviteLink
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'invite_link' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                ],
                'expire_date' => [
                    'type' => ['int'],
                ],
                'member_limit' => [
                    'type' => ['int'],
                ],
                'creates_join_request' => [
                    'type' => ['bool'],
                ],
                '@return' => [
                    'type' => Types\ChatInviteLink::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to create a [subscription invite link](https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions) for a channel chat. The bot must have the *can\_invite\_users* administrator rights. The link can be edited using the method [editChatSubscriptionInviteLink](#editchatsubscriptioninvitelink) or revoked using the method [revokeChatInviteLink](#revokechatinvitelink). Returns the new invite link as a @see Types\ChatInviteLink object.
     *
     * @param array    $params    [
     * @var int|string $chat_id             Required. Unique identifier for the target channel chat or username of the target channel (in the format `@channelusername`)
     * @var string     $name                Optional. Invite link name; 0-32 characters
     * @var int        $subscription_period Required. The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
     * @var int        $subscription_price  Required. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-2500
     * ]
     *
     * @return Types\ChatInviteLink
    */

    public function createChatSubscriptionInviteLink(array $params = []): Types\ChatInviteLink
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                ],
                'subscription_period' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'subscription_price' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\ChatInviteLink::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit a subscription invite link created by the bot. The bot must have the *can\_invite\_users* administrator rights. Returns the edited invite link as a @see Types\ChatInviteLink object.
     *
     * @param array    $params    [
     * @var int|string $chat_id     Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $invite_link Required. The invite link to edit
     * @var string     $name        Optional. Invite link name; 0-32 characters
     * ]
     *
     * @return Types\ChatInviteLink
    */

    public function editChatSubscriptionInviteLink(array $params = []): Types\ChatInviteLink
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'invite_link' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\ChatInviteLink::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as @see Types\ChatInviteLink object.
     *
     * @param array    $params    [
     * @var int|string $chat_id     Required. Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $invite_link Required. The invite link to revoke
     * ]
     *
     * @return Types\ChatInviteLink
    */

    public function revokeChatInviteLink(array $params = []): Types\ChatInviteLink
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'invite_link' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\ChatInviteLink::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the *can\_invite\_users* administrator right. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $user_id Required. Unique identifier of the target user
     * ]
     *
     * @return Base\BaseType
    */

    public function approveChatJoinRequest(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the *can\_invite\_users* administrator right. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $user_id Required. Unique identifier of the target user
     * ]
     *
     * @return Base\BaseType
    */

    public function declineChatJoinRequest(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string      $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var Types\InputFile $photo   Required. New chat photo, uploaded using multipart/form-data
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatPhoto(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'photo' => [
                    'type' => [Types\InputFile::class],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteChatPhoto(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $title   Required. New chat title, 1-128 characters
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatTitle(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id     Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $description Optional. New chat description, 0-255 characters
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatDescription(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'description' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be pinned
     * @var int|string $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_id             Required. Identifier of a message to pin
     * @var bool       $disable_notification   Optional. Pass *True* if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
     * ]
     *
     * @return Base\BaseType
    */

    public function pinChatMessage(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be unpinned
     * @var int|string $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_id             Optional. Identifier of the message to unpin. Required if *business\_connection\_id* is specified. If not specified, the most recent pinned message (by sending date) will be unpinned.
     * ]
     *
     * @return Base\BaseType
    */

    public function unpinChatMessage(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function unpinAllChatMessages(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method for your bot to leave a group, supergroup or channel. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function leaveChat(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get up-to-date information about the chat. Returns a @see Types\ChatFullInfo object on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * ]
     *
     * @return Types\ChatFullInfo
    */

    public function getChat(array $params = []): Types\ChatFullInfo
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\ChatFullInfo::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of @see Types\ChatMember objects.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * ]
     *
     * @return Types\ChatMember[]|Base\BaseType
    */

    public function getChatAdministrators(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\ChatMember::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the number of members in a chat. Returns *Int* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function getChatMemberCount(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a @see Types\ChatMember object on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * @var int        $user_id Required. Unique identifier of the target user
     * ]
     *
     * @return Types\ChatMember
    */

    public function getChatMember(array $params = []): Types\ChatMember
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\ChatMember::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can\_set\_sticker\_set* optionally returned in [getChat](#getchat) requests to check if the bot can use this method. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id          Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string     $sticker_set_name Required. Name of the sticker set to be set as the group sticker set
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatStickerSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'sticker_set_name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can\_set\_sticker\_set* optionally returned in [getChat](#getchat) requests to check if the bot can use this method. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteChatStickerSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of @see Stickers\Sticker objects.
     *
     *
     * @return Stickers\Sticker[]|Base\BaseType
    */

    public function getForumTopicIconStickers(): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            [],
            [
                '@return' => [
                    'type' => Stickers\Sticker::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns information about the created topic as a @see Types\ForumTopic object.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string     $name                 Required. Topic name, 1-128 characters
     * @var int        $icon_color           Optional. Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     * @var string     $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](#getforumtopiciconstickers) to get all allowed custom emoji identifiers.
     * ]
     *
     * @return Types\ForumTopic
    */

    public function createForumTopic(array $params = []): Types\ForumTopic
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'icon_color' => [
                    'type' => ['int'],
                ],
                'icon_custom_emoji_id' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\ForumTopic::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id              Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int        $message_thread_id    Required. Unique identifier for the target message thread of the forum topic
     * @var string     $name                 Optional. New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
     * @var string     $icon_custom_emoji_id Optional. New unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](#getforumtopiciconstickers) to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
     * ]
     *
     * @return Base\BaseType
    */

    public function editForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                ],
                'icon_custom_emoji_id' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id           Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int        $message_thread_id Required. Unique identifier for the target message thread of the forum topic
     * ]
     *
     * @return Base\BaseType
    */

    public function closeForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id           Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int        $message_thread_id Required. Unique identifier for the target message thread of the forum topic
     * ]
     *
     * @return Base\BaseType
    */

    public function reopenForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_delete\_messages* administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id           Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int        $message_thread_id Required. Unique identifier for the target message thread of the forum topic
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the *can\_pin\_messages* administrator right in the supergroup. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id           Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var int        $message_thread_id Required. Unique identifier for the target message thread of the forum topic
     * ]
     *
     * @return Base\BaseType
    */

    public function unpinAllForumTopicMessages(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string     $name    Required. New topic name, 1-128 characters
     * ]
     *
     * @return Base\BaseType
    */

    public function editGeneralForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function closeGeneralForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. The topic will be automatically unhidden if it was hidden. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function reopenGeneralForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. The topic will be automatically closed if it was open. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function hideGeneralForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function unhideGeneralForumTopic(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the *can\_pin\_messages* administrator right in the supergroup. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function unpinAllGeneralForumTopicMessages(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send answers to callback queries sent from [inline keyboards](/bots/features#inline-keyboards). The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, *True* is returned.
     *
     * @param array    $params    [
     * @var string $callback_query_id Required. Unique identifier for the query to be answered
     * @var string $text              Optional. Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     * @var bool   $show_alert        Optional. If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *false*.
     * @var string $url               Optional. URL that will be opened by the user's client. If you have created a [Game](#game) and accepted the conditions via [@BotFather](https://t.me/botfather), specify the URL that opens your game - note that this will only work if the query comes from a [*callback\_game*](#inlinekeyboardbutton) button.  
  
Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
     * @var int    $cache_time        Optional. The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     * ]
     *
     * @return Base\BaseType
    */

    public function answerCallbackQuery(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'callback_query_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'text' => [
                    'type' => ['string'],
                ],
                'show_alert' => [
                    'type' => ['bool'],
                ],
                'url' => [
                    'type' => ['string'],
                ],
                'cache_time' => [
                    'type' => ['int'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a @see Types\UserChatBoosts object.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the chat or username of the channel (in the format `@channelusername`)
     * @var int        $user_id Required. Unique identifier of the target user
     * ]
     *
     * @return Types\UserChatBoosts
    */

    public function getUserChatBoosts(array $params = []): Types\UserChatBoosts
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\UserChatBoosts::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get information about the connection of the bot with a business account. Returns a @see Types\BusinessConnection object on success.
     *
     * @param array    $params    [
     * @var string $business_connection_id Required. Unique identifier of the business connection
     * ]
     *
     * @return Types\BusinessConnection
    */

    public function getBusinessConnection(array $params = []): Types\BusinessConnection
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\BusinessConnection::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the list of the bot's commands. See [this manual](/bots/features#commands) for more details about bot commands. Returns *True* on success.
     *
     * @param array    $params    [
     * @var Types\BotCommand[]    $commands      Required. A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     * @var Types\BotCommandScope $scope         Optional. A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](#botcommandscopedefault).
     * @var string                $language_code Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * ]
     *
     * @return Base\BaseType
    */

    public function setMyCommands(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'commands' => [
                    'type' => [Types\BotCommand::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'scope' => [
                    'type' => [Types\BotCommandScope::class],
                ],
                'language_code' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](#determining-list-of-commands) will be shown to affected users. Returns *True* on success.
     *
     * @param array    $params    [
     * @var Types\BotCommandScope $scope         Optional. A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](#botcommandscopedefault).
     * @var string                $language_code Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteMyCommands(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'scope' => [
                    'type' => [Types\BotCommandScope::class],
                ],
                'language_code' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of @see Types\BotCommand objects. If commands aren't set, an empty list is returned.
     *
     * @param array    $params    [
     * @var Types\BotCommandScope $scope         Optional. A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](#botcommandscopedefault).
     * @var string                $language_code Optional. A two-letter ISO 639-1 language code or an empty string
     * ]
     *
     * @return Types\BotCommand[]|Base\BaseType
    */

    public function getMyCommands(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'scope' => [
                    'type' => [Types\BotCommandScope::class],
                ],
                'language_code' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\BotCommand::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the bot's name. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $name          Optional. New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
     * @var string $language_code Optional. A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
     * ]
     *
     * @return Base\BaseType
    */

    public function setMyName(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'name' => [
                    'type' => ['string'],
                ],
                'language_code' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the current bot name for the given user language. Returns @see Types\BotName on success.
     *
     * @param array    $params    [
     * @var string $language_code Optional. A two-letter ISO 639-1 language code or an empty string
     * ]
     *
     * @return Types\BotName
    */

    public function getMyName(array $params = []): Types\BotName
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'language_code' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\BotName::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $description   Optional. New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
     * @var string $language_code Optional. A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
     * ]
     *
     * @return Base\BaseType
    */

    public function setMyDescription(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'description' => [
                    'type' => ['string'],
                ],
                'language_code' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the current bot description for the given user language. Returns @see Types\BotDescription on success.
     *
     * @param array    $params    [
     * @var string $language_code Optional. A two-letter ISO 639-1 language code or an empty string
     * ]
     *
     * @return Types\BotDescription
    */

    public function getMyDescription(array $params = []): Types\BotDescription
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'language_code' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\BotDescription::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $short_description Optional. New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
     * @var string $language_code     Optional. A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
     * ]
     *
     * @return Base\BaseType
    */

    public function setMyShortDescription(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'short_description' => [
                    'type' => ['string'],
                ],
                'language_code' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the current bot short description for the given user language. Returns @see Types\BotShortDescription on success.
     *
     * @param array    $params    [
     * @var string $language_code Optional. A two-letter ISO 639-1 language code or an empty string
     * ]
     *
     * @return Types\BotShortDescription
    */

    public function getMyShortDescription(array $params = []): Types\BotShortDescription
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'language_code' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\BotShortDescription::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the bot's menu button in a private chat, or the default menu button. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int              $chat_id     Optional. Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @var Types\MenuButton $menu_button Optional. A JSON-serialized object for the bot's new menu button. Defaults to [MenuButtonDefault](#menubuttondefault)
     * ]
     *
     * @return Base\BaseType
    */

    public function setChatMenuButton(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int'],
                ],
                'menu_button' => [
                    'type' => [Types\MenuButton::class],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns @see Types\MenuButton on success.
     *
     * @param array    $params    [
     * @var int $chat_id Optional. Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     * ]
     *
     * @return Types\MenuButton
    */

    public function getChatMenuButton(array $params = []): Types\MenuButton
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int'],
                ],
                '@return' => [
                    'type' => Types\MenuButton::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var Types\ChatAdministratorRights $rights       Optional. A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     * @var bool                          $for_channels Optional. Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     * ]
     *
     * @return Base\BaseType
    */

    public function setMyDefaultAdministratorRights(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'rights' => [
                    'type' => [Types\ChatAdministratorRights::class],
                ],
                'for_channels' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to get the current default administrator rights of the bot. Returns @see Types\ChatAdministratorRights on success.
     *
     * @param array    $params    [
     * @var bool $for_channels Optional. Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     * ]
     *
     * @return Types\ChatAdministratorRights
    */

    public function getMyDefaultAdministratorRights(array $params = []): Types\ChatAdministratorRights
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'for_channels' => [
                    'type' => ['bool'],
                ],
                '@return' => [
                    'type' => Types\ChatAdministratorRights::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit text and [game](#games) messages. On success, if the edited message is not an inline message, the edited @see Types\Message is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id             Optional. Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string                     $inline_message_id      Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var string                     $text                   Required. New text of the message, 1-4096 characters after entities parsing
     * @var string                     $parse_mode             Optional. Mode for parsing entities in the message text. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]      $entities               Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
     * @var Types\LinkPreviewOptions   $link_preview_options   Optional. Link preview generation options for the message
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Message|bool
    */

    public function editMessageText(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                'text' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'link_preview_options' => [
                    'type' => [Types\LinkPreviewOptions::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited @see Types\Message is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id   Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                  Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id               Optional. Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string                     $inline_message_id        Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var string                     $caption                  Optional. New caption of the message, 0-1024 characters after entities parsing
     * @var string                     $parse_mode               Optional. Mode for parsing entities in the message caption. See [formatting options](#formatting-options) for more details.
     * @var Types\MessageEntity[]      $caption_entities         Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool                       $show_caption_above_media Optional. Pass *True*, if the caption must be shown above the message media. Supported only for animation, photo and video messages.
     * @var Types\InlineKeyboardMarkup $reply_markup             Optional. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Message|bool
    */

    public function editMessageCaption(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                'caption' => [
                    'type' => ['string'],
                ],
                'parse_mode' => [
                    'type' => ['string'],
                ],
                'caption_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
                'show_caption_above_media' => [
                    'type' => ['bool'],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit animation, audio, document, photo, or video messages, or to add media to text messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file\_id or specify a URL. On success, if the edited message is not an inline message, the edited @see Types\Message is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id             Optional. Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string                     $inline_message_id      Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var Types\InputMedia           $media                  Required. A JSON-serialized object for a new media content of the message
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for a new [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Message|bool
    */

    public function editMessageMedia(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                'media' => [
                    'type' => [Types\InputMedia::class],
                    'required' => true,
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit live location messages. A location can be edited until its *live\_period* expires or editing is explicitly disabled by a call to [stopMessageLiveLocation](#stopmessagelivelocation). On success, if the edited message is not an inline message, the edited @see Types\Message is returned, otherwise *True* is returned.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id             Optional. Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string                     $inline_message_id      Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var float                      $latitude               Required. Latitude of new location
     * @var float                      $longitude              Required. Longitude of new location
     * @var int                        $live_period            Optional. New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current *live\_period* by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then *live\_period* remains unchanged
     * @var float                      $horizontal_accuracy    Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @var int                        $heading                Optional. Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var int                        $proximity_alert_radius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for a new [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Message|bool
    */

    public function editMessageLiveLocation(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                'latitude' => [
                    'type' => ['float'],
                    'required' => true,
                ],
                'longitude' => [
                    'type' => ['float'],
                    'required' => true,
                ],
                'live_period' => [
                    'type' => ['int'],
                ],
                'horizontal_accuracy' => [
                    'type' => ['float'],
                ],
                'heading' => [
                    'type' => ['int'],
                ],
                'proximity_alert_radius' => [
                    'type' => ['int'],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to stop updating a live location message before *live\_period* expires. On success, if the message is not an inline message, the edited @see Types\Message is returned, otherwise *True* is returned.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id             Optional. Required if *inline\_message\_id* is not specified. Identifier of the message with live location to stop
     * @var string                     $inline_message_id      Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for a new [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Message|bool
    */

    public function stopMessageLiveLocation(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited @see Types\Message is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id             Optional. Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string                     $inline_message_id      Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Message|bool
    */

    public function editMessageReplyMarkup(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to stop a poll which was sent by the bot. On success, the stopped @see Types\Poll is returned.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @var int|string                 $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_id             Required. Identifier of the original message with the poll
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for a new message [inline keyboard](/bots/features#inline-keyboards).
     * ]
     *
     * @return Types\Poll
    */

    public function stopPoll(array $params = []): Types\Poll
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Poll::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete a message, including service messages, with the following limitations:  
\- A message can only be deleted if it was sent less than 48 hours ago.  
\- Service messages about a supergroup, channel, or forum topic creation can't be deleted.  
\- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.  
\- Bots can delete outgoing messages in private chats, groups, and supergroups.  
\- Bots can delete incoming messages in private chats.  
\- Bots granted *can\_post\_messages* permissions can delete outgoing messages in channels.  
\- If the bot is an administrator of a group, it can delete any message there.  
\- If the bot has *can\_delete\_messages* permission in a supergroup or a channel, it can delete any message there.  
Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id    Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int        $message_id Required. Identifier of the message to delete
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteMessage(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id     Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int[]      $message_ids Required. A JSON-serialized list of 1-100 identifiers of messages to delete. See [deleteMessage](#deletemessage) for limitations on which messages can be deleted
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteMessages(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_ids' => [
                    'type' => ['int'],
                    'isArray' => true,
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
     *
     * @param array    $params    [
     * @var int                             $user_id Required. User identifier
     * @var Passport\PassportElementError[] $errors  Required. A JSON-serialized array describing the errors
     * ]
     *
     * @return Base\BaseType
    */

    public function setPassportDataErrors(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'errors' => [
                    'type' => [Passport\PassportElementError::class],
                    'isArray' => true,
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send invoices. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var int|string                 $chat_id                       Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                        $message_thread_id             Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string                     $title                         Required. Product name, 1-32 characters
     * @var string                     $description                   Required. Product description, 1-255 characters
     * @var string                     $payload                       Required. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @var string                     $provider_token                Optional. Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var string                     $currency                      Required. Three-letter ISO 4217 currency code, see [more on currencies](/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var Payments\LabeledPrice[]    $prices                        Required. Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var int                        $max_tip_amount                Optional. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var int[]                      $suggested_tip_amounts         Optional. A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     * @var string                     $start_parameter               Optional. Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter
     * @var string                     $provider_data                 Optional. JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @var string                     $photo_url                     Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     * @var int                        $photo_size                    Optional. Photo size in bytes
     * @var int                        $photo_width                   Optional. Photo width
     * @var int                        $photo_height                  Optional. Photo height
     * @var bool                       $need_name                     Optional. Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $need_phone_number             Optional. Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $need_email                    Optional. Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $need_shipping_address         Optional. Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $send_phone_number_to_provider Optional. Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $send_email_to_provider        Optional. Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $is_flexible                   Optional. Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                       $disable_notification          Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                       $protect_content               Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                       $allow_paid_broadcast          Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                     $message_effect_id             Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters      $reply_parameters              Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup $reply_markup                  Optional. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.
     * ]
     *
     * @return Types\Message
    */

    public function sendInvoice(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'description' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'payload' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'provider_token' => [
                    'type' => ['string'],
                ],
                'currency' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'prices' => [
                    'type' => [Payments\LabeledPrice::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'max_tip_amount' => [
                    'type' => ['int'],
                ],
                'suggested_tip_amounts' => [
                    'type' => ['int'],
                    'isArray' => true,
                ],
                'start_parameter' => [
                    'type' => ['string'],
                ],
                'provider_data' => [
                    'type' => ['string'],
                ],
                'photo_url' => [
                    'type' => ['string'],
                ],
                'photo_size' => [
                    'type' => ['int'],
                ],
                'photo_width' => [
                    'type' => ['int'],
                ],
                'photo_height' => [
                    'type' => ['int'],
                ],
                'need_name' => [
                    'type' => ['bool'],
                ],
                'need_phone_number' => [
                    'type' => ['bool'],
                ],
                'need_email' => [
                    'type' => ['bool'],
                ],
                'need_shipping_address' => [
                    'type' => ['bool'],
                ],
                'send_phone_number_to_provider' => [
                    'type' => ['bool'],
                ],
                'send_email_to_provider' => [
                    'type' => ['bool'],
                ],
                'is_flexible' => [
                    'type' => ['bool'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to create a link for an invoice. Returns the created invoice link as *String* on success.
     *
     * @param array    $params    [
     * @var string                  $business_connection_id        Optional. Unique identifier of the business connection on behalf of which the link will be created. For payments in [Telegram Stars](https://t.me/BotNews/90) only.
     * @var string                  $title                         Required. Product name, 1-32 characters
     * @var string                  $description                   Required. Product description, 1-255 characters
     * @var string                  $payload                       Required. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @var string                  $provider_token                Optional. Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var string                  $currency                      Required. Three-letter ISO 4217 currency code, see [more on currencies](/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var Payments\LabeledPrice[] $prices                        Required. Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var int                     $subscription_period           Optional. The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 2500 Telegram Stars.
     * @var int                     $max_tip_amount                Optional. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var int[]                   $suggested_tip_amounts         Optional. A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     * @var string                  $provider_data                 Optional. JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @var string                  $photo_url                     Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @var int                     $photo_size                    Optional. Photo size in bytes
     * @var int                     $photo_width                   Optional. Photo width
     * @var int                     $photo_height                  Optional. Photo height
     * @var bool                    $need_name                     Optional. Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                    $need_phone_number             Optional. Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                    $need_email                    Optional. Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                    $need_shipping_address         Optional. Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                    $send_phone_number_to_provider Optional. Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                    $send_email_to_provider        Optional. Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * @var bool                    $is_flexible                   Optional. Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * ]
     *
     * @return Base\BaseType
    */

    public function createInvoiceLink(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'description' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'payload' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'provider_token' => [
                    'type' => ['string'],
                ],
                'currency' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'prices' => [
                    'type' => [Payments\LabeledPrice::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'subscription_period' => [
                    'type' => ['int'],
                ],
                'max_tip_amount' => [
                    'type' => ['int'],
                ],
                'suggested_tip_amounts' => [
                    'type' => ['int'],
                    'isArray' => true,
                ],
                'provider_data' => [
                    'type' => ['string'],
                ],
                'photo_url' => [
                    'type' => ['string'],
                ],
                'photo_size' => [
                    'type' => ['int'],
                ],
                'photo_width' => [
                    'type' => ['int'],
                ],
                'photo_height' => [
                    'type' => ['int'],
                ],
                'need_name' => [
                    'type' => ['bool'],
                ],
                'need_phone_number' => [
                    'type' => ['bool'],
                ],
                'need_email' => [
                    'type' => ['bool'],
                ],
                'need_shipping_address' => [
                    'type' => ['bool'],
                ],
                'send_phone_number_to_provider' => [
                    'type' => ['bool'],
                ],
                'send_email_to_provider' => [
                    'type' => ['bool'],
                ],
                'is_flexible' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *If you sent an invoice requesting a shipping address and the parameter *is\_flexible* was specified, the Bot API will send an @see Types\Update with a *shipping\_query* field to the bot. Use this method to reply to shipping queries. On success, *True* is returned.
     *
     * @param array    $params    [
     * @var string                    $shipping_query_id Required. Unique identifier for the query to be answered
     * @var bool                      $ok                Required. Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
     * @var Payments\ShippingOption[] $shipping_options  Optional. Required if *ok* is *True*. A JSON-serialized array of available shipping options.
     * @var string                    $error_message     Optional. Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.
     * ]
     *
     * @return Base\ParameterBool
    */

    public function answerShippingQuery(array $params = []): Base\ParameterBool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'shipping_query_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'ok' => [
                    'type' => ['bool'],
                    'required' => true,
                ],
                'shipping_options' => [
                    'type' => [Payments\ShippingOption::class],
                    'isArray' => true,
                ],
                'error_message' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Base\ParameterBool::class,
                ],
            ]
            
        );
    }

    /**
     *Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an @see Types\Update with the field *pre\_checkout\_query*. Use this method to respond to such pre-checkout queries. On success, *True* is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
     *
     * @param array    $params    [
     * @var string $pre_checkout_query_id Required. Unique identifier for the query to be answered
     * @var bool   $ok                    Required. Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
     * @var string $error_message         Optional. Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     * ]
     *
     * @return Base\ParameterBool
    */

    public function answerPreCheckoutQuery(array $params = []): Base\ParameterBool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'pre_checkout_query_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'ok' => [
                    'type' => ['bool'],
                    'required' => true,
                ],
                'error_message' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Base\ParameterBool::class,
                ],
            ]
            
        );
    }

    /**
     *Returns the bot's Telegram Star transactions in chronological order. On success, returns a @see Payments\StarTransactions object.
     *
     * @param array    $params    [
     * @var int $offset Optional. Number of transactions to skip in the response
     * @var int $limit  Optional. The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * ]
     *
     * @return Payments\StarTransactions
    */

    public function getStarTransactions(array $params = []): Payments\StarTransactions
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'offset' => [
                    'type' => ['int'],
                ],
                'limit' => [
                    'type' => ['int'],
                ],
                '@return' => [
                    'type' => Payments\StarTransactions::class,
                ],
            ]
            
        );
    }

    /**
     *Refunds a successful payment in [Telegram Stars](https://t.me/BotNews/90). Returns *True* on success.
     *
     * @param array    $params    [
     * @var int    $user_id                    Required. Identifier of the user whose payment will be refunded
     * @var string $telegram_payment_charge_id Required. Telegram payment identifier
     * ]
     *
     * @return Base\BaseType
    */

    public function refundStarPayment(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'telegram_payment_charge_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int    $user_id                    Required. Identifier of the user whose subscription will be edited
     * @var string $telegram_payment_charge_id Required. Telegram payment identifier for the subscription
     * @var bool   $is_canceled                Required. Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.
     * ]
     *
     * @return Base\BaseType
    */

    public function editUserStarSubscription(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'telegram_payment_charge_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'is_canceled' => [
                    'type' => ['bool'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send answers to an inline query. On success, *True* is returned.  
No more than **50** results per query are allowed.
     *
     * @param array    $params    [
     * @var string                              $inline_query_id Required. Unique identifier for the answered query
     * @var InlineMode\InlineQueryResult[]      $results         Required. A JSON-serialized array of results for the inline query
     * @var int                                 $cache_time      Optional. The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     * @var bool                                $is_personal     Optional. Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     * @var string                              $next_offset     Optional. Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     * @var InlineMode\InlineQueryResultsButton $button          Optional. A JSON-serialized object describing a button to be shown above inline query results
     * ]
     *
     * @return Base\BaseType
    */

    public function answerInlineQuery(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'inline_query_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'results' => [
                    'type' => [InlineMode\InlineQueryResult::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'cache_time' => [
                    'type' => ['int'],
                ],
                'is_personal' => [
                    'type' => ['bool'],
                ],
                'next_offset' => [
                    'type' => ['string'],
                ],
                'button' => [
                    'type' => [InlineMode\InlineQueryResultsButton::class],
                ],
            ]
            
        );
    }

    /**
     *Use this method to set the result of an interaction with a [Web App](/bots/webapps) and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a @see InlineMode\SentWebAppMessage object is returned.
     *
     * @param array    $params    [
     * @var string                       $web_app_query_id Required. Unique identifier for the query to be answered
     * @var InlineMode\InlineQueryResult $result           Required. A JSON-serialized object describing the message to be sent
     * ]
     *
     * @return InlineMode\SentWebAppMessage
    */

    public function answerWebAppQuery(array $params = []): InlineMode\SentWebAppMessage
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'web_app_query_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'result' => [
                    'type' => [InlineMode\InlineQueryResult::class],
                    'required' => true,
                ],
                '@return' => [
                    'type' => InlineMode\SentWebAppMessage::class,
                ],
            ]
            
        );
    }

    /**
     *Stores a message that can be sent by a user of a Mini App. Returns a @see InlineMode\PreparedInlineMessage object.
     *
     * @param array    $params    [
     * @var int                          $user_id             Required. Unique identifier of the target user that can use the prepared message
     * @var InlineMode\InlineQueryResult $result              Required. A JSON-serialized object describing the message to be sent
     * @var bool                         $allow_user_chats    Optional. Pass *True* if the message can be sent to private chats with users
     * @var bool                         $allow_bot_chats     Optional. Pass *True* if the message can be sent to private chats with bots
     * @var bool                         $allow_group_chats   Optional. Pass *True* if the message can be sent to group and supergroup chats
     * @var bool                         $allow_channel_chats Optional. Pass *True* if the message can be sent to channel chats
     * ]
     *
     * @return InlineMode\PreparedInlineMessage
    */

    public function savePreparedInlineMessage(array $params = []): InlineMode\PreparedInlineMessage
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'result' => [
                    'type' => [InlineMode\InlineQueryResult::class],
                    'required' => true,
                ],
                'allow_user_chats' => [
                    'type' => ['bool'],
                ],
                'allow_bot_chats' => [
                    'type' => ['bool'],
                ],
                'allow_group_chats' => [
                    'type' => ['bool'],
                ],
                'allow_channel_chats' => [
                    'type' => ['bool'],
                ],
                '@return' => [
                    'type' => InlineMode\PreparedInlineMessage::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send static .WEBP, [animated](https://telegram.org/blog/animated-stickers) .TGS, or [video](https://telegram.org/blog/video-stickers-better-reactions) .WEBM stickers. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                                                                                          $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int|string                                                                                      $chat_id                Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var int                                                                                             $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var Types\InputFile|string                                                                          $sticker                Required. Sticker to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. [More information on Sending Files »](#sending-files). Video and animated stickers can't be sent via an HTTP URL.
     * @var string                                                                                          $emoji                  Optional. Emoji associated with the sticker; only for just uploaded stickers
     * @var bool                                                                                            $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                                                                                            $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                                                                                            $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                                                                                          $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters                                                                           $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $reply_markup           Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
     * ]
     *
     * @return Types\Message
    */

    public function sendSticker(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'sticker' => [
                    'type' => [Types\InputFile::class, 'string'],
                    'required' => true,
                ],
                'emoji' => [
                    'type' => ['string'],
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get a sticker set. On success, a @see Stickers\StickerSet object is returned.
     *
     * @param array    $params    [
     * @var string $name Required. Name of the sticker set
     * ]
     *
     * @return Stickers\StickerSet
    */

    public function getStickerSet(array $params = []): Stickers\StickerSet
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Stickers\StickerSet::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of @see Stickers\Sticker objects.
     *
     * @param array    $params    [
     * @var string[] $custom_emoji_ids Required. A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     * ]
     *
     * @return Stickers\Sticker[]|Base\BaseType
    */

    public function getCustomEmojiStickers(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'custom_emoji_ids' => [
                    'type' => ['string'],
                    'isArray' => true,
                    'required' => true,
                ],
                '@return' => [
                    'type' => Stickers\Sticker::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to upload a file with a sticker for later use in the [createNewStickerSet](#createnewstickerset), [addStickerToSet](#addstickertoset), or [replaceStickerInSet](#replacestickerinset) methods (the file can be used multiple times). Returns the uploaded @see Types\File on success.
     *
     * @param array    $params    [
     * @var int             $user_id        Required. User identifier of sticker file owner
     * @var Types\InputFile $sticker        Required. A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See [](/stickers)<https://core.telegram.org/stickers> for technical requirements. [More information on Sending Files »](#sending-files)
     * @var string          $sticker_format Required. Format of the sticker, must be one of “static”, “animated”, “video”
     * ]
     *
     * @return Types\File
    */

    public function uploadStickerFile(array $params = []): Types\File
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'sticker' => [
                    'type' => [Types\InputFile::class],
                    'required' => true,
                ],
                'sticker_format' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                '@return' => [
                    'type' => Types\File::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int                     $user_id          Required. User identifier of created sticker set owner
     * @var string                  $name             Required. Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
     * @var string                  $title            Required. Sticker set title, 1-64 characters
     * @var Stickers\InputSticker[] $stickers         Required. A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     * @var string                  $sticker_type     Optional. Type of stickers in the set, pass “regular”, “mask”, or “custom\_emoji”. By default, a regular sticker set is created.
     * @var bool                    $needs_repainting Optional. Pass *True* if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
     * ]
     *
     * @return Base\BaseType
    */

    public function createNewStickerSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'stickers' => [
                    'type' => [Stickers\InputSticker::class],
                    'isArray' => true,
                    'required' => true,
                ],
                'sticker_type' => [
                    'type' => ['string'],
                ],
                'needs_repainting' => [
                    'type' => ['bool'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int                   $user_id Required. User identifier of sticker set owner
     * @var string                $name    Required. Sticker set name
     * @var Stickers\InputSticker $sticker Required. A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
     * ]
     *
     * @return Base\BaseType
    */

    public function addStickerToSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'sticker' => [
                    'type' => [Stickers\InputSticker::class],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $sticker  Required. File identifier of the sticker
     * @var int    $position Required. New sticker position in the set, zero-based
     * ]
     *
     * @return Base\BaseType
    */

    public function setStickerPositionInSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'sticker' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'position' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete a sticker from a set created by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $sticker Required. File identifier of the sticker
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteStickerFromSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'sticker' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling [deleteStickerFromSet](#deletestickerfromset), then [addStickerToSet](#addstickertoset), then [setStickerPositionInSet](#setstickerpositioninset). Returns *True* on success.
     *
     * @param array    $params    [
     * @var int                   $user_id     Required. User identifier of the sticker set owner
     * @var string                $name        Required. Sticker set name
     * @var string                $old_sticker Required. File identifier of the replaced sticker
     * @var Stickers\InputSticker $sticker     Required. A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
     * ]
     *
     * @return Base\BaseType
    */

    public function replaceStickerInSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'old_sticker' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'sticker' => [
                    'type' => [Stickers\InputSticker::class],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string   $sticker    Required. File identifier of the sticker
     * @var string[] $emoji_list Required. A JSON-serialized list of 1-20 emoji associated with the sticker
     * ]
     *
     * @return Base\BaseType
    */

    public function setStickerEmojiList(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'sticker' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'emoji_list' => [
                    'type' => ['string'],
                    'isArray' => true,
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string   $sticker  Required. File identifier of the sticker
     * @var string[] $keywords Optional. A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
     * ]
     *
     * @return Base\BaseType
    */

    public function setStickerKeywords(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'sticker' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'keywords' => [
                    'type' => ['string'],
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to change the [mask position](#maskposition) of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string                $sticker       Required. File identifier of the sticker
     * @var Stickers\MaskPosition $mask_position Optional. A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
     * ]
     *
     * @return Base\BaseType
    */

    public function setStickerMaskPosition(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'sticker' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'mask_position' => [
                    'type' => [Stickers\MaskPosition::class],
                ],
            ]
            
        );
    }

    /**
     *Use this method to set the title of a created sticker set. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $name  Required. Sticker set name
     * @var string $title Required. Sticker set title, 1-64 characters
     * ]
     *
     * @return Base\BaseType
    */

    public function setStickerSetTitle(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'title' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string                 $name      Required. Sticker set name
     * @var int                    $user_id   Required. User identifier of the sticker set owner
     * @var Types\InputFile|string $thumbnail Optional. A **.WEBP** or **.PNG** image with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly 100px, or a **.TGS** animation with a thumbnail up to 32 kilobytes in size (see [](/stickers#animation-requirements)<https://core.telegram.org/stickers#animation-requirements> for animated sticker technical requirements), or a **.WEBM** video with the thumbnail up to 32 kilobytes in size; see [](/stickers#video-requirements)<https://core.telegram.org/stickers#video-requirements> for video sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](#sending-files). Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is used as the thumbnail.
     * @var string                 $format    Required. Format of the thumbnail, must be one of “static” for a **.WEBP** or **.PNG** image, “animated” for a **.TGS** animation, or “video” for a **.WEBM** video
     * ]
     *
     * @return Base\BaseType
    */

    public function setStickerSetThumbnail(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'thumbnail' => [
                    'type' => [Types\InputFile::class, 'string'],
                ],
                'format' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to set the thumbnail of a custom emoji sticker set. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $name            Required. Sticker set name
     * @var string $custom_emoji_id Optional. Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
     * ]
     *
     * @return Base\BaseType
    */

    public function setCustomEmojiStickerSetThumbnail(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'custom_emoji_id' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Use this method to delete a sticker set that was created by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var string $name Required. Sticker set name
     * ]
     *
     * @return Base\BaseType
    */

    public function deleteStickerSet(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Returns the list of gifts that can be sent by the bot to users. Requires no parameters. Returns a @see Stickers\Gifts object.
     *
     *
     * @return Stickers\Gifts
    */

    public function getAvailableGifts(): Stickers\Gifts
    {
        return $this->query(
            __FUNCTION__,
            [],
            [
                '@return' => [
                    'type' => Stickers\Gifts::class,
                ],
            ]
            
        );
    }

    /**
     *Sends a gift to the given user. The gift can't be converted to Telegram Stars by the user. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int                   $user_id         Required. Unique identifier of the target user that will receive the gift
     * @var string                $gift_id         Required. Identifier of the gift
     * @var bool                  $pay_for_upgrade Optional. Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
     * @var string                $text            Optional. Text that will be shown along with the gift; 0-255 characters
     * @var string                $text_parse_mode Optional. Mode for parsing entities in the text. See [formatting options](#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
     * @var Types\MessageEntity[] $text_entities   Optional. A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text\_parse\_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
     * ]
     *
     * @return Base\BaseType
    */

    public function sendGift(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'gift_id' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'pay_for_upgrade' => [
                    'type' => ['bool'],
                ],
                'text' => [
                    'type' => ['string'],
                ],
                'text_parse_mode' => [
                    'type' => ['string'],
                ],
                'text_entities' => [
                    'type' => [Types\MessageEntity::class],
                    'isArray' => true,
                ],
            ]
            
        );
    }

    /**
     *Verifies a user [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int    $user_id            Required. Unique identifier of the target user
     * @var string $custom_description Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     * ]
     *
     * @return Base\BaseType
    */

    public function verifyUser(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'custom_description' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Verifies a chat [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id            Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string     $custom_description Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     * ]
     *
     * @return Base\BaseType
    */

    public function verifyChat(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
                'custom_description' => [
                    'type' => ['string'],
                ],
            ]
            
        );
    }

    /**
     *Removes verification from a user who is currently verified [on behalf of the organization](https://telegram.org/verify#third-party-verification) represented by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int $user_id Required. Unique identifier of the target user
     * ]
     *
     * @return Base\BaseType
    */

    public function removeUserVerification(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Removes verification from a chat that is currently verified [on behalf of the organization](https://telegram.org/verify#third-party-verification) represented by the bot. Returns *True* on success.
     *
     * @param array    $params    [
     * @var int|string $chat_id Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * ]
     *
     * @return Base\BaseType
    */

    public function removeChatVerification(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'chat_id' => [
                    'type' => ['int', 'string'],
                    'required' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to send a game. On success, the sent @see Types\Message is returned.
     *
     * @param array    $params    [
     * @var string                     $business_connection_id Optional. Unique identifier of the business connection on behalf of which the message will be sent
     * @var int                        $chat_id                Required. Unique identifier for the target chat
     * @var int                        $message_thread_id      Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string                     $game_short_name        Required. Short name of the game, serves as the unique identifier for the game. Set up your games via [@BotFather](https://t.me/botfather).
     * @var bool                       $disable_notification   Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool                       $protect_content        Optional. Protects the contents of the sent message from forwarding and saving
     * @var bool                       $allow_paid_broadcast   Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @var string                     $message_effect_id      Optional. Unique identifier of the message effect to be added to the message; for private chats only
     * @var Types\ReplyParameters      $reply_parameters       Optional. Description of the message to reply to
     * @var Types\InlineKeyboardMarkup $reply_markup           Optional. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards). If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.
     * ]
     *
     * @return Types\Message
    */

    public function sendGame(array $params = []): Types\Message
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'business_connection_id' => [
                    'type' => ['string'],
                ],
                'chat_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'message_thread_id' => [
                    'type' => ['int'],
                ],
                'game_short_name' => [
                    'type' => ['string'],
                    'required' => true,
                ],
                'disable_notification' => [
                    'type' => ['bool'],
                ],
                'protect_content' => [
                    'type' => ['bool'],
                ],
                'allow_paid_broadcast' => [
                    'type' => ['bool'],
                ],
                'message_effect_id' => [
                    'type' => ['string'],
                ],
                'reply_parameters' => [
                    'type' => [Types\ReplyParameters::class],
                ],
                'reply_markup' => [
                    'type' => [Types\InlineKeyboardMarkup::class],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                ],
            ]
            
        );
    }

    /**
     *Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the @see Types\Message is returned, otherwise *True* is returned. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
     *
     * @param array    $params    [
     * @var int    $user_id              Required. User identifier
     * @var int    $score                Required. New score, must be non-negative
     * @var bool   $force                Optional. Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     * @var bool   $disable_edit_message Optional. Pass *True* if the game message should not be automatically edited to include the current scoreboard
     * @var int    $chat_id              Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     * @var int    $message_id           Optional. Required if *inline\_message\_id* is not specified. Identifier of the sent message
     * @var string $inline_message_id    Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * ]
     *
     * @return Types\Message|bool
    */

    public function setGameScore(array $params = []): Types\Message|bool
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'score' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'force' => [
                    'type' => ['bool'],
                ],
                'disable_edit_message' => [
                    'type' => ['bool'],
                ],
                'chat_id' => [
                    'type' => ['int'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Types\Message::class,
                    'canReturnBool' => true,
                ],
            ]
            
        );
    }

    /**
     *Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of @see Games\GameHighScore objects.
     *
     * @param array    $params    [
     * @var int    $user_id           Required. Target user id
     * @var int    $chat_id           Optional. Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     * @var int    $message_id        Optional. Required if *inline\_message\_id* is not specified. Identifier of the sent message
     * @var string $inline_message_id Optional. Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * ]
     *
     * @return Games\GameHighScore[]|Base\BaseType
    */

    public function getGameHighScores(array $params = []): Base\BaseType
    {
        return $this->query(
            __FUNCTION__,
            $params,
            [
                'user_id' => [
                    'type' => ['int'],
                    'required' => true,
                ],
                'chat_id' => [
                    'type' => ['int'],
                ],
                'message_id' => [
                    'type' => ['int'],
                ],
                'inline_message_id' => [
                    'type' => ['string'],
                ],
                '@return' => [
                    'type' => Games\GameHighScore::class,
                    'isArray' => true,
                ],
            ]
            
        );
    }

}