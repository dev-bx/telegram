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

namespace DevBX\Telegram;

/**
 * Клиент Telegram Bot API 10.3: по одному методу на каждый метод Bot API.
 *
 * Транспорт реализуют наследники: GuzzleClient (Guzzle), PsrClient (любой PSR-18), BitrixClient (1С-Битрикс).
 * Каждый метод собирает запрос Requests\<Метод>, проверяет обязательные параметры и выполняет его.
 * Ошибки Telegram в строгом режиме (по умолчанию) — исключения Base\TelegramException и наследники.
 *
 * @link https://core.telegram.org/bots/api
 */
class Api extends Base\Api
{
    /**
     * Use this method to receive incoming updates using long polling ([wiki](https://en.wikipedia.org/wiki/Push_technology#Long_polling)). Returns an Array of `Update` objects.
     *
     * **Notes**
     * **1.** This method will not work if an outgoing webhook is set up.
     * **2.** In order to avoid getting duplicate updates, recalculate *offset* after each server response.
     *
     * @link https://core.telegram.org/bots/api#getupdates
     *
     * @param array{
     *     offset?: int, // Optional. Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as `getUpdates` is called with an *offset* higher than its *update_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will be forgotten.
     *     limit?: int, // Optional. Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *     timeout?: int, // Optional. Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     *     allowed_updates?: list<string>|Base\ArrayObject<Base\ParameterString>, // Optional. A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See `Update` for a complete list of available update types. Specify an empty list to receive all update types except *chat_member*, *message_reaction*, and *message_reaction_count* (default). If not specified, the previous setting will be used. Please note that this parameter doesn't affect updates created before the call to getUpdates, so unwanted updates may be received for a short period of time.
     * } $params
     * @return Base\ArrayObject<Types\Update>
     * @throws Base\TelegramException
     */
    public function getUpdates(array $params = []): Base\ArrayObject
    {
        return Requests\GetUpdates::create($params)->send($this);
    }

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized `Update`. In case of an unsuccessful request (a request with response [HTTP status code](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes) different from `2XY`), we will repeat the request and give up after a reasonable amount of attempts. Returns *True* on success.
     *
     * If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter *secret_token*. If specified, the request will contain a header “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.
     *
     * **Notes**
     * **1.** You will not be able to receive updates using `getUpdates` for as long as an outgoing webhook is set up.
     * **2.** To use a self-signed certificate, you need to upload your [public key certificate](https://core.telegram.org/bots/self-signed) using *certificate* parameter. Please upload as InputFile, sending a String will not work.
     * **3.** Ports currently supported *for webhooks*: **443, 80, 88, 8443**.
     *
     * If you're having any trouble setting up webhooks, please check out this [amazing guide to webhooks](https://core.telegram.org/bots/webhooks).
     *
     * @link https://core.telegram.org/bots/api#setwebhook
     *
     * @param array{
     *     url: string, // Required. HTTPS URL to send updates to. Use an empty string to remove webhook integration.
     *     certificate?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}, // Optional. Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](https://core.telegram.org/bots/self-signed) for details.
     *     ip_address?: string, // Optional. The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     *     max_connections?: int, // Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     *     allowed_updates?: list<string>|Base\ArrayObject<Base\ParameterString>, // Optional. A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See `Update` for a complete list of available update types. Specify an empty list to receive all update types except *chat_member*, *message_reaction*, and *message_reaction_count* (default). If not specified, the previous setting will be used. Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     *     drop_pending_updates?: bool, // Optional. Pass *True* to drop all pending updates
     *     secret_token?: string, // Optional. A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setWebhook(array $params): Base\ParameterBool
    {
        return Requests\SetWebhook::create($params)->send($this);
    }

    /**
     * Use this method to remove webhook integration if you decide to switch back to `getUpdates`. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletewebhook
     *
     * @param array{
     *     drop_pending_updates?: bool, // Optional. Pass *True* to drop all pending updates
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteWebhook(array $params = []): Base\ParameterBool
    {
        return Requests\DeleteWebhook::create($params)->send($this);
    }

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a `WebhookInfo` object. If the bot is using `getUpdates`, will return an object with the *url* field empty.
     *
     * @link https://core.telegram.org/bots/api#getwebhookinfo
     *
     * @return Types\WebhookInfo
     * @throws Base\TelegramException
     */
    public function getWebhookInfo(): Types\WebhookInfo
    {
        return Requests\GetWebhookInfo::create()->send($this);
    }

    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a `User` object.
     *
     * @link https://core.telegram.org/bots/api#getme
     *
     * @return Types\User
     * @throws Base\TelegramException
     */
    public function getMe(): Types\User
    {
        return Requests\GetMe::create()->send($this);
    }

    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You **must** log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns *True* on success. Requires no parameters.
     *
     * @link https://core.telegram.org/bots/api#logout
     *
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function logOut(): Base\ParameterBool
    {
        return Requests\LogOut::create()->send($this);
    }

    /**
     * Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns *True* on success. Requires no parameters.
     *
     * @link https://core.telegram.org/bots/api#close
     *
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function close(): Base\ParameterBool
    {
        return Requests\Close::create()->send($this);
    }

    /**
     * Use this method to send text messages. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendmessage
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     text: string, // Required. Text of the message to be sent, 1-4096 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
     *     link_preview_options?: Types\LinkPreviewOptions|array<string, mixed>, // Optional. Link preview generation options for the message
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendMessage(array $params): Types\Message
    {
        return Requests\SendMessage::create($params)->send($this);
    }

    /**
     * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#forwardmessage
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be forwarded; required if the message is forwarded to a direct messages chat
     *     from_chat_id: int|string, // Required. Unique identifier for the chat where the original message was sent (or username of the target bot, supergroup or channel in the format `@username`)
     *     video_start_timestamp?: int, // Optional. New start timestamp for the forwarded video in the message
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the forwarded message from forwarding and saving
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; only available when forwarding to private chats
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only
     *     message_id: int, // Required. Message identifier in the chat specified in *from_chat_id*
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function forwardMessage(array $params): Types\Message
    {
        return Requests\ForwardMessage::create($params)->send($this);
    }

    /**
     * Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an Array of `MessageId` of the sent messages is returned.
     *
     * @link https://core.telegram.org/bots/api#forwardmessages
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the messages will be forwarded; required if the messages are forwarded to a direct messages chat
     *     from_chat_id: int|string, // Required. Unique identifier for the chat where the original messages were sent (or username of the target bot, supergroup or channel in the format `@username`)
     *     message_ids: list<int>|Base\ArrayObject<Base\ParameterInt>, // Required. A JSON-serialized list of 1-100 identifiers of messages in the chat *from_chat_id* to forward. The identifiers must be specified in a strictly increasing order.
     *     disable_notification?: bool, // Optional. Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the forwarded messages from forwarding and saving
     * } $params
     * @return Base\ArrayObject<Types\MessageId>
     * @throws Base\TelegramException
     */
    public function forwardMessages(array $params): Base\ArrayObject
    {
        return Requests\ForwardMessages::create($params)->send($this);
    }

    /**
     * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz `Poll` can be copied only if the value of the field *correct_option_ids* is known to the bot. The method is analogous to the method `forwardMessage`, but the copied message doesn't have a link to the original message. Returns the `MessageId` of the sent message on success.
     *
     * @link https://core.telegram.org/bots/api#copymessage
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     from_chat_id: int|string, // Required. Unique identifier for the chat where the original message was sent (or username of the target bot, supergroup or channel in the format `@username`)
     *     message_id: int, // Required. Message identifier in the chat specified in *from_chat_id*
     *     video_start_timestamp?: int, // Optional. New start timestamp for the copied video in the message
     *     caption?: string, // Optional. New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept.
     *     parse_mode?: string, // Optional. Mode for parsing entities in the new caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media. Ignored if a new caption isn't specified.
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; only available when copying to private chats
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\MessageId
     * @throws Base\TelegramException
     */
    public function copyMessage(array $params): Types\MessageId
    {
        return Requests\CopyMessage::create($params)->send($this);
    }

    /**
     * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz `Poll` can be copied only if the value of the field *correct_option_ids* is known to the bot. The method is analogous to the method `forwardMessages`, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an Array of `MessageId` of the sent messages is returned.
     *
     * @link https://core.telegram.org/bots/api#copymessages
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
     *     from_chat_id: int|string, // Required. Unique identifier for the chat where the original messages were sent (or username of the target bot, supergroup or channel in the format `@username`)
     *     message_ids: list<int>|Base\ArrayObject<Base\ParameterInt>, // Required. A JSON-serialized list of 1-100 identifiers of messages in the chat *from_chat_id* to copy. The identifiers must be specified in a strictly increasing order.
     *     disable_notification?: bool, // Optional. Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent messages from forwarding and saving
     *     remove_caption?: bool, // Optional. Pass *True* to copy the messages without their captions
     * } $params
     * @return Base\ArrayObject<Types\MessageId>
     * @throws Base\TelegramException
     */
    public function copyMessages(array $params): Base\ArrayObject
    {
        return Requests\CopyMessages::create($params)->send($this);
    }

    /**
     * Use this method to send photos. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendphoto
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     photo: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     caption?: string, // Optional. Photo caption (may also be used when resending photos by *file_id*), 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the photo caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media
     *     has_spoiler?: bool, // Optional. Pass *True* if the photo needs to be covered with a spoiler animation
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendPhoto(array $params): Types\Message
    {
        return Requests\SendPhoto::create($params)->send($this);
    }

    /**
     * Use this method to send live photos. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendlivephoto
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     live_photo: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Live photo video to send. The video must be no longer than 10 seconds and must not exceed 10 MB in size. Pass a file_id as String to send a video that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files). Sending live photos by a URL is currently unsupported.
     *     photo: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. The static photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files). Sending live photos by a URL is currently unsupported.
     *     caption?: string, // Optional. Video caption (may also be used when resending videos by *file_id*), 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media
     *     has_spoiler?: bool, // Optional. Pass *True* if the video needs to be covered with a spoiler animation
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendLivePhoto(array $params): Types\Message
    {
        return Requests\SendLivePhoto::create($params)->send($this);
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent `Message` is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     *
     * For sending voice messages, use the `sendVoice` method instead.
     *
     * @link https://core.telegram.org/bots/api#sendaudio
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     audio: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     caption?: string, // Optional. Audio caption, 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     duration?: int, // Optional. Duration of the audio in seconds
     *     performer?: string, // Optional. Performer
     *     title?: string, // Optional. Track name
     *     thumbnail?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendAudio(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendAudio::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send general files. On success, the sent `Message` is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @link https://core.telegram.org/bots/api#senddocument
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     document: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     thumbnail?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     caption?: string, // Optional. Document caption (may also be used when resending documents by *file_id*), 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     disable_content_type_detection?: bool, // Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendDocument(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendDocument::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as `Document`). On success, the sent `Message` is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @link https://core.telegram.org/bots/api#sendvideo
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     video: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     duration?: int, // Optional. Duration of sent video in seconds
     *     width?: int, // Optional. Video width
     *     height?: int, // Optional. Video height
     *     thumbnail?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     cover?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     start_timestamp?: int, // Optional. Start timestamp for the video in the message
     *     caption?: string, // Optional. Video caption (may also be used when resending videos by *file_id*), 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media
     *     has_spoiler?: bool, // Optional. Pass *True* if the video needs to be covered with a spoiler animation
     *     supports_streaming?: bool, // Optional. Pass *True* if the uploaded video is suitable for streaming
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendVideo(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendVideo::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent `Message` is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @link https://core.telegram.org/bots/api#sendanimation
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     animation: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     duration?: int, // Optional. Duration of sent animation in seconds
     *     width?: int, // Optional. Animation width
     *     height?: int, // Optional. Animation height
     *     thumbnail?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     caption?: string, // Optional. Animation caption (may also be used when resending animation by *file_id*), 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the animation caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media
     *     has_spoiler?: bool, // Optional. Pass *True* if the animation needs to be covered with a spoiler animation
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendAnimation(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendAnimation::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats may be sent as `Audio` or `Document`). On success, the sent `Message` is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @link https://core.telegram.org/bots/api#sendvoice
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     voice: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     caption?: string, // Optional. Voice message caption, 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the voice message caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     duration?: int, // Optional. Duration of the voice message in seconds
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendVoice(array $params): Types\Message
    {
        return Requests\SendVoice::create($params)->send($this);
    }

    /**
     * Use this method to send a rounded square MPEG4 video of up to 1 minute long. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendvideonote
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     video_note: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files). Sending video notes by a URL is currently unsupported.
     *     duration?: int, // Optional. Duration of sent video in seconds
     *     length?: int, // Optional. Video width and height, i.e. diameter of the video message
     *     thumbnail?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendVideoNote(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendVideoNote::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send paid media. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendpaidmedia
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     star_count: int, // Required. The number of Telegram Stars that must be paid to buy access to the media; 1-25000
     *     media: list<Types\InputPaidMedia|array<string, mixed>>|Base\ArrayObject<Types\InputPaidMedia>, // Required. A JSON-serialized Array describing the media to be sent; up to 10 items
     *     payload?: string, // Optional. Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
     *     caption?: string, // Optional. Media caption, 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the media caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendPaidMedia(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendPaidMedia::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send a group of photos, live photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an Array of `Message` objects that were sent is returned.
     *
     * @link https://core.telegram.org/bots/api#sendmediagroup
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
     *     media: list<Types\InputMediaAudio|array<string, mixed>|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaPhoto|Types\InputMediaVideo>|Base\ArrayObject<Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaPhoto|Types\InputMediaVideo>, // Required. A JSON-serialized Array describing messages to be sent, must include 2-10 items
     *     disable_notification?: bool, // Optional. Sends messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent messages from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ArrayObject<Types\Message>
     * @throws Base\TelegramException
     */
    public function sendMediaGroup(array $params, array $attachments = []): Base\ArrayObject
    {
        return Requests\SendMediaGroup::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send point on the map. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendlocation
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     latitude: float|int, // Required. Latitude of the location
     *     longitude: float|int, // Required. Longitude of the location
     *     horizontal_accuracy?: float|int, // Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     *     live_period?: int, // Optional. Period in seconds during which the location will be updated (see [Live Locations](https://telegram.org/blog/live-locations)), must be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely. Must be 0 for ephemeral messages.
     *     heading?: int, // Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *     proximity_alert_radius?: int, // Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendLocation(array $params): Types\Message
    {
        return Requests\SendLocation::create($params)->send($this);
    }

    /**
     * Use this method to send information about a venue. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendvenue
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     latitude: float|int, // Required. Latitude of the venue
     *     longitude: float|int, // Required. Longitude of the venue
     *     title: string, // Required. Name of the venue
     *     address: string, // Required. Address of the venue
     *     foursquare_id?: string, // Optional. Foursquare identifier of the venue
     *     foursquare_type?: string, // Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     *     google_place_id?: string, // Optional. Google Places identifier of the venue
     *     google_place_type?: string, // Optional. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendVenue(array $params): Types\Message
    {
        return Requests\SendVenue::create($params)->send($this);
    }

    /**
     * Use this method to send phone contacts. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendcontact
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     phone_number: string, // Required. Contact's phone number
     *     first_name: string, // Required. Contact's first name
     *     last_name?: string, // Optional. Contact's last name
     *     vcard?: string, // Optional. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendContact(array $params): Types\Message
    {
        return Requests\SendContact::create($params)->send($this);
    }

    /**
     * Use this method to send a native poll. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendpoll
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. Polls can't be sent to channel direct messages chats.
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     question: string, // Required. Poll question, 1-300 characters
     *     question_parse_mode?: string, // Optional. Mode for parsing entities in the question. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Currently, only custom emoji entities are allowed.
     *     question_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question_parse_mode*.
     *     options: list<Types\InputPollOption|array<string, mixed>>|Base\ArrayObject<Types\InputPollOption>, // Required. A JSON-serialized list of 1-12 answer options
     *     is_anonymous?: bool, // Optional. *True*, if the poll needs to be anonymous, defaults to *True*
     *     type?: string, // Optional. Poll type, “quiz” or “regular”, defaults to “regular”
     *     allows_multiple_answers?: bool, // Optional. Pass *True* if the poll allows multiple answers, defaults to *False*
     *     allows_revoting?: bool, // Optional. Pass *True* if the poll allows to change chosen answer options, defaults to *False* for quizzes and to *True* for regular polls
     *     shuffle_options?: bool, // Optional. Pass *True* if the poll options must be shown in random order
     *     allow_adding_options?: bool, // Optional. Pass *True* if answer options can be added to the poll after creation; not supported for anonymous polls and quizzes
     *     hide_results_until_closes?: bool, // Optional. Pass *True* if poll results must be shown only after the poll closes
     *     members_only?: bool, // Optional. Pass *True* if voting is limited to users who have been members of the chat where the poll is being sent for more than 24 hours; for channel chats only
     *     country_codes?: list<string>|Base\ArrayObject<Base\ParameterString>, // Optional. A JSON-serialized list of 0-12 two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which users can vote in the poll; for channel chats only. Use “FT” as a country code to allow users with anonymous numbers to vote. If omitted or empty, then users from any country can participate in the poll.
     *     correct_option_ids?: list<int>|Base\ArrayObject<Base\ParameterInt>, // Optional. A JSON-serialized list of monotonically increasing 0-based identifiers of the correct answer options, required for polls in quiz mode
     *     explanation?: string, // Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     *     explanation_parse_mode?: string, // Optional. Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     explanation_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation_parse_mode*.
     *     explanation_media?: Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|array<string, mixed>, // Optional. Media added to the quiz explanation
     *     open_period?: int, // Optional. Amount of time in seconds the poll will be active after creation, 5-2628000. Can't be used together with *close_date*.
     *     close_date?: int, // Optional. Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 2628000 seconds in the future. Can't be used together with *open_period*.
     *     is_closed?: bool, // Optional. Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
     *     description?: string, // Optional. Description of the poll to be sent, 0-1024 characters after entities parsing
     *     description_parse_mode?: string, // Optional. Mode for parsing entities in the poll description. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     description_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the poll description, which can be specified instead of *description_parse_mode*
     *     media?: Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|array<string, mixed>, // Optional. Media added to the poll description
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendPoll(array $params, array $attachments = []): Types\Message
    {
        return Requests\SendPoll::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to send a checklist on behalf of a connected business account. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendchecklist
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot in the format `@username`
     *     checklist: Types\InputChecklist|array<string, mixed>, // Required. A JSON-serialized object for the checklist to send
     *     disable_notification?: bool, // Optional. Sends the message silently. Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. A JSON-serialized object for description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendChecklist(array $params): Types\Message
    {
        return Requests\SendChecklist::create($params)->send($this);
    }

    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#senddice
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     emoji?: string, // Optional. Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”.
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendDice(array $params): Types\Message
    {
        return Requests\SendDice::create($params)->send($this);
    }

    /**
     * Use this method to stream a partial message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you **must** call `sendMessage` with the complete message to persist it in the user's chat. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#sendmessagedraft
     *
     * @param array{
     *     chat_id: int, // Required. Unique identifier for the target private chat
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread
     *     draft_id: int, // Required. Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated. Otherwise, the draft is replaced without animation.
     *     text?: string, // Optional. Text of the message to be sent, 0-4096 characters after entities parsing. Pass an empty text to show a “Thinking…” placeholder.
     *     parse_mode?: string, // Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
     *     can_stop?: bool, // Optional. Pass *True* to show the user a button to stop further drafts. The bot will receive an `Update` “stopped_message_generation” if the user presses the button.
     *     keep_on_stop?: bool, // Optional. Pass *True* to keep the draft in the chat when the button is pressed. The draft will still disappear after a short time or if the bot sends a message. To fully preserve the partial draft, the bot should send it as a new message.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function sendMessageDraft(array $params): Base\ParameterBool
    {
        return Requests\SendMessageDraft::create($params)->send($this);
    }

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns *True* on success.
     *
     * Example: The [ImageBot](https://t.me/imagebot) needs some time to process a request and upload the image. Instead of sending a text message along the lines of “Retrieving image, please wait…”, the bot may use `sendChatAction` with *action* = *upload_photo*. The user will see a “sending photo” status for the bot.
     *
     * We only recommend using this method when a response from the bot will take a **noticeable** amount of time to arrive.
     *
     * @link https://core.telegram.org/bots/api#sendchataction
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the action will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot or supergroup in the format `@username`. Channel chats and channel direct messages chats aren't supported.
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread or topic of a forum; for supergroups and private chats of bots with forum topic mode enabled only
     *     action: string, // Required. Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for `sendMessage`, *upload_photo* for `sendPhoto`, *record_video* or *upload_video* for `sendVideo`, *record_voice* or *upload_voice* for `sendVoice`, *upload_document* for `sendDocument`, *choose_sticker* for `sendSticker`, *find_location* for `sendLocation`, *record_video_note* or *upload_video_note* for `sendVideoNote`.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function sendChatAction(array $params): Base\ParameterBool
    {
        return Requests\SendChatAction::create($params)->send($this);
    }

    /**
     * Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmessagereaction
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_id: int, // Required. Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
     *     reaction?: list<Types\ReactionType|array<string, mixed>>|Base\ArrayObject<Types\ReactionType>, // Optional. A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
     *     is_big?: bool, // Optional. Pass *True* to set the reaction with a big animation
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMessageReaction(array $params): Base\ParameterBool
    {
        return Requests\SetMessageReaction::create($params)->send($this);
    }

    /**
     * Use this method to get a list of profile pictures for a user. Returns a `UserProfilePhotos` object.
     *
     * @link https://core.telegram.org/bots/api#getuserprofilephotos
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user
     *     offset?: int, // Optional. Sequential number of the first photo to be returned. By default, all photos are returned.
     *     limit?: int, // Optional. Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * } $params
     * @return Types\UserProfilePhotos
     * @throws Base\TelegramException
     */
    public function getUserProfilePhotos(array $params): Types\UserProfilePhotos
    {
        return Requests\GetUserProfilePhotos::create($params)->send($this);
    }

    /**
     * Use this method to get a list of profile audios for a user. Returns a `UserProfileAudios` object.
     *
     * @link https://core.telegram.org/bots/api#getuserprofileaudios
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user
     *     offset?: int, // Optional. Sequential number of the first audio to be returned. By default, all audios are returned.
     *     limit?: int, // Optional. Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * } $params
     * @return Types\UserProfileAudios
     * @throws Base\TelegramException
     */
    public function getUserProfileAudios(array $params): Types\UserProfileAudios
    {
        return Requests\GetUserProfileAudios::create($params)->send($this);
    }

    /**
     * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method [requestEmojiStatusAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps). Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setuseremojistatus
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user
     *     emoji_status_custom_emoji_id?: string, // Optional. Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
     *     emoji_status_expiration_date?: int, // Optional. Expiration date of the emoji status, if any
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setUserEmojiStatus(array $params): Base\ParameterBool
    {
        return Requests\SetUserEmojiStatus::create($params)->send($this);
    }

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a `File` object is returned. The file can then be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`, where `<file_path>` is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling `getFile` again.
     *
     * **Note:** This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
     *
     * @link https://core.telegram.org/bots/api#getfile
     *
     * @param array{
     *     file_id: string, // Required. File identifier to get information about
     * } $params
     * @return Types\File
     * @throws Base\TelegramException
     */
    public function getFile(array $params): Types\File
    {
        return Requests\GetFile::create($params)->send($this);
    }

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless `unbanChatMember` first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#banchatmember
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target group or username of the target supergroup or channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     *     until_date?: int, // Optional. Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     *     revoke_messages?: bool, // Optional. Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function banChatMember(array $params): Base\ParameterBool
    {
        return Requests\BanChatMember::create($params)->send($this);
    }

    /**
     * Use this method to unban a previously banned user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only_if_banned*. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unbanchatmember
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target group or username of the target supergroup or channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     *     only_if_banned?: bool, // Optional. Do nothing if the user is not banned
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unbanChatMember(array $params): Base\ParameterBool
    {
        return Requests\UnbanChatMember::create($params)->send($this);
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#restrictchatmember
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     *     permissions: Types\ChatPermissions|array<string, mixed>, // Required. A JSON-serialized object for new user permissions
     *     use_independent_chat_permissions?: bool, // Optional. Pass *True* if chat permissions are set independently. Otherwise, the *can_send_other_messages* and *can_add_web_page_previews* permissions will imply the *can_send_messages*, *can_send_audios*, *can_send_documents*, *can_send_photos*, *can_send_videos*, *can_send_video_notes*, and *can_send_voice_notes* permissions; the *can_send_polls* permission will imply the *can_send_messages* permission.
     *     until_date?: int, // Optional. Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function restrictChatMember(array $params): Base\ParameterBool
    {
        return Requests\RestrictChatMember::create($params)->send($this);
    }

    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#promotechatmember
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     *     is_anonymous?: bool, // Optional. Pass *True* if the administrator's presence in the chat is hidden
     *     can_manage_chat?: bool, // Optional. Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
     *     can_delete_messages?: bool, // Optional. Pass *True* if the administrator can delete messages of other users
     *     can_manage_video_chats?: bool, // Optional. Pass *True* if the administrator can manage video chats
     *     can_restrict_members?: bool, // Optional. Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics. For backward compatibility, defaults to *True* for promotions of channel administrators.
     *     can_promote_members?: bool, // Optional. Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
     *     can_change_info?: bool, // Optional. Pass *True* if the administrator can change chat title, photo and other settings
     *     can_invite_users?: bool, // Optional. Pass *True* if the administrator can invite new users to the chat
     *     can_post_stories?: bool, // Optional. Pass *True* if the administrator can post stories to the chat
     *     can_edit_stories?: bool, // Optional. Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     *     can_delete_stories?: bool, // Optional. Pass *True* if the administrator can delete stories posted by other users
     *     can_post_messages?: bool, // Optional. Pass *True* if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
     *     can_edit_messages?: bool, // Optional. Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only
     *     can_pin_messages?: bool, // Optional. Pass *True* if the administrator can pin messages; for supergroups only
     *     can_manage_topics?: bool, // Optional. Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     *     can_manage_direct_messages?: bool, // Optional. Pass *True* if the administrator can manage direct messages within the channel and decline suggested posts; for channels only
     *     can_manage_tags?: bool, // Optional. Pass *True* if the administrator can edit the tags of regular members; for groups and supergroups only
     *     can_send_welcome_messages?: bool, // Optional. Pass *True* if the administrator can manage chat welcome messages or directly send them in the case of bots
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function promoteChatMember(array $params): Base\ParameterBool
    {
        return Requests\PromoteChatMember::create($params)->send($this);
    }

    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatadministratorcustomtitle
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     *     custom_title: string, // Required. New custom title for the administrator; 0-16 characters, emoji are not allowed
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatAdministratorCustomTitle(array $params): Base\ParameterBool
    {
        return Requests\SetChatAdministratorCustomTitle::create($params)->send($this);
    }

    /**
     * Use this method to set a tag for a regular member in a group or a supergroup. The bot must be an administrator in the chat for this to work and must have the *can_manage_tags* administrator right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatmembertag
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     *     tag?: string, // Optional. New tag for the member; 0-16 characters, emoji are not allowed
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatMemberTag(array $params): Base\ParameterBool
    {
        return Requests\SetChatMemberTag::create($params)->send($this);
    }

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is `unbanChatSenderChat`, the owner of the banned chat won't be able to send messages on behalf of **any of their channels**. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#banchatsenderchat
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     sender_chat_id: int, // Required. Unique identifier of the target sender chat
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function banChatSenderChat(array $params): Base\ParameterBool
    {
        return Requests\BanChatSenderChat::create($params)->send($this);
    }

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unbanchatsenderchat
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     sender_chat_id: int, // Required. Unique identifier of the target sender chat
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unbanChatSenderChat(array $params): Base\ParameterBool
    {
        return Requests\UnbanChatSenderChat::create($params)->send($this);
    }

    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the *can_restrict_members* administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatpermissions
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     permissions: Types\ChatPermissions|array<string, mixed>, // Required. A JSON-serialized object for new default chat permissions
     *     use_independent_chat_permissions?: bool, // Optional. Pass *True* if chat permissions are set independently. Otherwise, the *can_send_other_messages* and *can_add_web_page_previews* permissions will imply the *can_send_messages*, *can_send_audios*, *can_send_documents*, *can_send_photos*, *can_send_videos*, *can_send_video_notes*, and *can_send_voice_notes* permissions; the *can_send_polls* permission will imply the *can_send_messages* permission.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatPermissions(array $params): Base\ParameterBool
    {
        return Requests\SetChatPermissions::create($params)->send($this);
    }

    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as *String* on success.
     *
     * Note: Each administrator in a chat generates their own invite links. Bots can't use invite links generated by other administrators. If you want your bot to work with invite links, it will need to generate its own link using `exportChatInviteLink` or by calling the `getChat` method. If your bot needs to generate a new primary invite link replacing its previous one, use `exportChatInviteLink` again.
     *
     * @link https://core.telegram.org/bots/api#exportchatinvitelink
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     * } $params
     * @return Base\ParameterString
     * @throws Base\TelegramException
     */
    public function exportChatInviteLink(array $params): Base\ParameterString
    {
        return Requests\ExportChatInviteLink::create($params)->send($this);
    }

    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method `revokeChatInviteLink`. Returns the new invite link as `ChatInviteLink` object.
     *
     * @link https://core.telegram.org/bots/api#createchatinvitelink
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     name?: string, // Optional. Invite link name; 0-32 characters
     *     expire_date?: int, // Optional. Point in time (Unix timestamp) when the link will expire
     *     member_limit?: int, // Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *     creates_join_request?: bool, // Optional. *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member_limit* can't be specified.
     * } $params
     * @return Types\ChatInviteLink
     * @throws Base\TelegramException
     */
    public function createChatInviteLink(array $params): Types\ChatInviteLink
    {
        return Requests\CreateChatInviteLink::create($params)->send($this);
    }

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a `ChatInviteLink` object.
     *
     * @link https://core.telegram.org/bots/api#editchatinvitelink
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     invite_link: string, // Required. The invite link to edit
     *     name?: string, // Optional. Invite link name; 0-32 characters
     *     expire_date?: int, // Optional. Point in time (Unix timestamp) when the link will expire
     *     member_limit?: int, // Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *     creates_join_request?: bool, // Optional. *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member_limit* can't be specified.
     * } $params
     * @return Types\ChatInviteLink
     * @throws Base\TelegramException
     */
    public function editChatInviteLink(array $params): Types\ChatInviteLink
    {
        return Requests\EditChatInviteLink::create($params)->send($this);
    }

    /**
     * Use this method to create a [subscription invite link](https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions) for a channel chat. The bot must have the *can_invite_users* administrator rights. The link can be edited using the method `editChatSubscriptionInviteLink` or revoked using the method `revokeChatInviteLink`. Returns the new invite link as a `ChatInviteLink` object.
     *
     * @link https://core.telegram.org/bots/api#createchatsubscriptioninvitelink
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target channel chat or username of the target channel in the format `@username`
     *     name?: string, // Optional. Invite link name; 0-32 characters
     *     subscription_period: int, // Required. The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
     *     subscription_price: int, // Required. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
     * } $params
     * @return Types\ChatInviteLink
     * @throws Base\TelegramException
     */
    public function createChatSubscriptionInviteLink(array $params): Types\ChatInviteLink
    {
        return Requests\CreateChatSubscriptionInviteLink::create($params)->send($this);
    }

    /**
     * Use this method to edit a subscription invite link created by the bot. The bot must have the *can_invite_users* administrator rights. Returns the edited invite link as a `ChatInviteLink` object.
     *
     * @link https://core.telegram.org/bots/api#editchatsubscriptioninvitelink
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     invite_link: string, // Required. The invite link to edit
     *     name?: string, // Optional. Invite link name; 0-32 characters
     * } $params
     * @return Types\ChatInviteLink
     * @throws Base\TelegramException
     */
    public function editChatSubscriptionInviteLink(array $params): Types\ChatInviteLink
    {
        return Requests\EditChatSubscriptionInviteLink::create($params)->send($this);
    }

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as `ChatInviteLink` object.
     *
     * @link https://core.telegram.org/bots/api#revokechatinvitelink
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier of the target chat or username of the target channel in the format `@username`
     *     invite_link: string, // Required. The invite link to revoke
     * } $params
     * @return Types\ChatInviteLink
     * @throws Base\TelegramException
     */
    public function revokeChatInviteLink(array $params): Types\ChatInviteLink
    {
        return Requests\RevokeChatInviteLink::create($params)->send($this);
    }

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the *can_invite_users* administrator right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#approvechatjoinrequest
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function approveChatJoinRequest(array $params): Base\ParameterBool
    {
        return Requests\ApproveChatJoinRequest::create($params)->send($this);
    }

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the *can_invite_users* administrator right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#declinechatjoinrequest
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function declineChatJoinRequest(array $params): Base\ParameterBool
    {
        return Requests\DeclineChatJoinRequest::create($params)->send($this);
    }

    /**
     * Use this method to process a received chat join request query. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#answerchatjoinrequestquery
     *
     * @param array{
     *     chat_join_request_query_id: string, // Required. Unique identifier of the join request query
     *     result: string, // Required. Result of the query. Must be either “approve” to allow the user to join the chat, “decline” to disallow the user to join the chat, or “queue” to leave the decision to other administrators.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function answerChatJoinRequestQuery(array $params): Base\ParameterBool
    {
        return Requests\AnswerChatJoinRequestQuery::create($params)->send($this);
    }

    /**
     * Use this method to process a received chat join request query by showing a Mini App to the user before deciding the outcome. Call `answerChatJoinRequestQuery` to resolve the join request query based on the user interaction with the Mini App. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#sendchatjoinrequestwebapp
     *
     * @param array{
     *     chat_join_request_query_id: string, // Required. Unique identifier of the join request query
     *     web_app_url: string, // Required. An HTTPS URL of a Web App to be opened with additional data as specified in [Initializing Web Apps](https://core.telegram.org/bots/webapps#initializing-mini-apps)
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function sendChatJoinRequestWebApp(array $params): Base\ParameterBool
    {
        return Requests\SendChatJoinRequestWebApp::create($params)->send($this);
    }

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatphoto
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     photo: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}, // Required. New chat photo, uploaded using multipart/form-data
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatPhoto(array $params): Base\ParameterBool
    {
        return Requests\SetChatPhoto::create($params)->send($this);
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletechatphoto
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteChatPhoto(array $params): Base\ParameterBool
    {
        return Requests\DeleteChatPhoto::create($params)->send($this);
    }

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchattitle
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     title: string, // Required. New chat title, 1-128 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatTitle(array $params): Base\ParameterBool
    {
        return Requests\SetChatTitle::create($params)->send($this);
    }

    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatdescription
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     description?: string, // Optional. New chat description, 0-255 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatDescription(array $params): Base\ParameterBool
    {
        return Requests\SetChatDescription::create($params)->send($this);
    }

    /**
     * Use this method to add a message to the list of pinned messages in a chat. In private chats and channel direct messages chats, all non-service messages can be pinned. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to pin messages in groups and channels respectively. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#pinchatmessage
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be pinned
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     message_id: int, // Required. Identifier of a message to pin
     *     disable_notification?: bool, // Optional. Pass *True* if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function pinChatMessage(array $params): Base\ParameterBool
    {
        return Requests\PinChatMessage::create($params)->send($this);
    }

    /**
     * Use this method to remove a message from the list of pinned messages in a chat. In private chats and channel direct messages chats, all messages can be unpinned. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin messages in groups and channels respectively. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unpinchatmessage
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be unpinned
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     message_id?: int, // Optional. Identifier of the message to unpin. Required if *business_connection_id* is specified. If not specified, the most recent pinned message (by sending date) will be unpinned.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unpinChatMessage(array $params): Base\ParameterBool
    {
        return Requests\UnpinChatMessage::create($params)->send($this);
    }

    /**
     * Use this method to clear the list of pinned messages in a chat. In private chats and channel direct messages chats, no additional rights are required to unpin all pinned messages. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned messages in groups and channels respectively. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unpinallchatmessages
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unpinAllChatMessages(array $params): Base\ParameterBool
    {
        return Requests\UnpinAllChatMessages::create($params)->send($this);
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#leavechat
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`. Channel direct messages chats aren't supported; leave the corresponding channel instead.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function leaveChat(array $params): Base\ParameterBool
    {
        return Requests\LeaveChat::create($params)->send($this);
    }

    /**
     * Use this method to get up-to-date information about the chat. Returns a `ChatFullInfo` object on success.
     *
     * @link https://core.telegram.org/bots/api#getchat
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
     * } $params
     * @return Types\ChatFullInfo
     * @throws Base\TelegramException
     */
    public function getChat(array $params): Types\ChatFullInfo
    {
        return Requests\GetChat::create($params)->send($this);
    }

    /**
     * Use this method to get a list of administrators in a chat. Returns an Array of `ChatMember` objects.
     *
     * @link https://core.telegram.org/bots/api#getchatadministrators
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
     *     return_bots?: bool, // Optional. Pass *True* to additionally receive all bots that are administrators of the chat. By default, bots other than the current bot are omitted.
     * } $params
     * @return Base\ArrayObject<Types\ChatMember>
     * @throws Base\TelegramException
     */
    public function getChatAdministrators(array $params): Base\ArrayObject
    {
        return Requests\GetChatAdministrators::create($params)->send($this);
    }

    /**
     * Use this method to get the number of members in a chat. Returns *Integer* on success.
     *
     * @link https://core.telegram.org/bots/api#getchatmembercount
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
     * } $params
     * @return Base\ParameterInt
     * @throws Base\TelegramException
     */
    public function getChatMemberCount(array $params): Base\ParameterInt
    {
        return Requests\GetChatMemberCount::create($params)->send($this);
    }

    /**
     * Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a `ChatMember` object on success.
     *
     * @link https://core.telegram.org/bots/api#getchatmember
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup or channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     * } $params
     * @return Types\ChatMember
     * @throws Base\TelegramException
     */
    public function getChatMember(array $params): Types\ChatMember
    {
        return Requests\GetChatMember::create($params)->send($this);
    }

    /**
     * Use this method to get the last messages from the personal chat (i.e., the chat currently added to their profile) of a given user. On success, an Array of `Message` objects is returned.
     *
     * @link https://core.telegram.org/bots/api#getuserpersonalchatmessages
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier for the target user
     *     limit: int, // Required. The maximum number of messages to return; 1-20
     * } $params
     * @return Base\ArrayObject<Types\Message>
     * @throws Base\TelegramException
     */
    public function getUserPersonalChatMessages(array $params): Base\ArrayObject
    {
        return Requests\GetUserPersonalChatMessages::create($params)->send($this);
    }

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can_set_sticker_set* optionally returned in `getChat` requests to check if the bot can use this method. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatstickerset
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     sticker_set_name: string, // Required. Name of the sticker set to be set as the group sticker set
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatStickerSet(array $params): Base\ParameterBool
    {
        return Requests\SetChatStickerSet::create($params)->send($this);
    }

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can_set_sticker_set* optionally returned in `getChat` requests to check if the bot can use this method. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletechatstickerset
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteChatStickerSet(array $params): Base\ParameterBool
    {
        return Requests\DeleteChatStickerSet::create($params)->send($this);
    }

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of `Sticker` objects.
     *
     * @link https://core.telegram.org/bots/api#getforumtopiciconstickers
     *
     * @return Base\ArrayObject<Stickers\Sticker>
     * @throws Base\TelegramException
     */
    public function getForumTopicIconStickers(): Base\ArrayObject
    {
        return Requests\GetForumTopicIconStickers::create()->send($this);
    }

    /**
     * Use this method to create a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator right. Returns information about the created topic as a `ForumTopic` object.
     *
     * @link https://core.telegram.org/bots/api#createforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     name: string, // Required. Topic name, 1-128 characters
     *     icon_color?: int, // Optional. Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F).
     *     icon_custom_emoji_id?: string, // Optional. Unique identifier of the custom emoji shown as the topic icon. Use `getForumTopicIconStickers` to get all allowed custom emoji identifiers.
     * } $params
     * @return Types\ForumTopic
     * @throws Base\TelegramException
     */
    public function createForumTopic(array $params): Types\ForumTopic
    {
        return Requests\CreateForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#editforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     message_thread_id: int, // Required. Unique identifier for the target message thread of the forum topic
     *     name?: string, // Optional. New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept.
     *     icon_custom_emoji_id?: string, // Optional. New unique identifier of the custom emoji shown as the topic icon. Use `getForumTopicIconStickers` to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editForumTopic(array $params): Base\ParameterBool
    {
        return Requests\EditForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#closeforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     message_thread_id: int, // Required. Unique identifier for the target message thread of the forum topic
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function closeForumTopic(array $params): Base\ParameterBool
    {
        return Requests\CloseForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#reopenforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     message_thread_id: int, // Required. Unique identifier for the target message thread of the forum topic
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function reopenForumTopic(array $params): Base\ParameterBool
    {
        return Requests\ReopenForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the *can_delete_messages* administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deleteforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     message_thread_id: int, // Required. Unique identifier for the target message thread of the forum topic
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteForumTopic(array $params): Base\ParameterBool
    {
        return Requests\DeleteForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to clear the list of pinned messages in a forum topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the *can_pin_messages* administrator right in the supergroup. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unpinallforumtopicmessages
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     message_thread_id: int, // Required. Unique identifier for the target message thread of the forum topic
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unpinAllForumTopicMessages(array $params): Base\ParameterBool
    {
        return Requests\UnpinAllForumTopicMessages::create($params)->send($this);
    }

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#editgeneralforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     name: string, // Required. New topic name, 1-128 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editGeneralForumTopic(array $params): Base\ParameterBool
    {
        return Requests\EditGeneralForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#closegeneralforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function closeGeneralForumTopic(array $params): Base\ParameterBool
    {
        return Requests\CloseGeneralForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights. The topic will be automatically unhidden if it was hidden. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#reopengeneralforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function reopenGeneralForumTopic(array $params): Base\ParameterBool
    {
        return Requests\ReopenGeneralForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights. The topic will be automatically closed if it was open. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#hidegeneralforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function hideGeneralForumTopic(array $params): Base\ParameterBool
    {
        return Requests\HideGeneralForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can_manage_topics* administrator rights. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unhidegeneralforumtopic
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unhideGeneralForumTopic(array $params): Base\ParameterBool
    {
        return Requests\UnhideGeneralForumTopic::create($params)->send($this);
    }

    /**
     * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the *can_pin_messages* administrator right in the supergroup. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#unpinallgeneralforumtopicmessages
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function unpinAllGeneralForumTopicMessages(array $params): Base\ParameterBool
    {
        return Requests\UnpinAllGeneralForumTopicMessages::create($params)->send($this);
    }

    /**
     * Use this method to send answers to callback queries sent from [inline keyboards](https://core.telegram.org/bots/features#inline-keyboards). The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, *True* is returned.
     *
     * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via [@BotFather](https://t.me/botfather) and accept the terms. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
     *
     * @link https://core.telegram.org/bots/api#answercallbackquery
     *
     * @param array{
     *     callback_query_id: string, // Required. Unique identifier for the query to be answered
     *     text?: string, // Optional. Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters.
     *     show_alert?: bool, // Optional. If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *False*.
     *     url?: string, // Optional. URL that will be opened by the user's client. If you have created a `Game` and accepted the conditions via [@BotFather](https://t.me/botfather), specify the URL that opens your game - note that this will only work if the query comes from a `InlineKeyboardButton` button. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
     *     cache_time?: int, // Optional. The maximum amount of time in seconds that the result of the callback query may be cached client-side. Defaults to 0.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function answerCallbackQuery(array $params): Base\ParameterBool
    {
        return Requests\AnswerCallbackQuery::create($params)->send($this);
    }

    /**
     * Use this method to reply to a received guest message. On success, a `SentGuestMessage` object is returned.
     *
     * @link https://core.telegram.org/bots/api#answerguestquery
     *
     * @param array{
     *     guest_query_id: string, // Required. Unique identifier for the query to be answered
     *     result: InlineMode\InlineQueryResult|array<string, mixed>, // Required. A JSON-serialized object describing the message to be sent
     * } $params
     * @return Types\SentGuestMessage
     * @throws Base\TelegramException
     */
    public function answerGuestQuery(array $params): Types\SentGuestMessage
    {
        return Requests\AnswerGuestQuery::create($params)->send($this);
    }

    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a `UserChatBoosts` object.
     *
     * @link https://core.telegram.org/bots/api#getuserchatboosts
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the chat or username of the channel in the format `@username`
     *     user_id: int, // Required. Unique identifier of the target user
     * } $params
     * @return Types\UserChatBoosts
     * @throws Base\TelegramException
     */
    public function getUserChatBoosts(array $params): Types\UserChatBoosts
    {
        return Requests\GetUserChatBoosts::create($params)->send($this);
    }

    /**
     * Use this method to get information about the connection of the bot with a business account. Returns a `BusinessConnection` object on success.
     *
     * @link https://core.telegram.org/bots/api#getbusinessconnection
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     * } $params
     * @return Types\BusinessConnection
     * @throws Base\TelegramException
     */
    public function getBusinessConnection(array $params): Types\BusinessConnection
    {
        return Requests\GetBusinessConnection::create($params)->send($this);
    }

    /**
     * Use this method to get the token of a managed bot. Returns the token as *String* on success.
     *
     * @link https://core.telegram.org/bots/api#getmanagedbottoken
     *
     * @param array{
     *     user_id: int, // Required. User identifier of the managed bot whose token will be returned
     * } $params
     * @return Base\ParameterString
     * @throws Base\TelegramException
     */
    public function getManagedBotToken(array $params): Base\ParameterString
    {
        return Requests\GetManagedBotToken::create($params)->send($this);
    }

    /**
     * Use this method to revoke the current token of a managed bot and generate a new one. Returns the new token as *String* on success.
     *
     * @link https://core.telegram.org/bots/api#replacemanagedbottoken
     *
     * @param array{
     *     user_id: int, // Required. User identifier of the managed bot whose token will be replaced
     * } $params
     * @return Base\ParameterString
     * @throws Base\TelegramException
     */
    public function replaceManagedBotToken(array $params): Base\ParameterString
    {
        return Requests\ReplaceManagedBotToken::create($params)->send($this);
    }

    /**
     * Use this method to get the access settings of a managed bot. Returns a `BotAccessSettings` object on success.
     *
     * @link https://core.telegram.org/bots/api#getmanagedbotaccesssettings
     *
     * @param array{
     *     user_id: int, // Required. User identifier of the managed bot whose access settings will be returned
     * } $params
     * @return Types\BotAccessSettings
     * @throws Base\TelegramException
     */
    public function getManagedBotAccessSettings(array $params): Types\BotAccessSettings
    {
        return Requests\GetManagedBotAccessSettings::create($params)->send($this);
    }

    /**
     * Use this method to change the access settings of a managed bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmanagedbotaccesssettings
     *
     * @param array{
     *     user_id: int, // Required. User identifier of the managed bot whose access settings will be changed
     *     is_access_restricted: bool, // Required. Pass *True* if only selected users can access the bot. The bot's owner can always access it.
     *     added_user_ids?: list<int>|Base\ArrayObject<Base\ParameterInt>, // Optional. A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its owner. Ignored if *is_access_restricted* is *False*.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setManagedBotAccessSettings(array $params): Base\ParameterBool
    {
        return Requests\SetManagedBotAccessSettings::create($params)->send($this);
    }

    /**
     * Use this method to change the list of the bot's commands. See [this manual](https://core.telegram.org/bots/features#commands) for more details about bot commands. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmycommands
     *
     * @param array{
     *     commands: list<Types\BotCommand|array<string, mixed>>|Base\ArrayObject<Types\BotCommand>, // Required. A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     *     scope?: Types\BotCommandScope|array<string, mixed>, // Optional. A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to `BotCommandScopeDefault`.
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMyCommands(array $params): Base\ParameterBool
    {
        return Requests\SetMyCommands::create($params)->send($this);
    }

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](https://core.telegram.org/bots/api#determining-list-of-commands) will be shown to affected users. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletemycommands
     *
     * @param array{
     *     scope?: Types\BotCommandScope|array<string, mixed>, // Optional. A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to `BotCommandScopeDefault`.
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteMyCommands(array $params = []): Base\ParameterBool
    {
        return Requests\DeleteMyCommands::create($params)->send($this);
    }

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of `BotCommand` objects. If commands aren't set, an empty list is returned.
     *
     * @link https://core.telegram.org/bots/api#getmycommands
     *
     * @param array{
     *     scope?: Types\BotCommandScope|array<string, mixed>, // Optional. A JSON-serialized object, describing scope of users. Defaults to `BotCommandScopeDefault`.
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code or an empty string
     * } $params
     * @return Base\ArrayObject<Types\BotCommand>
     * @throws Base\TelegramException
     */
    public function getMyCommands(array $params = []): Base\ArrayObject
    {
        return Requests\GetMyCommands::create($params)->send($this);
    }

    /**
     * Use this method to change the bot's name. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmyname
     *
     * @param array{
     *     name?: string, // Optional. New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMyName(array $params = []): Base\ParameterBool
    {
        return Requests\SetMyName::create($params)->send($this);
    }

    /**
     * Use this method to get the current bot name for the given user language. Returns `BotName` on success.
     *
     * @link https://core.telegram.org/bots/api#getmyname
     *
     * @param array{
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code or an empty string
     * } $params
     * @return Types\BotName
     * @throws Base\TelegramException
     */
    public function getMyName(array $params = []): Types\BotName
    {
        return Requests\GetMyName::create($params)->send($this);
    }

    /**
     * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmydescription
     *
     * @param array{
     *     description?: string, // Optional. New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMyDescription(array $params = []): Base\ParameterBool
    {
        return Requests\SetMyDescription::create($params)->send($this);
    }

    /**
     * Use this method to get the current bot description for the given user language. Returns `BotDescription` on success.
     *
     * @link https://core.telegram.org/bots/api#getmydescription
     *
     * @param array{
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code or an empty string
     * } $params
     * @return Types\BotDescription
     * @throws Base\TelegramException
     */
    public function getMyDescription(array $params = []): Types\BotDescription
    {
        return Requests\GetMyDescription::create($params)->send($this);
    }

    /**
     * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmyshortdescription
     *
     * @param array{
     *     short_description?: string, // Optional. New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMyShortDescription(array $params = []): Base\ParameterBool
    {
        return Requests\SetMyShortDescription::create($params)->send($this);
    }

    /**
     * Use this method to get the current bot short description for the given user language. Returns `BotShortDescription` on success.
     *
     * @link https://core.telegram.org/bots/api#getmyshortdescription
     *
     * @param array{
     *     language_code?: string, // Optional. A two-letter ISO 639-1 language code or an empty string
     * } $params
     * @return Types\BotShortDescription
     * @throws Base\TelegramException
     */
    public function getMyShortDescription(array $params = []): Types\BotShortDescription
    {
        return Requests\GetMyShortDescription::create($params)->send($this);
    }

    /**
     * Changes the profile photo of the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmyprofilephoto
     *
     * @param array{
     *     photo: Types\InputProfilePhoto|array<string, mixed>, // Required. The new profile photo to set
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMyProfilePhoto(array $params, array $attachments = []): Base\ParameterBool
    {
        return Requests\SetMyProfilePhoto::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Removes the profile photo of the bot. Requires no parameters. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#removemyprofilephoto
     *
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function removeMyProfilePhoto(): Base\ParameterBool
    {
        return Requests\RemoveMyProfilePhoto::create()->send($this);
    }

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setchatmenubutton
     *
     * @param array{
     *     chat_id?: int, // Optional. Unique identifier for the target private chat. If not specified, the bot's default menu button will be changed.
     *     menu_button?: Types\MenuButton|array<string, mixed>, // Optional. A JSON-serialized object for the bot's new menu button. Defaults to `MenuButtonDefault`.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setChatMenuButton(array $params = []): Base\ParameterBool
    {
        return Requests\SetChatMenuButton::create($params)->send($this);
    }

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns `MenuButton` on success.
     *
     * @link https://core.telegram.org/bots/api#getchatmenubutton
     *
     * @param array{
     *     chat_id?: int, // Optional. Unique identifier for the target private chat. If not specified, the bot's default menu button will be returned.
     * } $params
     * @return Types\MenuButton
     * @throws Base\TelegramException
     */
    public function getChatMenuButton(array $params = []): Types\MenuButton
    {
        return Requests\GetChatMenuButton::create($params)->send($this);
    }

    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setmydefaultadministratorrights
     *
     * @param array{
     *     rights?: Types\ChatAdministratorRights|array<string, mixed>, // Optional. A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     *     for_channels?: bool, // Optional. Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setMyDefaultAdministratorRights(array $params = []): Base\ParameterBool
    {
        return Requests\SetMyDefaultAdministratorRights::create($params)->send($this);
    }

    /**
     * Use this method to get the current default administrator rights of the bot. Returns `ChatAdministratorRights` on success.
     *
     * @link https://core.telegram.org/bots/api#getmydefaultadministratorrights
     *
     * @param array{
     *     for_channels?: bool, // Optional. Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     * } $params
     * @return Types\ChatAdministratorRights
     * @throws Base\TelegramException
     */
    public function getMyDefaultAdministratorRights(array $params = []): Types\ChatAdministratorRights
    {
        return Requests\GetMyDefaultAdministratorRights::create($params)->send($this);
    }

    /**
     * Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a `Gifts` object.
     *
     * @link https://core.telegram.org/bots/api#getavailablegifts
     *
     * @return Types\Gifts
     * @throws Base\TelegramException
     */
    public function getAvailableGifts(): Types\Gifts
    {
        return Requests\GetAvailableGifts::create()->send($this);
    }

    /**
     * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#sendgift
     *
     * @param array{
     *     user_id?: int, // Optional. Required if *chat_id* is not specified. Unique identifier of the target user who will receive the gift.
     *     chat_id?: int|string, // Optional. Required if *user_id* is not specified. Unique identifier for the chat or username of the channel (in the format `@username`) that will receive the gift.
     *     gift_id: string, // Required. Identifier of the gift; limited gifts can't be sent to channel chats
     *     pay_for_upgrade?: bool, // Optional. Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
     *     text?: string, // Optional. Text that will be shown along with the gift; 0-128 characters
     *     text_parse_mode?: string, // Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     *     text_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text_parse_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function sendGift(array $params): Base\ParameterBool
    {
        return Requests\SendGift::create($params)->send($this);
    }

    /**
     * Gifts a Telegram Premium subscription to the given user. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#giftpremiumsubscription
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user who will receive a Telegram Premium subscription
     *     month_count: int, // Required. Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
     *     star_count: int, // Required. Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
     *     text?: string, // Optional. Text that will be shown along with the service message about the subscription; 0-128 characters
     *     text_parse_mode?: string, // Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     *     text_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text_parse_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function giftPremiumSubscription(array $params): Base\ParameterBool
    {
        return Requests\GiftPremiumSubscription::create($params)->send($this);
    }

    /**
     * Verifies a user [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#verifyuser
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user
     *     custom_description?: string, // Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function verifyUser(array $params): Base\ParameterBool
    {
        return Requests\VerifyUser::create($params)->send($this);
    }

    /**
     * Verifies a chat [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#verifychat
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. Channel direct messages chats can't be verified.
     *     custom_description?: string, // Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function verifyChat(array $params): Base\ParameterBool
    {
        return Requests\VerifyChat::create($params)->send($this);
    }

    /**
     * Removes verification from a user who is currently verified [on behalf of the organization](https://telegram.org/verify#third-party-verification) represented by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#removeuserverification
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function removeUserVerification(array $params): Base\ParameterBool
    {
        return Requests\RemoveUserVerification::create($params)->send($this);
    }

    /**
     * Removes verification from a chat that is currently verified [on behalf of the organization](https://telegram.org/verify#third-party-verification) represented by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#removechatverification
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot or channel in the format `@username`
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function removeChatVerification(array $params): Base\ParameterBool
    {
        return Requests\RemoveChatVerification::create($params)->send($this);
    }

    /**
     * Marks incoming message as read on behalf of a business account. Requires the *can_read_messages* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#readbusinessmessage
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection on behalf of which to read the message
     *     chat_id: int, // Required. Unique identifier of the chat in which the message was received. The chat must have been active in the last 24 hours.
     *     message_id: int, // Required. Unique identifier of the message to mark as read
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function readBusinessMessage(array $params): Base\ParameterBool
    {
        return Requests\ReadBusinessMessage::create($params)->send($this);
    }

    /**
     * Delete messages on behalf of a business account. Requires the *can_delete_sent_messages* business bot right to delete messages sent by the bot itself, or the *can_delete_all_messages* business bot right to delete any message. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletebusinessmessages
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection on behalf of which to delete the messages
     *     message_ids: list<int>|Base\ArrayObject<Base\ParameterInt>, // Required. A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See `deleteMessage` for limitations on which messages can be deleted.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteBusinessMessages(array $params): Base\ParameterBool
    {
        return Requests\DeleteBusinessMessages::create($params)->send($this);
    }

    /**
     * Changes the first and last name of a managed business account. Requires the *can_change_name* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setbusinessaccountname
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     first_name: string, // Required. The new value of the first name for the business account; 1-64 characters
     *     last_name?: string, // Optional. The new value of the last name for the business account; 0-64 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setBusinessAccountName(array $params): Base\ParameterBool
    {
        return Requests\SetBusinessAccountName::create($params)->send($this);
    }

    /**
     * Changes the username of a managed business account. Requires the *can_change_username* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setbusinessaccountusername
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     username?: string, // Optional. The new value of the username for the business account; 0-32 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setBusinessAccountUsername(array $params): Base\ParameterBool
    {
        return Requests\SetBusinessAccountUsername::create($params)->send($this);
    }

    /**
     * Changes the bio of a managed business account. Requires the *can_change_bio* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setbusinessaccountbio
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     bio?: string, // Optional. The new value of the bio for the business account; 0-140 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setBusinessAccountBio(array $params): Base\ParameterBool
    {
        return Requests\SetBusinessAccountBio::create($params)->send($this);
    }

    /**
     * Changes the profile photo of a managed business account. Requires the *can_edit_profile_photo* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setbusinessaccountprofilephoto
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     photo: Types\InputProfilePhoto|array<string, mixed>, // Required. The new profile photo to set
     *     is_public?: bool, // Optional. Pass *True* to set the public photo, which will be visible even if the main photo is hidden by the business account's privacy settings. An account can have only one public photo.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setBusinessAccountProfilePhoto(array $params, array $attachments = []): Base\ParameterBool
    {
        return Requests\SetBusinessAccountProfilePhoto::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Removes the current profile photo of a managed business account. Requires the *can_edit_profile_photo* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#removebusinessaccountprofilephoto
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     is_public?: bool, // Optional. Pass *True* to remove the public photo, which is visible even if the main photo is hidden by the business account's privacy settings. After the main photo is removed, the previous profile photo (if present) becomes the main photo.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function removeBusinessAccountProfilePhoto(array $params): Base\ParameterBool
    {
        return Requests\RemoveBusinessAccountProfilePhoto::create($params)->send($this);
    }

    /**
     * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the *can_change_gift_settings* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setbusinessaccountgiftsettings
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     show_gift_button: bool, // Required. Pass *True* if a button for sending a gift to the user or by the business account must always be shown in the input field
     *     accepted_gift_types: Types\AcceptedGiftTypes|array<string, mixed>, // Required. Types of gifts accepted by the business account
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setBusinessAccountGiftSettings(array $params): Base\ParameterBool
    {
        return Requests\SetBusinessAccountGiftSettings::create($params)->send($this);
    }

    /**
     * Returns the amount of Telegram Stars owned by a managed business account. Requires the *can_view_gifts_and_stars* business bot right. Returns `StarAmount` on success.
     *
     * @link https://core.telegram.org/bots/api#getbusinessaccountstarbalance
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     * } $params
     * @return Types\StarAmount
     * @throws Base\TelegramException
     */
    public function getBusinessAccountStarBalance(array $params): Types\StarAmount
    {
        return Requests\GetBusinessAccountStarBalance::create($params)->send($this);
    }

    /**
     * Transfers Telegram Stars from the business account balance to the bot's balance. Requires the *can_transfer_stars* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#transferbusinessaccountstars
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     star_count: int, // Required. Number of Telegram Stars to transfer; 1-10000
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function transferBusinessAccountStars(array $params): Base\ParameterBool
    {
        return Requests\TransferBusinessAccountStars::create($params)->send($this);
    }

    /**
     * Returns the gifts received and owned by a managed business account. Requires the *can_view_gifts_and_stars* business bot right. Returns `OwnedGifts` on success.
     *
     * @link https://core.telegram.org/bots/api#getbusinessaccountgifts
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     exclude_unsaved?: bool, // Optional. Pass *True* to exclude gifts that aren't saved to the account's profile page
     *     exclude_saved?: bool, // Optional. Pass *True* to exclude gifts that are saved to the account's profile page
     *     exclude_unlimited?: bool, // Optional. Pass *True* to exclude gifts that can be purchased an unlimited number of times
     *     exclude_limited_upgradable?: bool, // Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
     *     exclude_limited_non_upgradable?: bool, // Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
     *     exclude_unique?: bool, // Optional. Pass *True* to exclude unique gifts
     *     exclude_from_blockchain?: bool, // Optional. Pass *True* to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
     *     sort_by_price?: bool, // Optional. Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
     *     offset?: string, // Optional. Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *     limit?: int, // Optional. The maximum number of gifts to be returned; 1-100. Defaults to 100.
     * } $params
     * @return Types\OwnedGifts
     * @throws Base\TelegramException
     */
    public function getBusinessAccountGifts(array $params): Types\OwnedGifts
    {
        return Requests\GetBusinessAccountGifts::create($params)->send($this);
    }

    /**
     * Returns the gifts owned and hosted by a user. Returns `OwnedGifts` on success.
     *
     * @link https://core.telegram.org/bots/api#getusergifts
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the user
     *     exclude_unlimited?: bool, // Optional. Pass *True* to exclude gifts that can be purchased an unlimited number of times
     *     exclude_limited_upgradable?: bool, // Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
     *     exclude_limited_non_upgradable?: bool, // Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
     *     exclude_from_blockchain?: bool, // Optional. Pass *True* to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
     *     exclude_unique?: bool, // Optional. Pass *True* to exclude unique gifts
     *     sort_by_price?: bool, // Optional. Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
     *     offset?: string, // Optional. Offset of the first entry to return as received from the previous request; use an empty string to get the first chunk of results
     *     limit?: int, // Optional. The maximum number of gifts to be returned; 1-100. Defaults to 100.
     * } $params
     * @return Types\OwnedGifts
     * @throws Base\TelegramException
     */
    public function getUserGifts(array $params): Types\OwnedGifts
    {
        return Requests\GetUserGifts::create($params)->send($this);
    }

    /**
     * Returns the gifts owned by a chat. Returns `OwnedGifts` on success.
     *
     * @link https://core.telegram.org/bots/api#getchatgifts
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target channel in the format `@username`
     *     exclude_unsaved?: bool, // Optional. Pass *True* to exclude gifts that aren't saved to the chat's profile page. Always *True*, unless the bot has the *can_post_messages* administrator right in the channel.
     *     exclude_saved?: bool, // Optional. Pass *True* to exclude gifts that are saved to the chat's profile page. Always *False*, unless the bot has the *can_post_messages* administrator right in the channel.
     *     exclude_unlimited?: bool, // Optional. Pass *True* to exclude gifts that can be purchased an unlimited number of times
     *     exclude_limited_upgradable?: bool, // Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
     *     exclude_limited_non_upgradable?: bool, // Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
     *     exclude_from_blockchain?: bool, // Optional. Pass *True* to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
     *     exclude_unique?: bool, // Optional. Pass *True* to exclude unique gifts
     *     sort_by_price?: bool, // Optional. Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
     *     offset?: string, // Optional. Offset of the first entry to return as received from the previous request; use an empty string to get the first chunk of results
     *     limit?: int, // Optional. The maximum number of gifts to be returned; 1-100. Defaults to 100.
     * } $params
     * @return Types\OwnedGifts
     * @throws Base\TelegramException
     */
    public function getChatGifts(array $params): Types\OwnedGifts
    {
        return Requests\GetChatGifts::create($params)->send($this);
    }

    /**
     * Converts a given regular gift to Telegram Stars. Requires the *can_convert_gifts_to_stars* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#convertgifttostars
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     owned_gift_id: string, // Required. Unique identifier of the regular gift that should be converted to Telegram Stars
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function convertGiftToStars(array $params): Base\ParameterBool
    {
        return Requests\ConvertGiftToStars::create($params)->send($this);
    }

    /**
     * Upgrades a given regular gift to a unique gift. Requires the *can_transfer_and_upgrade_gifts* business bot right. Additionally requires the *can_transfer_stars* business bot right if the upgrade is paid. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#upgradegift
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     owned_gift_id: string, // Required. Unique identifier of the regular gift that should be upgraded to a unique one
     *     keep_original_details?: bool, // Optional. Pass *True* to keep the original gift text, sender and receiver in the upgraded gift
     *     star_count?: int, // Optional. The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If `gift.prepaid_upgrade_star_count > 0`, then pass 0, otherwise, the *can_transfer_stars* business bot right is required and `gift.upgrade_star_count` must be passed.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function upgradeGift(array $params): Base\ParameterBool
    {
        return Requests\UpgradeGift::create($params)->send($this);
    }

    /**
     * Transfers an owned unique gift to another user. Requires the *can_transfer_and_upgrade_gifts* business bot right. Requires *can_transfer_stars* business bot right if the transfer is paid. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#transfergift
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     owned_gift_id: string, // Required. Unique identifier of the regular gift that should be transferred
     *     new_owner_chat_id: int, // Required. Unique identifier of the chat which will own the gift. The chat must be active in the last 24 hours.
     *     star_count?: int, // Optional. The amount of Telegram Stars that will be paid for the transfer from the business account balance. If positive, then the *can_transfer_stars* business bot right is required.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function transferGift(array $params): Base\ParameterBool
    {
        return Requests\TransferGift::create($params)->send($this);
    }

    /**
     * Posts a story on behalf of a managed business account. Requires the *can_manage_stories* business bot right. Returns `Story` on success.
     *
     * @link https://core.telegram.org/bots/api#poststory
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     content: Types\InputStoryContent|array<string, mixed>, // Required. Content of the story
     *     active_period: int, // Required. Period after which the story is moved to the archive, in seconds; must be one of `6 * 3600`, `12 * 3600`, `86400`, or `2 * 86400`
     *     caption?: string, // Optional. Caption of the story, 0-2048 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the story caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     areas?: list<Types\StoryArea|array<string, mixed>>|Base\ArrayObject<Types\StoryArea>, // Optional. A JSON-serialized list of clickable areas to be shown on the story
     *     post_to_chat_page?: bool, // Optional. Pass *True* to keep the story accessible after it expires
     *     protect_content?: bool, // Optional. Pass *True* if the content of the story must be protected from forwarding and screenshotting
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Story
     * @throws Base\TelegramException
     */
    public function postStory(array $params, array $attachments = []): Types\Story
    {
        return Requests\PostStory::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Reposts a story on behalf of a business account from another business account. Both business accounts must be managed by the same bot, and the story on the source account must have been posted (or reposted) by the bot. Requires the *can_manage_stories* business bot right for both business accounts. Returns `Story` on success.
     *
     * @link https://core.telegram.org/bots/api#repoststory
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     from_chat_id: int, // Required. Unique identifier of the chat which posted the story that should be reposted
     *     from_story_id: int, // Required. Unique identifier of the story that should be reposted
     *     active_period: int, // Required. Period after which the story is moved to the archive, in seconds; must be one of `6 * 3600`, `12 * 3600`, `86400`, or `2 * 86400`
     *     post_to_chat_page?: bool, // Optional. Pass *True* to keep the story accessible after it expires
     *     protect_content?: bool, // Optional. Pass *True* if the content of the story must be protected from forwarding and screenshotting
     * } $params
     * @return Types\Story
     * @throws Base\TelegramException
     */
    public function repostStory(array $params): Types\Story
    {
        return Requests\RepostStory::create($params)->send($this);
    }

    /**
     * Edits a story previously posted by the bot on behalf of a managed business account. Requires the *can_manage_stories* business bot right. Returns `Story` on success.
     *
     * @link https://core.telegram.org/bots/api#editstory
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     story_id: int, // Required. Unique identifier of the story to edit
     *     content: Types\InputStoryContent|array<string, mixed>, // Required. Content of the story
     *     caption?: string, // Optional. Caption of the story, 0-2048 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the story caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     areas?: list<Types\StoryArea|array<string, mixed>>|Base\ArrayObject<Types\StoryArea>, // Optional. A JSON-serialized list of clickable areas to be shown on the story
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Story
     * @throws Base\TelegramException
     */
    public function editStory(array $params, array $attachments = []): Types\Story
    {
        return Requests\EditStory::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Deletes a story previously posted by the bot on behalf of a managed business account. Requires the *can_manage_stories* business bot right. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletestory
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection
     *     story_id: int, // Required. Unique identifier of the story to delete
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteStory(array $params): Base\ParameterBool
    {
        return Requests\DeleteStory::create($params)->send($this);
    }

    /**
     * Use this method to set the result of an interaction with a [Web App](https://core.telegram.org/bots/webapps) and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a `SentWebAppMessage` object is returned.
     *
     * @link https://core.telegram.org/bots/api#answerwebappquery
     *
     * @param array{
     *     web_app_query_id: string, // Required. Unique identifier for the query to be answered
     *     result: InlineMode\InlineQueryResult|array<string, mixed>, // Required. A JSON-serialized object describing the message to be sent
     * } $params
     * @return Types\SentWebAppMessage
     * @throws Base\TelegramException
     */
    public function answerWebAppQuery(array $params): Types\SentWebAppMessage
    {
        return Requests\AnswerWebAppQuery::create($params)->send($this);
    }

    /**
     * Stores a message that can be sent by a user of a Mini App. Returns a `PreparedInlineMessage` object.
     *
     * @link https://core.telegram.org/bots/api#savepreparedinlinemessage
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user that can use the prepared message
     *     result: InlineMode\InlineQueryResult|array<string, mixed>, // Required. A JSON-serialized object describing the message to be sent
     *     allow_user_chats?: bool, // Optional. Pass *True* if the message can be sent to private chats with users
     *     allow_bot_chats?: bool, // Optional. Pass *True* if the message can be sent to private chats with bots
     *     allow_group_chats?: bool, // Optional. Pass *True* if the message can be sent to group and supergroup chats
     *     allow_channel_chats?: bool, // Optional. Pass *True* if the message can be sent to channel chats
     * } $params
     * @return Types\PreparedInlineMessage
     * @throws Base\TelegramException
     */
    public function savePreparedInlineMessage(array $params): Types\PreparedInlineMessage
    {
        return Requests\SavePreparedInlineMessage::create($params)->send($this);
    }

    /**
     * Stores a keyboard button that can be used by a user within a Mini App. Returns a `PreparedKeyboardButton` object.
     *
     * @link https://core.telegram.org/bots/api#savepreparedkeyboardbutton
     *
     * @param array{
     *     user_id: int, // Required. Unique identifier of the target user that can use the button
     *     button: Types\KeyboardButton|array<string, mixed>, // Required. A JSON-serialized object describing the button to be saved. The button must be of the type *request_users*, *request_chat*, or *request_managed_bot*.
     * } $params
     * @return Types\PreparedKeyboardButton
     * @throws Base\TelegramException
     */
    public function savePreparedKeyboardButton(array $params): Types\PreparedKeyboardButton
    {
        return Requests\SavePreparedKeyboardButton::create($params)->send($this);
    }

    /**
     * Use this method to edit text, rich and [game](https://core.telegram.org/bots/api#games) messages. On success, if the edited message is not an inline message, the edited `Message` is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @link https://core.telegram.org/bots/api#editmessagetext
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id?: int|string, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *     text?: string, // Optional. New text of the message, 1-4096 characters after entity parsing; required if *rich_message* isn't specified
     *     parse_mode?: string, // Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
     *     link_preview_options?: Types\LinkPreviewOptions|array<string, mixed>, // Optional. Link preview generation options for the message
     *     rich_message?: RichMessages\InputRichMessage|array<string, mixed>, // Optional. New rich content of the message; required if *text* isn't specified. Direct upload of new files and explicit upload of files by a URL isn't supported when an inline message is edited.
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function editMessageText(array $params = []): Types\Message|bool
    {
        return Requests\EditMessageText::create($params)->send($this);
    }

    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited `Message` is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @link https://core.telegram.org/bots/api#editmessagecaption
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id?: int|string, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *     caption?: string, // Optional. New caption of the message, 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the message caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media. Supported only for animation, photo and video messages.
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function editMessageCaption(array $params = []): Types\Message|bool
    {
        return Requests\EditMessageCaption::create($params)->send($this);
    }

    /**
     * Use this method to edit animation, audio, document, live photo, photo, or video messages, or to replace a text or a rich message with a media. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo, a live photo, or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited `Message` is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @link https://core.telegram.org/bots/api#editmessagemedia
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id?: int|string, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *     media: Types\InputMedia|array<string, mixed>, // Required. A JSON-serialized object for the new media content of the message
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function editMessageMedia(array $params, array $attachments = []): Types\Message|bool
    {
        return Requests\EditMessageMedia::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to edit live location messages. A location can be edited until its *live_period* expires or editing is explicitly disabled by a call to `stopMessageLiveLocation`. On success, if the edited message is not an inline message, the edited `Message` is returned, otherwise *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#editmessagelivelocation
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id?: int|string, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *     latitude: float|int, // Required. Latitude of new location
     *     longitude: float|int, // Required. Longitude of new location
     *     live_period?: int, // Optional. New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current *live_period* by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then *live_period* remains unchanged.
     *     horizontal_accuracy?: float|int, // Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     *     heading?: int, // Optional. Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *     proximity_alert_radius?: int, // Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function editMessageLiveLocation(array $params): Types\Message|bool
    {
        return Requests\EditMessageLiveLocation::create($params)->send($this);
    }

    /**
     * Use this method to stop updating a live location message before *live_period* expires. On success, if the message is not an inline message, the edited `Message` is returned, otherwise *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#stopmessagelivelocation
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id?: int|string, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the message with live location to stop.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function stopMessageLiveLocation(array $params = []): Types\Message|bool
    {
        return Requests\StopMessageLiveLocation::create($params)->send($this);
    }

    /**
     * Use this method to edit a checklist on behalf of a connected business account. On success, the edited `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#editmessagechecklist
     *
     * @param array{
     *     business_connection_id: string, // Required. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot in the format `@username`
     *     message_id: int, // Required. Unique identifier for the target message
     *     checklist: Types\InputChecklist|array<string, mixed>, // Required. A JSON-serialized object for the new checklist
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for the new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) for the message
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function editMessageChecklist(array $params): Types\Message
    {
        return Requests\EditMessageChecklist::create($params)->send($this);
    }

    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited `Message` is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.
     *
     * @link https://core.telegram.org/bots/api#editmessagereplymarkup
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id?: int|string, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the message to edit.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function editMessageReplyMarkup(array $params = []): Types\Message|bool
    {
        return Requests\EditMessageReplyMarkup::create($params)->send($this);
    }

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped `Poll` is returned.
     *
     * @link https://core.telegram.org/bots/api#stoppoll
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message to be edited was sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_id: int, // Required. Identifier of the original message with the poll
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for a new message [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Types\Poll
     * @throws Base\TelegramException
     */
    public function stopPoll(array $params): Types\Poll
    {
        return Requests\StopPoll::create($params)->send($this);
    }

    /**
     * Use this method to edit an ephemeral text or rich message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#editephemeralmessagetext
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     receiver_user_id: int, // Required. Identifier of the user who received the message
     *     ephemeral_message_id: int, // Required. Identifier of the ephemeral message to edit
     *     text?: string, // Optional. New text of the message, 1-4096 characters after entity parsing; required if *rich_message* isn't specified
     *     parse_mode?: string, // Optional. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse_mode*
     *     rich_message?: RichMessages\InputRichMessage|array<string, mixed>, // Optional. New rich content of the message; required if *text* isn't specified
     *     link_preview_options?: Types\LinkPreviewOptions|array<string, mixed>, // Optional. Link preview generation options for the message
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editEphemeralMessageText(array $params): Base\ParameterBool
    {
        return Requests\EditEphemeralMessageText::create($params)->send($this);
    }

    /**
     * Use this method to edit the media of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#editephemeralmessagemedia
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     receiver_user_id: int, // Required. Identifier of the user who received the message
     *     ephemeral_message_id: int, // Required. Identifier of the ephemeral message to edit
     *     media: Types\InputMedia|array<string, mixed>, // Required. A JSON-serialized object for the new media content of the message
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editEphemeralMessageMedia(array $params, array $attachments = []): Base\ParameterBool
    {
        return Requests\EditEphemeralMessageMedia::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to edit the caption of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#editephemeralmessagecaption
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     receiver_user_id: int, // Required. Identifier of the user who received the message
     *     ephemeral_message_id: int, // Required. Identifier of the ephemeral message to edit
     *     caption?: string, // Optional. New caption of the message, 0-1024 characters after entities parsing
     *     parse_mode?: string, // Optional. Mode for parsing entities in the message caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *     caption_entities?: list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity>, // Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *     show_caption_above_media?: bool, // Optional. Pass *True* if the caption must be shown above the message media. Supported only for animation, photo and video messages.
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editEphemeralMessageCaption(array $params): Base\ParameterBool
    {
        return Requests\EditEphemeralMessageCaption::create($params)->send($this);
    }

    /**
     * Use this method to edit only the reply markup of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#editephemeralmessagereplymarkup
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     receiver_user_id: int, // Required. Identifier of the user who received the message
     *     ephemeral_message_id: int, // Required. Identifier of the ephemeral message to edit
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards)
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editEphemeralMessageReplyMarkup(array $params): Base\ParameterBool
    {
        return Requests\EditEphemeralMessageReplyMarkup::create($params)->send($this);
    }

    /**
     * Use this method to approve a suggested post in a direct messages chat. The bot must have the 'can_post_messages' administrator right in the corresponding channel chat. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#approvesuggestedpost
     *
     * @param array{
     *     chat_id: int, // Required. Unique identifier for the target direct messages chat
     *     message_id: int, // Required. Identifier of a suggested post message to approve
     *     send_date?: int, // Optional. Point in time (Unix timestamp) when the post is expected to be published; omit if the date has already been specified when the suggested post was created. If specified, then the date must be not more than 2678400 seconds (30 days) in the future.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function approveSuggestedPost(array $params): Base\ParameterBool
    {
        return Requests\ApproveSuggestedPost::create($params)->send($this);
    }

    /**
     * Use this method to decline a suggested post in a direct messages chat. The bot must have the 'can_manage_direct_messages' administrator right in the corresponding channel chat. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#declinesuggestedpost
     *
     * @param array{
     *     chat_id: int, // Required. Unique identifier for the target direct messages chat
     *     message_id: int, // Required. Identifier of a suggested post message to decline
     *     comment?: string, // Optional. Comment for the creator of the suggested post; 0-128 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function declineSuggestedPost(array $params): Base\ParameterBool
    {
        return Requests\DeclineSuggestedPost::create($params)->send($this);
    }

    /**
     * Use this method to delete a message, including service messages, with the following limitations:
     * - A message can only be deleted if it was sent less than 48 hours ago.
     * - Service messages about a supergroup, channel, or forum topic creation can't be deleted.
     * - A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.
     * - Bots can delete outgoing messages in private chats, groups, and supergroups.
     * - Bots can delete incoming messages in private chats.
     * - Bots granted *can_post_messages* permissions can delete outgoing messages in channels.
     * - If the bot is an administrator of a group, it can delete any message there.
     * - If the bot has *can_delete_messages* administrator right in a supergroup or a channel, it can delete any message there.
     * - If the bot has *can_manage_direct_messages* administrator right in a channel, it can delete any message in the corresponding direct messages chat.
     * Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletemessage
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_id: int, // Required. Identifier of the message to delete
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteMessage(array $params): Base\ParameterBool
    {
        return Requests\DeleteMessage::create($params)->send($this);
    }

    /**
     * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletemessages
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_ids: list<int>|Base\ArrayObject<Base\ParameterInt>, // Required. A JSON-serialized list of 1-100 identifiers of messages to delete. See `deleteMessage` for limitations on which messages can be deleted.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteMessages(array $params): Base\ParameterBool
    {
        return Requests\DeleteMessages::create($params)->send($this);
    }

    /**
     * Use this method to delete an ephemeral message. Note that it is not guaranteed that the user will receive the message deletion event, especially if they are offline. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deleteephemeralmessage
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     receiver_user_id: int, // Required. Identifier of the user who received the message
     *     ephemeral_message_id: int, // Required. Identifier of the ephemeral message to delete
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteEphemeralMessage(array $params): Base\ParameterBool
    {
        return Requests\DeleteEphemeralMessage::create($params)->send($this);
    }

    /**
     * Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletemessagereaction
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     message_id: int, // Required. Identifier of the target message
     *     user_id?: int, // Optional. Identifier of the user whose reaction will be removed, if the reaction was added by a user
     *     actor_chat_id?: int, // Optional. Identifier of the chat whose reaction will be removed, if the reaction was added by a chat
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteMessageReaction(array $params): Base\ParameterBool
    {
        return Requests\DeleteMessageReaction::create($params)->send($this);
    }

    /**
     * Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a given user or chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deleteallmessagereactions
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *     user_id?: int, // Optional. Identifier of the user whose reactions will be removed, if the reactions were added by a user
     *     actor_chat_id?: int, // Optional. Identifier of the chat whose reactions will be removed, if the reactions were added by a chat
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteAllMessageReactions(array $params): Base\ParameterBool
    {
        return Requests\DeleteAllMessageReactions::create($params)->send($this);
    }

    /**
     * Use this method to send static .WEBP, [animated](https://telegram.org/blog/animated-stickers) .TGS, or [video](https://telegram.org/blog/video-stickers-better-reactions) .WEBM stickers. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendsticker
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     sticker: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Required. Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files). Video and animated stickers can't be sent via an HTTP URL.
     *     emoji?: string, // Optional. Emoji associated with the sticker; only for just uploaded stickers
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendSticker(array $params): Types\Message
    {
        return Requests\SendSticker::create($params)->send($this);
    }

    /**
     * Use this method to get a sticker set. On success, a `StickerSet` object is returned.
     *
     * @link https://core.telegram.org/bots/api#getstickerset
     *
     * @param array{
     *     name: string, // Required. Name of the sticker set
     * } $params
     * @return Stickers\StickerSet
     * @throws Base\TelegramException
     */
    public function getStickerSet(array $params): Stickers\StickerSet
    {
        return Requests\GetStickerSet::create($params)->send($this);
    }

    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of `Sticker` objects.
     *
     * @link https://core.telegram.org/bots/api#getcustomemojistickers
     *
     * @param array{
     *     custom_emoji_ids: list<string>|Base\ArrayObject<Base\ParameterString>, // Required. A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     * } $params
     * @return Base\ArrayObject<Stickers\Sticker>
     * @throws Base\TelegramException
     */
    public function getCustomEmojiStickers(array $params): Base\ArrayObject
    {
        return Requests\GetCustomEmojiStickers::create($params)->send($this);
    }

    /**
     * Use this method to upload a file with a sticker for later use in the `createNewStickerSet`, `addStickerToSet`, or `replaceStickerInSet` methods (the file can be used multiple times). Returns the uploaded `File` on success.
     *
     * @link https://core.telegram.org/bots/api#uploadstickerfile
     *
     * @param array{
     *     user_id: int, // Required. User identifier of sticker file owner
     *     sticker: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}, // Required. A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers[https://core.telegram.org/stickers](https://core.telegram.org/stickers) for technical requirements. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *     sticker_format: string, // Required. Format of the sticker, must be one of “static”, “animated”, “video”
     * } $params
     * @return Types\File
     * @throws Base\TelegramException
     */
    public function uploadStickerFile(array $params): Types\File
    {
        return Requests\UploadStickerFile::create($params)->send($this);
    }

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#createnewstickerset
     *
     * @param array{
     *     user_id: int, // Required. User identifier of created sticker set owner
     *     name: string, // Required. Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
     *     title: string, // Required. Sticker set title, 1-64 characters
     *     stickers: list<Stickers\InputSticker|array<string, mixed>>|Base\ArrayObject<Stickers\InputSticker>, // Required. A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     *     sticker_type?: string, // Optional. Type of stickers in the set, pass “regular”, “mask”, or “custom_emoji”. By default, a regular sticker set is created.
     *     needs_repainting?: bool, // Optional. Pass *True* if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function createNewStickerSet(array $params, array $attachments = []): Base\ParameterBool
    {
        return Requests\CreateNewStickerSet::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#addstickertoset
     *
     * @param array{
     *     user_id: int, // Required. User identifier of sticker set owner
     *     name: string, // Required. Sticker set name
     *     sticker: Stickers\InputSticker|array<string, mixed>, // Required. A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function addStickerToSet(array $params, array $attachments = []): Base\ParameterBool
    {
        return Requests\AddStickerToSet::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setstickerpositioninset
     *
     * @param array{
     *     sticker: string, // Required. File identifier of the sticker
     *     position: int, // Required. New sticker position in the set, zero-based
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setStickerPositionInSet(array $params): Base\ParameterBool
    {
        return Requests\SetStickerPositionInSet::create($params)->send($this);
    }

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletestickerfromset
     *
     * @param array{
     *     sticker: string, // Required. File identifier of the sticker
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteStickerFromSet(array $params): Base\ParameterBool
    {
        return Requests\DeleteStickerFromSet::create($params)->send($this);
    }

    /**
     * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling `deleteStickerFromSet`, then `addStickerToSet`, then `setStickerPositionInSet`. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#replacestickerinset
     *
     * @param array{
     *     user_id: int, // Required. User identifier of the sticker set owner
     *     name: string, // Required. Sticker set name
     *     old_sticker: string, // Required. File identifier of the replaced sticker
     *     sticker: Stickers\InputSticker|array<string, mixed>, // Required. A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
     * } $params
     * @param array<string, Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}> $attachments Файлы для ссылок вида attach://<имя> в параметрах
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function replaceStickerInSet(array $params, array $attachments = []): Base\ParameterBool
    {
        return Requests\ReplaceStickerInSet::create($params)->setAttachments($attachments)->send($this);
    }

    /**
     * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setstickeremojilist
     *
     * @param array{
     *     sticker: string, // Required. File identifier of the sticker
     *     emoji_list: list<string>|Base\ArrayObject<Base\ParameterString>, // Required. A JSON-serialized list of 1-20 emoji associated with the sticker
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setStickerEmojiList(array $params): Base\ParameterBool
    {
        return Requests\SetStickerEmojiList::create($params)->send($this);
    }

    /**
     * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setstickerkeywords
     *
     * @param array{
     *     sticker: string, // Required. File identifier of the sticker
     *     keywords?: list<string>|Base\ArrayObject<Base\ParameterString>, // Optional. A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setStickerKeywords(array $params): Base\ParameterBool
    {
        return Requests\SetStickerKeywords::create($params)->send($this);
    }

    /**
     * Use this method to change the `MaskPosition` of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setstickermaskposition
     *
     * @param array{
     *     sticker: string, // Required. File identifier of the sticker
     *     mask_position?: Stickers\MaskPosition|array<string, mixed>, // Optional. A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setStickerMaskPosition(array $params): Base\ParameterBool
    {
        return Requests\SetStickerMaskPosition::create($params)->send($this);
    }

    /**
     * Use this method to set the title of a created sticker set. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setstickersettitle
     *
     * @param array{
     *     name: string, // Required. Sticker set name
     *     title: string, // Required. Sticker set title, 1-64 characters
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setStickerSetTitle(array $params): Base\ParameterBool
    {
        return Requests\SetStickerSetTitle::create($params)->send($this);
    }

    /**
     * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setstickersetthumbnail
     *
     * @param array{
     *     name: string, // Required. Sticker set name
     *     user_id: int, // Required. User identifier of the sticker set owner
     *     thumbnail?: Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string}|string, // Optional. A **.WEBP** or **.PNG** image with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly 100px, or a **.TGS** animation with a thumbnail up to 32 kilobytes in size (see https://core.telegram.org/stickers#animation-requirements[https://core.telegram.org/stickers#animation-requirements](https://core.telegram.org/stickers#animation-requirements) for animated sticker technical requirements), or a **.WEBM** video with the thumbnail up to 32 kilobytes in size; see https://core.telegram.org/stickers#video-requirements[https://core.telegram.org/stickers#video-requirements](https://core.telegram.org/stickers#video-requirements) for video sticker technical requirements. Pass a *file_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files). Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is used as the thumbnail.
     *     format: string, // Required. Format of the thumbnail, must be one of “static” for a **.WEBP** or **.PNG** image, “animated” for a **.TGS** animation, or “video” for a **.WEBM** video
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setStickerSetThumbnail(array $params): Base\ParameterBool
    {
        return Requests\SetStickerSetThumbnail::create($params)->send($this);
    }

    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#setcustomemojistickersetthumbnail
     *
     * @param array{
     *     name: string, // Required. Sticker set name
     *     custom_emoji_id?: string, // Optional. Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setCustomEmojiStickerSetThumbnail(array $params): Base\ParameterBool
    {
        return Requests\SetCustomEmojiStickerSetThumbnail::create($params)->send($this);
    }

    /**
     * Use this method to delete a sticker set that was created by the bot. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#deletestickerset
     *
     * @param array{
     *     name: string, // Required. Sticker set name
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function deleteStickerSet(array $params): Base\ParameterBool
    {
        return Requests\DeleteStickerSet::create($params)->send($this);
    }

    /**
     * Use this method to send rich messages. If the message contains a block with a media element, then the bot must have the right to send the media to the chat. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendrichmessage
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent. Bot can send rich messages on behalf of a business account only if the corresponding user can send rich messages.
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     ephemeral_message_parameters?: Types\EphemeralMessageParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *     rich_message: RichMessages\InputRichMessage|array<string, mixed>, // Required. The message to be sent
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply, // Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendRichMessage(array $params): Types\Message
    {
        return Requests\SendRichMessage::create($params)->send($this);
    }

    /**
     * Use this method to stream a partial rich message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you **must** call `sendRichMessage` with the complete message to persist it in the user's chat. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#sendrichmessagedraft
     *
     * @param array{
     *     chat_id: int, // Required. Unique identifier for the target private chat
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread
     *     draft_id: int, // Required. Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated. Otherwise, the draft is replaced without animation.
     *     rich_message: RichMessages\InputRichMessage|array<string, mixed>, // Required. The partial message to be streamed. Direct upload of new files and explicit upload of files by a URL isn't supported.
     *     can_stop?: bool, // Optional. Pass *True* to show the user a button to stop further drafts. The bot will receive an `Update` “stopped_message_generation” if the user presses the button.
     *     keep_on_stop?: bool, // Optional. Pass *True* to keep the draft in the chat when the button is pressed. The draft will still disappear after a short time or if the bot sends a message. To fully preserve the partial draft, the bot should send it as a new message.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function sendRichMessageDraft(array $params): Base\ParameterBool
    {
        return Requests\SendRichMessageDraft::create($params)->send($this);
    }

    /**
     * Use this method to send answers to an inline query. On success, *True* is returned.
     * No more than **50** results per query are allowed.
     *
     * @link https://core.telegram.org/bots/api#answerinlinequery
     *
     * @param array{
     *     inline_query_id: string, // Required. Unique identifier for the answered query
     *     results: list<InlineMode\InlineQueryResult|array<string, mixed>>|Base\ArrayObject<InlineMode\InlineQueryResult>, // Required. A JSON-serialized Array of results for the inline query
     *     cache_time?: int, // Optional. The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     *     is_personal?: bool, // Optional. Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     *     next_offset?: string, // Optional. Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     *     button?: InlineMode\InlineQueryResultsButton|array<string, mixed>, // Optional. A JSON-serialized object describing a button to be shown above inline query results
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function answerInlineQuery(array $params): Base\ParameterBool
    {
        return Requests\AnswerInlineQuery::create($params)->send($this);
    }

    /**
     * Use this method to send invoices. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendinvoice
     *
     * @param array{
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     direct_messages_topic_id?: int, // Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *     title: string, // Required. Product name, 1-32 characters
     *     description: string, // Required. Product description, 1-255 characters
     *     payload: string, // Required. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     *     provider_token?: string, // Optional. Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     currency: string, // Required. Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     prices: list<Payments\LabeledPrice|array<string, mixed>>|Base\ArrayObject<Payments\LabeledPrice>, // Required. Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     max_tip_amount?: int, // Optional. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     suggested_tip_amounts?: list<int>|Base\ArrayObject<Base\ParameterInt>, // Optional. A JSON-serialized Array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max_tip_amount*.
     *     start_parameter?: string, // Optional. Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter.
     *     provider_data?: string, // Optional. JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     *     photo_url?: string, // Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     *     photo_size?: int, // Optional. Photo size in bytes
     *     photo_width?: int, // Optional. Photo width
     *     photo_height?: int, // Optional. Photo height
     *     need_name?: bool, // Optional. Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     need_phone_number?: bool, // Optional. Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     need_email?: bool, // Optional. Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     need_shipping_address?: bool, // Optional. Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     send_phone_number_to_provider?: bool, // Optional. Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     send_email_to_provider?: bool, // Optional. Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     is_flexible?: bool, // Optional. Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     suggested_post_parameters?: Types\SuggestedPostParameters|array<string, mixed>, // Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendInvoice(array $params): Types\Message
    {
        return Requests\SendInvoice::create($params)->send($this);
    }

    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as *String* on success.
     *
     * @link https://core.telegram.org/bots/api#createinvoicelink
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the link will be created. For payments in [Telegram Stars](https://t.me/BotNews/90) only.
     *     title: string, // Required. Product name, 1-32 characters
     *     description: string, // Required. Product description, 1-255 characters
     *     payload: string, // Required. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     *     provider_token?: string, // Optional. Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     currency: string, // Required. Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     prices: list<Payments\LabeledPrice|array<string, mixed>>|Base\ArrayObject<Payments\LabeledPrice>, // Required. Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     subscription_period?: int, // Optional. The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 10000 Telegram Stars.
     *     max_tip_amount?: int, // Optional. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     suggested_tip_amounts?: list<int>|Base\ArrayObject<Base\ParameterInt>, // Optional. A JSON-serialized Array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max_tip_amount*.
     *     provider_data?: string, // Optional. JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     *     photo_url?: string, // Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     *     photo_size?: int, // Optional. Photo size in bytes
     *     photo_width?: int, // Optional. Photo width
     *     photo_height?: int, // Optional. Photo height
     *     need_name?: bool, // Optional. Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     need_phone_number?: bool, // Optional. Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     need_email?: bool, // Optional. Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     need_shipping_address?: bool, // Optional. Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     send_phone_number_to_provider?: bool, // Optional. Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     send_email_to_provider?: bool, // Optional. Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     *     is_flexible?: bool, // Optional. Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
     * } $params
     * @return Base\ParameterString
     * @throws Base\TelegramException
     */
    public function createInvoiceLink(array $params): Base\ParameterString
    {
        return Requests\CreateInvoiceLink::create($params)->send($this);
    }

    /**
     * If you sent an invoice requesting a shipping address and the parameter *is_flexible* was specified, the Bot API will send an `Update` with a *shipping_query* field to the bot. Use this method to reply to shipping queries. On success, *True* is returned.
     *
     * @link https://core.telegram.org/bots/api#answershippingquery
     *
     * @param array{
     *     shipping_query_id: string, // Required. Unique identifier for the query to be answered
     *     ok: bool, // Required. Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
     *     shipping_options?: list<Payments\ShippingOption|array<string, mixed>>|Base\ArrayObject<Payments\ShippingOption>, // Optional. Required if *ok* is *True*. A JSON-serialized Array of available shipping options.
     *     error_message?: string, // Optional. Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function answerShippingQuery(array $params): Base\ParameterBool
    {
        return Requests\AnswerShippingQuery::create($params)->send($this);
    }

    /**
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an `Update` with the field *pre_checkout_query*. Use this method to respond to such pre-checkout queries. On success, *True* is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
     *
     * @link https://core.telegram.org/bots/api#answerprecheckoutquery
     *
     * @param array{
     *     pre_checkout_query_id: string, // Required. Unique identifier for the query to be answered
     *     ok: bool, // Required. Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
     *     error_message?: string, // Optional. Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function answerPreCheckoutQuery(array $params): Base\ParameterBool
    {
        return Requests\AnswerPreCheckoutQuery::create($params)->send($this);
    }

    /**
     * A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success, returns a `StarAmount` object.
     *
     * @link https://core.telegram.org/bots/api#getmystarbalance
     *
     * @return Types\StarAmount
     * @throws Base\TelegramException
     */
    public function getMyStarBalance(): Types\StarAmount
    {
        return Requests\GetMyStarBalance::create()->send($this);
    }

    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success, returns a `StarTransactions` object.
     *
     * @link https://core.telegram.org/bots/api#getstartransactions
     *
     * @param array{
     *     offset?: int, // Optional. Number of transactions to skip in the response
     *     limit?: int, // Optional. The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * } $params
     * @return Payments\StarTransactions
     * @throws Base\TelegramException
     */
    public function getStarTransactions(array $params = []): Payments\StarTransactions
    {
        return Requests\GetStarTransactions::create($params)->send($this);
    }

    /**
     * Refunds a successful payment in [Telegram Stars](https://t.me/BotNews/90). Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#refundstarpayment
     *
     * @param array{
     *     user_id: int, // Required. Identifier of the user whose payment will be refunded
     *     telegram_payment_charge_id: string, // Required. Telegram payment identifier
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function refundStarPayment(array $params): Base\ParameterBool
    {
        return Requests\RefundStarPayment::create($params)->send($this);
    }

    /**
     * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns *True* on success.
     *
     * @link https://core.telegram.org/bots/api#edituserstarsubscription
     *
     * @param array{
     *     user_id: int, // Required. Identifier of the user whose subscription will be edited
     *     telegram_payment_charge_id: string, // Required. Telegram payment identifier for the subscription
     *     is_canceled: bool, // Required. Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function editUserStarSubscription(array $params): Base\ParameterBool
    {
        return Requests\EditUserStarSubscription::create($params)->send($this);
    }

    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns *True* on success.
     *
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
     *
     * @link https://core.telegram.org/bots/api#setpassportdataerrors
     *
     * @param array{
     *     user_id: int, // Required. User identifier
     *     errors: list<Passport\PassportElementError|array<string, mixed>>|Base\ArrayObject<Passport\PassportElementError>, // Required. A JSON-serialized Array describing the errors
     * } $params
     * @return Base\ParameterBool
     * @throws Base\TelegramException
     */
    public function setPassportDataErrors(array $params): Base\ParameterBool
    {
        return Requests\SetPassportDataErrors::create($params)->send($this);
    }

    /**
     * Use this method to send a game. On success, the sent `Message` is returned.
     *
     * @link https://core.telegram.org/bots/api#sendgame
     *
     * @param array{
     *     business_connection_id?: string, // Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *     chat_id: int|string, // Required. Unique identifier for the target chat or username of the target bot in the format `@username`. Games can't be sent to channel direct messages chats and channel chats.
     *     message_thread_id?: int, // Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *     game_short_name: string, // Required. Short name of the game, serves as the unique identifier for the game. Set up your games via [@BotFather](https://t.me/botfather).
     *     disable_notification?: bool, // Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *     protect_content?: bool, // Optional. Protects the contents of the sent message from forwarding and saving
     *     allow_paid_broadcast?: bool, // Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *     message_effect_id?: string, // Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *     reply_parameters?: Types\ReplyParameters|array<string, mixed>, // Optional. Description of the message to reply to
     *     reply_markup?: Types\InlineKeyboardMarkup|array<string, mixed>, // Optional. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game.
     * } $params
     * @return Types\Message
     * @throws Base\TelegramException
     */
    public function sendGame(array $params): Types\Message
    {
        return Requests\SendGame::create($params)->send($this);
    }

    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the `Message` is returned, otherwise *True* is returned. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
     *
     * @link https://core.telegram.org/bots/api#setgamescore
     *
     * @param array{
     *     user_id: int, // Required. User identifier
     *     score: int, // Required. New score, must be non-negative
     *     force?: bool, // Optional. Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters.
     *     disable_edit_message?: bool, // Optional. Pass *True* if the game message should not be automatically edited to include the current scoreboard
     *     chat_id?: int, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the sent message.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     * } $params
     * @return Types\Message|bool
     * @throws Base\TelegramException
     */
    public function setGameScore(array $params): Types\Message|bool
    {
        return Requests\SetGameScore::create($params)->send($this);
    }

    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of `GameHighScore` objects.
     *
     * This method will currently return scores for the target user, plus two of their closest neighbors on each side. Will also return the top three users if the user and their neighbors are not among them. Please note that this behavior is subject to change.
     *
     * @link https://core.telegram.org/bots/api#getgamehighscores
     *
     * @param array{
     *     user_id: int, // Required. Target user id
     *     chat_id?: int, // Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat.
     *     message_id?: int, // Optional. Required if *inline_message_id* is not specified. Identifier of the sent message.
     *     inline_message_id?: string, // Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
     * } $params
     * @return Base\ArrayObject<Games\GameHighScore>
     * @throws Base\TelegramException
     */
    public function getGameHighScores(array $params): Base\ArrayObject
    {
        return Requests\GetGameHighScores::create($params)->send($this);
    }
}
