Replain 0.8.10
=============
Show Re:plain live chat.

<p align="center"><img src="replain-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](../../archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to show a chat

[Re:plain](https://replain.cc/) is a chat service for websites. To use this extension open file `system/settings/system.ini` and set the value of `ReplainId`. You can find the id of your chat in the second line of the code provided by the Re:plain bot. The chat is shown on every page.

This extension uses an online service and requires on the operator side a Telegram, WhatsApp or Facebook account. You can configure the chat with the Re:plain bot.

## Settings

The following setting must be configured in file system/settings/system.ini:

`ReplainId` = your Re:plain id

## Developer

Giovanni Salmeri. [Get support](https://github.com/GiovanniSalmeri/yellow-replain/issues).
